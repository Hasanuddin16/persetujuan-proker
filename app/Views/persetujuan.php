<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Persetujuan Program Kerja</h1>
    <!-- Approach -->
    <?php foreach ($dataPengajuan as $dp) : ?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?= $dp['judul']; ?></h6>
            </div>

            <div class="card-body">

                <p class="mb-0"><?= $dp['dasar']; ?></p>
                <br>Waktu Pelaksanaan : <?= $dp['tgl_kegiatan']; ?>
                <br>Lokasi : <?= $dp['tempat']; ?>
                <br>Status : <?= $dp['status']; ?>
                <br>
                <br>

                <a href="<?= base_url('persetujuan/' . $dp['id_pengajuan'] . '/preview') ?>" class="btn btn-info btn-circle">
                    <i class="fas fa-info-circle">View</i>

                    <a href="<?= base_url('persetujuan/' . $dp['id_pengajuan'] . '/edit') ?>" class="btn btn-success btn-circle">
                        <i class="fas fa-check">Edit</i>
                    </a>

                    <a href="<?= base_url('persetujuan/' . $dp['id_pengajuan'] . '/delete') ?>" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                    </a>
            </div>

        </div>
    <?php endforeach; ?>



</div>



<?= $this->endsection(); ?>