<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<?php
$total = $persen['total'] ?? 0;

$hadir = $persen['hadir'] ?? 0;
$ijin  = $persen['ijin'] ?? 0;
$sakit = $persen['sakit'] ?? 0;
$alfa  = $persen['alfa'] ?? 0;

$hadirPersen = $total ? round(($hadir / $total) * 100) : 0;
$ijinPersen  = $total ? round(($ijin / $total) * 100) : 0;
$sakitPersen = $total ? round(($sakit / $total) * 100) : 0;
$alfaPersen  = $total ? round(($alfa / $total) * 100) : 0;
?>

<div class="card shadow-sm border-0 rounded-4 mb-4">

    <div class="card-header bg-primary text-white rounded-top-4">
        <h5 class="mb-0">
            <i class="bi bi-person-badge-fill"></i> Detail Santri
        </h5>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-8">

                <div class="row align-items-center">

                    <div class="col-md-4 text-center">
                        <img src="<?= base_url('uploads/santri/' . ($santri['foto'] ?: 'default.jpg')) ?>" class="img-fluid rounded-4 shadow-sm"
                            style="max-width:180px;">
                    </div>

                    <div class="col-md-8">

                        <table class="table table-borderless">

                            <tr>
                                <th width="150">NIS</th>
                                <td><?= $santri['nis'] ?></td>
                            </tr>

                            <tr>
                                <th>Nama</th>
                                <td><?= $santri['nama'] ?></td>
                            </tr>

                            <tr>
                                <th>Kelas</th>
                                <td>
                                    <span class="badge bg-secondary">
                                        <?= $santri['kelas'] ?>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <th>Asrama</th>
                                <td><?= $santri['asrama'] ?></td>
                            </tr>

                            <tr>
                                <th>Kamar</th>
                                <td><?= $santri['kamar'] ?></td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card bg-light border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body">

                        <h6 class="fw-bold mb-3">
                            <i class="bi bi-bar-chart-fill"></i> Statistik Kehadiran
                        </h6>

                        <p class="mb-2">
                            <span class="badge bg-success">Hadir</span>
                            <?= $hadir ?> (<?= $hadirPersen ?>%)
                        </p>

                        <p class="mb-2">
                            <span class="badge bg-warning text-dark">Ijin</span>
                            <?= $ijin ?> (<?= $ijinPersen ?>%)
                        </p>

                        <p class="mb-2">
                            <span class="badge bg-info text-dark">Sakit</span>
                            <?= $sakit ?> (<?= $sakitPersen ?>%)
                        </p>

                        <p class="mb-2">
                            <span class="badge bg-danger">Alfa</span>
                            <?= $alfa ?> (<?= $alfaPersen ?>%)
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="card shadow-sm border-0 rounded-4">

    <div class="card-header bg-light">
        <h5 class="mb-0">
            <i class="bi bi-calendar-check-fill"></i> Histori Kehadiran
        </h5>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">
                    <tr>
                        <th>Hari, Tanggal</th>
                        <th>Shubuh</th>
                        <th>Dhuhur</th>
                        <th>Ashar</th>
                        <th>Maghrib</th>
                        <th>Isya</th>
                        <th>Lainnya</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $hariIndonesia = [
                        'Sunday' => 'Minggu',
                        'Monday' => 'Senin',
                        'Tuesday' => 'Selasa',
                        'Wednesday' => 'Rabu',
                        'Thursday' => 'Kamis',
                        'Friday' => 'Jumat',
                        'Saturday' => 'Sabtu'
                    ];

                    function badgeStatus($s)
                    {
                        if ($s == 'hadir') return '<span class="badge bg-success">H</span>';
                        if ($s == 'alfa') return '<span class="badge bg-danger">A</span>';
                        if ($s == 'ijin') return '<span class="badge bg-warning text-dark">I</span>';
                        if ($s == 'sakit') return '<span class="badge bg-info text-dark">S</span>';
                        return '<span class="badge bg-secondary">-</span>';
                    }
                    ?>

                    <?php foreach ($histori as $h): ?>

                        <tr>

                            <td>
                                <?= $hariIndonesia[date('l', strtotime($h['tanggal']))] ?>,
                                <?= date('j F Y', strtotime($h['tanggal'])) ?>
                            </td>

                            <td><?= badgeStatus($h['shubuh']) ?></td>
                            <td><?= badgeStatus($h['dhuhur']) ?></td>
                            <td><?= badgeStatus($h['ashar']) ?></td>
                            <td><?= badgeStatus($h['maghrib']) ?></td>
                            <td><?= badgeStatus($h['isya']) ?></td>
                            <td><?= badgeStatus($h['lainnya']) ?></td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?= $this->endSection() ?>