<?php

namespace App\Controllers;

use App\Models\SantriModel;

class Santri extends BaseController
{
    public function index()
    {
        $model = new SantriModel();
        $data['santri'] = $model->findAll();

        return view('santri/index', $data);
    }

    public function tambah()
    {
        return view('santri/tambah');
    }

    public function simpan()
    {
        $model = new SantriModel();

        $foto = $this->request->getFile('foto');
        $namaFoto = $foto->getRandomName();
        $foto->move('uploads', $namaFoto);

        $model->save([
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('nama'),
            'qrcode' => $this->request->getPost('nis') . '_' . $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
            'asrama' => $this->request->getPost('asrama'),
            'kamar' => $this->request->getPost('kamar'),
            'foto' => $namaFoto
        ]);

        return redirect()->to('/santri');
    }

    public function detail($nis)
    {
        $db = \Config\Database::connect();

        $santri = $db->table('tb_santri')->where('nis', $nis)->get()->getRowArray();

        $persen = $db->query("
SELECT 
COUNT(*) total,
SUM(a.status='hadir') hadir

FROM tb_absen a
JOIN tb_santri s ON a.qrcode = s.qrcode

WHERE s.nis='$nis'
")->getRowArray();

        $histori = $db->query("
SELECT 
d.tanggal,

MAX(CASE WHEN d.waktu='shubuh' THEN a.status END) shubuh,
MAX(CASE WHEN d.waktu='dhuhur' THEN a.status END) dhuhur,
MAX(CASE WHEN d.waktu='ashar' THEN a.status END) ashar,
MAX(CASE WHEN d.waktu='maghrib' THEN a.status END) maghrib,
MAX(CASE WHEN d.waktu='isya' THEN a.status END) isya,
MAX(CASE WHEN d.waktu='lainnya' THEN a.status END) lainnya

FROM tb_absen a

JOIN tb_dataabsen d ON a.id_dataabsen = d.id_dataabsen
JOIN tb_santri s ON a.qrcode = s.qrcode

WHERE s.nis='$nis'

GROUP BY d.tanggal
ORDER BY d.tanggal DESC
")->getResultArray();

        $data = [
            'santri' => $santri,
            'persen' => $persen,
            'histori' => $histori
        ];

        return view('santri/detail', $data);
    }
}
