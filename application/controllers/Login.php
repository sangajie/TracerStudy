<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("Alumni_model");
		$this->load->model("Studytracer_1_model");
		$this->load->model("Studytracer_2_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('npm', 'npm','required|trim');
		$this->form_validation->set_rules('password', 'password','required|trim');
		if($this->form_validation->run() == false){
		$this->load->view('login/Login');
	} else {
		$this->_login();
	}
	}

	private function _login()
	{
		$npm = $this->input->post('npm');
		$password = $this->input->post('password');
		$login =  $this->db->get_where('alumni', ['npm' => $npm])->row_array();
		$admin = $this->db->get_where('admin', ['kd_admin' => $npm])->row_array();
		if ($login == true){

			// jika login aktif
			// if($login['is_active'] == 1){

				if(password_verify($password, $login['password'])){

					$data=[
						'npm' => $login['npm']
					];

					$this->session->set_userdata($data);
					redirect('alumni/Kuesioner');
                    } else{
					$this->session->set_flashdata('message','<div class="failed">
					<h3>Wrong Password!</h3>
				</div>');
			redirect('login');

				}

			// } else{
			// 	$this->session->set_flashdata('message','<div class="failed">
			// 		<h3>Email has not been activated!</h3>
			// 	</div>');
			// redirect('login');


			// }
			} elseif ($admin == true){

				if(password_verify($password, $admin['password'])){
					$data=[
						'kd_admin' => $admin['kd_admin']
					];

					$this->session->set_userdata($data);
					redirect('admin/AlumniData');
				} else{
					$this->session->set_flashdata('message','<div class="failed">
					<h3>Wrong Password!</h3>
				</div>');
			redirect('login');
		}
		} else {
			$this->session->set_flashdata('message','<div class="failed">
					<h3>Npm is not registered!</h3>
				</div>');
			redirect('login');
		}
	}


	public function CreateData()
	{
		$this->form_validation->set_rules('npm','npm','required|trim|is_unique[alumni.npm]',
	[
				'is_unique'=>'NPM sudah terdaftar',
				'required'=>'Wajib untuk Di Isi'
			]);
		$this->form_validation->set_rules('email','email', 'is_unique[alumni.email]',
	[
				'is_unique'=>'Email sudah terdaftar',
			]);
		$this->form_validation->set_rules('nm_mahasiswa','nm_mahasiswa', 'required|trim',
	[
				'required'=>'Wajib untuk Di Isi'
			]);
		$this->form_validation->set_rules('thn_lulus','thn_lulus', 'required|trim',
	[
				'required'=>'Wajib untuk Di Isi'
			]);
		if($this->form_validation->run() == false){
			$data=array('title'=>'Alumni');
        $data['alumni'] = $this->db->get_where('alumni', ['npm' => $this->session->userdata('npm')])->row_array();
        $this->load->view("templates/background",$data);
        $this->load->view("alumni/ChangePassword");
        $this->load->view("alumni/MenuAlumni",$data);
		} else {
			$data = [
				'nm_mahasiswa' => htmlspecialchars($this->input->post('nm_mahasiswa',true)),
				'thn_lulus' => htmlspecialchars($this->input->post('thn_lulus',true)),
				'npm' => htmlspecialchars($this->input->post('npm',true)),
				'email' => htmlspecialchars($this->input->post('email',true)),
				'password' => password_hash($this->input->post('npm'), PASSWORD_DEFAULT ),
				'date_created' => date("d-m-Y")
			];
			$this->Alumni_model->save($data);
			$data = [
				'npm' => htmlspecialchars($this->input->post('npm',true))

			];
			$this->Studytracer_1_model->save($data);
			$data = [
				'npm' => htmlspecialchars($this->input->post('npm',true))

			];
			$this->Studytracer_2_model->save($data);
			echo '<script>alert("Berhasil menambahkan data alumni")</script>';
			redirect('admin/CreateData', 'refresh'); //buang 

		}
	}
	 public function logout()
    {
        $this->session->unset_userdata('');
        $this->session->set_flashdata('message', '<div class="success" role="alert"><h3>TERIMAKASIH</h3></div>');
        redirect('login','refresh');
    }
}