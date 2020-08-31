<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
   public function index()
   {
      $data = array(
         'page' => 'detail'
      );

      $this->load->view('layout/content', $data);
   }
}
