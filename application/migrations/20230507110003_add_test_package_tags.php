<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_test_package_tags extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'test_package_tag_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),

            'test_package_tags_test_package_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),
            'test_package_tags_tag_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),


        ));
        $this->dbforge->add_key('test_package_tag_id', TRUE);
        $this->dbforge->create_table('test_package_tags');

        $this->db->query("ALTER TABLE test_package_tags ADD CONSTRAINT FK_test_package FOREIGN KEY (test_package_tags_test_package_id) REFERENCES test_packages(test_package_id) ON DELETE NO ACTION ON UPDATE NO ACTION;");
        $this->db->query("ALTER TABLE test_package_tags ADD CONSTRAINT FK_test_package_tags FOREIGN KEY (test_package_tags_tag_id) REFERENCES tags(tag_id)ON DELETE NO ACTION ON UPDATE NO ACTION;");
    }

    public function down()
    {
        $this->dbforge->drop_table('test_package_tags');
    }
}
