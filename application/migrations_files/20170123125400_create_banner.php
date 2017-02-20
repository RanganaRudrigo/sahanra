<?php

class Migration_Create_banner extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "BannerId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ] ,
            "BannerFor" => [
                'type' => 'INT',
                'constraint' => 1 ,
                'comment' => "1:tour ,2:destination ,3:gallery ,4:about us ,5:contact us ,6:testimonial,7:about srilanka,"
            ] ,
            "Title" => [
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
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('BannerId',TRUE);
        $this->dbforge->create_table('banner',TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('banner', TRUE);
    }

}