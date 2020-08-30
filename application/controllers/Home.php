<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data = array(
			'page' => 'home'
		);

		$this->load->view('layout/content', $data);
	}
}
