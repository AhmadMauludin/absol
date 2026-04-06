<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/icons/font/bootstrap-icons.css') ?>">

<div class="container mt-4">
    <div class="container mt-4">

        <div class="mb-3 d-flex gap-2">

            <a href="<?= site_url('/santri') ?>" class="btn btn-secondary rounded-pill">
                <i class="bi bi-arrow-left-circle"></i> Data Santri
            </a>

            <a href="<?= site_url('/') ?>" class="btn btn-primary rounded-pill">
                <i class="bi bi-house-door-fill"></i> Halaman Awal
            </a>

        </div>

        <div class="card shadow-sm border-0 rounded-4 mb-4">


            <div class="card shadow-sm border-0 rounded-4 mb-4">

                <div class="card-header bg-primary text-white rounded-top-4">
                    <h4 class="mb-0">
                        <i class="bi bi-person-badge-fill"></i> Detail Santri
                    </h4>
                </div>

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col-md-3 text-center">
                            <img src="<?= base_url('uploads/' . $santri['foto']) ?>"
                                class="img-fluid rounded-4 shadow-sm"
                                style="max-width:180px;">
                        </div>

                        <div class="col-md-9">

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

            </div>

            <?php
            $persentase = 0;
            if ($persen['total'] > 0) {
                $persentase = round(($persen['hadir'] / $persen['total']) * 100);
            }
            ?>

            <div class="card shadow-sm border-0 rounded-4 mb-4">

                <div class="card-body">

                    <h5>
                        <i class="bi bi-bar-chart-fill"></i> Persentase Kehadiran Sholat
                    </h5>

                    <div class="progress" style="height:25px;">
                        <div class="progress-bar bg-success"
                            style="width: <?= $persentase ?>%">
                            <?= $persentase ?>%
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

        </div>