<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pricing extends CI_Controller
{
	public function index()
	{
		$data = array(
			'page' => 'pricing'
		);

		$this->load->view('layout/content', $data);
	}
}
