<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
     
    }

	public function index()
	{
		// $berita = $this->db->get('posts')->result_array();
		$this->db->select("*");
		$this->db->from("posts");
		$this->db->order_by("id", "desc");
		$this->db->limit(6);
		$berita = $this->db->get();

		$data['berita'] = $berita->result_array();
		$this->load->view('welcome_message', $data);
	}
}
