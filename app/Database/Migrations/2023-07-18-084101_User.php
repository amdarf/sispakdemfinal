<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $user = 
        [
			'id' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
				'null'           => FALSE
			],
			'username' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
				'unique'     	 => TRUE,
                'null'           => FALSE
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
                'null'           => FALSE
			],
			'role' => [
				'type'     		 => 'ENUM("1","2","3")',
				'default'		 => '1',
                'comment'        => '1=admin,2=employee,3=customer'
            ],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at datetime default current_timestamp on update current_timestamp'
		];

        $this->forge->addField($user);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel user
		$this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
