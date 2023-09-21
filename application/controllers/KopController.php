<?php

defined('BASEPATH') or exit('No direct script access allowed');

class KopController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->helper('url');
        ini_set('memory_limit', '1024M');
    }

    public function index()
    {
        $path = base_url('public/image/logo.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $size_paper = [0, 0, 640, 480]; // [left, top, width, height
        $this->pdf->set_paper($size_paper, 'portrait');
        $this->pdf->filename = "kop-surat.pdf";
        // $this->load->view('pdf', [
        //     'logo' => $base64,
        // ]);
        $this->pdf->load_view('pdf', [
            'logo' => $base64,
        ]);
    }
}
