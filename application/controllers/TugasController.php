<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TugasController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->helper('url');
        $this->load->database();
        ini_set('memory_limit', '1024M');
    }

    public function index()
    {
        $query = $this->db->query("SELECT * FROM profil LIMIT 1");
        $data = $query->result();
        $nama = $data[0]->name;
        $dateFormat = $data[0]->date_birth;
        $tanggalLahir = date_format(date_create($dateFormat), 'd M Y');
        $tempatLahir = $data[0]->place_of_birth;
        $alamat = $data[0]->address;


        $path = base_url('public/image/profile.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $size_paper = [0, 0, 480, 286]; // [left, top, width, height
        $this->pdf->set_paper($size_paper, 'portrait');
        $this->pdf->filename = "tugas.pdf";
        // $this->load->view('tugas', [
        //     'logo' => $base64,
        //     'nama' => $nama,
        //     'tanggalLahir' => $tanggalLahir,
        //     'tempatLahir' => $tempatLahir,
        //     'alamat' => $alamat,
        // ]);
        $this->pdf->load_view('tugas', [
            'logo' => $base64,
            'nama' => $nama,
            'tanggalLahir' => $tanggalLahir,
            'tempatLahir' => $tempatLahir,
            'alamat' => $alamat,
        ]);
    }
}
