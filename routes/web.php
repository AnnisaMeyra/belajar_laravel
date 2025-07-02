<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=> 'home page']);
});

Route::get('/about', function () {
    return view('about', ['title'=> 'about']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title'=> 'blog',
        'posts' => [
            [
                'id'=> 1,
                'slug' => 'monitoring-zabbix',
                'title' => 'Monitoring Zabbix',
                'author' => 'ANNISA MEYRA 31',
                'body' => 'Monitoring Zabbix adalah proses pengawasan infrastruktur jaringan, server, aplikasi, dan layanan secara otomatis menggunakan platform Zabbix. Zabbix merupakan tools open-source yang dirancang untuk melakukan monitoring secara real-time, mengumpulkan data performa, serta memberikan notifikasi atau alert jika terjadi gangguan atau anomali.'
            ],
            [
                'id'=> 2,
                'slug' => 'konfigurasi-mikrotik',
                'title' => 'Konfigurasi MikroTik',
                'author' => 'ANNISA MEYRA 31',
                'body' => 'MikroTik adalah perangkat router yang sering digunakan untuk mengelola jaringan. Konfigurasinya bisa dilakukan melalui Winbox atau WebFig.'
            ],
            [
                'id'=> 3,
                'slug' => 'apa-itu-access-point',
                'title' => 'Apa Itu Access Point?',
                'author' => 'ANNISA MEYRA 31',
                'body' => 'Access Point adalah perangkat jaringan yang digunakan untuk menghubungkan perangkat wireless ke jaringan kabel seperti LAN.'
            ],
            [
                'id'=> 4,
                'slug' => 'modem-orbit-indonesia',
                'title' => 'Modem Orbit Indonesia',
                'author' => 'ANNISA MEYRA 31',
                'body' => 'Orbit adalah layanan internet dari Telkomsel yang menggunakan jaringan 4G LTE untuk memberikan konektivitas di area terpencil.'
            ],
            [
                'id'=> 5,
                'slug' => 'mengenal-server',
                'title' => 'Mengenal Server',
                'author' => 'ANNISA MEYRA 31',
                'body' => 'Server adalah sistem komputer yang menyediakan layanan kepada komputer lain dalam jaringan, seperti file sharing atau hosting aplikasi.'
            ],
            [
                'id'=> 6,
                'slug' => 'web-server-adalah',
                'title' => 'Web Server Adalah...',
                'author' => 'ANNISA MEYRA 31',
                'body' => 'Web server adalah perangkat lunak atau perangkat keras yang menyajikan konten website ke pengguna melalui protokol HTTP.'
            ],
            [
                'id'=> 7,
                'slug' => 'fungsi-log-server',
                'title' => 'Fungsi Log Server',
                'author' => 'ANNISA MEYRA 31',
                'body' => 'Log server berfungsi sebagai tempat penyimpanan semua log aktivitas jaringan, server, dan sistem keamanan untuk kebutuhan audit dan analisa.'
            ],
            [
                'id'=> 8,
                'slug' => 'pengertian-database',
                'title' => 'Pengertian Database',
                'author' => 'ANNISA MEYRA 31',
                'body' => 'Database adalah kumpulan data yang disimpan secara sistematis dalam komputer dan dapat diakses menggunakan software manajemen basis data.'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id'=> 1,
            'slug' => 'monitoring-zabbix',
            'title' => 'Monitoring Zabbix',
            'author' => 'ANNISA MEYRA 31',
            'body' => 'Monitoring Zabbix adalah proses pengawasan infrastruktur jaringan, server, aplikasi, dan layanan secara otomatis menggunakan platform Zabbix. Zabbix merupakan tools open-source yang dirancang untuk melakukan monitoring secara real-time, mengumpulkan data performa, serta memberikan notifikasi atau alert jika terjadi gangguan atau anomali.'
        ],
        [
            'id'=> 2,
            'slug' => 'konfigurasi-mikrotik',
            'title' => 'Konfigurasi MikroTik',
            'author' => 'ANNISA MEYRA 31',
            'body' => 'MikroTik adalah perangkat router yang sering digunakan untuk mengelola jaringan. Konfigurasinya bisa dilakukan melalui Winbox atau WebFig.'
        ],
        [
            'id'=> 3,
            'slug' => 'apa-itu-access-point',
            'title' => 'Apa Itu Access Point?',
            'author' => 'ANNISA MEYRA 31',
            'body' => 'Access Point adalah perangkat jaringan yang digunakan untuk menghubungkan perangkat wireless ke jaringan kabel seperti LAN.'
        ],
        [
            'id'=> 4,
            'slug' => 'modem-orbit-indonesia',
            'title' => 'Modem Orbit Indonesia',
            'author' => 'ANNISA MEYRA 31',
            'body' => 'Orbit adalah layanan internet dari Telkomsel yang menggunakan jaringan 4G LTE untuk memberikan konektivitas di area terpencil.'
        ],
        [
            'id'=> 5,
            'slug' => 'mengenal-server',
            'title' => 'Mengenal Server',
            'author' => 'ANNISA MEYRA 31',
            'body' => 'Server adalah sistem komputer yang menyediakan layanan kepada komputer lain dalam jaringan, seperti file sharing atau hosting aplikasi.'
        ],
        [
            'id'=> 6,
            'slug' => 'web-server-adalah',
            'title' => 'Web Server Adalah...',
            'author' => 'ANNISA MEYRA 31',
            'body' => 'Web server adalah perangkat lunak atau perangkat keras yang menyajikan konten website ke pengguna melalui protokol HTTP.'
        ],
        [
            'id'=> 7,
            'slug' => 'fungsi-log-server',
            'title' => 'Fungsi Log Server',
            'author' => 'ANNISA MEYRA 31',
            'body' => 'Log server berfungsi sebagai tempat penyimpanan semua log aktivitas jaringan, server, dan sistem keamanan untuk kebutuhan audit dan analisa.'
        ],
        [
            'id'=> 8,
            'slug' => 'pengertian-database',
            'title' => 'Pengertian Database',
            'author' => 'ANNISA MEYRA 31',
            'body' => 'Database adalah kumpulan data yang disimpan secara sistematis dalam komputer dan dapat diakses menggunakan software manajemen basis data.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=> 'contact']);
});
