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
		$id_max = $this->db->select("max(id) as max_id")->from("psb_users")->get()->row();
        $school_level = $this->input->post("school_level");
	    $post = $this->input->post();

	    $user['username'] = $post["last_school_year"].'00'.$id_max->max_id+1;
	    $password = md5($post["last_school_year"].'00'.$id_max->max_id+1);
	    $user['password'] = md5($password);
	    $user['level'] = "Calon Siswa";
	    $this->db->insert('psb_users', $user);

		if ($school_level == "SMA") {
			$registrants = $this->registrants_model_senior;
        	$registrants->save();
		}elseif ($school_level == "SMP") {
			$registrants = $this->registrants_model_junior;
        	$registrants->save();
		}
        $this->session->set_flashdata('success', 'Your data is successfully entered. 
        	<br><br>Silahkan masuk ke <a href="http://localhost/almazaya_psb" target="blank">Sistem Penerimaan Siswa Baru</a> untuk melengkapi biodata dan persyaratan pendaftaran dengan username dan password berikut.
        	<br>Username: '.$user["username"].'
        	<br>Password: '.$password.'
        	<br><br>Jangan lupa simpanlah username dan password ini!!!');
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
