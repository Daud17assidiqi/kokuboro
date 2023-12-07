<?php 
class Anggota extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function index()
    {
        $data['judul'] = 'Daftar Anggota';
        $this->load->view('templates/header',$data);
        $this->load->view('anggota/index' );
        $this->load->view('templates/footer');

    }
}

?>