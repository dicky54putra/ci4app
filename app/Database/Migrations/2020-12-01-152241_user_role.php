<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserRole extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_user_role'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_user'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'id_role'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
		]);
		$this->forge->addKey('id_user_role', true);
		$this->forge->createTable('user_role');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('user_role');
	}
}
