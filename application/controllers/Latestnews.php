<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Latestnews extends Public_Controller {

    private $table = 'halaman';
    // public $lang = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
{
    $data = array(  'title'     => 'Halo',
                    'isi'       => 'homepage/latestnews/index');

    $this->load->view('homepage/_layout/wrapper', $data);
}   
}