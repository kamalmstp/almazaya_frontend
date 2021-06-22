<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model("guest_model");
        $this->load->model("registrants_model_junior");
        $this->load->model("registrants_model_senior");
        $this->load->library('form_validation');
     
    }

	public function index()
	{
		// $berita = $this->db->get('posts')->result_array();
		$this->db->select("*");
		$this->db->from("posts");
		$this->db->where("post_status","publish");
		$this->db->where("post_news","Umum");
		$this->db->order_by("id", "desc");
		$this->db->limit(6);
		$berita = $this->db->get();

		$data['berita'] = $berita->result_array();
		$this->load->view('welcome_message', $data);
	}

	public function registration()
	{
		$now = date('Y-m-d H:i:s');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $first_school_year = $this->input->post('first_school_year');
        $last_school_year = $this->input->post('last_school_year');
        $school_level = $this->input->post('school_level');
        $full_name = strtoupper($this->input->post('full_name'));
        $gender = strtoupper($this->input->post('gender'));
        $birth_place = strtoupper($this->input->post('birth_place'));
        $birth_date = $this->input->post('birth_date');
        $address = strtoupper($this->input->post('address'));
        $village = strtoupper($this->input->post('village'));
        $sub_district = strtoupper($this->input->post('sub_district'));
        $district = strtoupper($this->input->post('district'));
        $prev_school = strtoupper($this->input->post('prev_school'));
        $graduation_year = $this->input->post('graduation_year');
        $phone = $this->input->post('phone');
        $father_name = strtoupper($this->input->post('father_name'));
        $father_employment = strtoupper($this->input->post('father_employment'));
        $mother_name = strtoupper($this->input->post('mother_name'));
        $mother_employment = strtoupper($this->input->post('mother_employment'));

		$data = array(
			'username' => $username,
			'password' => $password,
			'first_school_year' => $first_school_year,
			'last_school_year' => $last_school_year,
			'school_level' => $school_level,
			'full_name' => $full_name,
			'gender' => $gender,
			'birth_place' => $birth_place,
			'birth_date' => $birth_date,
			'address' => $address,
			'village' => $village,
			'sub_district' => $sub_district,
			'district' => $district,
			'prev_school' => $prev_school,
			'graduation_year' => $graduation_year,
			'phone' => $phone,
			'father_name' => $father_name,
			'father_employment' => $father_employment,
			'mother_name' => $mother_name,
			'mother_employment' => $mother_employment,
			'created_at' => $now
		);

		$this->db->insert('student', $data);
		if ($school_level == "SMA") {
			$registrants = $this->registrants_model_senior;
        	$registrants->save();
		}elseif ($school_level == "SMP") {
			$registrants = $this->registrants_model_junior;
        	$registrants->save();
		}
        $this->session->set_flashdata('success', 'Your data is successfully entered. 
        	<br><br>Silahkan masuk ke <a href="http://localhost/almazaya" target="blank">Sistem Penerimaan Siswa Baru</a> untuk melengkapi biodata dan persyaratan pendaftaran dengan username dan password yang telah dibuat.');
        redirect('welcome');
	}

	public function guest()
	{
		$guest = $this->guest_model;
        $guest->save();
        $this->session->set_flashdata('success', 'DOWNLOAD BROCHURE <a href="assets/Download.pdf" target="blank">CLICK HERE!!!</a>');
        redirect('welcome');
	}
}
