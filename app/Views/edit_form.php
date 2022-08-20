<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <h1>Formulir Program Kerja</h1>

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <!-- <h1 class="h3 mb-0 text-gray-800">Pengajuan Program Kerja</h1> -->
    </div>


    <!-- Content Row -->

    <div class="row">


    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Content Column -->
      <div class="col-lg-6 mb-4">


      </div>



      <!-- Approach -->
      <div class="col-xl-12 col-lg-7">
        <form method="POST" action="">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Pengajuan</h6>
            </div>
            <div class="card-body">
              <div class="form-group">
                <!-- <form action="" method="post" id="text-editor"> -->
                <input type="hidden" name="id_pengajuan" value="<?= $dp['id_pengajuan'] ?>" />
                <label for="tema">Judul Kegiatan</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $dp['judul'] ?>">
              </div>
              <div class="form-group">
                <label for="tema">Tema Kegiatan</label>
                <input type="text" class="form-control" id="tema" name="tema" value="<?= $dp['tema'] ?>">
              </div>
              <div class="form-group">
                <label for="dasar">Dasar</label>
                <textarea class="form-control" id="dasar" name="dasar" rows="3"><?= $dp['dasar'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Detail Kegiatan</label>
                <textarea class="form-control" id="dasar" rows="3"><?= $dp['dasar']; ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Tujuan Kegiatan</label>
                <textarea class="form-control" id="tujuan" name="tujuan"rows="3"><?= $dp['tujuan']; ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Waktu Pelaksanaan</label>
                <input type="text" class="form-control" name="tgl_kegiatan" id="tgl_kegiatan" value="<?= $dp['tgl_kegiatan']; ?>">
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Tempat Pelaksanaan</label>
                <input type="text" class="form-control" id="tempat" name="tempat" value="<?= $dp['tempat']; ?>">
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Susunan Acara</label>
                <textarea class="form-control" id="susunan" name="susunan" rows="3"><?= $dp['susunan']; ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Estimasi Dana</label>
                <input type="text" class="form-control" id="estimasi_dana" name="estimasi_dana" value="<?= $dp['estimasi_dana']; ?>">
              </div>
              <input type="hidden" name="status" value="<?= $dp['status'] ?>" />





            </div>

            <!-- </div> -->
          </div>

      </div>
      <?php if ($title == 'Edit') : ?>
        <button class="btn btn-success btn-block" type="submit">Submit</button>

      <?php endif ?>

      </form>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->


</div>
<?= $this->endsection(); ?>