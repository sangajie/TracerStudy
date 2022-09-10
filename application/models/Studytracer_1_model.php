<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Studytracer_1_model extends CI_Model
{
	private $table = "studytracer_1";
	public function import_data($tr1)
    {
        $jumlah = count($tr1);
        if ($jumlah > 0) {
        	$this->db->replace('studytracer_1', $tr1);
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
    return $this->db->get('studytracer_1')->row();
    }
	function delete($npm){
        $hasil=$this->db->query("DELETE FROM studytracer_1 WHERE npm='$npm'");
        return $hasil;
    }
}