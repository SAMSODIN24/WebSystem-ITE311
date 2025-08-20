<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateSubmissionsTable extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'quiz_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),
            'answers' => array(
                'type' => 'TEXT',
                'comment' => 'JSON format for answers',
            ),
            'score' => array(
                'type' => 'FLOAT',
                'null' => TRUE,
            ),
            'submitted_at' => array(
                'type' => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('submissions');
    }

    public function down() {
        $this->dbforge->drop_table('submissions');
    }
}