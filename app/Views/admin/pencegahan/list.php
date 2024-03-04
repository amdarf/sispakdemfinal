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
                            <span><?php $uri = service('uri'); echo ucfirst($uri->getSegment($uri->getTotalSegments())) ?></span></a>
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
                                
                                <?php if (session()->getFlashdata('message')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('message'); ?>
                                </div>
                                <?php endif; ?>

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Pencegahan <small>List</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="tooltip-test" title="Tambah" href="<?php echo site_url('admin/pencegahan/add') ?>"><i class="fa fa-plus"></i></a></li>
                                            <li><a class="collapse-link tooltip-test" title="Collapse"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li><a class="tooltip-test" title="Help" data-toggle="modal" data-target="#pencegahanHelp"><i class="fa fa-question"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <p class="text-muted font-13 m-b-30">
                                                        Table list pencegahan
                                                    </p>

                                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                                                        cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Penyakit</th>
                                                                <th>Pencegahan</th>
                                                                <th width="200">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach($pencegahan as $data): ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $data['penyakit'] ?>
                                                                </td>
                                                                <td style="white-space: inherit;">
                                                                    <?= $data['pencegahan'] ?>
                                                                </td>                                                           
                                                                <td>
                                                                    <a href="<?php echo site_url('admin/pencegahan/edit/'.$data['id']) ?>"
                                                                    class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
											                        <a onclick="deleteConfirm('<?php echo site_url('admin/pencegahan/delete/'.$data['id']) ?>')"
                                                                    href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Delete</a>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach ?>                                                         
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
    <script>
	function deleteConfirm(url)
	{
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>

</body>

</html>