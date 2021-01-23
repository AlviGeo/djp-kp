<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MPengajuan;

class Pengajuan extends Controller
{

	public function __construct()
	{
		//Mendeklarasikan class PengajuanModel menggunakan $this->Pengajuan
		$this->pengajuan = new MPengajuan();
		//$this->detail_pengajuan = new MPengajuan();


		/* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Pengajuan 
        */
	}

	//read
	public function index()
	{
		$model = new MPengajuan();

		$data['full_name'] = 'Mangapul';
		$data['avatar'] = base_url() . '/assets/dist/img/avatar.png';
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Pengajuan';

		$data['pengajuan'] = $model->getPengajuan()->getResult();
		$data['jenis_permohonan'] = $model->get_jenisPermohonan()->getResult();
		$data['jenis_pajak'] = $model->get_jenisPajak()->getResult();
		//data['pengajuan'] = $this->pengajuan->getPengajuan();
		// $data['detail_pengajuan'] = $model->getDetailPengajuan()->getResult();
		//$data['jenis_pajak'] = $model->get_jenisPajak($jenis_permohonan);

		//print_r($data);
		return view('pengajuan/pengajuan', $data);
	}


	public function detail_pengajuan($id)
	{

		$data['full_name'] = 'Mangapul';
		$data['avatar'] = base_url() . '/assets/dist/img/avatar.png';
		$data['icon'] = 'ion ion-ios-toggle';
		$data['title'] = 'Detail Pengajuan';

		$data['detail_pengajuan'] = $this->pengajuan->getPengajuan($id);
		$data['jenis_kp'] = $this->pengajuan->get_jenisketetapanpajak()->getResult();
		$data['mketetapanpajak'] = $this->pengajuan->get_KetetapanPajak($id);
		$data['mpermohonanwp'] = $this->pengajuan->get_PermohonanWP($id);
		$data['mpengantarkpp'] = $this->pengajuan->get_PengantarKPP($id);
		$data['msurattugas'] = $this->pengajuan->get_SuratTugas($id);
		$data['mpencabutanpermohonan'] = $this->pengajuan->get_PencabutanWP($id);
		$data['mpermintaansuratkpp'] = $this->pengajuan->get_PermintaanSuratKPP($id);
		$data['mpembuktianwp'] = $this->pengajuan->get_PembuktianWP($id);
		$data['mspuhba'] = $this->pengajuan->get_SPUHBA($id);
		$data['mlaporanpenelitian'] = $this->pengajuan->get_LaporanPenelitian($id);
		$data['mKeputusan'] = $this->pengajuan->get_Keputusan($id);

		

		//print_r($data);
		return view('pengajuan/detail_pengajuan', $data);
	}

	// ambil id aja
	public function jenis_pajak()
	{
		$id_jenispermohonan = service('request')->getPost('id');
		$data = $this->pengajuan->get_jenisPajak($id_jenispermohonan);
		echo json_encode($data);
	}

	public function savePengajuan()
	{
		$dateTglTerima = $this->request->getPost('dateTglTerima');
		$v_alert3 = $this->request->getPost('alert3');
		$v_alert2 = $this->request->getPost('alert2');
		$v_alert1 = $this->request->getPost('alert1');

		$vTglTerima = date("Y-m-d", strtotime($dateTglTerima));
		$vAlert3 = date('Y-m-d', strtotime($vTglTerima . '+' . $v_alert3 . 'month'));
		$vAlert2 = date('Y-m-d', strtotime($vTglTerima . '+' . $v_alert2 . 'month'));
		$vAlert1 = date('Y-m-d', strtotime($vTglTerima . '+' . $v_alert1 . 'month'));

		// Function save
		$data = [
			'ajuanNamaWP' 			=> 	$this->request->getPost('nama_wp'),
			'ajuanNPWP'				=>	$this->request->getPost('npwp'),
			'ajuanNOP'				=>	$this->request->getPost('nop'),
			'ajuanKodeKPP'			=>	$this->request->getPost('kode_kpp'),
			// ini maksudnya ap
			'ajuanJenisPemohonId'	=>  $this->request->getPost('id_jenispemohon'),
			'ajuanJenisPemohon'		=>  $this->request->getPost('jenis_pemohon'),
			'ajuanJnsPajakId'		=>  $this->request->getPost('id_jenispajak'),
			'ajuanJenisPajak'		=>	$this->request->getPost('jenis_pajak'),
			'ajuanPIC'				=>	$this->request->getPost('ajuanPIC'),
			'ajuanMasaPajak'		=>	$this->request->getPost('masa_pajak'),
			'ajuanTahunPajak'		=>	$this->request->getPost('tahun_pajak'),
			'ajuanDasarPemrosesan'	=>	$this->request->getPost('dasar_pemrosesan'),
			'ajuanMataUang'			=>	$this->request->getPost('mata_uang'),
			'ajuanTglTerima'		=>	$vTglTerima,
			'ajuanAlert3'			=>	$vAlert3,
			'ajuanAlert2'			=>	$vAlert2,
			'ajuanAlert1'			=>	$vAlert1,
			'ajuanStatusAkhir'		=>	"Open",
		];
		//print_r($data);
		//die();
		$this->pengajuan->savePengajuan($data);
		session()->setFlashData('success', 'Data Pemohon Berhasil di entri');
		return redirect()->to(base_url() . '/pengajuan');
	}

