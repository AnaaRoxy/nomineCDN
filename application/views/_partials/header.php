<!--==========================
Header
============================-->
<header id="header" class="fixed-top">
  <div class="container">

    <div class="logo float-left">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
      <a href="#intro" class="scrollto"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" class="img-fluid"></a>
    </div>

    <?php if($this->uri->segment(2) != 'ketentuan'): ?>

    <nav class="main-nav float-right d-none d-lg-block">
      <ul>
        <li class="active"><a href="#intro">Beranda</a></li>
        <li><a href="#about">Tentang Kami</a></li>
        <li><a href="#services">Layanan</a></li>
        <li class="drop-down"><a href="">Selengkapnya</a>
          <ul>
            <li><a target="_blank" href="https://www.nomine.id">Website</a></li>
            <li><a target="_blank" href="http://bit.ly/nominefacebook">Facebook</a></li>
            <li class="drop-down"><a>Instagram</a>
              <ul>
                <li><a target="_blank" href="http://bit.ly/IGnomine">Instagram Utama</a></li>
                <li><a target="_blank" href="http://bit.ly/Ctlgnomine">Instagram Katalog</a></li>
              </ul>
            </li>
            <li><a target="_blank" href="http://bit.ly/shopeenomine">Shopee</a></li>
          </ul>
        </li>
        <li><a href="#contact">Hubungi Kami</a></li>
      </ul>
    </nav><!-- .main-nav -->
    <?php endif; ?>
  </div>
</header><!-- #header -->