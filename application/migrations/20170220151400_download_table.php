<?php

class Migration_Download_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "DownloadId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ] ,
            "DownloadTitle" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ] , 
            "DownloadFile" => [
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
                'type' => 'INT',
                'constraint' => 11
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('DownloadId',TRUE);
        $this->dbforge->create_table('download',TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('download', TRUE);
    }

}