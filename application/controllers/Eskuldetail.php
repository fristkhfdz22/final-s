<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eskuldetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ekstrakurikuler_model');
    }
    public function index($id)
    {
        log_message('debug', "ID yang diteruskan: " . $id); // Cek ID yang diteruskan
    
        $data['eskul'] = $this->Ekstrakurikuler_model->get_eskul_by_id($id);
    
        // Cek hasil query
        log_message('debug', print_r($data['eskul'], true));
    
        if (empty($data['eskul'])) {
            show_404();
        }
        $data['ekstrakurikuler_list'] = $this->Ekstrakurikuler_model->get_all_ekstrakurikuler();
        $this->load->view('user/header', $data);
        $this->load->view('user/eskuldetail/eskuldetail', $data);
        $this->load->view('user/footer');
    }
    
}
