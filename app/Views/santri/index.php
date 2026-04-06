<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/icons/font/bootstrap-icons.css') ?>">

<div class="container mt-4">
    <div class="container mt-4">

        <div class="mb-3 d-flex gap-2">

            <a href="<?= site_url('/') ?>" class="btn btn-primary rounded-pill">
                <i class="bi bi-house-door-fill"></i> Halaman Awal
            </a>

        </div>

        <div class="card shadow-sm border-0 rounded-4 mb-4">
            <div class="card shadow-sm border-0 rounded-4">

                <div class="card-header bg-primary text-white rounded-top-4 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="bi bi-people-fill"></i> Data Santri
                    </h5>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle">

                            <thead class="table-light">
                                <tr>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php foreach ($santri as $s): ?>

                                    <tr>
                                        <td><?= $s['nis'] ?></td>
                                        <td><?= $s['nama'] ?></td>
                                        <td>
                                            <span class="badge bg-secondary">
                                                <?= $s['kelas'] ?>
                                            </span>
                                        </td>

                                        <td class="text-center">
                                            <a href="<?= site_url('/santri/detail/' . $s['nis']) ?>" class="btn btn-sm btn-primary rounded-pill">
                                                <i class="bi bi-eye-fill"></i> Detail
                                            </a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>