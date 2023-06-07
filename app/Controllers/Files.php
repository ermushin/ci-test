<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use Exception;

class Files extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $filesModel = new \App\Models\FileModel();
        $files = $filesModel->findAll();
        return view('files/index', compact('files'));
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $file = false;
        return view('files/view', compact('file'));
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        helper('form');
        return view('files/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        helper('form');
        $filesModel = model(\App\Models\FileModel::class);
        $data = $this->request->getPost();
        $file =  $filesModel->save([  
            'name'                              => date('ymdHi').'_REMITTable2.xml',
            'reporting_entity_id'               => $data['reportingEntityId'],
            'reporting_entity_id_type'          => $data['reportingEntityIdType'],
            'record_seq_number'                 => $data['recordSeqNumber'],
            'id_of_market_participant'          => $data['idOfMarketParticipant'],
            'id_of_market_participant_type'     => $data['idOfMarketParticipantType'],
            'other_market_participant'          => $data['otherMarketParticipant'],
            'other_market_participant_type'     => $data['otherMarketParticipantType'],
            'trading_capacity'                  => $data['tradingCapacity'],
            'buy_sell_indicator'                => $data['buySellIndicator'],
            'contract_id'                       => $data['contractId'],
            'contract_date'                     => $data['contractDate'],
            'contract_type'                     => $data['contractType'],
            'energy_commodity'                  => $data['energyCommodity'],
            'price_formula'                     => $data['priceFormula'],
            'estimated_notional_amount_value'   => $data['estimatedNotionalAmountValue'],
            'estimated_notional_amount_unit'    => $data['estimatedNotionalAmountUnit'],
            'volume_optionality'                => $data['volumeOptionality'],
            'type_of_index_price'               => $data['typeOfIndexPrice'],
            'fixing_index'                      => $data['fixingIndex'],
            'fixing_index_type'                 => $data['fixingIndexType'],
            'fixing_index_source'               => $data['fixingIndexSource'],
            'first_fixing_date'                 => $data['firstFixingDate'],
            'last_fixing_date'                  => $data['lastFixingDate'],
            'fixing_frequency'                  => $data['fixingFrequency'],
            'settlement_method'                 => $data['settlementMethod'],
            'delivery_point_or_zone'            => $data['deliveryPointOrZone'],
            'delivery_start_date'               => $data['deliveryStartDate'],
            'delivery_end_date'                 => $data['deliveryEndDate'],
            'load_type'                         => $data['loadType'],
            'action_type'                       => $data['actionType']
        ]);
        if(!$file) {
            return view('files/create', ['errors' => $filesModel->errors()]);
        };

        return redirect('files');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        helper('form');
        $filesModel = new \App\Models\FileModel();
        $file = $filesModel->find($id);
        return view('files/edit', compact('file'));
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        helper('form');
        $data = $this->request->getPost();
        $filesModel = new \App\Models\FileModel();
        $file =  $filesModel->save([
            'id'                                => $id,
            'reporting_entity_id'               => $data['reportingEntityId'],
            'reporting_entity_id_type'          => $data['reportingEntityIdType'],
            'record_seq_number'                 => $data['recordSeqNumber'],
            'id_of_market_participant'          => $data['idOfMarketParticipant'],
            'id_of_market_participant_type'     => $data['idOfMarketParticipantType'],
            'other_market_participant'          => $data['otherMarketParticipant'],
            'other_market_participant_type'     => $data['otherMarketParticipantType'],
            'trading_capacity'                  => $data['tradingCapacity'],
            'buy_sell_indicator'                => $data['buySellIndicator'],
            'contract_id'                       => $data['contractId'],
            'contract_date'                     => $data['contractDate'],
            'contract_type'                     => $data['contractType'],
            'energy_commodity'                  => $data['energyCommodity'],
            'price_formula'                     => $data['priceFormula'],
            'estimated_notional_amount_value'   => $data['estimatedNotionalAmountValue'],
            'estimated_notional_amount_unit'    => $data['estimatedNotionalAmountUnit'],
            'volume_optionality'                => $data['volumeOptionality'],
            'type_of_index_price'               => $data['typeOfIndexPrice'],
            'fixing_index'                      => $data['fixingIndex'],
            'fixing_index_type'                 => $data['fixingIndexType'],
            'fixing_index_source'               => $data['fixingIndexSource'],
            'first_fixing_date'                 => $data['firstFixingDate'],
            'last_fixing_date'                  => $data['lastFixingDate'],
            'fixing_frequency'                  => $data['fixingFrequency'],
            'settlement_method'                 => $data['settlementMethod'],
            'delivery_point_or_zone'            => $data['deliveryPointOrZone'],
            'delivery_start_date'               => $data['deliveryStartDate'],
            'delivery_end_date'                 => $data['deliveryEndDate'],
            'load_type'                         => $data['loadType'],
            'action_type'                       => $data['actionType']
        ]);
        if(!$file) {
            return view('files/edit', ['errors' => $filesModel->errors()]);
        };
        return redirect('files');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $filesModel = new \App\Models\FileModel();
        $filesModel->delete($id);
        return redirect('files');
    }
}
