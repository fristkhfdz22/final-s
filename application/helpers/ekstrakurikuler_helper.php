<?php
function get_ekstrakurikuler_list()
{
    // Mendapatkan instance CodeIgniter
    $CI = &get_instance();

    // Memuat model 'Jurusan_model'
    $CI->load->model('Ekstrakurikuler_model');

    // Mengambil semua data jurusan dan mengembalikannya
    return $CI->Ekstrakurikuler_model->get_all_ekstrakurikuler();
}
