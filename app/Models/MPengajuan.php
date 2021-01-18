<?php
namespace App\Models;
use CodeIgniter\Model;

class MPengajuan extends Model
{
	
	protected $table = "pengajuan";

	public function getPengajuan($id = false)
	{
		// $builder = $this->db->table('pengajuan');
  //       return $builder->get();

		if($id === false){
			// $builder =  $this->db->table('pengajuan');
			// return $builder->get();
			return $this->db->table('pengajuan')
                        ->get();			 
		}else{
			return $this->table('pengajuan')
                        ->where('ajuanId', $id)
                        ->get()
                        ->getRowArray();

		}

	}

	public function getDetailPengajuan($id=false)
	{
		$builder = $this->db->table('pengajuan');
		return $builder->get();
	}

	public function get_jenisketetapanpajak()
	{
		$builder = $this->db->table('jenisketetapan');
        return $builder->get();
	}

	public function get_jenisPermohonan()
	{
		$builder = $this->db->table('jenispemohon');
		return $builder->get();
	}

	public function get_jenisPajak($id=false)
	{
		return $this->db->table('jenispajak')
                        ->where('idJenisPemohon', $id)
                        ->get()
                        ->getResultArray();
	}

	public function savePengajuan($data)
	{
		$query = $this->db->table('pengajuan')->insert($data);
		return $query;
	}

	//Save after Manage
	public function saveKetetapanPajak($data)
	{
		$query = $this->db->table('ketetapanpajak')->insert($data);
		return $query;
	}

	//Save after Manage
	public function savePermohonanWP($data)
	{
		$query = $this->db->table('permohonanwp')->insert($data);
		return $query;
	}

	//Save after Manage
	public function savePengantarKPP($data)
	{
		$query = $this->db->table('pengantarkpp')->insert($data);
		return $query;
	}

	//Save after Manage
	public function saveSuratTugas($data)
	{
		$query = $this->db->table('surattugas')->insert($data);
		return $query;
	}

	//Save after Manage
	public function savePencabutanPermohonan($data)
	{
		$query = $this->db->table('pencabutanwp')->insert($data);
		return $query;
	}
	//Detail After Click Manage
	
	public function savePermintaanSuratKPP($data)
	{
		$query = $this->db->table('permintaansuratkpp')->insert($data);
		return $query;
	}

	public function savePembuktianWP($data)
	{
		$query = $this->db->table('suratpembuktianwp')->insert($data);
		return $query;
	}

	public function saveSPUH($data)
	{
		$query = $this->db->table('pemberitahuanuntukhadir')->insert($data);
		return $query;
	}

	
	public function saveLaporanPenelitian($data)
	{
		$query = $this->db->table('laporanpenelitian')->insert($data);
		return $query;
	}

	
	public function saveKeputusan($data)
	{
		$query = $this->db->table('keputusan')->insert($data);
		return $query;
	}

	function checkPencabutan($id=false)
	{
		$result  = $this->db->query("SELECT count(QuitWPid) as Count FROM pencabutanwp where QuitWPajuanID = $id");
		$row = $result->getRow();
		return $count = $row->Count;
	}

	function checkKeputusan($id=false)
	{
		$result  = $this->db->query("SELECT count(`KEPajuanId`) as Count FROM keputusan where `KEPajuanId` = $id");
		$row = $result->getRow();
		return $count = $row->Count;
	}

	public function closepengajuan($data,$id)
	{
		
		return $this->db->table('pengajuan')->update($data,['ajuanId' => $id]);
		return $query;
	}

	public function get_KetetapanPajak($id=false)
	{

		$builder = $this->db->query("SELECT jenisketetapan.JKnama,ketetapanpajak.KPNoKetetapan, ketetapanpajak.KPTgl, ketetapanpajak.KPNilai FROM ketetapanpajak left JOIN jenisketetapan ON jenisketetapan.JKid = ketetapanpajak.KPJKid WHERE ketetapanpajak.KPajuanId = $id");
		return $builder->getResultArray();
	}

	public function get_PermohonanWP($id=false)
	{
		return $this->db->table('permohonanwp')
                        ->where('PWPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	public function get_PengantarKPP($id=false)
	{
		return $this->db->table('pengantarkpp')
                        ->where('PKPPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	public function get_SuratTugas($id=false)
	{
		return $this->db->table('surattugas')
                        ->where('STajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	//Pencabutan Permohonan
	public function get_PencabutanWP($id=false)
	{
		return $this->db->table('pencabutanwp')
                        ->where('QuitWPajuanID', $id)
                        ->get()
                        ->getResultArray();
	}

	//Pembuktian ke WP
	public function get_PembuktianWP($id=false)
	{
		return $this->db->table('suratpembuktianwp')
                        ->where('SPWPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	//Permintaan Surat KPP
	public function get_PermintaanSuratKPP($id=false)
	{
		return $this->db->table('permintaansuratkpp')
                        ->where('PSKPPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	//SPUH - BA
	public function get_SPUHBA($id=false)
	{
		return $this->db->table('pemberitahuanuntukhadir')
                        ->where('SPUHajuanId ', $id)
                        ->get()
                        ->getResultArray();
	}

	//Laporan Penelitian
	public function get_LaporanPenelitian($id=false)
	{
		return $this->db->table('laporanpenelitian')
                        ->where('LPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}

	//Keputusan keberatan / non keberatan
	public function get_Keputusan($id=false)
	{
		return $this->db->table('keputusan')
                        ->where('KEPajuanId', $id)
                        ->get()
                        ->getResultArray();
	}
} 