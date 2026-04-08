<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BlogPost;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Blog extends Component
{
    public string $activeCat = 'semua';
    public string $search = '';
    public ?int $openArticleId = null;

    public array $categories = [
        ['key' => 'semua', 'label' => '📋 Semua Artikel'],
        ['key' => 'panduan', 'label' => '📚 Panduan Bisnis'],
        ['key' => 'futsal', 'label' => '⚽ Futsal'],
        ['key' => 'padel', 'label' => '🎾 Padel'],
        ['key' => 'minisoccer', 'label' => '🟢 Mini Soccer'],
        ['key' => 'badminton', 'label' => '🏸 Badminton'],
        ['key' => 'material', 'label' => '🧱 Material'],
        ['key' => 'tips', 'label' => '💡 Tips Perawatan'],
    ];

    /**
     * Static article data — replace body with DB records when ready.
     */
    private function allArticles(): array
    {
        return [
            [
                'id' => 1,
                'cat' => 'panduan',
                'featured' => true,
                'title' => 'Panduan Lengkap Membangun Lapangan Futsal yang Menguntungkan di 2025',
                'excerpt' => 'Bisnis lapangan futsal masih sangat menjanjikan. Pelajari cara menghitung ROI, memilih lokasi strategis, dan memaksimalkan pendapatan lapangan Anda.',
                'date' => '15 Jan 2025',
                'read' => '12 menit',
                'catLabel' => '📚 Panduan Bisnis',
                'catColor' => 'text-emerald-700 bg-emerald-50 border-emerald-200',
                'tags' => ['futsal', 'bisnis', 'ROI'],
                'body' => '<h1>Panduan Lengkap Membangun Lapangan Futsal yang Menguntungkan di 2025</h1><p>Bisnis lapangan futsal tetap menjadi salah satu pilihan investasi properti olahraga yang paling menjanjikan di Indonesia. Dengan populasi muda yang besar dan budaya bermain futsal yang kuat, permintaan lapangan terus meningkat setiap tahunnya.</p><h2>Mengapa Bisnis Lapangan Futsal?</h2><p>Beberapa alasan mengapa bisnis ini terus tumbuh: populasi usia produktif Indonesia sangat besar, futsal dapat dimainkan kapan saja terlepas dari cuaca, biaya operasional relatif rendah dibanding olahraga lain, dan pendapatan dapat dimaksimalkan dari sewa lapangan, turnamen, dan kantin.</p><h2>Menghitung ROI Lapangan Futsal</h2><p>Dengan asumsi modal Rp 500 juta untuk 1 lapangan indoor, harga sewa Rp 150.000/jam, dan tingkat hunian 70%, Anda bisa mendapatkan pendapatan bruto sekitar Rp 126 juta per bulan. Setelah biaya operasional, ROI bisa tercapai dalam 18–24 bulan.</p><div class="tip-box">💡 Konsultasi dengan tim GreenDeahan untuk mendapatkan analisis bisnis lapangan futsal yang disesuaikan dengan lokasi dan anggaran Anda!</div>',
            ],
            [
                'id' => 2,
                'cat' => 'futsal',
                'featured' => false,
                'title' => 'Perbedaan Lantai Futsal: Vinyl, Interlock, dan Parket — Mana yang Terbaik?',
                'excerpt' => 'Pilihan lantai sangat mempengaruhi kenyamanan bermain dan biaya perawatan. Simak perbandingan lengkapnya sebelum Anda memutuskan.',
                'date' => '8 Jan 2025',
                'read' => '8 menit',
                'catLabel' => '⚽ Futsal',
                'catColor' => 'text-green-700 bg-green-50 border-green-200',
                'tags' => ['futsal', 'lantai', 'material'],
                'body' => '<h1>Perbedaan Lantai Futsal: Vinyl, Interlock, dan Parket</h1><p>Pemilihan jenis lantai adalah keputusan paling krusial dalam pembangunan lapangan futsal. Setiap material memiliki karakteristik, kelebihan, dan kekurangan yang perlu Anda pahami.</p><h2>Lantai Vinyl Sport</h2><p>Vinyl sport adalah pilihan paling populer untuk futsal indoor. Terbuat dari PVC berkualitas tinggi, lantai ini memberikan bounce yang konsisten, anti-slip, dan nyaman di lutut. Harga berkisar Rp 180.000–250.000/m².</p><h2>Lantai Interlock</h2><p>Ideal untuk lapangan outdoor maupun indoor. Sistem interlocking memudahkan pemasangan dan penggantian tile yang rusak. Drainase baik, tahan cuaca ekstrem. Harga Rp 120.000–180.000/m².</p><h2>Lantai Parket Kayu</h2><p>Pilihan premium untuk turnamen resmi. Memberikan feel bermain terbaik, namun memerlukan perawatan lebih intensif dan tidak cocok untuk outdoor. Harga Rp 350.000–600.000/m².</p><div class="tip-box">💡 Tim GreenDeahan akan membantu Anda memilih jenis lantai yang sesuai dengan anggaran dan target pasar lapangan Anda.</div>',
            ],
            [
                'id' => 3,
                'cat' => 'padel',
                'featured' => false,
                'title' => 'Standar Internasional Lapangan Padel: Panduan Lengkap untuk Pembangun',
                'excerpt' => 'Padel adalah olahraga yang sedang booming di Indonesia. Pastikan lapangan Anda memenuhi standar FIP sebelum membangun.',
                'date' => '2 Jan 2025',
                'read' => '10 menit',
                'catLabel' => '🎾 Padel',
                'catColor' => 'text-orange-700 bg-orange-50 border-orange-200',
                'tags' => ['padel', 'standar', 'FIP'],
                'body' => '<h1>Standar Internasional Lapangan Padel</h1><p>Padel adalah olahraga racket yang sedang mengalami pertumbuhan pesat di Indonesia. Untuk memastikan lapangan Anda memenuhi standar internasional FIP (Federación Internacional de Pádel), berikut panduan lengkapnya.</p><h2>Dimensi Lapangan</h2><ul><li><strong>Panjang:</strong> 20 meter</li><li><strong>Lebar:</strong> 10 meter</li><li><strong>Tinggi kaca belakang:</strong> 3 meter</li></ul><h2>Spesifikasi Material</h2><ul><li><strong>Kaca:</strong> Tempered safety glass minimum 10mm</li><li><strong>Lantai:</strong> Artificial grass padel 8–12mm dengan infill silika</li><li><strong>Net:</strong> Tinggi 88cm di tengah, 92cm di sisi</li></ul><div class="tip-box">💡 GreenDeahan adalah spesialis lapangan padel di Indonesia. Konsultasi gratis untuk estimasi biaya dan desain!</div>',
            ],
            [
                'id' => 4,
                'cat' => 'tips',
                'featured' => false,
                'title' => '7 Tips Perawatan Rumput Sintetis Lapangan Futsal & Mini Soccer agar Tahan Lama',
                'excerpt' => 'Rumput sintetis berkualitas bisa bertahan 8–10 tahun jika dirawat dengan benar. Simak 7 tips penting dari tim ahli kami.',
                'date' => '28 Des 2024',
                'read' => '6 menit',
                'catLabel' => '💡 Tips Perawatan',
                'catColor' => 'text-yellow-700 bg-yellow-50 border-yellow-200',
                'tags' => ['perawatan', 'rumput sintetis'],
                'body' => '<h1>7 Tips Perawatan Rumput Sintetis agar Tahan Lama</h1><p>Rumput sintetis premium dapat bertahan 8–10 tahun dengan perawatan yang tepat. Berikut 7 tips dari tim ahli GreenDeahan.</p><h2>1. Sikat Secara Rutin</h2><p>Sikat bulu rumput sintetis menggunakan power brush seminggu sekali untuk menjaga tegaknya serat dan distribusi infill yang merata.</p><h2>2. Bersihkan Sampah Segera</h2><p>Jangan biarkan sampah daun, plastik, atau puntung rokok menumpuk. Gunakan blower daun atau sapu khusus setelah setiap sesi bermain.</p><h2>3. Periksa dan Tambah Infill</h2><p>Periksa level infill (pasir silika/rubber crumb) setiap 3 bulan. Infill yang berkurang harus segera ditambah untuk menjaga performa dan ketahanan serat.</p><div class="tip-box">💡 GreenDeahan menyediakan layanan maintenance berkala untuk lapangan yang kami bangun. Hubungi kami untuk paket perawatan terbaik!</div>',
            ],
            [
                'id' => 5,
                'cat' => 'material',
                'featured' => false,
                'title' => 'Mengenal Jenis Rumput Sintetis: FIFA Quality Pro vs FIFA Inspected',
                'excerpt' => 'Tidak semua rumput sintetis diciptakan sama. Ketahui perbedaan sertifikasi FIFA dan mana yang tepat untuk lapangan Anda.',
                'date' => '20 Des 2024',
                'read' => '7 menit',
                'catLabel' => '🧱 Material',
                'catColor' => 'text-stone-700 bg-stone-50 border-stone-200',
                'tags' => ['material', 'rumput sintetis', 'FIFA'],
                'body' => '<h1>Mengenal Jenis Rumput Sintetis: FIFA Quality Pro vs FIFA Inspected</h1><p>FIFA memberikan dua tingkat sertifikasi untuk rumput sintetis yang digunakan di lapangan sepak bola dan futsal. Memahami perbedaan ini penting sebelum Anda berinvestasi.</p><h2>FIFA Quality Pro</h2><p>Sertifikasi tertinggi dari FIFA. Rumput dengan label ini memenuhi standar paling ketat untuk performa, ketahanan, dan keamanan pemain. Cocok untuk lapangan kompetisi resmi dan turnamen profesional.</p><h2>FIFA Inspected (FIFA Quality)</h2><p>Satu level di bawah Quality Pro, namun masih memenuhi standar FIFA untuk penggunaan umum dan kompetisi amatir. Harga lebih terjangkau dengan performa yang tetap sangat baik.</p><div class="tip-box">💡 Untuk lapangan bisnis komersial, FIFA Quality sudah lebih dari cukup dan memberikan ROI yang lebih baik. Konsultasikan kebutuhan Anda dengan GreenDeahan!</div>',
            ],
        ];
    }

    public function getArticlesProperty(): array
    {
        return collect($this->allArticles())
            ->filter(function ($a) {
                $matchCat = $this->activeCat === 'semua' || $a['cat'] === $this->activeCat;
                $matchSearch = !$this->search
                    || str_contains(strtolower($a['title']), strtolower($this->search))
                    || str_contains(strtolower($a['excerpt']), strtolower($this->search));
                return $matchCat && $matchSearch;
            })
            ->values()
            ->toArray();
    }

    public function getFeaturedArticleProperty(): ?array
    {
        return collect($this->allArticles())->firstWhere('featured', true);
    }

    public function getOpenArticleProperty(): ?array
    {
        if ($this->openArticleId === null)
            return null;
        return collect($this->allArticles())->firstWhere('id', $this->openArticleId);
    }

    public function setCat(string $cat): void
    {
        $this->activeCat = $cat;
        $this->search = '';
    }

    public function openArticle(int $id): void
    {
        $this->openArticleId = $id;
    }

    public function closeArticle(): void
    {
        $this->openArticleId = null;
    }

    public function render()
    {
        return view('livewire.blog', [
            'articles' => $this->articles,
            'featuredArticle' => $this->featuredArticle,
            'openArticle' => $this->openArticle,
        ]);
    }
}