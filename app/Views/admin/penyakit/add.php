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
                                        <h2>Form Tambah <small>penyakit</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="tooltip-test" title="Kembali" href="<?php echo site_url('admin/penyakit') ?>"><i class="fa fa-arrow-left"></i></a></li>
                                            <li><a class="collapse-link tooltip-test" title="Collapse"><i class="fa fa-chevron-up"></i></a></li>
                                            <li><a class="tooltip-test" title="Help" data-toggle="modal" data-target="#tambahpenyakitHelp"><i class="fa fa-question"></i></a>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/penyakit/add') ?>" method="POST" enctype="multipart/form-data">

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Nama Penyakit* </label>
                                                <div class="col-md-9 col-sm-9 form-group has-feedback">
                                                    <input class="form-control <?php echo  $validation->getError('penyakit') ? 'is-invalid':'' ?>"
                                                    type="text" placeholder="Nama Penyakit" name="penyakit" required>
                                                    <div class="invalid-feedback">
                                                        <?php echo $validation->getError('penyakit') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="dynamicInputContainer">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3 col-sm-3 ">Gejala Penyakit*</label>
                                                    <div class="col-md-9 col-sm-9">
                                                        <div class="input-group">
                                                            <select name="gejala_input[]" class="form-control" required>
                                                                <option value="">-PILIH-</option>
                                                                <?php foreach($gejala as $gj):?>
                                                                <option value="<?php echo $gj['id'];?>"><?php echo $gj['gejala'];?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="control-label col-md-3 col-sm-3 "></label>
                                                <div class="col-md-9 col-sm-9 form-group has-feedback">
                                                    <button type="button" class="btn btn-success float-right" onclick="addInputField()">Add More</button>
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
    <script type="text/javascript">

        //ambil data dari php
        let gejala = <?php echo(json_encode($gejala)) ?>;
        let id = 0;

        function addInputField() {
            id++;
            let html = '<div class="form-group row" id="'+id+'">'+
                            '<label class="control-label col-md-3 col-sm-3 ">Gejala Penyakit*</label>'+
                            '<div class="col-md-9 col-sm-9">'+
                                '<div class="input-group">'+
                                    '<select name="gejala_input[]"class="form-control" required>'+
                                        '<option value="">-PILIH-</option>';
            for(var gj of gejala) {
                html +=                 '<option value="'+gj['id']+'">'+gj['gejala']+'</option>';
            }

            html +=                 '</select>'+
                                    '<span class="input-group-btn">'+
                                        '<a href="javascript:;" data-info="'+id+'" class="btn btn-danger delete-gejala"><i class="fa fa-trash"></i></a>'+
                                    '</span>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
            $('#dynamicInputContainer').append(html);
        }

        $('#dynamicInputContainer').on('click', '.delete-gejala', function(){
            input_id = $(this).data('info');
            // console.log(input_id);
            $('#'+input_id).remove();

        })
    </script>

</body>

</html>