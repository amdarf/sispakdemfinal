<!DOCTYPE html>
<html lang="en">

<?= $this->include('admin/_partials/head') ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?= base_url('admin')?>" class="site_title"><i class="fa fa-plus-square"></i>
                            <span><?php $uri = service('uri'); echo ucfirst($uri->getSegment($uri->getTotalSegments()-1))  ." : ". ucfirst($uri->getSegment($uri->getTotalSegments())) ?></span></a>
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


                <div class="row">

                    <div class="col-md-12 col-sm-12 ">
                        <div class="row">
                            <div class="col-md-12 ">

                                <?php $validation = \Config\Services::validation(); ?>

                                <?php if (session()->getFlashdata('message')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('message'); ?>
                                </div>
                                <?php endif; ?>

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Form Tambah <small>Pencegahan</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="tooltip-test" title="Kembali" href="<?php echo site_url('admin/pencegahan') ?>"><i class="fa fa-arrow-left"></i></a></li>
                                            <li><a class="collapse-link tooltip-test" title="Collapse"><i class="fa fa-chevron-up"></i></a></li>
                                            <li><a class="tooltip-test" title="Help" data-toggle="modal" data-target="#tambahpencegahanHelp"><i class="fa fa-question"></i></a>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/pencegahan/add') ?>" method="POST" enctype="multipart/form-data">
                                            
                                            <div class="form-group row">
                                                <label class="control-label col-md-3 col-sm-3 ">Nama Penyakit*</label>
                                                <div class="col-md-9 col-sm-9">
                                                    <div class="input-group">
                                                        <select name="penyakit" class="form-control <?php echo  $validation->getError('penyakit') ? 'is-invalid':'' ?>" required>
                                                            <option value="">-PILIH-</option>
                                                            <?php foreach($penyakit as $py):?>
                                                            <option value="<?php echo $py['id'];?>"><?php echo $py['penyakit'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            <?php echo $validation->getError('penyakit') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Nama Pencegahan* </label>
                                                <div class="col-md-9 col-sm-9 form-group has-feedback">
                                                    <textarea class="form-control <?php echo  $validation->getError('pencegahan') ? 'is-invalid':'' ?>"
                                                    type="text" placeholder="Pencegahan awal terhadap penyakit" name="pencegahan" required></textarea>
                                                    <div class="invalid-feedback">
                                                        <?php echo $validation->getError('pencegahan') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                            <p>* Required</p>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <button type="submit" class="btn btn-success float-right">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /page content -->

            <!-- modal -->
            <?= $this->include('admin/_partials/modal') ?>
            <!-- end modal -->

            <!-- footer content -->
            <?= $this->include('admin/_partials/footer') ?>
            <!-- /footer content -->
        </div>
    </div>

    <?= $this->include('admin/_partials/js') ?>
</body>

</html>