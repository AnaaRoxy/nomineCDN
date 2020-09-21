<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
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
	<!-- Main Stylesheet File -->
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>

	<?php $this->load->view('_partials/header') ?>

	<main id="main">
		<section id="ketentuan">
			<div class="container">
				<div class="col-12 justify-content-center mb-5">
					<h1 class="text-center"><?= $header ?></h1>
				</div>
				<div class="row">
				  <div class="col-4">
				    <div class="list-group" id="list-tab" role="tablist">
				      <a class="list-group-item list-group-item-action left-link" href="<?= base_url() ?>">Beranda</a>
				      <a class="list-group-item list-group-item-action left-link <?php if($active == 'syarat-dan-ketentuan'): echo 'active';  endif;?>" href="<?= base_url('kebijakan/ketentuan/syarat-dan-ketentuan') ?>">Syarat & Ketentuan</a>
				      <a class="list-group-item list-group-item-action left-link <?php if($active == 'ketentuan-privasi'): echo 'active';  endif;?>" href="<?= base_url('kebijakan/ketentuan/ketentuan-privasi') ?>">Ketentuan Privasi</a>
				    </div>
				  </div>
				  <div class="col-8">
				    <div class="tab-content" id="nav-tabContent">
				      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
				      	<?php if ($active == 'syarat-dan-ketentuan'): ?>
				      		<p class="isi-ketentuan">
				      			<strong>Biaya Pengiriman</strong><br/>
				      			Biaya pengiriman tergantung pada lokasi Mitra dan berat produk yang dibeli.<br/><br/>
				      			<strong>Lama Waktu Pengiriman</strong><br/>
				      			Pengiriman pesanan akan dilakukan dari kantor pusat kami di Jakarta. Pengiriman Reguler membutuhkan waktu 2–3 hari kerja. Untuk pengiriman cargo lama pengiriman tergantung daerah pengiriman kurang lebih minimal 2 hari maximal 14 hari<br/>
				      			<br/>
				      			<strong>Customer Service</strong><br/>
				      			Nomine melayani semua pertanyaan tidak hanya seputar produk, Mitra boleh bertanya mengenai hal apapun seputar penjualan, display toko online, strategi marketing sampai hal teknis yang berkaitan dengan pengembangan akun penjualan milik para Mitra Nomine<br/><br/>
				      			<strong>Pengembalian Barang</strong><br/>
				      			Para Mitra terdaftar dapat menggunakan fasilitas retur apabila ukuran barang yang diterima tidak sesuai dengan ukuran yang dipesan atau terdapat cacat. Pengembalian hanya dapat dilakukan dalam jangka waktu 2×24 jam sejak barang diterima via jasa pengiriman barang. Full garansi pengembalian adalah pada saat produk yang diterima cacat, sehingga biaya ekspedisi akan ditanggung penuh oleh Nomine pusat
				      		</p>
				      	<?php elseif($active == 'ketentuan-privasi'): ?>
				      		<p class="isi-ketentuan">
				      			<strong>Aturan Penggunaan</strong><br/>
				      			Selamat datang di website Nomine.id. Dengan mengakses website ini berarti telah menyetujui aturan, pedoman, kebijakan, syarat dan ketentuan yang berlaku di website ini dan ketentuan yang berlaku pada website ini dapat berubah sewaktu-waktu.
				      			<br/><br/>
				      			<strong>Pembatasan</strong><br/>
				      			Merek dagang, logo, fotografi, gambar, semuanya milik Nomine.id. Anda tidak diperkenankan menyalin, memodifikasi, memperbanyak, menjual atau mengeksploitasi dengan cara apapun isi dari situs ini atau perangkat lunak terkait tanpa seizin kami. Perubahan pada tampilan foto dan atribut lainnya menjadi otoritas sepenuhnya manajemen Nomine.id 
				      			<br/><br/>
				      			<strong>Kebijakan Privasi</strong><br/>
				      			Terima kasih telah mengakses website Nomine.id. Dengan menjaga kenyamanan dan privasi pengguna, kami melindungi informasi pribadi anda sebaik-baiknya. Ketika anda mendaftar sebagai Mitra Nomine, kami menyimpan nama, jenis kelamin, tanggal lahir, alamat pengiriman, nomor telepon, dan alamat email dalam server kami yang telah di enkripsi dengan aman. Kami mengamankan informasi pribadi Anda dengan baik. Informasi data anda hanya akan kami gunakan untuk memberikan informasi seputar informasi, produk dan program
				      			<br/><br/>
				      			<strong>Pertanyaan Lebih Lanjut</strong><br>
				      			Untuk pertanyaan lebih lanjut, saran, dan kritik silakan hubungi kami melalui email di nomine.id.cs@gmail.com atau hubungi direct admin melalui pesan whatsapp 0852 1930 0418 atau 0812 9390 4358

				      		</p>
				      	<?php endif; ?>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</section>
	</main>

	<?php $this->load->view('_partials/footer') ?>

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
</body>
</html>