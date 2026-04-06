<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Filter -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">

        <div class="row g-3 align-items-center">

            <div class="col-md-3">
                <input type="text" id="filterNama" class="form-control" placeholder="Cari Nama">
            </div>

            <div class="col-md-3">
                <select id="filterAsrama" class="form-select">
                    <option value="">Semua Asrama</option>
                    <option value="Abu Bakar">Abu Bakar</option>
                    <option value="Umar">Umar</option>
                    <option value="Utsman">Utsman</option>
                </select>
            </div>

            <div class="col-md-3">
                <select id="filterStatus" class="form-select">
                    <option value="">Semua Status</option>
                    <option value="hadir">Hadir</option>
                    <option value="ijin">Ijin</option>
                    <option value="sakit">Sakit</option>
                    <option value="alfa">Alfa</option>
                </select>
            </div>
            <div class="col-md-3 text-end">
                <a href="<?= site_url('/absen/tambah/') . $id_dataabsen ?>" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Upload Hasil Scan QRCode
                </a>
            </div>
        </div>

    </div>
</div>

<!-- Tabel -->
<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle" id="tabelAbsen">

                <thead class="table-primary">
                    <tr>
                        <th>Nama</th>
                        <th>Asrama</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($absen as $a): ?>

                        <tr>
                            <td><?= $a['nama'] ?></td>
                            <td><?= $a['asrama'] ?></td>

                            <td>
                                <a href="<?= site_url('/absen/gantiStatus/' . $a['id_absen'] . '/' . $id_dataabsen) ?>" class="text-decoration-none">

                                    <?php if ($a['status'] == 'hadir'): ?>
                                        <span class="badge bg-success">Hadir</span>

                                    <?php elseif ($a['status'] == 'ijin'): ?>
                                        <span class="badge bg-warning text-dark">Ijin</span>

                                    <?php elseif ($a['status'] == 'sakit'): ?>
                                        <span class="badge bg-info">Sakit</span>

                                    <?php else: ?>
                                        <span class="badge bg-danger">Alfa</span>

                                    <?php endif; ?>

                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>
</div>

<script>
    document.getElementById("filterNama").addEventListener("keyup", filterData);
    document.getElementById("filterAsrama").addEventListener("change", filterData);
    document.getElementById("filterStatus").addEventListener("change", filterData);

    function filterData() {
        let nama = document.getElementById("filterNama").value.toLowerCase();
        let asrama = document.getElementById("filterAsrama").value.toLowerCase();
        let status = document.getElementById("filterStatus").value.toLowerCase();

        let rows = document.querySelectorAll("#tabelAbsen tbody tr");

        rows.forEach((row) => {
            let tdNama = row.cells[0].innerText.toLowerCase();
            let tdAsrama = row.cells[1].innerText.toLowerCase();
            let tdStatus = row.cells[2].innerText.toLowerCase();

            let cocokNama = tdNama.includes(nama);
            let cocokAsrama = asrama === "" || tdAsrama === asrama;
            let cocokStatus = status === "" || tdStatus.includes(status);

            if (cocokNama && cocokAsrama && cocokStatus) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }
</script>

<?= $this->endSection() ?>