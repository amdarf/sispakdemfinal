<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pencegahan extends Seeder
{
    public function run()
    {
        $pencegahan_data = [
            [
                'id_penyakit'   => 1,
                'pencegahan'    => 'Mencukupi kebutuhan cairan dengan minuman selain air putih, seperti susu, jus buah, cairan isotonik, oralit, atau air beras.'
            ],
            [
                'id_penyakit'   => 1,
                'pencegahan'    => 'Mengonsumsi makanan dengan gizi lengkap dan seimbang.'
            ],
            [
                'id_penyakit'   => 1,
                'pencegahan'    => 'Beristirahat yang cukup Menjaga suhu tubuh di bawah 39℃ dengan menggunakan kompres hangat, mandi atau berendam air hangat (bukan panas), mengatur suhu ruangan yang sejuk, dan menghindari memakai baju yang tidak terlalu tebal.'
            ],
            [
                'id_penyakit'   => 1,
                'pencegahan'    => 'Mengonsumsi paracetamol jika demam naik melebihi 39℃  atau untuk meredakan sakit kepala dan nyeri otot yang mengganggu.'
            ],
            [
                'id_penyakit'   => 2,
                'pencegahan'    => 'Rajin mencuci tangan dengan air dan sabun, atau hand-sanitizer berbahan dasar alkohol.'
            ],
            [
                'id_penyakit'   => 2,
                'pencegahan'    => 'Tidak menyentuh mulut, hidung, dan mata, sebelum mencuci tangan.'
            ],
            [
                'id_penyakit'   => 2,
                'pencegahan'    => 'Membersihkan permukaan benda yang sering disentuh, dengan cairan disinfektan.'
            ],
            [
                'id_penyakit'   => 2,
                'pencegahan'    => 'Tidak berbagi makanan atau penggunaan benda pribadi, seperti gelas atau botol minum.'
            ],
            [
                'id_penyakit'   => 3,
                'pencegahan'    => 'Cuci tangan sebelum dan sesudah mengolah makanan dan minuman, setelah buang air kecil atau besar, atau setelah membersihkan kotoran, misalnya saat mencuci popok bayi.'
            ],
            [
                'id_penyakit'   => 3,
                'pencegahan'    => 'Pastikan air yang akan diminum sudah direbus sampai matang.'
            ],
            [
                'id_penyakit'   => 3,
                'pencegahan'    => 'Kurangi membeli jajanan secara sembarangan di pinggir jalan, karena mudah terpapar bakteri.'
            ],
            [
                'id_penyakit'   => 3,
                'pencegahan'    => 'Hindari mengonsumsi es batu atau minuman es yang tidak dibuat sendiri. Jangan mengonsumsi buah atau sayuran mentah yang tidak dicuci dengan air bersih dan dikupas terlebih dahulu.'
            ],
            [
                'id_penyakit'   => 3,
                'pencegahan'    => 'Batasi konsumsi makanan laut atau seafood, terutama yang masih mentah, karena tingkat kesegarannya sulit diketahui secara pasti.'
            ],
            [
                'id_penyakit'   => 3,
                'pencegahan'    => 'Bersihkan kamar mandi secara teratur. Hindari konsumsi susu yang tidak dipasteurisasi.'
            ],
            [
                'id_penyakit'   => 3,
                'pencegahan'    => 'Konsumsilah antibiotik yang diresepkan oleh dokter dan ikuti dosis serta petunjuk penggunaannya. Penting diingat, antibiotik harus dihabiskan untuk mencegah resistensi obat.'
            ],
            [
                'id_penyakit'   => 4,
                'pencegahan'    => 'Jaga kebersihan diri. Mandilah kurang lebih dua hari sekali agar tubuh bersih dan tak berbau sehingga nyamuk enggan mendekat.'
            ],
            [
                'id_penyakit'   => 4,
                'pencegahan'    => 'Gunakan losion anti nyamuk. Losion tersebut harus mengandung diethyltoluamide karena efektif menangkal nyamuk.'
            ],
            [
                'id_penyakit'   => 4,
                'pencegahan'    => 'Ingatlah juga untuk mengaplikasikannya beberapa kali dalam sehari. Tidurlah pada kasur yang berkelambu.'
            ],
            [
                'id_penyakit'   => 4,
                'pencegahan'    => 'JTirai tipis berjaring tersebut akan mencegah nyamuk untuk mendekati Anda sehingga terhindar dari penyakit malaria bahkan gigitan serangga lainnya. '
            ],
            [
                'id_penyakit'   => 4,
                'pencegahan'    => 'Kenakan baju dan celana panjang berwarna terang. Menggunakan pakaian tersebut akan membuat kulit Anda tertutupi sehingga nyamuk sulit untuk menggigit.'
            ],
            [
                'id_penyakit'   => 4,
                'pencegahan'    => 'Kenakanlah terutama pada sore atau malam hari saat nyamuk lebih aktif mencari mangsa.'
            ],
            [
                'id_penyakit'   => 5,
                'pencegahan'    => 'Tutupi mulut saat bersin, batuk, dan tertawa.'
            ],
            [
                'id_penyakit'   => 5,
                'pencegahan'    => 'Jika menggunakan tisu untuk menutup mulut, buang tisu segera setelah digunakan.'
            ],
            [
                'id_penyakit'   => 5,
                'pencegahan'    => 'Jangan membuang dahak atau meludah sembarangan.'
            ],
            [
                'id_penyakit'   => 5,
                'pencegahan'    => 'Pastikan rumah memiliki sirkulasi udara yang baik, misalnya dengan sering membuka pintu dan jendela.'
            ],
            [
                'id_penyakit'   => 5,
                'pencegahan'    => 'Jangan tidur sekamar dengan orang lain sampai dokter menyatakan TBC yang diderita telah sampai pada tahap tidak menular.'
            ],
            [
                'id_penyakit'   => 5,
                'pencegahan'    => 'Vaksinasi BCG (Bacillus Calmette-Guerin).'
            ],
            [
                'id_penyakit'   => 6,
                'pencegahan'    => 'Mencuci tangan menggunakan sabun dan air mengalir secara rutin.'
            ],
            [
                'id_penyakit'   => 6,
                'pencegahan'    => 'Menjaga jarak dengan orang yang terinfeksi.'
            ],
            [
                'id_penyakit'   => 6,
                'pencegahan'    => 'Menggunakan masker jika sedang sakit atau ketika merawat orang sakit.'
            ],
            [
                'id_penyakit'   => 6,
                'pencegahan'    => 'Berolahraga secara rutin.'
            ],
            [
                'id_penyakit'   => 6,
                'pencegahan'    => 'Beristirahat yang cukup'
            ],
            [
                'id_penyakit'   => 6,
                'pencegahan'    => 'Memilih makanan yang tlah dimasak hingga matang'
            ],
            [
                'id_penyakit'   => 6,
                'pencegahan'    => 'Mencuci sayuran dan buah hingga bersih'
            ],
            [
                'id_penyakit'   => 6,
                'pencegahan'    => 'Tidak bebagi makanan atu barang pribadi'
            ],
            [
                'id_penyakit'   => 6,
                'pencegahan'    => 'Menghindari paparan asap rokok, termasuk berhenti merokok'
            ],
            [
                'id_penyakit'   => 6,
                'pencegahan'    => 'Menerapkan perilaku seks yang sehat'
            ],
            [
                'id_penyakit'   => 7,
                'pencegahan'    => 'Konsumsi makanan berserat'
            ],
            [
                'id_penyakit'   => 7,
                'pencegahan'    => 'Minum air puth yang cukup'
            ],
            [
                'id_penyakit'   => 7,
                'pencegahan'    => 'Makan dengan tenang dan perlahan'
            ],
            [
                'id_penyakit'   => 7,
                'pencegahan'    => 'Rutin cek kesehatan ke dokter'
            ],
            [
                'id_penyakit'   => 8,
                'pencegahan'    => 'Rutin mencuci tangan dengan air mengalir dan sabun'
            ],
            [
                'id_penyakit'   => 8,
                'pencegahan'    => 'Beristirahat yang cukup'
            ],
            [
                'id_penyakit'   => 8,
                'pencegahan'    => 'Mengkonsumsi makanan bergizi lengkap dan seimbang'
            ],
            [
                'id_penyakit'   => 8,
                'pencegahan'    => 'Berolahraga secara rutin'
            ],
            [
                'id_penyakit'   => 8,
                'pencegahan'    => 'Menghindari orang yang sedang sakit'
            ],
            [
                'id_penyakit'   => 8,
                'pencegahan'    => 'Segera melakukan perawatan pada luka akibat cakaran hewan, dengan mecuci luka, mengolesakan antiseptik dan menutupnya dengan kain kasa'
            ],
            [
                'id_penyakit'   => 9,
                'pencegahan'    => 'Mencuci tangan dengan air mengalir dan sabun secara rutin, terutama setelah beraktivitas di luar ruangan dan sebelum menyentuh makanan.'
            ],
            [
                'id_penyakit'   => 9,
                'pencegahan'    => 'Melakukan hubungan seksual yang aman, seperti dengan satu pasangan atau menggunakan kondom.'
            ],
            [
                'id_penyakit'   => 9,
                'pencegahan'    => 'Tidak berbagi penggunaan barang-barang pribadi, seperti alat cukur atau sikat gigi.'
            ],
            [
                'id_penyakit'   => 9,
                'pencegahan'    => 'Mengonsumsi makanan bergizi seimbang, berolahraga, dan beristirahat yang cukup.'
            ],
            [
                'id_penyakit'   => 9,
                'pencegahan'    => 'Tidak mengonsumsi minuman beralkohol dan tidak menggunakan NAPZA.'
            ],
            [
                'id_penyakit'   => 9,
                'pencegahan'    => 'Tidak mengonsumsi makanan mentah dan air minum yang tidak terjamin kebersihannya.'
            ],
            [
                'id_penyakit'   => 9,
                'pencegahan'    => 'Melakukan vaksinasi hepatitis sesuai jadwal yang diberikan oleh dokter. '
            ],
            [
                'id_penyakit'   => 10,
                'pencegahan'    => 'Hindari asap rokok'
            ],
            [
                'id_penyakit'   => 10,
                'pencegahan'    => 'Dapatkan vaksinisasi influenza'
            ],
            [
                'id_penyakit'   => 10,
                'pencegahan'    => 'Jaga kebersihan tubuh. Selalu cuci tangan dengan sabun untuk menghindari infeksi.'
            ],
            [
                'id_penyakit'   => 10,
                'pencegahan'    => 'Pakailah masker terutama di tempat-tempat dengan kualitas udara yang buruk.'
            ],
            
        ];
        foreach($pencegahan_data as $data){
			// insert semua data ke tabel
			$this->db->table('tb_pencegahan')->insert($data);
		}
    }
}
