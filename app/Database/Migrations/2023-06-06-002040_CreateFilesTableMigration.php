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
            ],
            'reporting_entity_id_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['ace', 'lei', 'bic', 'eic', 'gln'],
            ],
            'record_seq_number' => [
                'type'                              => 'INT',
                'constraint'                        => 5,
                'unsigned'                          => true,
            ],
            'id_of_market_participant' => [
                'type'                              => 'VARCHAR',
            ],
            'id_of_market_participant_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['ace', 'lei', 'bic', 'eic', 'gln'],
            ],
            'other_market_participant' => [
                'type'                              => 'VARCHAR',
            ],
            'other_market_participant_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['ace', 'lei', 'bic', 'eic', 'gln'],
            ],
            'trading_capacity' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['P', 'A'],
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
            ],
            'energy_commodity' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['EL', 'NG'],
            ],
            'price_formula' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => 1000,
            ],
            'estimated_notional_amount_value' => [
                'type'                              => 'FLOAT',
                'constraint'                        => [20,5],
            ],
            'estimated_notional_amount_unit' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['KWh', 'MWh', 'GWh', 'Therm', 'KTherm', 'MTherm', 'cm', 'mcm', 'Btu', 'MMBtu', 'MJ', 'MMJ', '100MJ', 'GJ'],
            ],
            'type_of_index_price' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['F', 'I', 'C', 'O'],
            ],
            'fixing_index' => [
                'type'                              => 'VARCHAR',
                'constraint'                        => 150,
            ],
            'fixing_index_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['SO', 'FW', 'FU', 'OP', 'OP_FW', 'OP_FU', 'OP_SW', 'SP', 'SW', 'OT'],
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
            ],
            'action_type' => [
                'type'                              => 'ENUM',
                'constraint'                        => ['N', 'M', 'E', 'C'],
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