	// Join 
	public function saveKetetapanPajak()
	{
		$id = $this->request->getPost('ajuanID');
		$tgl_kp = $this->request->getPost('tgl_kp');
		$tgl_kp = date("Y-m-d", strtotime($tgl_kp));
		$data = [
			'KPajuanId'				=> $this->request->getPost('ajuanID'),
			'KPJKid'				=> $this->request->getPost('jenis_kp'),
			'KPNoKetetapan'			=> $this->request->getPost('no_kp'),
			'KPTgl'					=> $tgl_kp,
			'KPNilai'				=> $this->request->getPost('nilai_kp'),
		];

		//print_r($data);
		//die();
		$this->pengajuan->saveKetetapanPajak($data);
		session()->setFlashData('success', 'Ketetapan Pajak berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
	}

	public function savePermohonanWP()
	{
		$id = $this->request->getPost('ajuanID');
		$tgl_suratWP = $this->request->getPost('tgl_suratwp');
		$tgl_suratWP = date("Y-m-d", strtotime($tgl_suratWP));
		
		$tglLPAD = $this->request->getPost('tgl_lpad');
		$tglLPAD = date("Y-m-d", strtotime($tglLPAD));

		$data = [
			'PWPajuanId'				=> $this->request->getPost('ajuanID'),
			'PWPnoSurat'				=> $this->request->getPost('no_suratwp'),
			'PWPtglSurat'				=> $tgl_suratWP,
			'PWPnoLPAD'					=> $this->request->getPost('no_lpad'),
			'PWPtglLPAD'				=> $tglLPAD,
		];

		// print_r($data);
		// die();
		$this->pengajuan->savePermohonanWP($data);
		session()->setFlashData('success', 'Permohonan WP berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
	}

	public function savePengantarKPP()
	{
		$id = $this->request->getPost('ajuanID');
		$tgl_suratKPP = $this->request->getPost('tgl_suratkpp');
		$tgl_suratKPP = date("Y-m-d", strtotime($tgl_suratKPP));
		$tglTerimaKanwil = $this->request->getPost('tgl_terima_kanwil');
		$tglTerimaKanwil = date("Y-m-d", strtotime($tglTerimaKanwil));

		$data = [
			'PKPPajuanId'				=> $this->request->getPost('ajuanID'),
			'PKPPnoSurat '				=> $this->request->getPost('no_suratkpp'),
			'PKPPtglSurat'				=> $tgl_suratKPP,
			'PKPPtglDiterima'			=> $tglTerimaKanwil,
		];

		// print_r($data);
		// die();
		$this->pengajuan->savePengantarKPP($data);
		session()->setFlashData('success', 'Pengantar KPP berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
	}


	public function saveSuratTugas()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_SuratTugas = $this->request->getPost('tgl_surattugas');
		$Tgl_SuratTugas = date("Y-m-d", strtotime($Tgl_SuratTugas));

		$data = [
			'STajuanId'				=> $this->request->getPost('ajuanID'),
			'STnoSurat'				=> $this->request->getPost('no_surattugas'),
			'STtglSurat'			=> $Tgl_SuratTugas,

		];

		// print_r($data);
		// die();
		$this->pengajuan->saveSuratTugas($data);
		session()->setFlashData('success', 'Surat Tugas berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
	}

	public function savePencabutanPermohonan()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_Pencabutan = $this->request->getPost('tgl_pencabutan');
		$Tgl_Pencabutan = date("Y-m-d", strtotime($Tgl_Pencabutan));

		$data = [
			'QuitWPajuanID'			=> $this->request->getPost('ajuanID'),
			'QuitWPnoSurat'			=> $this->request->getPost('no_pencabutan'),
			'QuitWPtglSurat'		=> $Tgl_Pencabutan,

		];

		// print_r($data);
		// die();
		$this->pengajuan->savePencabutanPermohonan($data);
		session()->setFlashData('success', 'Pencabutan Permohonan berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
	}

	public function savePermintaanSuratKPP()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_KPP = $this->request->getPost('tgl_kpp');
		$Tgl_KPP = date("Y-m-d", strtotime($Tgl_KPP));

		$data = [
			'PSKPPajuanId'			=> $this->request->getPost('ajuanID'),
			'PSKPPNoSurat'			=> $this->request->getPost('no_suratkpp'),
			'PSKPPtglSurat'			=> $Tgl_KPP,

		];

		// print_r($data);
		// die();
		$this->pengajuan->savePermintaanSuratKPP($data);
		session()->setFlashData('success', 'Permintaan Surat ke KPP berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
	}


	public function savePembuktianWP()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_BuktiSurat = $this->request->getPost('tgl_buktisurat');
		$Tgl_BuktiSurat = date("Y-m-d", strtotime($Tgl_BuktiSurat));
		$Tgl_BeritaAcara = $this->request->getPost('tgl_beritaacara');
		$Tgl_BeritaAcara = date("Y-m-d", strtotime($Tgl_BeritaAcara));

		$data = [
			'SPWPajuanId'			=> $this->request->getPost('ajuanID'),
			'SPWPnoSurat'			=> $this->request->getPost('no_suratpembuktian'),
			'SPWPtglSurat '			=> $Tgl_BuktiSurat,
			'SPWPtujuan'			=> $this->request->getPost('bukti_tujuan'),
			'SPWPisDatang'			=> $this->request->getPost('isDatang'),
			'SPWPnoBeritaAcara'		=> $this->request->getPost('no_beritaacara'),
			'SPWPtglBeritaAcara'	=> $Tgl_BeritaAcara,

		];

		// print_r($data);
		// die();
		$this->pengajuan->savePembuktianWP($data);
		session()->setFlashData('success', 'Surat Pembuktian ke WP berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
	}

	public function saveSPUH()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_SPUH = $this->request->getPost('tgl_spuh');
		$Tgl_SPUH = date("Y-m-d", strtotime($Tgl_SPUH));
		$TglKrmSPUH = $this->request->getPost('tgl_kirim_spuh');
		$TglKrmSPUH = date("Y-m-d", strtotime($TglKrmSPUH));

		$data = [
			'SPUHajuanId'			=> $this->request->getPost('ajuanID'),
			'SPUHnoSurat'			=> $this->request->getPost('no_spuh'),
			'SUPtglSurat'			=> $Tgl_SPUH,
			'SPUHstatusKirim'		=> 'Terkirim',
			'SPUHtglKirim'			=> $TglKrmSPUH,
		];

		// print_r($data);
		// die();
		$this->pengajuan->saveSPUH($data);
		session()->setFlashData('success', 'SPUH berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
	}

	public function saveLaporanPenelitian()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_Laporan = $this->request->getPost('tgl_laporan');
		$Tgl_Laporan = date("Y-m-d", strtotime($Tgl_Laporan));

		$data = [
			'LPajuanId'				=> $this->request->getPost('ajuanID'),
			'LPnoLaporan'			=> $this->request->getPost('no_laporan'),
			'LPtglLaporan'			=> $Tgl_Laporan,

		];

		// print_r($data);
		// die();
		$this->pengajuan->saveLaporanPenelitian($data);
		session()->setFlashData('success', 'Laporan Penelitian berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
	}


	public function saveKeputusan()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_Keputusan = $this->request->getPost('tgl_keputusan');
		$Tgl_Keputusan = date("Y-m-d", strtotime($Tgl_Keputusan));
		$Tgl_KirimSK = $this->request->getPost('tgl_kirimSK');
		$Tgl_KirimSK = date("Y-m-d", strtotime($Tgl_KirimSK));

		$data = [
			'KEPajuanId'				=> $this->request->getPost('ajuanID'),
			'KEPnoKeputusan'			=> $this->request->getPost('no_keputusan'),
			'KEPtglKeputusan'			=> $Tgl_Keputusan,
			'KEPtglKirimSK'				=> $Tgl_KirimSK,
			'KEPjangkaKirim'			=> $this->request->getPost('waktu_pengiriman'),
			'KEPAmarKeputusan'			=> $this->request->getPost('amar_keputusan'),
			'KEPNilaiAkhirKeputusan'	=> $this->request->getPost('nilai_akhir'),
		];

		// print_r($data);
		// die();
		$this->pengajuan->saveKeputusan($data);
		session()->setFlashData('success', 'Keputusan berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
	}

	//closing dilakukan jika dilakukan pencabutan ATAU keputusan sudah di entri
	public function closePengajuan()
	{

		$id = $this->request->uri->getSegment(3);
		$vPencabutan = $this->pengajuan->checkPencabutan($id);
		$vKeputusan = $this->pengajuan->checkKeputusan($id);

		if (($vPencabutan == 0) && ($vKeputusan == 0)) {
			session()->setFlashData('warning', 'Closing gagal ! Silahkan melakukan Pencabutan atau Keputusan !');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
		} else {

			$data['ajuanStatusAkhir'] = 'TEPAT WAKTU';

			// print_r($data);
			// die();

			$this->pengajuan->closePengajuan($data, $id);
			session()->setFlashData('success', 'Closing berhasil');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/' . $id));
		}
		// die();		
		// $this->pengajuan->closepengajuan($data);
		// session()->setFlashData('success','Closing berhasil');
		// return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
	}

	public function update()
	{
		// Function update
	}

	public function delete()
	{
		// function delete
	}
}
