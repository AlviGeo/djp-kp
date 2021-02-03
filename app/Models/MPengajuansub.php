<?php

namespace App\Models;

use CodeIgniter\Model;

class MPengajuansub extends Model
{

	protected $table = "pengajuansub";

	public function getPengajuansub($id = false)
	{

		if ($id === false) {

			return $this->db->table('pengajuansub')
				->get();
		} else {
			return $this->table('pengajuansub')
				->where('ajuanSUBID', $id)
				->get()
				->getRowArray();
		}
	}

	// Detail Pengajuan Sub
	public function getDetailPengajuansub($id = false)
	{
		$builder = $this->db->table('pengajuansub');
		return $builder->get();
	}

	// Objek Digugat
	public function get_objekdigugat($id = false)
	{
		$builder = $this->db->query("SELECT * FROM objekdigugat");
		return $builder;
	}

	public function get_substg()
	{
		$builder = $this->db->table('substg');
		return $builder->get();
	}

	// Dropdown Jenis Gugatan dari Objek Digugat
	public function get_jenisgugatan()
	{
		$builder = $this->db->table('jenisgugatan');
		return $builder->get();
	}

	public function get_jenisPajak()
	{
		$builder = $this->db->table('jenispajak');
		return $builder->get();
	}

	// Ketetapan Pajak Sub
	public function get_KetetapanPajakSub($id = false)
	{
		$builder = $this->db->query("SELECT jenisketetapansub.TETAPAJENISnama,ketetapanpajaksub.TETAPAJnomorKetetapan, ketetapanpajaksub.TETAPAJtglKetetapan, ketetapanpajaksub.TETAPAJNilaiKetetapan FROM jenisketetapansub left JOIN ketetapanpajaksub ON jenisketetapansub.TETAPAJENISid = ketetapanpajaksub.TETAPAJid WHERE ketetapanpajaksub.TETAPAJajuanSUBID = $id");
		return $builder->getResultArray();
	}

	// Dropdown Jenis Pajak Sub dari Ketetapan Pajak Sub
	public function get_jenisketetapanpajaksub()
	{
		$builder = $this->db->table('jenisketetapansub');
		return $builder->get();
	}

	// DropDown Jenis Tujuan Respon dari Respon Kanwil
	public function get_jenistujuanrespon()
	{
		$builder = $this->db->table('jenistujuanrespon');
		return $builder->get();
	}

	// Respon Kanwil
	public function get_ResponKanwil($id = false)
	{
		$builder = $this->db->query("SELECT jenistujuanrespon.RESPTUnama,responkanwil.RESPnoSurat, responkanwil.RESPtglSurat, FROM jenistujuanrespon left JOIN responkanwil ON jenistujuanrespon.RESPTUJid = responkanwil.RESPid WHERE responkanwil.RESPajuanSUBID = $id");
		return $builder->getResultArray();
	}

	public function savePengajuansub($data)
	{
		$query = $this->db->table('pengajuansub')->insert($data);
		return $query;
	}

	// Save after Manage
	public function saveObjekDigugat($data)
	{

		$query = $this->db->table('objekdigugat')->insert($data);
		return $query;
	}

	// Save after Manage
	public function saveKetetapanPajakSub($data)
	{
		$query = $this->db->table('ketetapanpajaksub')->insert($data);
		return $query;
	}

	// Save after Manage
	public function saveResponKanwil($data)
	{
		$query = $this->db->table('responkanwil')->insert($data);
		return $query;
	}

	public function closePengajuanSub($data, $id)
	{
		$query = $this->db->table('pengajuansub')->update($data, ['ajuanSUBID' => $id]);
		return $query;
	}
}
