<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Beranda extends Component
{
    public array $stats = [
        ['count' => 500, 'label' => 'Proyek Selesai'],
        ['count' => 150, 'label' => 'Kota di Indonesia'],
        ['count' => 15, 'label' => 'Tahun Pengalaman'],
        ['count' => 100, 'label' => 'Klien Puas'],
    ];

    public array $services = [
        [
            'icon' => '⚽',
            'title' => 'Lapangan Futsal',
            'desc' => 'Konstruksi lapangan futsal standar FIFA dengan lantai interlock, vinyl, atau parket. Indoor maupun outdoor.',
            'specs' => ['Ukuran: 25×15 m s/d 42×25 m', 'Lantai: Interlock / Vinyl / Parket', 'Pencahayaan LED standar FIFA'],
        ],
        [
            'icon' => '🟢',
            'title' => 'Mini Soccer',
            'desc' => 'Lapangan mini soccer dengan rumput sintetis premium, cocok untuk area residensial maupun komersial.',
            'specs' => ['Ukuran: 30×20 m s/d 60×40 m', 'Rumput Sintetis Premium', 'Pagar Jaring Galvanis'],
        ],
        [
            'icon' => '🎾',
            'title' => 'Lapangan Padel',
            'desc' => 'Lapangan padel dengan kaca tempered standar internasional. Indoor dan outdoor tersedia.',
            'specs' => ['Ukuran: 10×20 m (standar FIP)', 'Kaca Tempered 10–12 mm', 'Artificial Grass Padel'],
        ],
        [
            'icon' => '🏸',
            'title' => 'Lapangan Badminton',
            'desc' => 'Lapangan badminton dengan lantai vinyl sport atau kayu keras, pencahayaan LED anti-silau.',
            'specs' => ['Ukuran: 13.4×6.1 m (standar BWF)', 'Lantai: Vinyl / Kayu Keras', 'Pencahayaan 500 Lux'],
        ],
    ];

    public array $faqs = [
        [
            'q' => 'Berapa lama proses pembangunan lapangan?',
            'a' => 'Tergantung jenis lapangan. Futsal indoor: 14–21 hari. Mini soccer: 21–30 hari. Padel: 14–25 hari. Badminton: 14–21 hari. Waktu dapat bervariasi tergantung kondisi lapangan dan lokasi.',
        ],
        [
            'q' => 'Apakah ada garansi konstruksi?',
            'a' => 'Ya! Kami memberikan garansi resmi konstruksi. Garansi struktur bangunan 5 tahun, garansi material lantai 2 tahun, dan garansi instalasi listrik 1 tahun. Detail garansi tercantum dalam kontrak resmi.',
        ],
        [
            'q' => 'Bagaimana sistem pembayaran?',
            'a' => 'Sistem pembayaran DP 30–40% di awal, progress 30–40% saat pengerjaan 50%, dan pelunasan setelah lapangan 100% selesai dan Anda puas. Tidak ada biaya tersembunyi.',
        ],
        [
            'q' => 'Apakah melayani seluruh Indonesia?',
            'a' => 'Ya, kami melayani seluruh wilayah Indonesia. Sudah ada proyek di 150+ kota dari Sabang sampai Merauke. Biaya mobilisasi tim ke luar Jawa akan diinformasikan saat konsultasi.',
        ],
        [
            'q' => 'Berapa estimasi biaya pembuatan lapangan?',
            'a' => 'Biaya sangat bervariasi tergantung jenis, ukuran, material, dan lokasi. Hubungi kami untuk mendapatkan estimasi biaya yang akurat dan sesuai kebutuhan Anda. Konsultasi 100% gratis!',
        ],
    ];

    public function render()
    {
        return view('livewire.beranda');
    }
}