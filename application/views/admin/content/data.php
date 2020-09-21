<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Data Table<small>Pendaftar Mitra</small></h2>
      <?php if($this->uri->segment(3) != 'print'): ?>
      <div class="pull-right"><a href="<?= base_url('dashboard/pendaftar/print') ?>" class="btn btn-success"><i class="fa fa-file-o"></i> Print</a></div>
      <?php endif; ?>
      <div class="clearfix"></div>      
    </div>
    <div class="x_content">

      <table id="<?php if($this->uri->segment(3) != 'print'){ echo 'datatable-responsive'; }else{ echo 'datatable-buttons';} ?>" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Tanggal Daftar</th>
            <th>Nama</th>
            <th>Level Kemitraan</th>
            <th>Kota/Kabupaten</th>
            <th>Email</th>
            <th>No. Handphone</th>
            <th>Akun Faceboook</th>
            <th>Akun Instagram</th>
            <th>Akun Telegram</th>
            <th>Akun Shopee</th>
            <th>Akun Tokopedia</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($data as $regist): ?>
          <tr>
            <td><?= date('d/m/Y', strtotime($regist->created_at)) ?></td>
            <td><?= $regist->nama_mitra ?></td>
            <td><?= $regist->level ?></td>
            <td><?= $regist->name ?></td>
            <td><?= $regist->email ?></td>
            <td><a target="_blank" href="//wa.me/<?= $regist->no_hp ?>"><?= $regist->no_hp ?></a></td>
            <td><?= $regist->facebook ?></td>
            <td><?= $regist->instagram ?></td>
            <td><?= $regist->telegram ?></td>
            <td><?php if($regist->shopee != null): echo $regist->shopee; else: echo'-'; endif; ?></td>
            <td><?php if($regist->tokopedia != null): echo $regist->tokopedia; else: echo'-'; endif; ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>


    </div>
  </div>
</div>