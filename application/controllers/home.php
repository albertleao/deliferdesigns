<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()	{

		$this->load->view("meta/head");
		$this->load->view("layouts/header");
		$this->load->view('welcome');
		$this->load->view("layouts/footer");

	}
}
