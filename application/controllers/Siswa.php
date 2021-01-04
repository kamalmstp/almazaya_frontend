<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();     
    }

    public function index()
	{
		$this->vars['content'] = 'admin/siswa/dashboard';
		$this->load->view('admin/index', $this->vars);
    }

    public function biodata()
	{
		$this->vars['content'] = 'admin/siswa/biodata';
		$this->load->view('admin/index', $this->vars);
    }

    public function berkas()
	{
		$this->vars['content'] = 'admin/siswa/berkas';
		$this->load->view('admin/index', $this->vars);
    }
}
?>