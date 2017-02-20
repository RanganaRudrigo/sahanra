<?php

class Migration_Create_tours_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "TourId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ] ,
            "PackageId" => [
                'type' => 'INT',
                'constraint' => 11
            ] ,
            "TourTitle" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ] ,
            "Image" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "ShortDescription" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ] ,
            "DestinationCovered" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ] ,
            "Description" => [
                'type' => 'TEXT'
            ],
            "Map" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "MoreImage" => [
                'type' => 'TEXT'
            ],
            "Price" => [
                'type' => 'FLOAT'
            ],
            "Discount" => [
                'type' => 'FLOAT'
            ],
            "NoOdPack" => [
                'type' => 'INT'
            ],
            "Days" => [
                'type' => 'INT'
            ],
            "Nights" => [
                'type' => 'INT'
            ],
            "TourDays" => [
                'type' => 'TEXT'
            ],
            "CreatedBy" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CreatedDate" => [
                'type' => 'DATETIME'
            ],
            "ModifiedBy" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "ModifiedDate" => [
                'type' => 'TIMESTAMP'
            ],
            "IsDeleted" => [
                'type' => 'INT',
                'constraint' => 1 ,
                'default' =>1
            ],
            "OrderNo" => [
                'type' => 'INT'
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('TourId',TRUE);
        $this->dbforge->create_table('tours',TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('tours', TRUE);
    }

}