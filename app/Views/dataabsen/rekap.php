<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Rekap Absensi</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-icons.css') ?>">
</head>

<body class="bg-light">

    <div class="container py-4">

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
        ?>

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">

            <a href="<?= site_url('/') ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>

            <h4 class="fw-bold text-primary mb-0">
                <i class="bi bi-calendar-check"></i>
                Rekap Absen <?= $tanggal ?> (<?= $hariIndonesia[date('l', strtotime($tanggal))] ?>)
            </h4>

            <button onclick="window.print()" class="btn btn-success">
                <i class="bi bi-printer"></i> Print
            </button>

        </div>

        <!-- Filter -->
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">

                <div class="row g-3">

                    <div class="col-md-3">
                        <select id="filterKelas" class="form-select">
                            <option value="">Semua Kelas</option>
                            <option value="1">Kelas 1</option>
                            <option value="2">Kelas 2</option>
                            <option value="3">Kelas 3</option>
                            <option value="4">Kelas 4</option>
                            <option value="5">Kelas 5</option>
                            <option value="6">Kelas 6</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <select id="filterAsrama" class="form-select">
                            <option value="">Semua Asrama</option>
                            <option value="Abu Bakar">Abu Bakar</option>
                            <option value="Umar">Umar</option>
                            <option value="Utsman">Utsman</option>
                        </select>
                    </div>

                </div>

            </div>
        </div>

        <!-- Tabel -->
        <div class="card shadow-sm border-0">
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover align-middle text-center" id="tabelRekap">

                        <thead class="table-primary">
                            <tr>
                                <th onclick="sortTable(0)">No</th>
                                <th onclick="sortTable(1)">Nama</th>
                                <th onclick="sortTable(2)">Kelas</th>
                                <th onclick="sortTable(3)">Asrama</th>
                                <th>Shubuh</th>
                                <th>Dhuhur</th>
                                <th>Ashar</th>
                                <th>Maghrib</th>
                                <th>Isya</th>
                                <th>Lainnya</th>
                                <th>H</th>
                                <th>A</th>
                                <th>I</th>
                                <th>S</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $no = 1;

                            $totalShubuhH = 0;
                            $totalShubuhTH = 0;
                            $totalDhuhurH = 0;
                            $totalDhuhurTH = 0;
                            $totalAsharH = 0;
                            $totalAsharTH = 0;
                            $totalMaghribH = 0;
                            $totalMaghribTH = 0;
                            $totalIsyaH = 0;
                            $totalIsyaTH = 0;
                            $totalLainnyaH = 0;
                            $totalLainnyaTH = 0;

                            foreach ($rekap as $r):
                            ?>

                                <?php
                                ($r['shubuh'] == 'hadir') ? $totalShubuhH++ : $totalShubuhTH++;
                                ($r['dhuhur'] == 'hadir') ? $totalDhuhurH++ : $totalDhuhurTH++;
                                ($r['ashar'] == 'hadir') ? $totalAsharH++ : $totalAsharTH++;
                                ($r['maghrib'] == 'hadir') ? $totalMaghribH++ : $totalMaghribTH++;
                                ($r['isya'] == 'hadir') ? $totalIsyaH++ : $totalIsyaTH++;
                                ($r['lainnya'] == 'hadir') ? $totalLainnyaH++ : $totalLainnyaTH++;
                                ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $r['nama'] ?></td>
                                    <td><?= $r['kelas'] ?></td>
                                    <td><?= $r['asrama'] ?></td>

                                    <td><?= singkatStatus($r['shubuh']) ?></td>
                                    <td><?= singkatStatus($r['dhuhur']) ?></td>
                                    <td><?= singkatStatus($r['ashar']) ?></td>
                                    <td><?= singkatStatus($r['maghrib']) ?></td>
                                    <td><?= singkatStatus($r['isya']) ?></td>
                                    <td><?= singkatStatus($r['lainnya']) ?></td>

                                    <td><span class="badge bg-success"><?= $r['jumlah_hadir'] ?></span></td>
                                    <td><span class="badge bg-danger"><?= $r['jumlah_alfa'] ?></span></td>
                                    <td><span class="badge bg-warning text-dark"><?= $r['jumlah_ijin'] ?></span></td>
                                    <td><span class="badge bg-info"><?= $r['jumlah_sakit'] ?></span></td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                        <tfoot class="table-light fw-bold">
                            <tr>
                                <td colspan="4">Jumlah</td>
                                <td>H: <?= $totalShubuhH ?><br>TH: <?= $totalShubuhTH ?></td>
                                <td>H: <?= $totalDhuhurH ?><br>TH: <?= $totalDhuhurTH ?></td>
                                <td>H: <?= $totalAsharH ?><br>TH: <?= $totalAsharTH ?></td>
                                <td>H: <?= $totalMaghribH ?><br>TH: <?= $totalMaghribTH ?></td>
                                <td>H: <?= $totalIsyaH ?><br>TH: <?= $totalIsyaTH ?></td>
                                <td>H: <?= $totalLainnyaH ?><br>TH: <?= $totalLainnyaTH ?></td>
                                <td colspan="4"></td>
                            </tr>
                        </tfoot>

                    </table>

                </div>

            </div>
        </div>

    </div>

    <?php
    function singkatStatus($status)
    {
        if ($status == 'hadir') return 'H';
        if ($status == 'sakit') return 'S';
        if ($status == 'ijin') return 'I';
        if ($status == 'alfa') return 'A';
        return '-';
    }
    ?>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>

    <script>
        function sortTable(n) {
            var table = document.getElementById("tabelRekap");
            var rows = table.rows;
            var switching = true;
            var dir = "asc";

            while (switching) {
                switching = false;

                for (var i = 1; i < rows.length - 2; i++) {
                    var shouldSwitch = false;

                    var x = rows[i].getElementsByTagName("TD")[n];
                    var y = rows[i + 1].getElementsByTagName("TD")[n];

                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }

                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                } else {
                    if (dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }

        document.getElementById("filterKelas").addEventListener("change", filterData);
        document.getElementById("filterAsrama").addEventListener("change", filterData);

        function filterData() {
            var kelas = document.getElementById("filterKelas").value.toLowerCase();
            var asrama = document.getElementById("filterAsrama").value.toLowerCase();

            var rows = document.querySelectorAll("#tabelRekap tbody tr");

            rows.forEach(function(row) {
                var tdKelas = row.cells[2].innerText.toLowerCase();
                var tdAsrama = row.cells[3].innerText.toLowerCase();

                var cocokKelas = kelas === "" || tdKelas === kelas;
                var cocokAsrama = asrama === "" || tdAsrama === asrama;

                row.style.display = (cocokKelas && cocokAsrama) ? "" : "none";
            });
        }
    </script>

</body>

</html>