<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EditPenyakit extends Migration
{
    public function up()
    {
        $penyakit = [
            'penyakit' => [
                'type'          => 'VARCHAR',
                'constraint'    => 200,
                'null'          => false,
                'after'         => 'id'
            ],
        ];
        $this->forge->addColumn('tb_penyakit', $penyakit);

        $penyakit = [
            'gejala_penyakit' => [
                'name'          => 'gejala_penyakit',
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => FALSE,
                'default'       => '[0]'
            ],
        ];
        $this->forge->modifyColumn('tb_penyakit', $penyakit);

    }

    public function down()
    {
        $penyakit = [
            'penyakit'
        ];
        $this->forge->dropColumn('tb_penyakit', $penyakit);

        $penyakit = [
            'gejala_penyakit' => [
                'type'           => 'JSON',
				'null'           => true,
            ],
        ];
        $this->forge->modifyColumn('tb_penyakit', $penyakit);
    }
}
