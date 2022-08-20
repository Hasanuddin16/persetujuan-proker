image.png<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <h1>Pengajuan Program Kerja</h1>

  <div class="col-xl-12 col-lg-7">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Pengajuan</h6>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Judul Kegiatan</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Masukkan Anggota Panitia</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Nama 1</option>
              <option>Nama 2</option>
              <option>Nama 3</option>
              <option>Nama 4</option>
              <option>Nama 5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Daftar Anggota Panitia yang Telah Dipilih</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
              <option>Nama 1</option>
              <option>Nama 2</option>
              <option>Nama 3</option>
              <option>Nama 4</option>
              <option>Nama 5</option>
            </select>
          </div>

      </div>

      <!-- </div> -->
    </div>
    <div class="my-2"></div>
    <a href="isipengajuan" class="btn btn-success btn-icon-split float-right">
      <span class="icon text-white-50">
        <!-- <i class="fas fa-check"></i> -->
      </span>
      <span class="text">Next</span>
    </a>
  </div>

</div>
<?= $this->endsection(); ?>