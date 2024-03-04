<!DOCTYPE html>
<html lang="en">

<?= $this->include('admin/_partials/head') ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?= site_url('admin')?>" class="site_title"><i class="fa fa-plus-square"></i>
                            <span><?php $uri = service('uri'); echo SITE_NAME2  ?></span></a>
                    </div>

                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <?= $this->include('admin/_partials/sidebar') ?>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <?= $this->include('admin/_partials/topbar') ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row">
                    <div class="tile_count col-md-12">
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-bug"></i> Total Penyakit</span>
                            <div class="count"><?= $penyakit ?></div>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-balance-scale"></i> Total Gejala</span>
                            <div class="count"><?= $gejala ?></div>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-archive"></i> Total Kategori Gejala</span>
                            <div class="count"><?= $kategori ?></div>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-files-o"></i> Total Pencegahan</span>
                            <div class="count"><?= $pencegahan ?></div>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-history"></i> Total Riwayat</span>
                            <div class="count green"><?= $riwayat ?></div>
                        </div>
                    </div>
                </div>
                <!-- end top tiles -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Selamat datang di <?= SITE_NAME2 ?> <small>QnA</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="dashboard-widget-content">

                                    <ul class="list-unstyled timeline widget">
                                        <li>
                                            <div class="block">
                                                <div class="block_content">
                                                    <h2 class="title">
                                                        <a>Apa itu <?= SITE_NAME2 ?>?</a>
                                                    </h2>
                                                    <div class="byline"></div>
                                                    <p class="excerpt">
                                                        <?=SITE_NAME2?> adalah akronim dari Sistem Pakar Demam, sistem ini diubat untuk
                                                        melakukan diagnosa awal terhadap gejala gejala penyakit yang disebabkan oleh demam
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="block">
                                                <div class="block_content">
                                                    <h2 class="title">
                                                        <a>Bagaimana cara kerja <?= SITE_NAME2 ?>?</a>
                                                    </h2>
                                                    <div class="byline"></div>
                                                    <p class="excerpt">
                                                        <?=SITE_NAME2?> bekerja dengan cara mengumpulkan input index gejala yang diberikan pengunjung yang kemudian gejala input dilakukan perkusi berdasarkan dengan index penyakit yang tersedia. Hasil dari proses ini adalah kumpulan data presentase kecocokan / jumlah kecocokan jalur atau <i>breach</i> dari input user dengan gejala penyakit yang tersedia dalam index penyakit, yang kemudian diambil kecocokan gejala dengan index penyakit yang paling besar yang seterusnya akan memberikan pencegahan awal kepada pengunjung <?=SITE_NAME2?> 
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /page content -->

            <!-- footer content -->
            <?= $this->include('admin/_partials/footer') ?>
            <!-- /footer content -->
        </div>
    </div>

    <?= $this->include('admin/_partials/js') ?>

</body>

</html>