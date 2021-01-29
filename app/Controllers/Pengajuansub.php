<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MPengajuansub;

class Pengajuansub extends Controller
{

    public function __construct()
    {

        $this->pengajuansub = new MPengajuansub();
    }

    //read
    public function index()
    {
        $model = new MPengajuansub();

        $data['full_name'] = 'Mangapul';
        $data['avatar'] = base_url() . '/assets/dist/img/avatar.png';
        $data['icon'] = 'ion ion-home';
        $data['title'] = 'Pengajuan';

        $data['pengajuansub'] = $model->getPengajuansub()->getResult();
        // $data['mketetapanpajaksub'] = $this->pengajuansub->get_jenisketetapanpajaksub()->getResult();
        $data['substg'] = $model->get_substg()->getResult();
        $data['jenispajak'] = $model->get_jenisPajak()->getResult();

        // $data['detail_pengajuan'] = $model->getDetailPengajuan()->getResult();
        //$data['jenis_permohonan'] = $model->get_jenisPermohonan()->getResult();
        //$data['jenis_pajak'] = $model->get_jenisPajak($jenis_permohonan);

        //print_r($data);
        return view('pengajuansub/pengajuansub', $data);
    }

    public function detail_pengajuansub($id)
    {

        $data['full_name'] = 'Mangapul';
        $data['avatar'] = base_url() . '/assets/dist/img/avatar.png';
        $data['icon'] = 'ion ion-ios-toggle';
        $data['title'] = 'Detail Pengajuan Sub';

        $data['detail_pengajuansub'] = $this->pengajuansub->getPengajuansub($id);
        $data['jenis_kpsub'] = $this->pengajuansub->get_jenisketetapansub()->getResult();
        $data['jenis_gugatan'] = $this->pengajuansub->get_jenisgugatan()->getResult();
        $data['mobjekdigugat'] = $this->pengajuansub->get_ObjekDigugat($id);
        $data['mketetapanpajaksub'] = $this->pengajuansub->get_KetetapanPajakSub($id);
        $data['jenis_tujuanrespon'] = $this->pengajuansub->get_jenistujuanrespon()->getResult();
        $data['mresponkanwil'] = $this->pengajuansub->get_ResponKanwil($id);

        // $data['mjenispajak'] = $this->pengajuan->get_jenisPajak($id);

        return view('pengajuansub/detail_pengajuansub', $data);
    }


    public function savePengajuanSub()
    {
        $tgl_suratsub = $this->request->getPost('tgl_suratsub');
        $tgl_suratsub = date("Y-m-d", strtotime($tgl_suratsub));

        $tgl_terimakanwil = $this->request->getPost('tgl_terimakanwil');
        $tgl_terimakanwil = date("Y-m-d", strtotime($tgl_terimakanwil));

        $alert1 = $this->request->getPost('vAlert1');

        if ($alert1 == 3) {
            $vAlert1 = $alert1;
            $vAlert2 = 6;

            $vAlert1 = date('Y-m-d', strtotime($tgl_terimakanwil . '+' . $vAlert1 . 'month'));
            $vAlert2 = date('Y-m-d', strtotime($tgl_terimakanwil . '+' . $vAlert2 . 'weeks'));
        }
        if ($alert1 == 1) {
            $vAlert1 = $alert1;
            $vAlert2 = 2;

            $vAlert1 = date('Y-m-d', strtotime($tgl_terimakanwil . '+' . $vAlert1 . 'month'));
            $vAlert2 = date('Y-m-d', strtotime($tgl_terimakanwil . '+' . $vAlert2 . 'weeks'));
        }


        $tgl_suratbanding = $this->request->getPost('tgl_suratbanding');
        $tgl_suratbanding = date("Y-m-d", strtotime($tgl_suratbanding));

        $tgl_terimapp = $this->request->getPost('tgl_terimapp');
        $tgl_terimapp = date("Y-m-d", strtotime($tgl_terimapp));

        // $vTglTerima =date("Y-m-d", strtotime($dateTglTerima));
        // $vAlert3 = date('Y-m-d', strtotime($vTglTerima .'+'. $v_alert3.'month'));
        // $vAlert2 = date('Y-m-d', strtotime($vTglTerima .'+'. $v_alert2.'month'));
        // $vAlert1 = date('Y-m-d', strtotime($vTglTerima .'+'. $v_alert1.'month'));

        // Function save
        $data = [
            'ajuanSUBnoSuratPermintaan'    =>    $this->request->getPost('no_suratsub'),
            'ajuanSUBtglSuratPermintaan' => $tgl_suratsub,
            'ajuanSUBalert1'            =>     $vAlert1,
            'ajuanSUBalert2'            =>     $vAlert2,

            'ajuanSUBjenisPermintaanId' => $this->request->getPost('id_sub-stg'),
            'ajuanSUBjenisPermintaan'    =>  $this->request->getPost('sub-stg'),
            'ajuanSUBtglDiterima'        =>  $tgl_terimakanwil,
            'ajuanSUBNomorSengketa'        =>  $this->request->getPost('no_suratsengketa'),
            'ajuanSUBnoSuratBanding'    =>  $this->request->getPost('no_suratbanding'),
            'ajuanSUBtglSuratBanding'    =>  $tgl_suratbanding,
            'ajuanSUBtglDiterimaPP'        =>  $tgl_terimapp,

            'ajuanSUBnamaWP'             =>     $this->request->getPost('nama_wp'),
            'ajuanSUBNPWP'                =>    $this->request->getPost('npwp'),
            'ajuanSUBNOP'                =>    $this->request->getPost('nop'),
            'ajuanSUBkodeKPP'            =>    $this->request->getPost('kode_kpp'),
            'ajuanSUBjenisPajakId'      => $this->request->getPost('id_jenispajak'),
            'ajuanSUBjenisPajak'        =>    $this->request->getPost('jenispajak'),
            'ajuanSUBmasaPajak'            =>    $this->request->getPost('masa_pajak'),
            'ajuanSUBtahunPajak'        =>    $this->request->getPost('tahun_pajak'),
            'ajuanSUBmataUang'            =>    $this->request->getPost('mata_uang'),
            'ajuanStatusAkhir'            =>    "Open",

        ];
        // print_r($data);
        // die();

        $this->pengajuansub->savePengajuansub($data);
        session()->setFlashData('success', 'Data Pemohon SUB Berhasil di entri');
        return redirect()->to(base_url() . '/pengajuansub');
    }

