<?php

class Migration_Alter_banner_image extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "BannerImage" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ];
        $this->dbforge->add_column('gallery', $fields);
        $this->dbforge->add_column('destinations', $fields);
        $this->dbforge->add_column('tours', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('gallery', "BannerImage");
        $this->dbforge->drop_column('destinations', "BannerImage");
        $this->dbforge->drop_column('tours', "BannerImage");
    }

}