<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Absen QR</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-icons.css') ?>">
</head>

<body class="bg-light">

    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-sm border-0">

                    <div class="card-header bg-primary text-white fw-bold">
                        <i class="bi bi-qr-code-scan"></i> Input Absensi QRCode
                    </div>

                    <div class="card-body">

                        <form method="post" action="<?= site_url('/absen/simpan') ?>">

                            <input type="hidden" name="id_dataabsen" value="<?= $id_dataabsen ?>">

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Masukkan QRCode (1 baris = 1 santri)
                                </label>

                                <textarea
                                    name="qrcode"
                                    rows="10"
                                    class="form-control"
                                    placeholder="Contoh:
12345_Ahmad
12346_Ali
12347_Hasan"
                                    required></textarea>

                                <div class="form-text">
                                    Tempel hasil scan QR satu per satu dalam baris terpisah.
                                </div>
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