<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();     
    }

	public function index()
	{
		$this->load->view('admin/index');
    }

    public function dashboard()
    {
        $data['content'] = $this->load->view('admin/layout/dashboard');
        $this->load->view('admin/index', $data);
    }
}
?>