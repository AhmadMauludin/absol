<?php

namespace App\Controllers;

use App\Models\AbsenModel;

class Absen extends BaseController
{
    public function tambah($id_dataabsen)
    {
        $db = \Config\Database::connect();

        $dataabsen = $db->table('tb_dataabsen')
            ->where('id_dataabsen', $id_dataabsen)
            ->get()
            ->getRowArray();

        return view('absen/tambah', [
            'id_dataabsen' => $id_dataabsen,
            'dataabsen' => $dataabsen
        ]);
    }

    public function simpan()
    {
        $absen = new AbsenModel();

        $id = $this->request->getPost('id_dataabsen');
        $qrcodes = explode("\n", trim($this->request->getPost('qrcode')));

        foreach ($qrcodes as $qr) {
            $qr = trim($qr);

            $absen->where('id_dataabsen', $id)
                ->where('qrcode', $qr)
                ->set([
                    'status' => 'hadir'
                ])
                ->update();
        }

        return redirect()->to('/dataabsen/detail/' . $id);
    }

    public function delete($id_absen, $id_dataabsen)
    {
        $absen = new AbsenModel();
        $absen->delete($id_absen);

        return redirect()->to('/dataabsen/detail/' . $id_dataabsen);
    }

    public function gantiStatus($id_absen, $id_dataabsen)
    {
        $absen = new \App\Models\AbsenModel();

        $data = $absen->find($id_absen);

        if ($data['status'] == 'alfa') {
            $status = 'hadir';
        } elseif ($data['status'] == 'hadir') {
            $status = 'ijin';
        } elseif ($data['status'] == 'ijin') {
            $status = 'sakit';
        } else {
            $status = 'alfa';
        }

        $absen->update($id_absen, [
            'status' => $status
        ]);

        return redirect()->to('/dataabsen/detail/' . $id_dataabsen);
    }
}
