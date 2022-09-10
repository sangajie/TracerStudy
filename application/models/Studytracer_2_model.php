<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Studytracer_2_model extends CI_Model
{
	private $table = "studytracer_2";
	public function import_data($tr2)
    {
        $jumlah = count($tr2);
        if ($jumlah > 0) {
        	$this->db->replace('studytracer_2', $tr2);
        }
    }
	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}
	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}
	function get_email($idUser){
    $this->db->select("*");
    $this->db->where("npm",$idUser);
    return $this->db->get('studytracer_2')->row();
}
	function delete($npm){
        $hasil=$this->db->query("DELETE FROM studytracer_2 WHERE npm='$npm'");
        return $hasil;
    }
}