<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

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

$hari = $hariIndonesia[date('l', strtotime($dataabsen['tanggal']))];
?>

<div class="row justify-content-center">
    <div class="col-md-7">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-primary text-white fw-bold">
                <i class="bi bi-qr-code-scan"></i> Input Hasil Scan QRCode
            </div>

            <div class="card-body">

                <div class="alert alert-light border mb-4">

                    <div class="row">

                        <div class="col-md-4">
                            <strong>ID Absen</strong><br>
                            <?= $id_dataabsen ?>
                        </div>

                        <div class="col-md-4">
                            <strong>Hari / Tanggal</strong><br>
                            <?= $hari ?>, <?= date('d F Y', strtotime($dataabsen['tanggal'])) ?>
                        </div>

                        <div class="col-md-4">
                            <strong>Waktu</strong><br>
                            <?= ucfirst($dataabsen['waktu']) ?>
                        </div>

                    </div>

                </div>

                <form method="post" action="<?= site_url('/absen/simpan') ?>">

                    <input type="hidden" name="id_dataabsen" value="<?= $id_dataabsen ?>">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Masukkan QRCode (1 baris = 1 santri)
                        </label>

                        <textarea
                            name="qrcode"
                            rows="5"
                            class="form-control"
                            placeholder="Contoh:
12345-Ahmad
12347-Hasan"
                            required></textarea>


                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="<?= site_url('/dataabsen/detail/' . $id_dataabsen) ?>" class="btn btn-secondary">
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

<?= $this->endSection() ?>