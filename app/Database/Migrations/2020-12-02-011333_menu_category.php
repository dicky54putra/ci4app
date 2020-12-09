<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuCategory extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_menu_category'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'slug'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
		]);
		$this->forge->addKey('id_menu_category', true);
		$this->forge->createTable('menu_category');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('menu_category');
	}
}
