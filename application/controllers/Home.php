<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

    private $table = 'halaman';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { 
        $data = array(  'title'     => 'Beranda Departemen Sistem Perkapalan',
                        'isi'       => 'homepage/home/landing_#id');
        $this->load->view('homepage/_layout/wrapper', $data);
    }

    public function create_pass()
    {
        $pass = (do_hash('maul'));
        var_dump($pass);
    }
}