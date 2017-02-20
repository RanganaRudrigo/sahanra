<?php

class Migration_News_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "NewsId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ] ,
            "NewsTitle" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ] ,
            "Image" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "BannerImage" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "ShortDescription" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Description" => [
                'type' => 'TEXT'
            ],
            "MoreImage" => [
                'type' => 'TEXT'
            ],
            "YoutubeUrl" => [
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
        $this->dbforge->add_key('NewsId',TRUE);
        $this->dbforge->create_table('news',TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('news', TRUE);
    }

}