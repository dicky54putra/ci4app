<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuRole extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_menu_role'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_menu'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'id_role'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
		]);
		$this->forge->addKey('id_menu_role', true);
		$this->forge->createTable('menu_role');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('menu_role');
	}
}
