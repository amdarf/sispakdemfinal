<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Penyakit extends Seeder
{
    public function run()
    {
        $penyakit_data = [
            [
                'penyakit'          =>'Demam Berdarah Dengue (DBD)',
                'gejala_penyakit'   =>'[4,7,9,10,11,15,17,19,20,23]'
            ],
            [
                'penyakit'          =>'Influensa',
                'gejala_penyakit'   =>'[1,6,12,19,25,28,29,31,32]'
            ],
            [
                'penyakit'          =>'Tifus/ Tipoid',
                'gejala_penyakit'   =>'[5,6,9,17,24,35,36,38,39,40]'
            ],
            [
                'penyakit'          =>'Malaria',
                'gejala_penyakit'   =>'[1,6,13,19,33,37,38,41,43,47]'
            ],
            [
                'penyakit'          =>'Tuberkulosis (TBC)',
                'gejala_penyakit'   =>'[1,14,17,26,27,30,44,46,47]'
            ],
            [
                'penyakit'          =>'Meningitis',
                'gejala_penyakit'   =>'[3,6,9,10,17,18,22,45,48,49,51,52,53,54,55]'
            ],
            [
                'penyakit'          =>'Hepatitis',
                'gejala_penyakit'   =>'[1,10,13,17,19,31,46,56]'
            ],
            [
                'penyakit'          =>'Linfadenitis/ Usus Buntu',
                'gejala_penyakit'   =>'[3,16,20,57,58,59]'
            ],
            [
                'penyakit'          =>'Apenditis',
                'gejala_penyakit'   =>'[2,17,19,32,60]'
            ],
            [
                'penyakit'          =>'Bronkitis',
                'gejala_penyakit'   =>'[2,6,8,29,30,47,50,61,62]'
            ]
        ];

        foreach($penyakit_data as $data){
			// insert semua data ke tabel
			$this->db->table('tb_penyakit')->insert($data);
		}
    }
}
