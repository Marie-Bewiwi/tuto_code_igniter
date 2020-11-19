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
            $this->load->library('email');
            $this->config->load('email', true);
            $this->email->initialize($this->config->item('email'));
            $this->email->from($this->input->post('email'), $this->input->post('name'));
            $this->email->to('marie.a.s45@gmail.com');
            $this->email->subject($this->input->post('title'));
            $this->email->message($this->input->post('message'));

            if ($this->email->send()) {
                $data['result_class'] = "alert-success";
                $data['result_message'] = "Merci de nous avoir envoyé ce mail. Nous y répondrons dans les meilleurs délais.";
            } else {
                $data['result_class'] = "alert-danger";
                $data['result_message'] = "Votre message n'a pas pu être envoyé. Nous mettons tout en oeuvre pour résoudre le problème.";
                // Ne faites jamais ceci dans le "vrai monde"
                $data['result_message'] .= "<pre>\n";
                $data['result_message'] .= $this->email->print_debugger();
                $data['result_message'] .= "</pre>\n";
                $this->email->clear();
            }
            $this->load->view('site/contact_result', $data);
        } else {
            $this->load->view('site/contact', $data);
        }
        $this->load->view('common/footer', $data);
    }

    public function apropos()
    {
        $data["title"] = "À propos de moi...";
        $this->load->view('common/header', $data);
        $this->load->view('site/apropos', $data);
        $this->load->view('common/footer', $data);
    }

}
