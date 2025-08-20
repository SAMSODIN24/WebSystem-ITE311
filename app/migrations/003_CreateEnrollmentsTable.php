<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateEnrollmentsTable extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),
            'course_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),
            'enrolled_at' => array(
                'type' => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
            ),
            'status' => array(
                'type' => 'ENUM',
                'constraint' => "'active','completed','dropped'",
                'default' => 'active',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('enrollments');
    }

    public function down() {
        $this->dbforge->drop_table('enrollments');
    }
}