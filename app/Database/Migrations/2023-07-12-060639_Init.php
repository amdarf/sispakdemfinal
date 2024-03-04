<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Init extends Migration
{
    public function up()
	{
		// Membuat kolom/field untuk tabel gejala
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'gejala' => [
				'type'           => 'TEXT',
				'null'           => true
			],
			'id_kategori' => [
				'type'			 => 'INT',
				'constraint'	 => 2,
				'unsigned'       => true, //penting untuk index/foregin key
				'null'			 => false
			],
			'level' => [
				'type'			 => 'INT',
				'constraint' 	 => 1,
				'null'			 => false,
				'default'		 => 1
			]
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel gejala
		$this->forge->createTable('tb_gejala', TRUE);

		// Membuat kolom/field untuk tabel kategori gejala
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 2,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'kategori' => [
				'type'			 => 'VARCHAR',
				'constraint'	 => 50,
				'null'			 => true
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel gejala
		$this->forge->createTable('tb_kategori', TRUE);

        // Membuat kolom/field untuk tabel penyakit
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 2,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'gejala_penyakit' => [
				'type'           => 'JSON',
				'null'           => true,
			]
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel penyakit
		$this->forge->createTable('tb_penyakit', TRUE);

        // Membuat kolom/field untuk tabel pencegahan
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'id_penyakit'          => [
				'type'           => 'INT',
				'constraint'     => 2,
				'unsigned'       => true, //penting untuk index/foregin key
                'null'           => false
			],
			'pencegahan' => [
				'type'           => 'TEXT',
				'null'           => true,
			]
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel pencegahan
		$this->forge->createTable('tb_pencegahan', TRUE);

	}

	//-------------------------------------------------------

	public function down()
	{
		// menghapus tabel
		$this->forge->dropTable('tb_gejala');
        $this->forge->dropTable('tb_penyakit');
        $this->forge->dropTable('tb_pencegahan');
		$this->forge->dropTable('tb_kategori');
	}
}
