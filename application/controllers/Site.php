<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
    public function index()
    {
        $data["title"] = "Page d'accueil";

        $this->load->view('common/header', $data);
        $this->load->view('site/index', $data);
        $this->load->view('common/footer', $data);
    }

    public function contact()
    {
        $this->load->helper("form");

        $data["title"] = "Contact";

        $this->load->view('common/header', $data);
        $this->load->view('site/contact', $data);
        $this->load->view('common/footer', $data);
    }

}
