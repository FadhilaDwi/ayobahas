<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket_tes extends CI_Controller
{

    //load model
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $data = array(
            'content' => 'paket_tes/form',
        );
        $this->load->view('layout/home/template', $data);
    }

    public function store($success = null, $error = null)
    {
        // $this->form_validation->set_rules('tag', 'Tag', 'required|max_length[2]|is_unique[tags.name]');
        $this->form_validation->set_rules('tag', 'Tag', 'required|max_length[2]');
        $this->form_validation->set_rules('desc', 'Description', 'required|max_length[255]');
        if ($this->form_validation->run() == TRUE) {
            if ($success) {
                $this->session->set_flashdata('success', $success);
            }
            if ($error) {
                $this->session->set_flashdata('error', $error);
            }
            redirect('paket_tes', 'refresh');
        } else {
            // echo json_encode('asd');
            $this->index();
        }
    }
}
