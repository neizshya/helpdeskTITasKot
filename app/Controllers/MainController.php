<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function index(): string
    {
        return view('layout/main_layout.php');
    }
    public function cek_ticket(): string
    {
        return view('pages/cek_ticket.php');
    }
    public function pendaftaran_email(): string
    {
        return view('pages/pendaftaran_email.php');
    }
    public function tamu(): string
    {
        return view('pages/buku_tamu.php');
    }
    public function sertifikat(): string
    {
        return view('pages/e-sertifikat.php');
    }
    public function verifikasi_pdf(): string
    {
        return view('pages/verifikasi_pdf.php');
    }
}
