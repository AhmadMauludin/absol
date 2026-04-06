<?php

namespace App\Controllers;

use App\Models\SantriModel;

class Santri extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_santri');

        $keyword = $this->request->getGet('keyword');
        $kelas   = $this->request->getGet('kelas');
        $asrama  = $this->request->getGet('asrama');
        $kamar   = $this->request->getGet('kamar');
        $sort    = $this->request->getGet('sort');

        if ($keyword) {
            $builder->like('nama', $keyword);
        }

        if ($kelas) {
            $builder->where('kelas', $kelas);
        }

        if ($asrama) {
            $builder->where('asrama', $asrama);
        }

        if ($kamar) {
            $builder->where('kamar', $kamar);
        }

        if ($sort) {
            $builder->orderBy($sort, 'ASC');
        } else {
            $builder->orderBy('nama', 'ASC');
        }

        $data['santri'] = $builder->get()->getResultArray();

        $data['kelasList'] = $db->table('tb_santri')->select('kelas')->groupBy('kelas')->get()->getResultArray();
        $data['asramaList'] = $db->table('tb_santri')->select('asrama')->groupBy('asrama')->get()->getResultArray();
        $data['kamarList'] = $db->table('tb_santri')->select('kamar')->groupBy('kamar')->get()->getResultArray();

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
    COUNT(*) as total,

    SUM(CASE WHEN a.status='hadir' THEN 1 ELSE 0 END) as hadir,
    SUM(CASE WHEN a.status='ijin' THEN 1 ELSE 0 END) as ijin,
    SUM(CASE WHEN a.status='sakit' THEN 1 ELSE 0 END) as sakit,
    SUM(CASE WHEN a.status='alfa' THEN 1 ELSE 0 END) as alfa

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
