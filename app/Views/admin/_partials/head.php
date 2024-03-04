<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('modules/img/logo.png') ?>" type="image/ico" />

    <title><?php $uri = service('uri'); echo SITE_NAME1  ." : ". ucfirst($uri->getSegment($uri->getTotalSegments())) ?>
    </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('modules/admin/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('modules/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('modules/admin/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('modules/admin/vendors/font-awesome/myicon/style.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('modules/admin/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

    <!-- NProgress -->
    <link href="<?= base_url('modules/admin/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">

    <link href="<?= base_url('modules/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('modules/admin/css/custom.css') ?>" rel="stylesheet">

</head>