    public function saveObjekDigugat()
    {
        $id = $this->request->getPost('ajuanSUBID');
        $tgl_objekdigugat = $this->request->getPost('tgl_objekdigugat');
        $tgl_objekdigugat = date("Y-m-d", strtotime($tgl_objekdigugat));

        $data = [
            'OBJGUGATajuanSUBID' => $id,
            'OBJGUGATJenis' => $this->request->getPost('jenis_gugatan'),
            'OBJGUGATnoSurat' => $this->request->getPost('no_objekdigugat'),
            'OBJGUGATtglSurat' => $tgl_objekdigugat,
            'OBJGUGATnilaiPutusan' => $this->request->getPost('nilaiputusan_objekdigugat')
        ];
        print_r($data);
        die();
        $this->pengajuansub->saveObjekDigugat($data);
        session()->setFlashData('success', 'Objek Digugat berhasil di entri');
        return redirect()->to(base_url('pengajuansub/detail_pengajuansub/' . $id));
    }

    public function saveKetetapanPajakSub()
    {
        $id = $this->request->getPost('ajuanSUBID');
        $tgl_kpsub = $this->request->getPost('tgl_kpsub');
        $tgl_kpsub = date("Y-m-d", strtotime($tgl_kpsub));

        $data = [
            'TETAPAJajuanSUBID' => $this->request->getPost('ajuanSUBID'),
            'TETAPAJid' => $this->request->getPost('jenis_kpsub'),
            // 'TETAPAJjenis' => $this->request->getPost('jenis_kp'),
            'TETAPAJnomorKetetapan' => $this->request->getPost('no_kpsub'),
            'TETAPAJtglKetetapan' => $tgl_kpsub,
            'TETAPAJNilaiKetetapan' => $this->request->getPost('nilai_kpsub')
        ];

        $this->pengajuansub->saveKetetapanPajakSub($data);
        session()->setFlashData('success', 'Ketetapan Pajak Sub berhasil di entri');
        return redirect()->to(base_url('pengajuansub/detail_pengajuansub/', $id));
    }

    public function saveResponKanwil()
    {
        $id = $this->request->getPost('ajuanSUBID');
        $tgl_responkanwil = $this->request->getPost('tgl_responkanwil');
        $tgl_responkanwil = date("Y-m-d", strtotime($tgl_responkanwil));

        $data = [
            'RESPajuanSUBID' => $this->request->getPost('ajuanSUBID'),
            'RESPjenisTujuan' => $this->request->getPost('jenis_tujuanrespon'),
            'RESPnoSurat' => $this->request->getPost('no_responkanwil'),
            'RESPtglSurat' => $tgl_responkanwil
        ];

        $this->pengajuansub->saveResponKanwil($data);
        session()->setFlashData('success', 'Respon Kanwil berhasil di entri');
        return redirect()->to(base_url('pengajuansub/detail_pengajuansub/', $id));
    }

    //closing dilakukan jika dilakukan pencabutan ATAU keputusan sudah di entri

    public function closePengajuanSub() {
        $id = $this->request->uri->getSegment(3);
        $vPencabutan = $this->pengajuansub->checkPencabutan($id);
        $vKeputusan = $this->pengajuansub->checkKeputusan($id);

        if(($vPencabutan == 0) && ($vKeputusan == 0 )) {
            session()->setFlashData('warning', 'Closing gagal! Silahkan melakukan Pencabutan atau Keputusan !');
            return redirect()->to(base_url('pengajuansub/detail_pengajuansub/'. $id));
        } else {
            $data['ajuanStatusAkhir'] = 'TEPAT WAKTU';

            $this->pengajuansub->closePengajuanSub($data, $id);
            session()->setFlashData('success', 'Closing berhasil');
			return redirect()->to(base_url('pengajuan/detail_pengajuansub/' . $id));
        }
    }

    public function delete()
    {
        // function delete
    }
}
