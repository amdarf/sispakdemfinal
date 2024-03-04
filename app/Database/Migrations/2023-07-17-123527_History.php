<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class History extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel
		$this->forge->addField([
			'id'                 => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'nama'               => [
				'type'           => 'VARCHAR',
				'constraint'     => 200,
                'null'           => false
			],
            'id_penyakit'        => [
				'type'           => 'INT',
				'constraint'     => 2,
				'unsigned'       => true, //penting untuk index/foregin key
                'null'           => false
			],
			'gejala_input'       => [
				'type'           => 'TEXT',
				'null'           => true
            ],
            'presentase'         => [
                'type'           => 'DECIMAL',
                'constraint'     => 5.2,
                'dafault'        => 0.00
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel riwayat
		$this->forge->createTable('tb_riwayat', TRUE);

		// membuat relasi
		$this->forge->addForeignKey('id_penyakit', 'tb_penyakit', 'id', 'CASCADE', 'CASCADE', 'riwayat_ibfk_1');
        $this->forge->processIndexes('tb_riwayat');
    }

    public function down()
    {
		$this->forge->dropForeignKey('tb_riwayat', 'riwayat_ibfk_1');
        $this->forge->dropTable('tb_riwayat');
    }
}
