<?php

class Migration_Create_packages_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "PackageId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ] ,
            "PackageTitle" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ] ,
            "Image" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Description" => [
                'type' => 'VARCHAR',
                'constraint' => 255
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
        $this->dbforge->add_key('PackageId',TRUE);
        $this->dbforge->create_table('packages',TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('packages', TRUE);
    }

}