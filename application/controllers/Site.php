<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
    public function index()
    {
        $this->load->view('common/header');
        $this->load->view('site/index');
        $this->load->view('common/footer');
    }
}
