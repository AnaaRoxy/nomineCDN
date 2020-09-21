<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Peluang Bisnis Anti Ribet | NOMINE ID</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/nomine.png')?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url('assets/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url('assets/lib/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/lib/animate/animate.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/lib/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

  <!-- Main Stylesheet File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>

  <?php $this->load->view('_partials/header') ?>

  <?php $this->load->view('_partials/intro') ?>

  <?php $this->load->view('_partials/about1') ?>

  <main id="main">

    <?php $this->load->view('_partials/about') ?>

    <?php $this->load->view('_partials/service.php') ?>

    <?php $this->load->view('_partials/whyAndTestimoni') ?>

    <?php $this->load->view('_partials/contactSection') ?>

  </main>

  <?php $this->load->view('_partials/footer') ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"  aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="container">
    <div class="modal-dialog modal-lg" dropdownParent>
      <div class="modal-content">
        <div class="modal-header">
          <h5>Gabung Mitra Nomine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <p class="lead2">Jangan tunda kesempatan terbatasmu, karna kesempatan tidak datang 2x</p>
              <p class="lead2">Kamu bisa tanya tanya dulu</p>
            </div>
          </div>
          <form action="<?= base_url('welcome/register') ?>" method="POST">
          <div class="row">
            <div class="col mt-4">
              <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
            </div>
          </div>
          <div class="row">
            <div class="col mt-4">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-12 mt-4">
              <input type="text" class="form-control" name="phone" placeholder="Phone" required>
            </div>
            <div class="col-md-6 col-12 mt-4">
               <select class="form-control" name="level" required>
                <option>--Level Kemitraan--</option>
                <?php  foreach($level as $level): ?>
                <option value="<?= $level->id ?>"><?= $level->level ?></option>
                <?php  endforeach; ?>
               </select>
            </div>
          </div>
          <div class="row mt-4">
             <div class="col">          
               <select class="form-control js-example-responsive" name="kota" style="width: 100%">
                <option>--Pilih Kota/Kabupaten--</option>
                <!-- <option>--Kota/Kabupaten--</option> -->
                 <?php  foreach($wilayah as $kota): ?>
                 <option value="<?= $kota->id ; ?>"><?= $kota->name ?></option>
              <?php  endforeach; ?>
               </select>
            </div>
          </div>
          <p class="mt-4">Akun Social Media Aktif</p>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="facebook" placeholder="Username Facebook" name="fb" required>
            </div>
          </div>
          <div class="row">
            <div class="col mt-2">
              <input type="text" class="form-control" name="instagram" placeholder="Username Instagram" name="ig" required>
            </div>
          </div>
          <div class="row">
            <div class="col mt-2">
              <input type="text" class="form-control" name="telegram" placeholder="Username atau Nomor Telegram" name=ig required>
            </div>
          </div>
          <p class="mt-4">Akun Marketplace Aktif (Optional)</p>
          <div class="row">
            <div class="col mt-2">
              <input type="text" class="form-control" name="shopee" placeholder="Nama Toko Shopee" name="sp">
            </div>
          </div>
          <div class="row">
            <div class="col mt-2">
              <input type="text" class="form-control" name="tokopedia" placeholder="Nama Toko Tokopedia" name="tp">
            </div>
          </div>          
        </div>
        <div class="modal-footer">
          <div class="row">
            <div class="col pull-right">
              <input type="submit" name="submit" value="Daftar" class="btn btn-primary">
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
    </div>
  </div>
  <!-- /Modal -->
  <!-- JavaScript Libraries -->
  <script src="<?= base_url('assets/lib/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/jquery/jquery-migrate.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/easing/easing.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/mobile-nav/mobile-nav.js') ?>"></script>
  <script src="<?= base_url('assets/lib/wow/wow.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/waypoints/waypoints.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/counterup/counterup.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/isotope/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/lightbox/js/lightbox.min.js') ?>"></script>
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url('assets/contactform/contactform.js') ?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script type="text/javascript">
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $(".js-example-responsive").select2({
          dropdownParent: $("#staticBackdrop .modal-content"),
          placeholder: "Pilih Kota Asalmu",
        });
    });
  </script>
</body>
</html>