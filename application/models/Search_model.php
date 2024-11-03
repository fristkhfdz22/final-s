<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {
    
    public function search($query) {
        $results = [];

        // Pencarian di tabel berita
        $this->db->like('judul', $query);
        $this->db->or_like('konten', $query);
        $berita = $this->db->get('berita')->result_array();
        if ($berita) {
            $results['berita'] = $berita;
        }

        // Pencarian di tabel ekstrakurikuler
        $this->db->reset_query();
        $this->db->like('nama_ekstra', $query);
        $this->db->or_like('deskripsi', $query);
        $ekstrakurikuler = $this->db->get('ekstrakurikuler')->result_array();
        if ($ekstrakurikuler) {
            $results['ekstrakurikuler'] = $ekstrakurikuler;
        }

        // Pencarian di tabel fasilitas
        $this->db->reset_query();
        $this->db->like('judul', $query);
        $this->db->or_like('deskripsi', $query);
        $fasilitas = $this->db->get('fasilitas')->result_array();
        if ($fasilitas) {
            $results['fasilitas'] = $fasilitas;
        }

        // Pencarian di tabel galeri
        $this->db->reset_query();
        $this->db->like('judul', $query);
        $this->db->or_like('deskripsi', $query);
        $galeri = $this->db->get('galeri')->result_array();
        if ($galeri) {
            $results['galeri'] = $galeri;
        }

        // Pencarian di tabel prestasi
        $this->db->reset_query();
        $this->db->like('judul', $query);
        $this->db->or_like('deskripsi', $query);
        $prestasi = $this->db->get('prestasi')->result_array();
        if ($prestasi) {
            $results['prestasi'] = $prestasi;
        }

        // Pencarian di tabel jurusan
        $this->db->reset_query();
        $this->db->like('nama', $query);
        $this->db->or_like('deskripsi', $query);
        $jurusan = $this->db->get('jurusan')->result_array();
        if ($jurusan) {
            $results['jurusan'] = $jurusan;
        }

        // Pencarian di tabel sejarah
        $this->db->reset_query();
        $this->db->like('judul', $query);
        $this->db->or_like('konten', $query);
        $sejarah = $this->db->get('sejarah')->result_array();
        if ($sejarah) {
            $results['sejarah'] = $sejarah;
        }

        // Pencarian di tabel visi_misi
        $this->db->reset_query();
        $this->db->like('visi', $query);
        $this->db->or_like('misi', $query);
        $visi_misi = $this->db->get('visi_misi')->result_array();
        if ($visi_misi) {
            $results['visi_misi'] = $visi_misi;
        }

        $this->db->reset_query();
        $this->db->like('title', $query);
        $this->db->or_like('description', $query);
        $info_ppdb = $this->db->get(' info_ppdb')->result_array();
        if ($info_ppdb) {
            $results['info_ppdb'] = $info_ppdb;
        }
        
        $this->db->like('nama', $query);
        $gurustaff = $this->db->get(' gurustaff')->result_array();
        if ($gurustaff) {
            $results['gurustaff'] = $gurustaff;
        }
        return $results; 
    }
}

