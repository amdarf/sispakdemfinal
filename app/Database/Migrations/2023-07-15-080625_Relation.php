<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Relation extends Migration
{
    public function up()
    {
        $this->forge->addForeignKey('id_penyakit', 'tb_penyakit', 'id', 'CASCADE', 'CASCADE', 'pencegahan_ibfk_1');
        $this->forge->processIndexes('tb_pencegahan');// realasi 1 to n or 0
		$this->forge->addForeignKey('id_kategori', 'tb_kategori', 'id', 'CASCADE', 'CASCADE', 'kategori_ibfk_1');
        $this->forge->processIndexes('tb_gejala');// realasi 1 to n or 0
        /* gives:
        'ALTER TABLE `tb_pencegahan` ADD CONSTRAINT `pencegahan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit`(`id`) ON DELETE CASCADE ON UPDATE CASCADE'
        //1, field foreign key
        //2, parent table
        //3, primari/unique field on parent
        //4, on delete
        //5, on update
        //6, index fk
        */
    }

    public function down()
    {
        $this->forge->dropForeignKey('tb_pencegahan', 'pencegahan_ibfk_1');
		$this->forge->dropForeignKey('tb_gejala', 'kategori_ibfk_1');
    }
}
