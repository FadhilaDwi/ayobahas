<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket_tes extends CI_Controller
{

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

    public function store()
    {
        $this->form_validation->set_rules('tag', 'Tag', 'required|max_length[100]|is_unique[tags.name]');
        echo json_encode($this->form_validation->run());
    }
}
