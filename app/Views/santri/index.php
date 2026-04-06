<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="card shadow-sm border-0 rounded-4">

    <div class="card-header bg-primary text-white rounded-top-4">
        <h5 class="mb-0">
            <i class="bi bi-people-fill"></i> Data Santri
        </h5>
    </div>

    <div class="card-body">

        <form method="get" class="row g-3 mb-4">

            <div class="col-md-3">
                <input type="text" name="keyword" class="form-control"
                    placeholder="Cari nama santri..."
                    value="<?= $_GET['keyword'] ?? '' ?>">
            </div>

            <div class="col-md-2">
                <select name="kelas" class="form-select">
                    <option value="">Semua Kelas</option>
                    <?php foreach ($kelasList as $k): ?>
                        <option value="<?= $k['kelas'] ?>">
                            <?= $k['kelas'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-2">
                <select name="asrama" class="form-select">
                    <option value="">Semua Asrama</option>
                    <?php foreach ($asramaList as $a): ?>
                        <option value="<?= $a['asrama'] ?>">
                            <?= $a['asrama'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-2">
                <select name="kamar" class="form-select">
                    <option value="">Semua Kamar</option>
                    <?php foreach ($kamarList as $k): ?>
                        <option value="<?= $k['kamar'] ?>">
                            <?= $k['kamar'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-2">
                <select name="sort" class="form-select">
                    <option value="">Urutkan</option>
                    <option value="nama">Nama</option>
                    <option value="kelas">Kelas</option>
                    <option value="asrama">Asrama</option>
                    <option value="kamar">Kamar</option>
                </select>
            </div>

            <div class="col-md-1 d-grid">
                <button class="btn btn-primary">
                    <i class="bi bi-search"></i>
                </button>
            </div>

        </form>

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Asrama</th>
                        <th>Kamar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php $no = 1;
                    foreach ($santri as $s): ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $s['nis'] ?></td>
                            <td><?= $s['nama'] ?></td>
                            <td><?= $s['kelas'] ?></td>
                            <td><?= $s['asrama'] ?></td>
                            <td><?= $s['kamar'] ?></td>

                            <td class="text-center">
                                <a href="<?= site_url('/santri/detail/' . $s['nis']) ?>"
                                    class="btn btn-sm btn-primary">
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

<?= $this->endSection() ?>