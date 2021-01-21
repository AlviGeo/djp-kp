<?php

namespace App\Models;

use CodeIgniter\Model;

class MPengajuansub extends Model
{

	protected $table = "pengajuansub";

	public function getPengajuansub($sub_id = false)
	{

		if ($sub_id === false) {
			// $builder =  $this->db->table('pengajuan');
			// return $builder->get();
			return $this->db->table('pengajuansub')
				->get();
		} else {
			return $this->table('pengajuansub')
				->where('ajuanSUBID', $sub_id)
				->get()
				->getRowArray();
		}
	}

	public function getDetailPengajuansub($sub_id = false)
	{
		$builder = $this->db->table('pengajuansub');
		return $builder->get();
	}

	public function get_substg()
	{
		$builder = $this->db->table('substg');
		return $builder->get();
	}

	public function get_jenisPajak()
	{
		$builder = $this->db->table('jenispajak');
		return $builder->get();
	}

	// public function get_substg()
	// {

	// 	$builder = $this->db->query("SELECT * FROM substg WHERE SUBSTGnama NOT LIKE '%SURAT%'");
	// 	return $builder->getResultArray();
	// }

	// public function get_jenispajak()
	// {

	// 	$builder = $this->db->query("SELECT * FROM jenispajak WHERE NamajenisPajak NOT LIKE '%SURAT%'");
	// 	return $builder->getResultArray();
	// }


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

	public function closePengajuan($data, $sub_id)
	{
		$query = $this->db->table('pengajuansub')->update($data, ['ajuanSUBID' => $sub_id]);
		return $query;
	}

	// Objek Digugat
	public function get_ObjekDigugat($sub_id = false)
	{
		$builder = $this->db->table('objekdigugat')
			->where('OBJGUGATid', $sub_id)
			->get()
			->getResultArray();
	}

	// Ketetapan Pajak Sub
	public function get_KetetapanPajakSub($sub_id = false)
	{
		return $this->db->table('ketetapanpajaksub')
			->where('TETAPAJid', $sub_id)
			->get()
			->getResultArray();
	}

	// Respon Kanwil
	public function get_ResponKanwil($sub_id = false)
	{
		return $this->db->table('responkanwil')
			->where('RESPid', $sub_id)
			->get()
			->getResultArray();
	}
}
