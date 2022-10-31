<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Peserta</span>
          <span class="info-box-number">(nanti diisi jumlah peserta)</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
</div>

<?= $this->endSection(); ?>