<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_test_packages extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'test_package_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'desc' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'limit_hour' => array(
                'type' => 'int',
                'constraint' => '11',
            ),
            'limit_minute' => array(
                'type' => 'int',
                'constraint' => '11',
            ),
            'limit_second' => array(
                'type' => 'int',
                'constraint' => '11',
            ),
            'limit_time' => array(
                'type' => 'int',
                'constraint' => '11',
            ),
            'price' => array(
                'type' => 'decimal',
                'constraint' => '22,2',
                'null' => true,
            ),
            'difficulty' => array(
                'type' => 'int',
                'constraint' => '11',
            ),
            'created_by' => array(
                'type' => 'int',
                'constraint' => '11',
            ),
            'created_at' => array(
                'type' => 'timestamp',
            ),
            'updated_by' => array(
                'type' => 'int',
                'constraint' => '11',
            ),
            'updated_at' => array(
                'type' => 'timestamp',
                'null' => true,
            ),
            'deleted_by' => array(
                'type' => 'int',
                'constraint' => '11',
            ),
            'deleted_at' => array(
                'type' => 'timestamp',
                'null' => true,
            ),

        ));
        $this->dbforge->add_key('test_package_id', TRUE);
        $this->dbforge->create_table('test_packages');
    }

    public function down()
    {
        $this->dbforge->drop_table('test_packages');
    }
}
