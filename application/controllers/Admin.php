<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';
require('./application/third_party/phpoffice/vendor/autoload.php');


use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model('Admin_model');
    $this->load->model('Alumni_model');
    $this->load->model('Studytracer_1_model');
    $this->load->model('Studytracer_2_model');
    $this->load->library('form_validation');
  }
  public function CreateData()
  {
    $data=array('title'=>'Admin - Create Data');
        $data['alumni'] = $this->db->get_where('alumni', ['npm' => $this->session->userdata('npm')])->row_array();
        $this->load->view("templates/background",$data);
        $this->load->view("admin/CreateData");
        $this->load->view("admin/MenuAdmin",$data);
  }
  public function AlumniData()
  {
    $data=array('title'=>'Admin - Alumni Data');
    $data['alumni'] = $this->Alumni_model->tampil_data();
    $this->load->view("templates/background",$data);
    $this->load->view("admin/AlumniData",$data);
    $this->load->view("admin/MenuAdmin",$data);
  }
  public function report_data()
  {
   $data['hasil']=$this->Alumni_model->Jum_mahasiswa_perjurusan();
   $this->load->view("templates/background");
   $this->load->view("admin/report_data",$data);
   $this->load->view("admin/navigasi_admin");
 }
 public function resetpassword($id)
 {
  $npm = $this->Alumni_model->get_npm($id)->npm;
  $this->db->set('password', password_hash($npm, PASSWORD_DEFAULT ));
  $this->db->where('npm', $npm);
  $this->db->update('alumni');
  echo '<script>alert("Password berhasil direset")</script>'; 
  redirect('admin/EditData', 'refresh');
  }
  public function CekData($id)
  {
  $npm = $this->Alumni_model->get_npm($id)->npm;
  $login =  $this->db->get_where('alumni', ['npm' => $npm])->row_array();
  $data=[
   'npm' => $login['npm'],
   'title' => 'admin',
 ];
 $this->session->set_userdata($data);
 redirect("admin/EditData",$a);
}
public function EditData()
{
  $data['alumni'] = $this->db->get_where('alumni', ['npm' => $this->session->userdata('npm')])->row_array();
  $data['studytracer'] = $this->db->get_where('studytracer_1', ['npm' => $this->session->userdata('npm')])->row_array();
  $data['studytracer2'] = $this->db->get_where('studytracer_2', ['npm' => $this->session->userdata('npm')])->row_array();
  $title=[
    'title' => 'Admin - Edit Data',

  ];
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

    $this->load->view('templates/background', $title);
    $this->load->view('admin/EditData', $data);
    $this->load->view('admin/MenuCrud');
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

    redirect('admin/EditData');
  }
}
public function import()

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
            'npm'  => $row->getCellAtIndex(1)
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
      redirect('admin/AlumniData');
    }
  } else {
    echo "Error :" . $this->upload->display_errors();
  };
}
public function Export()
{
  $data = $this->Alumni_model->export()->result();

  $spreadsheet = new Spreadsheet;

  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A1', 'No')
  ->setCellValue('B1', 'Nama')
  ->setCellValue('C1', 'NPM')
  ->setCellValue('D1', 'TANGGAL LAHIR')
  ->setCellValue('E1', 'PRODI')
  ->setCellValue('F1', 'LULUS TAHUN')
  ->setCellValue('G1', 'ALAMAT')
  ->setCellValue('H1', 'NO TELEPON')
  ->setCellValue('I1', 'EMAIL')
                      // Studytracer bagian 1
  ->setCellValue('J1', 'Berapa bulan waktu (sebelum atau sesudah kelulusan) untuk memperoleh pekerjaan pertama?')
  ->setCellValue('K1', 'Sebutkan sumberdana dalam pembiayaan kuliah?')
  ->setCellValue('L1', 'Apakah Anda Sudah Bekerja')
  ->setCellValue('M1', 'Nama Perusahaan')
  ->setCellValue('N1', 'Posisi/jabatan')
  ->setCellValue('O1', 'Nama Atasan/Jabatan')
  ->setCellValue('P1', 'Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?')
  ->setCellValue('Q1', 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?')
  ->setCellValue('R1', 'Kira-kira berapa pendapatan anda perbulan')
  ->setCellValue('S1', 'Menurut Anda seberapa besar penekanan pada metode belajar di bawah ini dilaksanakan di program studi anda?')
  ->setCellValue('T1', 'Kapan anda memulai pekerjaan, Mohon pekerjaan sambilan tidak dimasukkan')
  ->setCellValue('U1', 'Bagaimana anda mencari pekerjaan tersebut (jawaban bisa lebih dari satu)')
  ->setCellValue('V1', 'Berapa banyak perusahaan/instansi yang anda lamar (lewat/ surat atau email) sebelum anda memperoleh pekerjaan utama?')
  ->setCellValue('W1', 'Berapa banyak perusahaan atau instansi/institusi yang merespon lamaran anda')
  ->setCellValue('X1', 'Berapa banyak perusahaan instansi atau institusi yang mengundang anda untuk wawancara?')
  ->setCellValue('Y1', 'Bagaimana anda menggambarkan situasi saat ini (Jawaban bisa lebih dari satu)')
  ->setCellValue('Z1', 'Apakah anda aktif dalam mencari pekerjaan dalam empat minggu terakhir?')
  ->setCellValue('AA1', 'Apa jenis perusahaan/instansi tempat anda bekerja sekarang?')
  ->setCellValue('AB1', 'Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? (Jawaban bisa lebih satu)')
  ->setCellValue('AC1', 'Bagaimana tingkat kompetensi anda berkaitan dengan pekerjaan yang sedang dijalani?')
                      // Studytracer bagian 2
  ->setCellValue('AD1', 'Pengetahuan di bidang atau disiplin ilmu anda')
  ->setCellValue('AE1', 'Pengetahuan di luar bidang ilmu atau disiplin ilmu anda')
  ->setCellValue('AF1', 'Pengetahuan umum')
  ->setCellValue('AG1', 'Bahasa Inggris')
  ->setCellValue('AH1', 'Keterampilan Internet')
  ->setCellValue('AI1', 'Keterampilan Komputer')                     
  ->setCellValue('AJ1', 'Berpikir Kritis')
  ->setCellValue('AK1', 'Keterampilan Riset')
  ->setCellValue('AL1', 'Kemampuan Belajar')
  ->setCellValue('AM1', 'Kemampuan Berkomunikasi')
  ->setCellValue('AN1', 'Bekerja di bawah tekanan')
  ->setCellValue('AO1', 'Manajemen waktu')
  ->setCellValue('AP1', 'Bekerja secara mandiri')
  ->setCellValue('AQ1', 'Bekerja sama dalam tim/bekerja sama dengan orang lain')
  ->setCellValue('AR1', 'Kemampuan memecahkan masalah')
  ->setCellValue('AS1', 'Negosiasi')
  ->setCellValue('AT1', 'Kemampuan analisis')
  ->setCellValue('AU1', 'Toleransi')
  ->setCellValue('AV1', 'Kemampuan adaptasi')
  ->setCellValue('AW1', 'Loyalitas')
  ->setCellValue('AX1', 'Integritas')
  ->setCellValue('AY1', 'Bekerja dengan orang yang berbeda budaya maupun latar belakang')
  ->setCellValue('AZ1', 'Kepemimpinan')
  ->setCellValue('BA1', 'Kemampuan memegang tanggung jawab')
  ->setCellValue('BC1', 'Inisiatif')
  ->setCellValue('BD1', 'Manajemen Proyek atau program')
  ->setCellValue('BE1', 'Kemampuan mempresentasikan ide/produk/laporan')
  ->setCellValue('BF1', 'Kemampuan menulis laporan, memo dan dokumen')
  ->setCellValue('BG1', 'Kemampuan untuk belajar sepanjang hayat')
  ->setCellValue('BH1', 'Saran-saran untuk pengembangan Universitas');
  $kolom = 2;
  $nomor = 1;
  foreach($data as $a) {

   $spreadsheet->setActiveSheetIndex(0)
   ->setCellValue('A' . $kolom, $nomor)
   ->setCellValue('B' . $kolom, $a->nm_mahasiswa)
   ->setCellValue('C' . $kolom, $a->npm)
   ->setCellValue('D' . $kolom, $a->tgl_lahir)
   ->setCellValue('E' . $kolom, $a->prodi)
   ->setCellValue('F' . $kolom, $a->thn_lulus)
   ->setCellValue('G' . $kolom, $a->alamat)
   ->setCellValue('H' . $kolom, $a->no_telp)
   ->setCellValue('I' . $kolom, $a->email)
   ->setCellValue('J' . $kolom, $a->a1)
   ->setCellValue('K' . $kolom, $a->a2)
   ->setCellValue('L' . $kolom, $a->a3)
   ->setCellValue('M' . $kolom, $a->a4)
   ->setCellValue('N' . $kolom, $a->a5)
   ->setCellValue('O' . $kolom, $a->a6)
   ->setCellValue('P' . $kolom, $a->a7)
   ->setCellValue('Q' . $kolom, $a->a8)
   ->setCellValue('R' . $kolom, $a->a9)
   ->setCellValue('S' . $kolom, $a->a10)
   ->setCellValue('T' . $kolom, $a->a11)
   ->setCellValue('U' . $kolom, $a->a12)
   ->setCellValue('V' . $kolom, $a->a13)
   ->setCellValue('W' . $kolom, $a->a14)
   ->setCellValue('X' . $kolom, $a->a15)
   ->setCellValue('Y' . $kolom, $a->a16)
   ->setCellValue('Z' . $kolom, $a->a17)
   ->setCellValue('AA' . $kolom, $a->a18)
   ->setCellValue('AB' . $kolom, $a->a19)
   ->setCellValue('AC' . $kolom, $a->a20)            // Studytracer bagian 2
   ->setCellValue('AD' . $kolom, $a->b1)
   ->setCellValue('AE' . $kolom, $a->b2)
   ->setCellValue('AF' . $kolom, $a->b3)
   ->setCellValue('AG' . $kolom, $a->b4)
   ->setCellValue('AH' . $kolom, $a->b5)
   ->setCellValue('AI' . $kolom, $a->b6)
   ->setCellValue('AJ' . $kolom, $a->b7)
   ->setCellValue('AK' . $kolom, $a->b8)
   ->setCellValue('AL' . $kolom, $a->b9)
   ->setCellValue('AM' . $kolom, $a->b10)
   ->setCellValue('AN' . $kolom, $a->b11)
   ->setCellValue('AO' . $kolom, $a->b12)
   ->setCellValue('AP' . $kolom, $a->b13)
   ->setCellValue('AQ' . $kolom, $a->b14)
   ->setCellValue('AR' . $kolom, $a->b15)
   ->setCellValue('AS' . $kolom, $a->b16)
   ->setCellValue('AT' . $kolom, $a->b17)
   ->setCellValue('AU' . $kolom, $a->b18)
   ->setCellValue('AV' . $kolom, $a->b19)
   ->setCellValue('AW' . $kolom, $a->b20)
   ->setCellValue('AX' . $kolom, $a->b21)
   ->setCellValue('AY' . $kolom, $a->b22)
   ->setCellValue('AZ' . $kolom, $a->b23)
   ->setCellValue('BA' . $kolom, $a->b24)
   ->setCellValue('BC' . $kolom, $a->b25)
   ->setCellValue('BD' . $kolom, $a->b26)
   ->setCellValue('BE' . $kolom, $a->b27)
   ->setCellValue('BF' . $kolom, $a->b28)
   ->setCellValue('BG' . $kolom, $a->b29)
   ->setCellValue('BH' . $kolom, $a->b30);


   $kolom++;
   $nomor++;

   $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AK')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AM')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AN')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AO')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AP')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AQ')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AR')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AS')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AT')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AU')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AV')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AW')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AX')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AY')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('AZ')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('BA')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('BB')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('BC')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('BD')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('BE')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('BF')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('BG')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getColumnDimension('BH')->setAutoSize(true);
   $spreadsheet->getActiveSheet()->getStyle('C')->getNumberFormat()->setFormatCode('0000');
   $spreadsheet->getActiveSheet()->getStyle('C')->getFill()->getStartColor()->setARGB('173, 245, 255, 1)

');
   $spreadsheet->getActiveSheet()->getStyle('H')->getNumberFormat()->setFormatCode('0000');
   

 }

 $writer = new Xlsx($spreadsheet);

 header('Content-Type: application/vnd.ms-excel');
 header('Content-Disposition: attachment;filename="DataAlumni.xlsx"');
 header('Cache-Control: max-age=0');

 $writer->save('php://output');
}
public function kirim_email(){

        $email = $this->input->post('email');
        $nama =  $this->db->get_where('alumni', ['email' => $email])->row_array();
        $data = [
          $nama_mahasiswa = $nama['nm_mahasiswa'],

        ];
        $nm_mahasiswa = $nama_mahasiswa;
        

         // Menangkap inputan nama dari form
    //     $email      = $this->input->post('email'); // Menangkap inputan email dari form
    //     $acara      = $this->input->post('acara'); // Menangkap inputan acara dari form
    //     $alamat     = $this->input->post('alamat'); // Menangkap inputan alamat dari form
    //     $tanggal    = $this->input->post('tanggal'); // Menangkap inputan tanggal dari form
 
        $this->sendEmail($email,$nm_mahasiswa);  //Memanggil fungsi sendEmail dengan parameter nama,email,acara,alamat, dan tanggal
    // //     redirect('C_Index'); // redirect ke fungsi index contrller C_Index
      }
 
   function sendEmail($email,$nm_mahasiswa){
        $this->load->library('PHPMailer_load'); //Load Library PHPMailer
        $mail = $this->phpmailer_load->load(); // Mendefinisikan Variabel Mail
        $mail->isSMTP();  // Mengirim menggunakan protokol SMTP
        $mail->Host = 'smtp.gmail.com'; // Host dari server SMTP
        $mail->SMTPAuth = true; // Autentikasi SMTP
        $mail->Username = 'muhammad.alwie.sangaji18@mhs.ubharajaya.ac.id';
        $mail->Password = 'Ubharaj4y4';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('noreply@UBJ.com', 'UNIVERSITAS BHAYANGKARA JAKARTA RAYA'); // Sumber email
        $mail->addAddress($email); // Masukkan alamat email dari variabel $email
        $mail->Subject = "Undangan Pengisian Tracer Study"; // Subjek Email
        $mail->msgHtml("
            <h3>Pengisian Tracer Study </h3><hr>
                Kepada Yth. <br>
               $nm_mahasiswa<br><br>

               <p>Kami sangat berterimakasih atas kesediaan anda meluangkan waktu sejenak guna membantu kami dalam pelaksanaan survey yang ditujukan untuk seluruh sarjana alumni Universitas Bhayangkara Jakarta Raya.
               Kami memberikan jaminan sepenuhnya atas jawaban anda dan kesemuanya ini hanya akan dipergunakan untuk kepentingan ilmiah di dalam kerangka kerja studi ini.
               </p>
 
                Anda dapat mengkonfirmasi kehadiran dengan membalas e-mail ini.<br>
                Terima Kasih
            "); // Isi email dengan format HTML
 
 
        if (!$mail->send()) {
                   echo '<script>alert("Email kosong")</script>';
                   redirect('admin/AlumniData', 'refresh'); //buang 
                } else {
                   echo '<script>alert("Email berhasil dikirim")</script>';
                   redirect('admin/AlumniData', 'refresh'); //buang 
                } // Kirim email dengan cek kondisi
    }

public function delete($id)
{
  $npm = $this->Alumni_model->get_npm($id)->npm;
  $this->Alumni_model->delete($npm);
  $this->Studytracer_1_model->delete($npm);
  $hasil=$this->db->query("DELETE FROM studytracer_2 WHERE npm='$npm'");
  echo '<script>alert("Berhasil Menghapus Data")</script>';
  redirect('admin/AlumniData');
}
}