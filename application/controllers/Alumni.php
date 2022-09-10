<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
class Alumni extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('Alumni_model');
        $this->load->model('Studytracer_1_model');
        $this->load->model('Studytracer_2_model');
		$this->load->library('form_validation');
        // $this->load->library(array('excel'));
	}

    public function ChangePassword()
     {
        
        $data=array('title'=>'Alumni - Change Password');
        $data['alumni'] = $this->db->get_where('alumni', ['npm' => $this->session->userdata('npm')])->row_array();
        $this->load->view("templates/background",$data);
        $this->load->view("alumni/ChangePassword");
        $this->load->view("alumni/MenuAlumni",$data);
    }
    public function changepassword_action()
    {
        $npm = $this->session->userdata('npm');
        $password_lama = $this->input->post('password_lama');
        $password_baru = $this->input->post('password_baru');
        $this->form_validation->set_rules('password_lama', 'password_lama', 'required',
            [
                "required" => "Password Lama Harap di Isi"
            ]);
        if ($this->form_validation->run() == false) {
                    $data=array('title'=>'Alumni - Change Password');
        $data['alumni'] = $this->db->get_where('alumni', ['npm' => $this->session->userdata('npm')])->row_array();
        $this->load->view("templates/background",$data);
        $this->load->view("alumni/ChangePassword");
        $this->load->view("alumni/MenuAlumni",$data);

        }else{
        //ambil password lama dulu
        $query =  $this->db->get_where('alumni', ['npm' => $npm])->row_array();
        $db_password_lama = password_verify($password_lama, $query['password']);  
        //verifikasi password lama
        if($db_password_lama != $password_lama){
            echo '<script>alert("Maaf, password lama salah")</script>'; //jikas dbpassword lama tidak sama dgn password lama
            redirect('alumni/changepassword', 'refresh'); //buang
        }
        $this->db->set('password', password_hash($password_baru, PASSWORD_DEFAULT ));
        $this->db->where('npm', $npm);
        $this->db->update('alumni');
        echo '<script>alert("Password berhasil diganti")</script>';
        redirect('alumni/changepassword', 'refresh'); //buang 
    }

    }

     public function uploaddata()
    
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx';
        $config['file_name'] = 'doc' . date("d-m-Y");
        $this->load->library('upload' , $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->setShouldFormatDates(true);
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $alumnidata = array(
                            'npm'  => $row->getCellAtIndex(1),
                            'nm_mahasiswa'  => $row->getCellAtIndex(2),
                            'email'       => $row->getCellAtIndex(3),
                            'no_telp'       => $row->getCellAtIndex(4),
                            'alamat'       => $row->getCellAtIndex(5),
                            'prodi'       => $row->getCellAtIndex(6),
                            'thn_lulus'       => $row->getCellAtIndex(7),
                            'password'       => password_hash($row->getCellAtIndex(1), PASSWORD_DEFAULT ),
                            'date_created' => date("d-m-Y")
                        );
                        $this->Alumni_model->import_data($alumnidata);
                        // TracerStudy1
                         $tr1 = array(
                            'npm'  => $row->getCellAtIndex(1),
                        );
                        $this->Studytracer_1_model->import_data($tr1);
                        // TracerStudy2
                         $tr2 = array(
                            'npm'  => $row->getCellAtIndex(1),
                        );
                        $this->Studytracer_2_model->import_data($tr2);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'import Data Berhasil');
                redirect('alumni/alldata_alumni');
            }
        } else {
          echo "Error :" . $this->upload->display_errors();
        };
    }
	 public function Kuesioner()
    {
        $data['alumni'] = $this->db->get_where('alumni', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['studytracer'] = $this->db->get_where('studytracer_1', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['studytracer2'] = $this->db->get_where('studytracer_2', ['npm' => $this->session->userdata('npm')])->row_array();
        

        // Bagian login
        $this->form_validation->set_rules('npm', 'npm', 'required|trim');
        $this->form_validation->set_rules('nm_mahasiswa', 'nm_mahasiswa', 'required|trim');
        // $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required|trim');
        $this->form_validation->set_rules('prodi', 'prodi', 'required|trim');
        $this->form_validation->set_rules('thn_lulus', 'thn_lulus', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim');

        // Bagian Studytracer
        $this->form_validation->set_rules('a1', 'a1');
        $this->form_validation->set_rules('a2', 'a2');
        $this->form_validation->set_rules('a3', 'a3');
        $this->form_validation->set_rules('a4', 'a4');
        $this->form_validation->set_rules('a5', 'a5');
        $this->form_validation->set_rules('a6', 'a6');
        $this->form_validation->set_rules('a7', 'a7');
        $this->form_validation->set_rules('a8', 'a8');
        $this->form_validation->set_rules('a9', 'a9');
        $this->form_validation->set_rules('a10', 'a10');
        $this->form_validation->set_rules('a11', 'a11');
        $this->form_validation->set_rules('a12', 'a12');
        $this->form_validation->set_rules('a13', 'a13');
        $this->form_validation->set_rules('a14', 'a14');
        $this->form_validation->set_rules('a15', 'a15');
        $this->form_validation->set_rules('a16', 'a16');
        $this->form_validation->set_rules('a17', 'a17');
        $this->form_validation->set_rules('a18', 'a18');
        $this->form_validation->set_rules('a19', 'a19');
        $this->form_validation->set_rules('a20', 'a20');

        // Bagian Pendapat login
        $this->form_validation->set_rules('b1', 'b1');
        $this->form_validation->set_rules('b2', 'b2');
        $this->form_validation->set_rules('b3', 'b3');
        $this->form_validation->set_rules('b4', 'b4');
        $this->form_validation->set_rules('b5', 'b5');
        $this->form_validation->set_rules('b6', 'b6');
        $this->form_validation->set_rules('b7', 'b7');
        $this->form_validation->set_rules('b8', 'b8');
        $this->form_validation->set_rules('b9', 'b9');
        $this->form_validation->set_rules('b10', 'b10');
        $this->form_validation->set_rules('b11', 'b11');
        $this->form_validation->set_rules('b12', 'b12');
        $this->form_validation->set_rules('b13', 'b13');
        $this->form_validation->set_rules('b14', 'b14');
        $this->form_validation->set_rules('b15', 'b15');
        $this->form_validation->set_rules('b16', 'b16');
        $this->form_validation->set_rules('b17', 'b17');
        $this->form_validation->set_rules('b18', 'b18');
        $this->form_validation->set_rules('b19', 'b19');
        $this->form_validation->set_rules('b20', 'b20');
        $this->form_validation->set_rules('b21', 'b21');
        $this->form_validation->set_rules('b22', 'b22');
        $this->form_validation->set_rules('b23', 'b23');
        $this->form_validation->set_rules('b24', 'b24');
        $this->form_validation->set_rules('b25', 'b25');
        $this->form_validation->set_rules('b26', 'b26');
        $this->form_validation->set_rules('b27', 'b27');
        $this->form_validation->set_rules('b28', 'b28');
        $this->form_validation->set_rules('b29', 'b29');
        $this->form_validation->set_rules('b30', 'b30');

        if ($this->form_validation->run() == false) {
             $title=array('title'=> 'alumni - Kuesioner');
            $this->load->view('templates/background', $title);
            $this->load->view('alumni/Kuesioner', $data);
            $this->load->view('alumni/MenuAlumni', $data);
        } else {
        	// Bagian Data login 

        	$nm_mahasiswa = $this->input->post('nm_mahasiswa');
            $email = $this->input->post('email');
			$npm = $this->input->post('npm');
			$nm_mahasiswa = $this->input->post('nm_mahasiswa');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$prodi = $this->input->post('prodi');
			$thn_lulus = $this->input->post('thn_lulus');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');

			$this->db->set('nm_mahasiswa', $nm_mahasiswa);
			$this->db->set('email', $email);
			$this->db->set('npm', $npm);
			$this->db->set('nm_mahasiswa', $nm_mahasiswa);
			$this->db->set('tgl_lahir', $tgl_lahir);
			$this->db->set('prodi', $prodi);
            $this->db->set('thn_lulus', $thn_lulus);
            $this->db->set('alamat', $alamat);
            $this->db->set('no_telp', $no_telp);
            $this->db->where('email', $email);
            $this->db->update('alumni');

            // Bagian Studytracer

            $npm = $this->input->post('npm');
            $a1 = $this->input->post('a1');
            $a2 = $this->input->post('a2');
            $a3 = $this->input->post('a3');
            $a4 = $this->input->post('a4');
            $a5 = $this->input->post('a5');
            $a6 = $this->input->post('a6');
            $a7 = $this->input->post('a7');
            $a8 = $this->input->post('a8');
            $a9 = $this->input->post('a9');
            $a10 = $this->input->post('a10');
            $a11 = $this->input->post('a11');
            // $a12 = $this->input->post('a12');
            $a13 = $this->input->post('a13');
            $a14 = $this->input->post('a14');
            $a15 = $this->input->post('a15');
            // $a16 = $this->input->post('a16');
            $a17 = $this->input->post('a17');
            $a18 = $this->input->post('a18');
            // $a19 = $this->input->post('a19');
            $a20 = $this->input->post('a20');
            $a = $_POST['a12'];
            $a12 = implode(",",$a );
            $a = $_POST['a16'];
            $a16 = implode(",",$a );
            $a = $_POST['a19'];
            $a19 = implode(",",$a );

            $this->db->set('a1', $a1);
			$this->db->set('a2', $a2);
			$this->db->set('a3', $a3);
			$this->db->set('a4', $a4);
			$this->db->set('a5', $a5);
			$this->db->set('a6', $a6);
			$this->db->set('a7', $a7);
			$this->db->set('a8', $a8);
			$this->db->set('a9', $a9);
			$this->db->set('a10', $a10);
			$this->db->set('a11', $a11);
			$this->db->set('a12', $a12);
			$this->db->set('a13', $a13);
			$this->db->set('a14', $a14);
			$this->db->set('a15', $a15);
			$this->db->set('a16', $a16);
			$this->db->set('a17', $a17);
			$this->db->set('a18', $a18);
			$this->db->set('a19', $a19);
			$this->db->set('a20', $a20);
            $this->db->where('npm', $npm);
            $this->db->update('studytracer_1');


              // Bagian Pendapat login

            $npm = $this->input->post('npm');
            $b1 = $this->input->post('b1');
            $b2 = $this->input->post('b2');
            $b3 = $this->input->post('b3');
            $b4 = $this->input->post('b4');
            $b5 = $this->input->post('b5');
            $b6 = $this->input->post('b6');
            $b7 = $this->input->post('b7');
            $b8 = $this->input->post('b8');
            $b9 = $this->input->post('b9');
            $b10 = $this->input->post('b10');
            $b11 = $this->input->post('b11');
            $b12 = $this->input->post('b12');
            $b13 = $this->input->post('b13');
            $b14 = $this->input->post('b14');
            $b15 = $this->input->post('b15');
            $b16 = $this->input->post('b16');
            $b17 = $this->input->post('b17');
            $b18 = $this->input->post('b18');
            $b19 = $this->input->post('b19');
            $b20 = $this->input->post('b20');
            $b21 = $this->input->post('b21');
            $b22 = $this->input->post('b22');
            $b23 = $this->input->post('b23');
            $b24 = $this->input->post('b24');
            $b25 = $this->input->post('b25');
            $b26 = $this->input->post('b26');
            $b27 = $this->input->post('b27');
            $b28 = $this->input->post('b28');
            $b29 = $this->input->post('b29');
            $b30 = $this->input->post('b30');
			
            
			$this->db->set('b1', $b1);
			$this->db->set('b2', $b2);
			$this->db->set('b3', $b3);
			$this->db->set('b4', $b4);
			$this->db->set('b5', $b5);
			$this->db->set('b6', $b6);
			$this->db->set('b7', $b7);
			$this->db->set('b8', $b8);
			$this->db->set('b9', $b9);
			$this->db->set('b10', $b10);
			$this->db->set('b11', $b11);
			$this->db->set('b12', $b12);
			$this->db->set('b13', $b13);
			$this->db->set('b14', $b14);
			$this->db->set('b15', $b15);
			$this->db->set('b16', $b16);
			$this->db->set('b17', $b17);
			$this->db->set('b18', $b18);
			$this->db->set('b19', $b19);
			$this->db->set('b20', $b20);
            $this->db->set('b21', $b21);
            $this->db->set('b22', $b22);
            $this->db->set('b23', $b23);
            $this->db->set('b24', $b24);
            $this->db->set('b25', $b25);
            $this->db->set('b26', $b26);
            $this->db->set('b27', $b27);
            $this->db->set('b28', $b28);
            $this->db->set('b29', $b29);
            $this->db->set('b30', $b30);
            $this->db->where('npm', $npm);
            $this->db->update('studytracer_2');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            
            redirect('alumni/Kuesioner');
        }
    }
}