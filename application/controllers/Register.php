<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
	}
    	public function index()
	{
		$this->load->view('register');
	}
}
