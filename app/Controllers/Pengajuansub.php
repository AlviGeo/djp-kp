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
        $data['substg'] = $model->get_substg()->getResult();
        $data['jenispajak'] = $model->get_jenisPajak()->getResult();

        // $data['detail_pengajuan'] = $model->getDetailPengajuan()->getResult();
        //$data['jenis_permohonan'] = $model->get_jenisPermohonan()->getResult();
        //$data['jenis_pajak'] = $model->get_jenisPajak($jenis_permohonan);

        //print_r($data);
        return view('pengajuansub/pengajuansub', $data);
    }


    public function detail_pengajuansub($sub_id)
    {

        $data['full_name'] = 'Mangapul';
        $data['avatar'] = base_url() . '/assets/dist/img/avatar.png';
        $data['icon'] = 'ion ion-ios-toggle';
        $data['title'] = 'Detail Pengajuan Sub';

        $data['detail_pengajuansub'] = $this->pengajuansub->getPengajuansub($sub_id);
        $data['objekdigugat'] = $this->pengajuansub->get_ObjekDigugat($sub_id);
        $data['ketetapanpajaksub'] = $this->pengajuansub->get_KetetapanPajakSub($sub_id);
        $data['responkanwil'] = $this->pengajuansub->get_ResponKanwil($sub_id);

        $data['mjenispajak'] = $this->pengajuan->get_jenisPajak($sub_id);

        return view('pengajuansub/detail_pengajuansub', $data);
    }

    // public function jenis_pajak()
    // {
    // 	$sub_id_jenispermohonan = service('request')->getPost('id');
    // 	$data = $this->pengajuansub->get_jenisPajak($sub_id_jenispermohonan);
    // 	echo json_encode($data);
    // }

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
        $sub_id = $this->request->getPost('ajuanSUBID');
        $tgl_objekgugat = $this->request->getPost('tgl_objekgugat');
        $tgl_objekgugat = date("Y-m-d", strtotime($tgl_objekgugat));

        $data = [
            'OBJGUGATajuanSUBID' => $this->request->getPost('ajuanSUBID'),
            'OBJGUGATJenis' => $this->request->getPost('jenis_objekgugat'),
            'OBJGUGATnoSurat' => $this->request->getPost('no_objekgugat'),
            'OBJGUGATtglSurat' => $tgl_objekgugat,
            'OBJGUGATnilaiPutusan' => $this->request->getPost('nilaiputusan_objekgugat')
        ];

        $this->pengajuansub->saveObjekDigugat($data);
        session()->setFlashData('success', 'Objek Digugat berhasil di entri');
        return redirect()->to(base_url('pengajuansub/detail_pengajuansub/' . $sub_id));
    }

    public function saveKetetapanPajakSub()
    {
        $sub_id = $this->request->getPost('ajuanSUBID');
        
    }

    //closing dilakukan jika dilakukan pencabutan ATAU keputusan sudah di entri


    public function update()
    {
        // Function update
    }

    public function delete()
    {
        // function delete
    }
}
