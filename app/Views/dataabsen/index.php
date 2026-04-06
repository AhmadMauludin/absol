<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">

        <form method="get" action="<?= site_url('dataabsen') ?>" class="row g-2 align-items-center">

            <div class="col-auto">
                <label class="fw-bold">Pilih Tanggal:</label>
            </div>

            <div class="col-auto">
                <input type="date" name="tanggal" class="form-control"
                    value="<?= $tanggalDipilih ?>">
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-search"></i> Tampilkan
                </button>
            </div>

            <div class="col-auto">

                <a href="<?= site_url('dataabsen/tambah') ?>" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Tambah Absen
                </a>
            </div>
        </form>

    </div>
</div>

<?php
date_default_timezone_set('Asia/Jakarta');

$hariIndonesia = [
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu'
];

$bulanIndonesia = [
    1 => 'Januari',
    2 => 'Februari',
    3 => 'Maret',
    4 => 'April',
    5 => 'Mei',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'Agustus',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember'
];

$tanggalAktif = '';
?>

<?php foreach ($rekapTanggal as $r): ?>

    <?php if ($tanggalAktif != $r['tanggal']): ?>

        <?php
        $tanggalAktif = $r['tanggal'];

        $hari = $hariIndonesia[date('l', strtotime($tanggalAktif))];
        $tgl = date('j', strtotime($tanggalAktif));
        $bulan = $bulanIndonesia[(int)date('n', strtotime($tanggalAktif))];
        $tahun = date('Y', strtotime($tanggalAktif));
        ?>

        <div class="card shadow-sm border-0 mb-3">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

                <div class="fw-bold">
                    <i class="bi bi-calendar-event"></i>
                    <?= $hari ?>, <?= $tgl ?> <?= $bulan ?> <?= $tahun ?>
                </div>

                <a href="<?= site_url('/dataabsen/rekap/' . $r['tanggal']) ?>" class="btn btn-sm btn-light">
                    <i class="bi bi-bar-chart"></i> Rekap
                </a>

            </div>

            <div class="card-body">

            <?php endif; ?>

            <div class="d-flex justify-content-between align-items-center border-bottom py-2">

                <div>
                    <strong class="text-dark"><?= ucfirst($r['waktu']) ?></strong>
                </div>

                <div>
                    <span class="badge bg-success">Hadir <?= $r['hadir'] ?></span>
                    <span class="badge bg-info">Sakit <?= $r['sakit'] ?></span>
                    <span class="badge bg-warning text-dark">Ijin <?= $r['ijin'] ?></span>
                    <span class="badge bg-danger">Alfa <?= $r['alfa'] ?></span>
                </div>

                <div>
                    <a href="<?= site_url('/dataabsen/detail/' . $r['id_dataabsen']) ?>" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-eye"></i> Detail
                    </a>

                    <a href="<?= site_url('/dataabsen/delete/' . $r['id_dataabsen']) ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <i class="bi bi-trash"></i> Delete
                    </a>
                </div>

            </div>

            <?php
            $nextTanggal = next($rekapTanggal)['tanggal'] ?? null;
            prev($rekapTanggal);

            if ($tanggalAktif != $nextTanggal):
            ?>

            </div>
        </div>

    <?php endif; ?>

<?php endforeach; ?>

</div>

<?= $this->endSection() ?>