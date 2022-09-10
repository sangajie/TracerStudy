<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Alumni_model extends CI_Model
{
	private $table = "alumni";
	public function import_data($alumnidata)
    {
        $jumlah = count($alumnidata);
        if ($jumlah > 0) {
        	$this->db->replace('alumni', $alumnidata);
        }
    }

	public function tampil_data()
	{
		return $this->db->get($this->table)->result();
	}
	public function export()
	{
		$this->db->select('*');
		$this->db->from('alumni');
		$this->db->join('studytracer_1','studytracer_1.npm=alumni.npm');
		$this->db->join('studytracer_2','studytracer_2.npm=alumni.npm');
		return $this->db->get();
	}
	function test(){
		$this->db->select("password");
		$this->db->from('login');
		$this->db->where("kd",12);
		return $this->db->get();
	}
	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}
	function get_npm($idUser){
    $this->db->select("*");
    $this->db->where("npm",$idUser);
    return $this->db->get('alumni')->row();
    }
    public function insert($data){
    	$insert = $this->db->insert_batch('tbl_data2', $data);
		if($insert){
			return true;
		}
	}
	public function Jum_mahasiswa_perjurusan()
    {
        $this->db->group_by('a3');
        $this->db->select('a3');
        $this->db->select("count(*) as total");
        return $this->db->from('studytracer_1')
          ->get()
          ->result();
    }
    function delete($npm){
        $hasil=$this->db->query("DELETE FROM alumni WHERE npm='$npm'");
        return $hasil;
    }
}