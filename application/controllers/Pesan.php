<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    // fungsi index
    public function index()
    {
        $data['title'] = 'Pemesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pesan_model', 'pesan');
        $this->load->model('Menu_model', 'menu');
        $data['MenuUser'] = $this->menu->getMenuUser();
        $data['barang'] = $this->pesan->tampilBarang();
        $this->load->view('public/template/head', $data);
        $this->load->view('public/template/menu_head');
        $this->load->view('public/home/pesan', $data);
        $this->load->view('public/template/end_content');
        $this->load->view('public/template/footer');
    }
    public function cek()
    {
        $data['title'] = 'Cek Pemesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['MenuUser'] = $this->menu->getMenuUser();
        $this->load->view('public/template/head', $data);
        $this->load->view('public/template/menu_head');
        $this->load->view('public/home/cek');
        $this->load->view('public/template/isipesanan');
        $this->load->view('public/template/end_content');
        $this->load->view('public/template/footer');
    }
}
