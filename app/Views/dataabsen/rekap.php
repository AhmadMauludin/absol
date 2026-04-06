<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

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

function singkatStatus($status)
{
    if ($status == 'hadir') return 'H';
    if ($status == 'sakit') return 'S';
    if ($status == 'ijin') return 'I';
    if ($status == 'alfa') return 'A';
    return '-';
}
?>

<!-- Filter -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">

        <div class="row g-3 align-items-center">

            <div class="col-md-4">
                <button class="btn btn-outline-dark w-100">
                    <b>Rekap Absen <?= $tanggal ?> (<?= $hariIndonesia[date('l', strtotime($tanggal))] ?>)</b>
                </button>
            </div>

            <div class="col-md-2">
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

            <div class="col-md-2">
                <select id="filterAsrama" class="form-select">
                    <option value="">Semua Asrama</option>
                    <option value="Abu Bakar">Abu Bakar</option>
                    <option value="Umar">Umar</option>
                    <option value="Utsman">Utsman</option>
                </select>
            </div>
            <div class="col-md-2">
                <select id="filterStatus" class="form-select">
                    <option value="">Semua Status</option>
                    <option value="alfa">Hanya Alfa</option>
                </select>
            </div>
            <div class="col-md-2">
                <button onclick="printVisible()" class="btn btn-success w-100">
                    <i class="bi bi-printer"></i> Print
                </button>
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
                        <th>I</th>
                        <th>S</th>
                        <th>A</th>
                    </tr>
                </thead>

                <tbody>

                    <?php $no = 1;
                    foreach ($rekap as $r): ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td align="left"><?= $r['nama'] ?></td>
                            <td><?= $r['kelas'] ?></td>
                            <td><?= $r['asrama'] ?></td>

                            <td class="shubuh"><?= singkatStatus($r['shubuh']) ?></td>
                            <td class="dhuhur"><?= singkatStatus($r['dhuhur']) ?></td>
                            <td class="ashar"><?= singkatStatus($r['ashar']) ?></td>
                            <td class="maghrib"><?= singkatStatus($r['maghrib']) ?></td>
                            <td class="isya"><?= singkatStatus($r['isya']) ?></td>
                            <td class="lainnya"><?= singkatStatus($r['lainnya']) ?></td>

                            <td class="jumlah-hadir"><?= $r['jumlah_hadir'] ?></td>
                            <td class="jumlah-ijin"><?= $r['jumlah_ijin'] ?></td>
                            <td class="jumlah-sakit"><?= $r['jumlah_sakit'] ?></td>
                            <td class="jumlah-alfa"><?= $r['jumlah_alfa'] ?></td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>

                <tfoot class="table-light fw-bold">
                    <tr>
                        <td colspan="4">Jumlah</td>

                        <td id="totalShubuh"></td>
                        <td id="totalDhuhur"></td>
                        <td id="totalAshar"></td>
                        <td id="totalMaghrib"></td>
                        <td id="totalIsya"></td>
                        <td id="totalLainnya"></td>

                        <td id="totalH">0</td>
                        <td id="totalI">0</td>
                        <td id="totalS">0</td>
                        <td id="totalA">0</td>
                    </tr>
                </tfoot>

            </table>

        </div>

    </div>
</div>

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
    document.getElementById("filterStatus").addEventListener("change", filterData);

    function countStatus(val, obj) {
        if (val == "H") obj.H++;
        if (val == "I") obj.I++;
        if (val == "S") obj.S++;
        if (val == "A") obj.A++;
    }

    function filterData() {

        var kelas = document.getElementById("filterKelas").value.toLowerCase();
        var asrama = document.getElementById("filterAsrama").value.toLowerCase();
        var status = document.getElementById("filterStatus").value.toLowerCase();

        var rows = document.querySelectorAll("#tabelRekap tbody tr");

        let totalH = 0,
            totalI = 0,
            totalS = 0,
            totalA = 0;

        let shubuh = {
            H: 0,
            I: 0,
            S: 0,
            A: 0
        };
        let dhuhur = {
            H: 0,
            I: 0,
            S: 0,
            A: 0
        };
        let ashar = {
            H: 0,
            I: 0,
            S: 0,
            A: 0
        };
        let maghrib = {
            H: 0,
            I: 0,
            S: 0,
            A: 0
        };
        let isya = {
            H: 0,
            I: 0,
            S: 0,
            A: 0
        };
        let lainnya = {
            H: 0,
            I: 0,
            S: 0,
            A: 0
        };

        rows.forEach(function(row) {

            var tdKelas = row.cells[2].innerText.toLowerCase();
            var tdAsrama = row.cells[3].innerText.toLowerCase();
            var jumlahAlfa = parseInt(row.querySelector(".jumlah-alfa").innerText);

            var cocokKelas = kelas === "" || tdKelas === kelas;
            var cocokAsrama = asrama === "" || tdAsrama === asrama;
            var cocokStatus = status === "" || (status === "alfa" && jumlahAlfa > 0);

            if (cocokKelas && cocokAsrama && cocokStatus) {

                row.style.display = "";

                totalH += parseInt(row.querySelector(".jumlah-hadir").innerText);
                totalI += parseInt(row.querySelector(".jumlah-ijin").innerText);
                totalS += parseInt(row.querySelector(".jumlah-sakit").innerText);
                totalA += parseInt(row.querySelector(".jumlah-alfa").innerText);

                countStatus(row.querySelector(".shubuh").innerText.trim(), shubuh);
                countStatus(row.querySelector(".dhuhur").innerText.trim(), dhuhur);
                countStatus(row.querySelector(".ashar").innerText.trim(), ashar);
                countStatus(row.querySelector(".maghrib").innerText.trim(), maghrib);
                countStatus(row.querySelector(".isya").innerText.trim(), isya);
                countStatus(row.querySelector(".lainnya").innerText.trim(), lainnya);

            } else {
                row.style.display = "none";
            }

        });

        // TOTAL STATUS UMUM
        document.getElementById("totalH").innerText = totalH;
        document.getElementById("totalI").innerText = totalI;
        document.getElementById("totalS").innerText = totalS;
        document.getElementById("totalA").innerText = totalA;

        // TOTAL PER WAKTU SHOLAT
        document.getElementById("totalShubuh").innerHTML =
            "H:" + shubuh.H + " I:" + shubuh.I + " S:" + shubuh.S + " A:" + shubuh.A;

        document.getElementById("totalDhuhur").innerHTML =
            "H:" + dhuhur.H + " I:" + dhuhur.I + " S:" + dhuhur.S + " A:" + dhuhur.A;

        document.getElementById("totalAshar").innerHTML =
            "H:" + ashar.H + " I:" + ashar.I + " S:" + ashar.S + " A:" + ashar.A;

        document.getElementById("totalMaghrib").innerHTML =
            "H:" + maghrib.H + " I:" + maghrib.I + " S:" + maghrib.S + " A:" + maghrib.A;

        document.getElementById("totalIsya").innerHTML =
            "H:" + isya.H + " I:" + isya.I + " S:" + isya.S + " A:" + isya.A;

        document.getElementById("totalLainnya").innerHTML =
            "H:" + lainnya.H + " I:" + lainnya.I + " S:" + lainnya.S + " A:" + lainnya.A;
    }

    function printVisible() {
        window.print();
    }
</script>

<?= $this->endSection() ?>