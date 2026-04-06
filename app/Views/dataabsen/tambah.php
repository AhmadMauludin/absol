<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Absen</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-icons.css') ?>">
</head>

<body class="bg-light">

    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm border-0">

                    <div class="card-header bg-primary text-white fw-bold">
                        <i class="bi bi-calendar-plus"></i> Tambah Data Absen
                    </div>

                    <div class="card-body">

                        <form method="post" action="<?= site_url('/dataabsen/simpan') ?>">

                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Waktu</label>
                                <select name="waktu" class="form-select" required>
                                    <option value="shubuh">Shubuh</option>
                                    <option value="dhuhur">Dhuhur</option>
                                    <option value="ashar">Ashar</option>
                                    <option value="maghrib">Maghrib</option>
                                    <option value="isya">Isya</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" placeholder="Masukkan keterangan">
                            </div>

                            <div class="d-flex justify-content-between">

                                <a href="<?= site_url('/') ?>" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>

                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Simpan
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>