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
    public function layanan_pengembangan(): string
    {
        return view('pages/layanan_pengembangan_aplikasi.php');
    }
    public function hosting(): string
    {
        return view('pages/hosting.php');
    }
    public function backup(): string
    {
        return view('pages/backup.php');
    }
    public function jaringan(): string
    {
        $data['api_key'] = 'AIzaSyAWgRbJ2zirzZu-LQeM72OWuVpzdeNYiIU';
        return view('pages/jaringan.php', $data);
    }
}
