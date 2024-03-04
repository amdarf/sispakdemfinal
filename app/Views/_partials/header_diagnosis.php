<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="<?= site_url('diagnosis') ?>"><?=SITE_NAME2?><span>.</span></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="<?= base_url().'#hero' ?>">Home</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url().'#about' ?>">About</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url().'#contact' ?>">Contact</a></li>
        <li><a class="nav-link active" href="<?= site_url('diagnosis') ?>">Diagnosis</a></li>
        <li><a class="nav-link" href="<?= site_url('admin') ?>">Admin</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->