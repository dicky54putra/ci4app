<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_user'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'foto'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'slug'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'created_at'  => [
				'type'           => 'DATETIME'
			],

		]);
		$this->forge->addKey('id_user', true);
		$this->forge->createTable('user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('user');
	}
}
