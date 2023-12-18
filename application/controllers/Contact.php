<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contact extends Public_Controller {

    private $table = 'halaman';
    // public $lang = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
{
    $data = array(  'title'     => 'Halo',
                    'isi'       => 'homepage/contact/index');

    $this->load->view('homepage/_layout/wrapper', $data);
}   
    public function tambah()
{
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $data = array(  'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'subject' => $subject,
                        'message' => $message);

        $this->crud->i('cmessage', $data);

        redirect(base_url());
    }
}