<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['galeri'] = $this->Galeri_model->get_all_galeri();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/galeri/galeri_list', $data);
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/galeri/galeri_form');
        $this->load->view('admin/footer');
    }

    public function store()
    {
        // Konfigurasi upload
        $config['upload_path'] = './uploads/galeri/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('img')) {
            $uploaded_data = $this->upload->data();
            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'img' => $uploaded_data['file_name']
            ];

            $this->Galeri_model->insert_galeri($data);
            redirect('galeri');
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('galeri/create');
        }
    }

    public function edit($id)
    {
        $data['galeri'] = $this->Galeri_model->get_galeri_by_id($id);
        if (!$data['galeri']) {
            // Jika data tidak ditemukan, alihkan ke halaman utama
            $this->session->set_flashdata('error', 'Data galeri tidak ditemukan.');
            redirect('galeri');
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/galeri/galeri_form', $data);
        $this->load->view('admin/footer');
    }

    public function update($id)
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];


        if ($_FILES['img']['name']) {
            $config['upload_path'] = './uploads/galeri/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('img')) {

                $existing_galeri = $this->Galeri_model->get_galeri_by_id($id);
                if ($existing_galeri && file_exists('./uploads/galeri/' . $existing_galeri->img)) {
                    unlink('./uploads/galeri/' . $existing_galeri->img);
                }

                $uploaded_data = $this->upload->data();
                $data['img'] = $uploaded_data['file_name'];
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
            }
        }

        $this->Galeri_model->update_galeri($id, $data);
        redirect('galeri');
    }

    public function delete($id)
    {
        $existing_galeri = $this->Galeri_model->get_galeri_by_id($id);
        if ($existing_galeri && file_exists('./uploads/galeri/' . $existing_galeri->img)) {
            unlink('./uploads/galeri/' . $existing_galeri->img);
        }

        $this->Galeri_model->delete_galeri($id);
        redirect('galeri');
    }

    public function view()
    {
        $data['galeri'] = $this->Galeri_model->get_all_galeri();
        $this->load->view('user/header');
        $this->load->view('user/galeri_view', $data);
        $this->load->view('user/footer');
    }
}
