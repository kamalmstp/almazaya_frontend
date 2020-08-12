<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->model("registrants_model");
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
		$registrants = $this->registrants_model;
        $registrants->save();
        $this->session->set_flashdata('success', 'Success!');
        redirect('welcome');
	}
}
