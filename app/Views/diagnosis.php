<!DOCTYPE html>
<html lang="en">

<!-- ======= Head ======= -->
<?= $this->include('_partials/head') ?>
<!-- ======= End Head ======= -->

<body>

  <!-- ======= Header ======= -->
  <?= $this->include('_partials/header_diagnosis') ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Diagnosis Section ======= -->
    <section id="diagnosis" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>Index Gejala</span></h3>
          <p>Silahkan melakukan ceklis pada kolom yang tersedia berdasarkan gejala yang dialami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="info-box mb-4" style="padding: 0;">

              <table>
                <thead>
                  <tr>
                    <th width="80%">
                      <div class="label">Gejala</div>
                      <div class="date">Gejala Dialami Pasien</div>
                    </th>
                    <th class="nowrap">
                      <div class="label">Input Gejala</div>
                      <div class="date">Ceklis Gejala</div>
                    </th>
                  </tr>
                </thead>
              </table>

              <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php foreach($kategori as $kat): ?>
                <?php if(intval($kat['sama']) > 1): ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne<?=$kat['id']?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseOne<?=$kat['id']?>" aria-expanded="true"
                      aria-controls="flush-collapseOne<?=$kat['id']?>">
                      <span style="text-transform: capitalize;"><?=$kat['kategori']?></span>
                    </button>
                  </h2>
                  <div id="flush-collapseOne<?=$kat['id']?>" class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne<?=$kat['id']?>" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <table>
                        <tbody>
                          <?php foreach($gejala as $data): ?>
                            <?php if($kat['id']==$data['id_kategori']): ?>
                            <tr>
                              <td width="80%">
                                <div class="label"><?= $data['gejala'] ?></div>
                              </td>
                              <td style="pointer-events: auto;">
                                <div class="score-check">
                                  <?php
                                        if($data['level']=='1'){
                                          echo '<input class="form-check-input levelup" id="'.$data['id'].'" type="checkbox" value="'.$data['id'].'" id="flexCheckDefault">';
                                        }
                                        else {
                                          echo '<input class="form-check-input levelup" id="'.$data['id'].'" type="checkbox" value="'.$data['id'].'" id="flexCheckDisabled" disabled>';
                                        }
                                      ?>
                                </div>
                              </td>
                            </tr>
                            <?php endif ?>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                  </div>
                </div>
                <?php else: ?>
                    <div class="accordion-header">
                      <table>
                        <tbody>
                          <?php foreach($gejala as $data): ?>
                            <?php if($kat['id']==$data['id_kategori']): ?>
                            <tr>
                              <td width="80%">
                                <div class="label"><?= $data['gejala'] ?></div>
                              </td>
                              <td style="pointer-events: auto;">
                                <div class="score-check">
                                  <?php
                                        if($data['level']=='1'){
                                          echo '<input class="form-check-input levelup" id="'.$data['id'].'" type="checkbox" value="'.$data['id'].'" id="flexCheckDefault">';
                                        }
                                        else {
                                          echo '<input class="form-check-input levelup" id="'.$data['id'].'" type="checkbox" value="'.$data['id'].'" id="flexCheckDisabled" disabled>';
                                        }
                                      ?>
                                </div>
                              </td>
                            </tr>
                            <?php endif ?>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                <?php endif; ?>
                <?php endforeach ?>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <section>
      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-12 col-sm-12 col-md-12 reset">
          <button onclick="refreshPage()" type="button" class="btn btn-outline-success btn-lg"><i class='bx bx-reset'></i> Reset</button>
        </div>

      </div>
    </section>
    <!-- End Diagnosis Section -->

    <footer id="footer" style="background: white;">
      <div class="footer-newsletter">
          <div class="container" id="hasil_diagnosis">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <h4>Diagnosis</h4>
                      <p>Masukkan nama anda</p>
                      <form id="myForm">
                          <input type="text" name="nama"><input id="submit" type="button" value="Submit">
                      </form>
                  </div>
              </div>
          </div>
      </div> 
    </footer>

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?= $this->include('_partials/footer') ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?= $this->include('_partials/js') ?>
  <?= $this->include('_partials/diagnosa') ?>

</body>

</html>