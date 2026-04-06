<?php

namespace App\Controllers;

use App\Models\DataAbsenModel;
use App\Models\SantriModel;
use App\Models\AbsenModel;

class DataAbsen extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $tanggal = $this->request->getGet('tanggal') ?? date('Y-m-d');

        $sql = "
        SELECT 
            d.id_dataabsen,
            d.tanggal,
            d.waktu,

            SUM(CASE WHEN a.status='hadir' THEN 1 ELSE 0 END) as hadir,
            SUM(CASE WHEN a.status='sakit' THEN 1 ELSE 0 END) as sakit,
            SUM(CASE WHEN a.status='ijin' THEN 1 ELSE 0 END) as ijin,
            SUM(CASE WHEN a.status='alfa' THEN 1 ELSE 0 END) as alfa

        FROM tb_dataabsen d
        LEFT JOIN tb_absen a ON d.id_dataabsen = a.id_dataabsen

        WHERE d.tanggal = '$tanggal'

        GROUP BY d.tanggal, d.waktu

        ORDER BY FIELD(d.waktu,'shubuh','dhuhur','ashar','maghrib','isya','lainnya')
    ";

        $data['rekapTanggal'] = $db->query($sql)->getResultArray();
        $data['tanggalDipilih'] = $tanggal;

        return view('dataabsen/index', $data);
    }

    public function tambah()
    {
        return view('dataabsen/tambah');
    }

    public function simpan()
    {
        $dataAbsen = new DataAbsenModel();
        $santri = new SantriModel();
        $absen = new AbsenModel();

        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu' => $this->request->getPost('waktu'),
            'keterangan' => $this->request->getPost('keterangan')
        ];

        $dataAbsen->insert($data);
        $id = $dataAbsen->insertID();

        $semuaSantri = $santri->findAll();

        foreach ($semuaSantri as $s) {
            $absen->insert([
                'id_dataabsen' => $id,
                'qrcode' => $s['qrcode'],
                'status' => 'alfa'
            ]);
        }

        return redirect()->to('/dataabsen');
    }

    public function detail($id)
    {
        $db = \Config\Database::connect();

        $data['absen'] = $db->table('tb_absen')
            ->join('tb_santri', 'tb_santri.qrcode=tb_absen.qrcode')
            ->where('id_dataabsen', $id)
            ->orderBy(
                'tb_santri.nama',
                'ASC'
            )
            ->get()->getResultArray();

        $data['id_dataabsen'] = $id;

        return view('dataabsen/detail', $data);
    }

    public function delete($id)
    {
        $model = new DataAbsenModel();
        $model->delete($id);

        return redirect()->to('/dataabsen');
    }

    public function rekap($tanggal)
    {
        $db = \Config\Database::connect();

        $sql = "
        SELECT 
            s.nama,
            s.kelas,
            s.asrama,
            s.qrcode,

            MAX(CASE WHEN d.waktu='shubuh' THEN a.status END) as shubuh,
            MAX(CASE WHEN d.waktu='dhuhur' THEN a.status END) as dhuhur,
            MAX(CASE WHEN d.waktu='ashar' THEN a.status END) as ashar,
            MAX(CASE WHEN d.waktu='maghrib' THEN a.status END) as maghrib,
            MAX(CASE WHEN d.waktu='isya' THEN a.status END) as isya,
            MAX(CASE WHEN d.waktu='lainnya' THEN a.status END) as lainnya,

            SUM(CASE WHEN a.status='hadir' THEN 1 ELSE 0 END) as jumlah_hadir,
            SUM(CASE WHEN a.status='alfa' THEN 1 ELSE 0 END) as jumlah_alfa,
            SUM(CASE WHEN a.status='ijin' THEN 1 ELSE 0 END) as jumlah_ijin,
            SUM(CASE WHEN a.status='sakit' THEN 1 ELSE 0 END) as jumlah_sakit

        FROM tb_santri s

        LEFT JOIN tb_absen a ON s.qrcode = a.qrcode
        LEFT JOIN tb_dataabsen d ON a.id_dataabsen = d.id_dataabsen

        WHERE d.tanggal = '$tanggal'

        GROUP BY s.qrcode
        ORDER BY s.nama ASC
    ";

        $data['rekap'] = $db->query($sql)->getResultArray();
        $data['tanggal'] = $tanggal;

        return view('dataabsen/rekap', $data);
    }
}
