<?php
class Migration_Create_captcha_table extends CI_Migration {

	public function up()
	{/*
		$this->dbforge->add_field(array(
			'captcha_id' => array(
				'type' => 'INT',
				'constraint' => 13,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			' captcha_time' => array(
				'type' => 'INT',
				'constraint' => '10',
				'unsigned' => TRUE,
			),
			'ip_address' => array(
				'type' => 'VARCHAR',
				'constraint' => '16',
			),
			'word' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
	));
			
		$this->dbforge->add_key('captcha_id', TRUE);
		$this->dbforge->create_table('captcha');*/
	}

	public function down()
	{
		$this->dbforge->drop_table('captcha');
	}
}