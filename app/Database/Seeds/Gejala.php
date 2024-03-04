<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Gejala extends Seeder
{
    public function run()
    {
        // membuat data
        // jika level ganjil (buka level setelahnya) misal 1 maka buka 2 dan 3. jika 3 maka buka 4 dan 5
		$gejala_data = [
			[
				'gejala'        => 'demam',
                'id_kategori'      => 1,
                'level'         => 1 //buka level 2 dan 3
			],
            [
				'gejala'        => 'demam ringan',
                'id_kategori'      => 1,
                'level'         => 2 //done
			],
            [
				'gejala'        => 'demam tinggi',
                'id_kategori'      => 1,
                'level'         => 3 //buka level 4 dan 5
			],
			[
				'gejala'        => 'demam 40°C atau lebih',
                'id_kategori'      => 1,
                'level'         => 4 //done
			],
            [
				'gejala'        => 'demam yang makin lama makin tinggi hingga mencapai 39-40°C',
                'id_kategori'      => 1,
                'level'         => 4 //done
			],
            [
				'gejala'        => 'sakit kepala',
                'id_kategori'      => 2,
                'level'         => 1 //buka level 2 dan 3
			],
            [
				'gejala'        => 'sakit kepala berat',
                'id_kategori'      => 2,
                'level'         => 2 //done
			],
            [
				'gejala'        => 'nyeri',
                'id_kategori'      => 3,
                'level'         => 1
			],
            [
				'gejala'        => 'nyeri otot',
                'id_kategori'      => 3,
                'level'         => 2
			],
            [
				'gejala'        => 'nyeri sendi',
                'id_kategori'      => 3,
                'level'         => 2
			],
            [
				'gejala'        => 'nyeri tulang',
                'id_kategori'      => 3,
                'level'         => 2
			],
            [
				'gejala'        => 'nyeri tenggorokan',
                'id_kategori'      => 3,
                'level'         => 2
			],
            [
				'gejala'        => 'nyeri perut',
                'id_kategori'      => 3,
                'level'         => 2
			],
            [
				'gejala'        => 'nyeri di dada saaat bernapas atau batuk',
                'id_kategori'      => 3,
                'level'         => 2
			],
            [
				'gejala'        => 'nyeri dibagian belakang mata',
                'id_kategori'      => 3,
                'level'         => 2
			],
            [
				'gejala'        => 'nyeri pada kelenjar getah bening jika diraba',
                'id_kategori'      => 3,
                'level'         => 2
			],
            [
				'gejala'        => 'hilang nafsu makan',
                'id_kategori'      => 4,
                'level'         => 1
			],
            [
				'gejala'        => 'mual atau muntah',
                'id_kategori'      => 5,
                'level'         => 1
			],
            [
				'gejala'        => 'mual dan muntah',
                'id_kategori'      => 5,
                'level'         => 2
			],
            [
				'gejala'        => 'pembengkakan kelenjar getah bening',
                'id_kategori'      => 7,
                'level'         => 1
			],
            [
				'gejala'        => 'pembengkakan di leher, ketiak atau selangkangan',
                'id_kategori'      => 7,
                'level'         => 2
			],
            [
				'gejala'        => 'ruam',
                'id_kategori'      => 8,
                'level'         => 1
			],
            [
				'gejala'        => 'ruam kemerahan (muncul sekitar 2-5 hari setelah demam)',
                'id_kategori'      => 8,
                'level'         => 2
			],
            [
				'gejala'        => 'ruam berupa bintik-bintik kecil berwarna merah muda',
                'id_kategori'      => 8,
                'level'         => 2
			],
            [
				'gejala'        => 'batuk',
                'id_kategori'      => 9,
                'level'         => 1
			],
            [
				'gejala'        => 'batuk yang berlangsung lama (3 minggu / lebih)',
                'id_kategori'      => 9,
                'level'         => 2
			],
            [
				'gejala'        => 'batuk biasanya disertai dengan dahak atau batuk darah',
                'id_kategori'      => 9,
                'level'         => 2
			],
            [
				'gejala'        => 'roduksi lendir hidung bertambah',
                'id_kategori'      => 10,
                'level'         => 1
			],
            [
				'gejala'        => 'hidung tersumbat',
                'id_kategori'      => 10,
                'level'         => 1
			],
            [
				'gejala'        => 'kelelahan',
                'id_kategori'      => 11,
                'level'         => 1
			],
            [
				'gejala'        => 'mudah lelah',
                'id_kategori'      => 11,
                'level'         => 1
			],
            [
				'gejala'        => 'diare',
                'id_kategori'      => 12,
                'level'         => 1
			],
            [
				'gejala'        => 'diare BAB berdarah',
                'id_kategori'      => 12,
                'level'         => 2
			],
            [
				'gejala'        => 'diare (dengan lender)',
                'id_kategori'      => 12,
                'level'         => 2
			],
            [
				'gejala'        => 'sakit perut',
                'id_kategori'      => 13,
                'level'         => 1
			],
            [
				'gejala'        => 'pegal-pegal',
                'id_kategori'      => 14,
                'level'         => 1
			],
            [
				'gejala'        => 'pegal linu',
                'id_kategori'      => 14,
                'level'         => 2
			],
            [
				'gejala'        => 'lemas',
                'id_kategori'      => 15,
                'level'         => 1
			],
            [
				'gejala'        => 'rasa kebingungan, seperti disorentasi tempat dan lingkungan',
                'id_kategori'      => 16,
                'level'         => 1
			],
            [
				'gejala'        => 'sembelit (orang dewasa), diare (anak-anak)',
                'id_kategori'      => 17,
                'level'         => 1
			],
            [
				'gejala'        => 'gejala anemia atau kurang darah',
                'id_kategori'      => 18,
                'level'         => 1
			],
            [
				'gejala'        => 'berkeringat',
                'id_kategori'      => 19,
                'level'         => 1
			],
            [
				'gejala'        => 'berkeringat banyak',
                'id_kategori'      => 19,
                'level'         => 2
			],
            [
				'gejala'        => 'berkeringat saat di malam hari',
                'id_kategori'      => 19,
                'level'         => 2
			],
            [
				'gejala'        => 'berkeringat dingin',
                'id_kategori'      => 19,
                'level'         => 2
			],
            [
				'gejala'        => 'penurunan berat badan',
                'id_kategori'      => 20,
                'level'         => 1
			],
            [
				'gejala'        => 'menggigil',
                'id_kategori'      => 21,
                'level'         => 1
			],
            [
				'gejala'        => 'leher kaku',
                'id_kategori'      => 22,
                'level'         => 1
			],
            [
				'gejala'        => 'napas cepat',
                'id_kategori'      => 23,
                'level'         => 1
			],
            [
				'gejala'        => 'sesak napas',
                'id_kategori'      => 23,
                'level'         => 1
			],            
            [
				'gejala'        => 'sensitif terhadap cahaya',
                'id_kategori'      => 24,
                'level'         => 1
			],
            [
				'gejala'        => 'sulit berkonsetrasi',
                'id_kategori'      => 25,
                'level'         => 1
			],
            [
				'gejala'        => 'mudah mengantuk',
                'id_kategori'      => 26,
                'level'         => 1
			],
            [
				'gejala'        => 'kejang',
                'id_kategori'      => 27,
                'level'         => 1
			],
            [
				'gejala'        => 'linglung',
                'id_kategori'      => 28,
                'level'         => 1
			],
            [
				'gejala'        => 'penyakit kuning',
                'id_kategori'      => 29,
                'level'         => 1
			],
            [
				'gejala'        => 'kulit kemerahan di daerah kelenjar getah bening',
                'id_kategori'      => 30,
                'level'         => 1
			],
            [
				'gejala'        => 'kumpulan nanah di kelenjar limfa yang membengkak',
                'id_kategori'      => 31,
                'level'         => 1
			],
            [
				'gejala'        => 'keluarnya cairan dari kelenjar getah bening yang membengkak',
                'id_kategori'      => 32,
                'level'         => 1
			],
            [
				'gejala'        => 'perut kembung',
                'id_kategori'      => 33,
                'level'         => 1
			],
            [
				'gejala'        => 'dada tidak nyaman',
                'id_kategori'      => 34,
                'level'         => 1
			],
            [
				'gejala'        => 'sakit tenggorokan',
                'id_kategori'      => 35,
                'level'         => 1
			],
		];

		foreach($gejala_data as $data){
			// insert semua data ke tabel
			$this->db->table('tb_gejala')->insert($data);
		}
    }
}

