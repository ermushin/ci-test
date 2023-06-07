<?php

namespace App\Models;

use CodeIgniter\Model;

class FileModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'files';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'reporting_entity_id',
        'reporting_entity_id_type',
        'record_seq_number',
        'id_of_market_participant',
        'id_of_market_participant_type',
        'other_market_participant',
        'other_market_participant_type',
        'trading_capacity',
        'buy_sell_indicator',
        'contract_id',
        'contract_date',
        'contract_type',
        'energy_commodity',
        'price_formula',
        'estimated_notional_amount_value',
        'estimated_notional_amount_unit',
        'type_of_index_price',
        'fixing_index',
        'fixing_index_type',
        'fixing_index_source',
        'first_fixing_date',
        'last_fixing_date',
        'fixing_frequency',
        'settlement_method',
        'delivery_point_or_zone',
        'delivery_start_date',
        'delivery_end_date',
        'load_type',
        'action_type',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'name'                              => "required|max_length[100]",
        'reporting_entity_id'               => "required",
        'reporting_entity_id_type'          => "required|in_list[ace,lei,bic,eic,gln]",
        'record_seq_number'                 => "required|is_natural_no_zero",
        'id_of_market_participant'          => "required",
        'id_of_market_participant_type'     => "required|in_list[ace,lei,bic,eic,gln]",
        'other_market_participant'          => "required",
        'other_market_participant_type'     => "required|in_list[ace,lei,bic,eic,gln]",
        'trading_capacity'                  => "required|in_list[P,A]",
        'contract_id'                       => "required|max_length[100]",
        'contract_date'                     => "required|valid_date",
        'contract_type'                     => "required|in_list[SO,FW,FU,OP,OP_FW,OP_FU,OP_SW,SP,SW,OT]",
        'energy_commodity'                  => "required|in_list[EL,NG]",
        'price_formula'                     => "required|max_length[1000]",
        'buy_sell_indicator'                => "required|in_list[B,S,C]",
        'estimated_notional_amount_value'   => "required|decimal",
        'estimated_notional_amount_unit'    => "required|in_list[KWh,MWh,GWh,Therm,KTherm,MTherm,cm,mcm,Btu,MMBtu,MJ,MMJ,100MJ,GJ]",
        'volume_optionality'                => "required|in_list[V,F,M,C,O]",
        'type_of_index_price'               => "required|in_list[F,I,C,O]",
        'fixing_index'                      => "required|max_length[150]",
        'fixing_index_type'                 => "required|in_list[SO,FW,FU,OP,OP_FW,OP_FU,OP_SW,SP,SW,OT]",
        'fixing_index_source'               => "required|max_length[150]",
        'first_fixing_date'                 => "required|valid_date",
        'last_fixing_date'                  => "required|valid_date",
        'fixing_frequency'                  => "required|is_natural",
        'settlement_method'                 => "required|in_list[P,C,O]",
        'delivery_point_or_zone'            => "required|min_length[16]|max_length[16]",
        'delivery_start_date'               => "required|valid_date",
        'delivery_end_date'                 => "required|valid_date",
        'load_type'                         => "required|in_list[BL,PL,OP,BH,SH,GD,OT]",
        'action_type'                       => "required|in_list[N,M,E,C]"
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
