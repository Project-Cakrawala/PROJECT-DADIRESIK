<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formpesan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPesan');
        $this->load->model('m_invoice');
    }

    // fungsi index
    public function index($id_brg)
    {
        $data['title'] = ' Form Pemesanan';
        $data['invoice'] = $this->m_invoice->get_no_invoice();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pesan_model', 'pesan');
        $this->load->model('Menu_model', 'menu');
        $data['MenuUser'] = $this->menu->getMenuUser();
        $data['id_brg'] = $id_brg;
        //$data['barang'] = $this->pesan->tampilBarang();
        $this->load->view('public/template/head', $data);
        $this->load->view('public/template/menu_head');
        $this->load->view('public/home/formpesan', $data);
        $this->load->view('public/template/isipesanan');
        $this->load->view('public/template/end_content');
        $this->load->view('public/template/footer');
    }

    public function tambah_pesan()
    {

        $id_pemesanan = $this->input->post('id_pemesanan');
        $id_brg = $this->input->post('id_brg');
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('waktu');
        $metode = $this->input->post('recorded');

        $data = array(
            'id_pemesanan' => $id_pemesanan,
            'id' => $id,
            'id_brg' => $id_brg,
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'metode_bayar'    => $metode,
            'status' => 'Pending'

        );
        $this->db->insert('pemesanan', $data);

        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->order_by('id_pemesanan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->row_array();
        //$insert = $this->ModelPesan->tambah_data($data, 'pemesanan');
        //echo $result;
        $insert = $result['id_pemesanan'];

        redirect('FormPesan/struk_bayar/' . $insert);
    }

    public function struk_bayar($insert)
    {
        $data['title'] = ' Struk Pemesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pesan_model', 'pesan');
        $this->load->model('Menu_model', 'menu');
        $data['MenuUser'] = $this->menu->getMenuUser();
        $data['pemesanan'] = $this->ModelPesan->struk_bayar($insert);
        //$data['barang'] = $this->pesan->tampilBarang();
        $this->load->view('public/template/head', $data);
        $this->load->view('public/template/menu_head');
        $this->load->view('public/home/struk_bayar', $data);
        $this->load->view('public/template/isipesanan');
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
