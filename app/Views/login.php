<!DOCTYPE html>
<html lang="en">

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
    <!-- Font Awesome -->
    <link href="<?= base_url('modules/admin/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('modules/admin/vendors/font-awesome/myicon/style.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('modules/admin/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url('modules/admin/vendors/animate.css/animate.min.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('modules/admin/css/custom.css') ?>" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="<?php echo site_url('login/auth') ?>" method="POST" enctype="multipart/form-data">
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" name="username"
                                required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default">Login</button>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>

                            <?php if (session()->getFlashdata('msg')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo session()->getFlashdata('msg'); ?>
                            </div>
                            <?php endif; ?>

                            <br />

                            <div>
                                <h1><i class="fa fa-plus"></i> <?= SITE_NAME2 ?></h1>
                                <p>©2023 All Rights Reserved</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form action="<?php echo base_url('admin/auth/add') ?>" method="POST" enctype="multipart/form-data">
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-plus"></i> <?= SITE_NAME2 ?></h1>
                                <p>©2023 All Rights Reserved</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>