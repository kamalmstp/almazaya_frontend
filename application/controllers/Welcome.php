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
        $school_level = $this->input->post("school_level");
		if ($school_level == "SMA") {
			$registrants = $this->registrants_model_senior;
        	$registrants->save();
		}elseif ($school_level == "SMP") {
			$registrants = $this->registrants_model_junior;
        	$registrants->save();
		}
        $this->session->set_flashdata('success', 'Your data is successfully entered');
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
