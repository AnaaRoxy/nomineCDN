<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li <?php if ($active == 'index'):?> class="active" <?php endif ?>><a href="<?= base_url('dashboard/') ?>"><i class="fa fa-home"></i> Home</span></a></li>
      <li <?php if ($active == 'pendaftar'):?> class="active" <?php endif ?>><a href="<?= base_url('dashboard/pendaftar') ?>"><i class="fa fa-users"></i> Data Pendaftar</a></li>
    </ul>
  </div>

</div>
<!-- /sidebar menu -->