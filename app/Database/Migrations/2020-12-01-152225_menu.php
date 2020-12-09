<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_menu'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_menu_category'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'indexs'     => '11',
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'url'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'parent'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'number'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'icon'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'slug'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'status'       => [
				'type'           => 'TINYINT',
				'constraint'     => 1,
			],
		]);
		$this->forge->addKey('id_menu', true);
		$this->forge->createTable('menu');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('menu');
	}
}
