<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_userfb extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ID' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_fb' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'image_link' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'date' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                ));
                $this->dbforge->add_key('ID', TRUE);
                $this->dbforge->create_table('account_fb');
        }

        public function down()
        {
                $this->dbforge->drop_table('account_fb');
        }
}