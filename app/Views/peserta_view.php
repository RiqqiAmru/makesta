<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Peserta</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($semua as $s) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $s['nama'] ?></td>
              <td><?= $s['tempat_lahir'] ?></td>
              <td><?= $s['alamat'] ?></td>
              <td>Update | Hapus</td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<?= $this->endSection(); ?>