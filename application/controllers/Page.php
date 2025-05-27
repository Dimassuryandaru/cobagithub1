<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends CI_Controller {
    
    
    public function index()
    {
        $this->load->view('dashboard');
    }
    public function dashboard()
    {
        $this->load->view('dashboard');
    }
    public function tabel_mahasiswa()
    {
        $this->load->view('tabel_mahasiswa');
    }

    public function tabel_dosen()
    {
        $this->load->view('tabel_dosen');
    }

    public function daftar_matkul()
    {
        $this->load->view('matkul');
    }

    public function tabel_kelas()
    {
        $this->load->view('tabel_kelas');
    }
}
