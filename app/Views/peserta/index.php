<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
  <div class="col-8 ">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Peserta</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <form action="/peserta/cari" method="post">
              <div class="input-group-append">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
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

            <?php

            use function PHPUnit\Framework\isEmpty;

            if ($peserta . isEmpty()) :

            else :
              $no = 1;
              foreach ($peserta as $s) :
                $tglLahir = CodeIgniter\I18n\Time::parse($s['tgl_lahir'])->toLocalizedString('dd MMMM yyyy');
            ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= humanize($s['nama']) ?></td>
              <td><?= humanize($s['tempat_lahir']) ?>, <?= $tglLahir ?></td>
              <td><?= humanize($s['alamat']) ?></td>
              <td>
                <a href="/peserta/detail/<?= $s['peserta_id'] ?>" class="badge badge-success"><i
                    class="fa fa-info"></i></a>
                <a href="" class="badge badge-warning"><i class="fa fa-edit"></i></a>
                <a href="" class="badge badge-danger"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php endforeach;
            endif; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<?= $this->endSection(); ?>