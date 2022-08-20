<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <h1>Pengajuan Program Kerja</h1>

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
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Pengajuan</h6>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Judul Kegiatan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Tema Kegiatan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Dasar Kegiatan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Tujuan Kegiatan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Waktu Pelaksanaan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Tempat Pelaksanaan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Peserta Kegiatan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Susunan Acara</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Estimasi Dana</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Penutup</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>




          </div>

          <!-- </div> -->
        </div>
        <div class="my-2"></div>
        <a href="#" class="btn btn-success btn-block">
          <span class="icon text-white-50">
            <!-- <i class="fas fa-check"></i> -->
          </span>
          <span class="text">Submit</span>
        </a>
      </div>




    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->


</div>
<?= $this->endsection(); ?>