<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_tags extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'tag_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '25',
            ),
            'desc' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'created_at' => array(
                'type' => 'timestamp',
            ),
            'updated_at' => array(
                'type' => 'timestamp',
                'null' => true,
            ),
            'deleted_at' => array(
                'type' => 'timestamp',
                'null' => true,
            ),

        ));
        $this->dbforge->add_key('tag_id', TRUE);
        $this->dbforge->create_table('tags');
    }

    public function down()
    {
        $this->dbforge->drop_table('tags');
    }
}
