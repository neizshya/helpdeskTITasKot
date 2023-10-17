<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function main_dashboard(): string
    {
        $activePage = 'dashboard'; // Set this variable to indicate the active 
        $title = 'Dashboard';
        return view('pages/dashboard/maindashboard.php', ['activePage' => $activePage, 'title' => $title]);
    }

    public function layanan_pengembangan(): string
    {
        $data = [
            [
                'date' => '2023-01-01',
                'event' => 'Wawancara',
                'status' => true,
            ],
            [
                'date' => '2023-02-15',
                'event' => 'Konfirmasi Design',
                'status' => true,
            ],
            [
                'date' => '2023-02-15',
                'event' => 'Perancangan Database',
                'status' => false,
            ], [
                'date' => '2023-02-15',
                'event' => 'Pengembangan Software',
                'status' => false,
            ],
            [
                'date' => '2023-02-15',
                'event' => 'Debugging',
                'status' => false,
            ],
            [
                'date' => '2023-02-15',
                'event' => 'Testing',
                'status' => false,
            ],
            [
                'date' => '2023-02-15',
                'event' => 'User Manual',
                'status' => false,
            ], [
                'date' => '2023-02-15',
                'event' => 'Implementasi',
                'status' => false,
            ],
        ];
        $activePage = 'layanan_pengembangan'; // Set this variable to indicate the active page
        $title = 'Layanan Pengembangan Aplikasi';
        return view('pages/dashboard/layanan_pengembangan.php', ['activePage' => $activePage, 'title' => $title, 'timeline' => $data]);
    }
}