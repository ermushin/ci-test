<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFilesTableMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'                              => 'INT',
                'constraint'                        => 5,
                'unsigned'                          => true,
                'auto_increment'                    => true,
            ],
            'name' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => '100',
            ],

            'reporting_entity_id' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => '100',
                'nullable'                          => true
            ],
            'reporting_entity_id_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['ace', 'lei', 'bic', 'eic', 'gln'],
                'default'                           => 'ace'
            ],
            'record_seq_number' => [
                'type'                              => 'INT',
                'constraint'                        => 5,
                'unsigned'                          => true,
            ],
            'id_of_market_participant' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => '100',
                'nullable'                          => true
            ],
            'id_of_market_participant_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['ace', 'lei', 'bic', 'eic', 'gln'],
                'default'                           => 'ace'
            ],
            'other_market_participant' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => '100',
                'nullable'                          => true
            ],
            'other_market_participant_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['ace', 'lei', 'bic', 'eic', 'gln'],
                'default'                           => 'ace'
            ],
            'trading_capacity' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['P', 'A'],
                'default'                           => 'P'
            ],
            'contract_id' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => 100,
            ],
            'contract_date' => [
                'type'                              => 'TIMESTAMP',
            ],
            'contract_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['SO', 'FW', 'FU', 'OP', 'OP_FW', 'OP_FU', 'OP_SW', 'SP', 'SW', 'OT'],
                'default'                           => 'SO'
            ],
            'energy_commodity' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['EL', 'NG'],
                'default'                           => 'EL'
            ],
            'price_formula' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => 1000,
            ],
            'buy_sell_indicator' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['B', 'S', 'C'],
                'default'                           => 'B'
            ],
            'estimated_notional_amount_value' => [
                'type'                              => 'FLOAT',
                'constraint'                        => [20,5],
            ],
            'estimated_notional_amount_unit' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['KWh', 'MWh', 'GWh', 'Therm', 'KTherm', 'MTherm', 'cm', 'mcm', 'Btu', 'MMBtu', 'MJ', 'MMJ', '100MJ', 'GJ'],
                'default'                           => 'KWh'
            ],
            'volume_optionality' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['V', 'F', 'M', 'C', 'O'],
                'default'                           => 'V'
            ],
            'type_of_index_price' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['F', 'I', 'C', 'O'],
                'default'                           => 'F'
            ],
            'fixing_index' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => 150,
            ],
            'fixing_index_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['SO', 'FW', 'FU', 'OP', 'OP_FW', 'OP_FU', 'OP_SW', 'SP', 'SW', 'OT'],
                'default'                           => 'SO'
            ],
            'fixing_index_source' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => 150,
            ],
            'first_fixing_date' => [
                'type'                              => 'TIMESTAMP',
            ],
            'last_fixing_date' => [
                'type'                              => 'TIMESTAMP',
            ],
            'fixing_frequency' => [
                'type'                              => 'INT',
                'constraint'                        => 5,
                'unsigned'                          => true,
            ],
            'settlement_method' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['P', 'C', 'O'],
                'default'                           => 'P'
            ],
            'delivery_point_or_zone' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => 16,
            ],
            'delivery_start_date' => [
                'type'                              => 'TIMESTAMP',
            ],
            'delivery_end_date' => [
                'type'                              => 'TIMESTAMP',
            ],
            'load_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['BL', 'PL', 'OP', 'BH', 'SH', 'GD', 'OT'],
                'default'                           => 'BL'
            ],
            'action_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['N', 'M', 'E', 'C'],
                'default'                           => 'N'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('files');
    }

    public function down()
    {
        $this->forge->dropTable('files');
    }
}
