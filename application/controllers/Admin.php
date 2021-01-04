<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();     
    }

	public function indexsmp()
	{
		$this->load->view('admin/indexsmp');
  }

  public function indexsma()
	{
		$this->load->view('admin/indexsma');
  }

  public function login()
  {
    $this->load->view('admin/login');
  }

}
?>