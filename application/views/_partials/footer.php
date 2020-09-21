<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3 class="brand">Nomine</h3>
            <p>Nomine adalah Brand fashion yang mempunyai design unik yang menggunakan material dan aksesoris berkualitas dengan harga yang sangat terjangkau.</p>
          </div>

          <?php if($this->uri->segment(2) != 'ketentuan'): ?>
          <div class="footer-links col-lg-2 col-md-6">
            <h4>Link</h4>
            <nav class="nav-bottom">
              <ul>
                <li class="active"><a href="#intro">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#contact">Hubungi Kami</a></li>
                <li><a href="<?= base_url('kebijakan/ketentuan/syarat-dan-ketentuan') ?>">Syarat & Ketentuan</a></li>
                <li><a href="<?= base_url('kebijakan/ketentuan/ketentuan-privasi') ?>">Ketentuan Privasi</a></li>
              </ul>
            </nav>
          </div>
        <?php endif; ?>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              Jl. Kalibata Selatan II <br>
              Kota Jakarta Selatan<br>
              <strong>Email:</strong> nomine.id.cs@gmail.com<br>
            </p>

            <div class="social-links">
              <a target="_blank" href="https://www.nomine.id"><i class="fa fa-globe"></i></a>
              <a target="_blank" href="http://bit.ly/nominefacebook" class="facebook"><i class="fa fa-facebook"></i></a>
              <a target="_blank" href="http://bit.ly/IGnomine" class="instagram"><i class="fa fa-instagram"></i></a>
              <a target="_blank" href="http://bit.ly/Ctlgnomine" class="instagram"><i class="fa fa-instagram"></i></a>
              <a target="_blank" href="http://bit.ly/shopeenomine" class="google-plus"><i class="fa fa-shopping-bag"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-jamkerja">
            <h4>Jam Kerja</h4>
            <p>Senin - Sabtu : 08.00 - 18.00<br>
            Libur Nasional : TUTUP</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Nomine</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->