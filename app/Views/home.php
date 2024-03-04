<!DOCTYPE html>
<html lang="en">

<!-- ======= Head ======= -->
<?= $this->include('_partials/head') ?>
<!-- ======= End Head ======= -->

<body>
  <!-- ======= Header ======= -->
  <?= $this->include('_partials/header') ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?= $this->include('_partials/hero') ?>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span><?=SITE_NAME2?></span></h3>
          <p><?=SITE_NAME2?> adalah akronim dari Sistem Pakar Demam, sistem ini diubat untuk melakukan diagnosa awal terhadap gejala gejala penyakit yang disebabkan oleh demam </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="modules/img/1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3><?=SITE_NAME1?></h3>
            <p class="fst-italic">
              <?=SITE_NAME2?> bekerja dengan cara mengumpulkan input index gejala yang diberikan pengunjung yang kemudian gejala input dilakukan perkusi berdasarkan dengan index penyakit yang tersedia. Hasil dari proses ini adalah kumpulan data presentase kecocokan / jumlah kecocokan jalur atau <i>breach</i> dari input user dengan gejala penyakit yang tersedia dalam index penyakit, yang kemudian diambil kecocokan gejala dengan index penyakit yang paling besar yang seterusnya akan memberikan pencegahan awal kepada pengunjung <?=SITE_NAME2?> 
            </p>
            <p>
              Bebarapa fitur dari <?=SITE_NAME2?> disederhanakan antara lain sebagai berikut
            </p>
            <ul>
            <li>
              <i class="bx bx-images"></i>
                <div>
                  <h5>Pendeteksian Penyakit</h5>
                  <p>Berdasarkan gejala gejala yang diberikan pengunjung sistem akan menentukan penyakit yang paling mendekati dengan gejala</p>
                </div>
              </li>
              <li>
                <i class="bx bx-shield-plus"></i>
                <div>
                  <h5>Memberikan Pencegahan Awal</h5>
                  <p>Setelah sistem mengetahui diagnosa pengunjung sistem akan memberikan solusi/pencegahan awal terhadap penyakit</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Anda dapat menghubungi kami melaui kontak kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+62 812 3456 7890</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?= $this->include('_partials/footer') ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?= $this->include('_partials/js') ?>

</body>

</html>