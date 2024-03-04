<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kategori extends Seeder
{
    public function run()
    {
        $kategori_data = [
			[
                'kategori'      => 'demam'
			],
            [
                'kategori'      => 'sakit kepala'
			],
            [
                'kategori'      => 'nyeri'
			],
            [
                'kategori'      => 'nafsu makan'
			],
            [
                'kategori'      => 'mual atau muntah'
			],
            [
                'kategori'      => 'mual dan muntah'
			],
            [
                'kategori'      => 'pembengkakan'
			],
            [
                'kategori'      => 'ruam'
			],
            [
                'kategori'      => 'batuk'
			],
            [
                'kategori'      => 'hidung'
            ],
            [
                'kategori'      => 'lelah'
			],
            [
                'kategori'      => 'diare'
			],
            [
                'kategori'      => 'sakit perut'
			],
            [
                'kategori'      => 'pegal'
			],
            [
                'kategori'      => 'lemas'
			],
            [
                'kategori'      => 'perasaan'
			],
            [
                'kategori'      => 'sembelit'
			],
            [
                'kategori'      => 'anemia'
			],
            [
                'kategori'      => 'berkeringat'
			],
            [
                'kategori'      => 'berat badan'
			],
            [
                'kategori'      => 'menggigil'
			],
            [
                'kategori'      => 'leher kaku'
			],
            [
                'kategori'      => 'napas'
			],        
            [
                'kategori'      => 'sensitif'
			],
            [
                'kategori'      => 'konsentrasi'
			],
            [
                'kategori'      => 'kantuk'
			],
            [
                'kategori'      => 'kejang'
			],
            [
                'kategori'      => 'linglung'
			],
            [
                'kategori'      => 'penyakit'
			],
            [
                'kategori'      => 'kulit'
			],
            [
                'kategori'      => 'nanah'
			],
            [
                'kategori'      => 'kelenjar getah bening'
			],
            [
                'kategori'      => 'kembung'
			],
            [
                'kategori'      => 'dada'
			],
            [
                'kategori'      => 'tenggorokan'
            ],
        ];

        foreach($kategori_data as $data){
			// insert semua data ke tabel
			$this->db->table('tb_kategori')->insert($data);
		}
    }
}
