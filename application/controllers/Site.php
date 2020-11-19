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
        $this->load->library('form_validation');

        $data["title"] = "Contact";

        $this->load->view('common/header', $data);
        if ($this->form_validation->run()) {
            $this->load->view('site/contact_result', $data);
        } else {
            $this->load->view('site/contact', $data);
        }
        $this->load->view('common/footer', $data);
    }

}
