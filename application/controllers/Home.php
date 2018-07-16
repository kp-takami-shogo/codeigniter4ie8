<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$header['title'] = 'Home';
		$header['css_path'] = 'home';
		$this->load->view('header', $header);

		$this->load->view('home/index');

		$this->load->view('footer');
	}
}
