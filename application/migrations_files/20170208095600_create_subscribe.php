<?php
 
class Migration_Create_subscribe extends CI_Migration
{

    function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    function up(){
        $fields = [
            "EmailId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ] ,
            "Email" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ] ,
        ];
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('EmailId',TRUE);
        $this->dbforge->create_table('subscribe',TRUE);
    }
    function down(){
        $this->dbforge->drop_table('subscribe', TRUE );
    }

}