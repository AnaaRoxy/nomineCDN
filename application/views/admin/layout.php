<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/admin/') ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/admin/') ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/admin/') ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('assets/admin/') ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="<?= base_url('assets/admin/') ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url('assets/admin/') ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('assets/admin/') ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?= base_url('assets/admin/') ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/admin/') ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/admin/') ?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/admin/') ?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/admin/') ?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/admin/') ?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url('dashboard/') ?>" class="site_title"><i class="fa fa-dashboard"></i> <span>Nomine.id</span></a>
            </div>

            <div class="clearfix"></div>

            <?php $this->load->view('admin/_partials/info-sidebar') ?>

            <br />

           <?php $this->load->view('admin/_partials/sidebar') ?>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url('assets/img/user.jpg') ?>" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?= base_url('admin/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?php if($content != null): $this->load->view($content); endif; ?>
        </div>
        <!-- /page content -->

        <?php $this->load->view('admin/_partials/footer') ?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/admin/') ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/admin/') ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/admin/') ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url('assets/admin/') ?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url('assets/admin/') ?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= base_url('assets/admin/') ?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('assets/admin/') ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url('assets/admin/') ?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= base_url('assets/admin/') ?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= base_url('assets/admin/') ?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url('assets/admin/') ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url('assets/admin/') ?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('assets/admin/') ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

    <!-- Datatables -->
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/admin/') ?>build/js/custom.min.js"></script>
    
  </body>
</html>