/*

DBD (Demam Berdaarah Dengue)
> Demam 40°C atau lebih (1)x
> Sakit kepala berat (1)x
> Nyeri sendi (1)x
> Nyeri otot (1)x
> Nyeri tulang (1)x
> Hilang nafsu makan (1)x
> Nyeri di bagian belakang mata (1)x
> Mual dan muntah (1)x
> Pembengkakan kelenjar getah bening (1)x
> Ruam kemerahan (muncul sekitar 2-5 hari setelah demam) (1)x

Influensa
> Demam (2)x
> Batuk (2)x
> Nyeri tenggorokan (2)x
> Produksi lendir hidung bertambah (2)x
> Hidung tersumbat (2)x
> Sakit kepala (2)x
> Mudah lelah (2)x
> Diare (2)x
> Mual dan muntah (2)x

Tifus/Tipoid
> Demam yang makin lama makin tinggi hingga mencapai 39-40°C (3)x
> Sakit kepala (3)x
> Nyeri otot (3)x
> Sakit perut (3)x
> Hilang nafsu makan (3)x
> Sembelit (orang dewasa), diare (anak-anak) (3)x
> Ruam berupa bintik-bintik kecil berwarna merah muda (3)x
> Pegal-pegal (3)x
> Lemas (3)x
> Rasa kebingungan, seperti disorentasi tempat dan lingkungan (3)x

Malaria
> Demam (4)x
> menggigil (4)x
> Sakit kepala (4)x
> Berkeringat banyak (4)x
> Lemas (4)x
> Pegal linu (4)x
> Gejala anemia atau kurang darah (4)x
> Mual atau muntah (4)x
> Nyeri perut (4)x
> Diare BAB berdarah (4)x

TBC (Tuberkulosis)
> Batuk yang berlangsung lama (3 minggu / lebih) (5)x
> Batuk biasanya disertai dengan dahak atau batuk darah (5)x
> Nyeri dada saaat bernapas atau batuk (5)x
> Berkeringat di malam hari (5)x
> Hilang nafsu makan (5)x
> Penurunan berat badan (5)x
> Demam (5)x
> menggigil (5)x
> Kelelahan (5)x

Meningitis
> Demam tinggi (6)x
> Leher kaku (6)x
> Napas cepat (6)x
> Keringat dingin (6)x
> Nyeri sendi (6)x
> Nyeri otot (6)x
> Sakit kepala (6)x
> Mual atau muntah (6)x
> Hilang nafsu makan (6)x
> Sensitif terhadap cahaya (6)x
> Sulit berkonsentrasi (6)x
> Mudah mengantuk (6)x
> Linglung (6)x
> Kejang (6)x
> Ruam (6)x

Hepatitis
> Demam (7)x
> Mual dan muntah (7)x
> Mudah lelah (7)x
> Nyeri sendi (7)x
> Hilang nafsu makan (7)x
> Penurunan berat badan (7)x
> Nyeri perut (7)x
> Penyakit kuning (7)x

Linfadenitis/Usus Buntu
> Demam (8)x
> Pembengkakan pada kelenjar getah bening di leher, ketiak atau selangkangan (8)x
> Nyeri pada kelenjar getah bening jika diraba (8)x
> Kulit kemerahan di daerah kelenjar getah bening (8)x
> Kumpulan nanah di kelenjar limfa yang membengkak (8)x
> Keluarnya cairan dari kelenjar getah bening yang membengkak (8)x

Apenditis
> Demam ringan (9)x
> Hilang nafsu makan (9)x
> Mual dan muntah (9)x
> Diare (dengan lender) (9)x
> Peruh kembung (9)x

Bronkitis
> Demam ringan (10)x
> menggigil (10)x
> Nyeri (10)x
> Kelelahan (10)x
> Dada tidak nyaman (10)x
> Sesak napas (10)x
> Hidung tersumbat (10)x
> Sakit kepala (10)x
> Sakit tenggorokan (10)x

*/