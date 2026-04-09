<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'category' => 'panduan',
                'title' => 'Panduan Lengkap Membuka Bisnis Lapangan Futsal yang Menguntungkan',
                'excerpt' => 'Ingin membuka bisnis lapangan futsal? Pelajari langkah-langkah strategis dari riset lokasi, modal awal, hingga cara mendapatkan pelanggan setia.',
                'body' => '<h2>Mengapa Bisnis Lapangan Futsal Menjanjikan?</h2><p>Futsal adalah olahraga yang terus tumbuh popularitasnya di Indonesia. Dengan modal yang relatif terjangkau dibanding olahraga lain, lapangan futsal bisa menjadi investasi yang sangat menguntungkan.</p><h2>Langkah 1: Riset Lokasi</h2><p>Pilih lokasi yang strategis, dekat dengan pemukiman padat, kampus, atau kawasan perkantoran. Pastikan aksesibilitas mudah dan memiliki lahan parkir yang memadai.</p><h2>Langkah 2: Hitung Modal Awal</h2><p>Modal awal pembangunan lapangan futsal standar berkisar antara Rp 150 juta hingga Rp 400 juta tergantung material dan lokasi. Biaya terbesar biasanya pada material lantai dan atap.</p><h2>Langkah 3: Pilih Material Berkualitas</h2><p>Gunakan material lantai vinyl atau rumput sintetis berkualitas tinggi. Lantai yang baik tidak hanya awet tetapi juga mencegah cedera pemain.</p><h2>Langkah 4: Strategi Pemasaran</h2><p>Manfaatkan media sosial Instagram dan TikTok untuk promosi. Buat program member bulanan dan turnamen kecil untuk membangun komunitas.</p><p>Dengan perencanaan yang matang, bisnis lapangan futsal Anda bisa mulai balik modal dalam 2-3 tahun.</p>',
                'cat_label' => '📚 Panduan Bisnis',
                'cat_color' => 'bg-blue-100 text-blue-700',
                'read_time' => '8 menit',
                'tags' => ['futsal', 'bisnis', 'panduan'],
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'category' => 'futsal',
                'title' => 'Vinyl vs Rumput Sintetis: Mana Material Terbaik untuk Lapangan Futsal?',
                'excerpt' => 'Membandingkan dua material paling populer untuk lapangan futsal: vinyl interlock dan rumput sintetis. Temukan mana yang paling cocok untuk kebutuhan Anda.',
                'body' => '<h2>Vinyl Interlock</h2><p>Vinyl interlock adalah material plastik berbentuk puzzle yang saling mengunci. Keunggulannya adalah pemasangan mudah, tahan air, tidak licin, dan mudah diperbaiki jika ada bagian yang rusak.</p><p><strong>Kelebihan:</strong> Harga lebih terjangkau, mudah dipasang, tidak memerlukan backing rubber, mudah dibersihkan.</p><p><strong>Kekurangan:</strong> Kurang natural, bisa terasa keras di lutut untuk bermain lama.</p><h2>Rumput Sintetis</h2><p>Rumput sintetis memberikan pengalaman bermain yang lebih mendekati lapangan alami. Cocok untuk futsal indoor maupun outdoor.</p><p><strong>Kelebihan:</strong> Estetika natural, nyaman di lutut, daya tarik visual tinggi.</p><p><strong>Kekurangan:</strong> Harga lebih mahal, membutuhkan pasir silika dan rubber crumb, perawatan lebih intensif.</p><h2>Rekomendasi Kami</h2><p>Untuk lapangan indoor dengan frekuensi pemakaian tinggi, vinyl interlock adalah pilihan terbaik. Untuk lapangan semi-outdoor atau yang mengutamakan estetika, rumput sintetis lebih unggul.</p>',
                'cat_label' => '⚽ Futsal',
                'cat_color' => 'bg-green-100 text-green-700',
                'read_time' => '6 menit',
                'tags' => ['futsal', 'material', 'vinyl', 'rumput sintetis'],
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(10),
            ],
            [
                'category' => 'padel',
                'title' => 'Tren Padel di Indonesia: Peluang Bisnis yang Belum Banyak Dilirik',
                'excerpt' => 'Padel adalah olahraga raket yang tengah booming di dunia dan mulai masuk Indonesia. Inilah saat terbaik untuk membangun lapangan padel dan meraih pasar yang belum jenuh.',
                'body' => '<h2>Apa Itu Padel?</h2><p>Padel adalah olahraga raket yang dimainkan di lapangan tertutup berukuran 20x10 meter dengan dinding kaca. Lebih mudah dipelajari dari tenis namun tetap kompetitif dan menyenangkan.</p><h2>Kenapa Padel Menjanjikan di Indonesia?</h2><p>Di Eropa, padel adalah olahraga dengan pertumbuhan tercepat. Di Indonesia, tren ini baru mulai dan jumlah lapangan masih sangat terbatas dibanding potensi pasarnya.</p><h2>Spesifikasi Lapangan Padel</h2><p>Lapangan padel membutuhkan dinding kaca atau mesh, lantai artificial grass khusus padel, pencahayaan minimal 300 lux, dan net setinggi 88 cm di tengah.</p><h2>Estimasi Investasi</h2><p>Satu lapangan padel standar membutuhkan investasi sekitar Rp 300-500 juta termasuk struktur, kaca, lantai, net, dan lighting. Harga sewa lapangan padel saat ini Rp 150-250 ribu per jam.</p>',
                'cat_label' => '🎾 Padel',
                'cat_color' => 'bg-purple-100 text-purple-700',
                'read_time' => '7 menit',
                'tags' => ['padel', 'bisnis', 'tren'],
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(15),
            ],
            [
                'category' => 'minisoccer',
                'title' => 'Perbedaan Mini Soccer dan Futsal: Panduan untuk Pengusaha Lapangan',
                'excerpt' => 'Banyak yang masih bingung membedakan mini soccer dengan futsal. Artikel ini menjelaskan perbedaan lapangan, aturan main, dan peluang bisnis keduanya.',
                'body' => '<h2>Ukuran Lapangan</h2><p>Lapangan futsal berukuran standar 40x20 meter (indoor). Mini soccer lebih besar, biasanya 60x40 meter, dimaksudkan untuk bermain di luar ruangan dengan format 7vs7.</p><h2>Material Lantai</h2><p>Futsal umumnya menggunakan vinyl atau parket kayu. Mini soccer hampir selalu menggunakan rumput sintetis karena berada di outdoor.</p><h2>Peluang Bisnis</h2><p>Mini soccer cocok jika Anda memiliki lahan luas di pinggir kota atau kawasan suburban. Investasi lebih besar namun harga sewa per jam juga lebih tinggi, berkisar Rp 400-800 ribu per jam.</p><h2>Kombinasi Keduanya</h2><p>Banyak pengusaha sukses membangun kompleks yang menggabungkan lapangan futsal indoor dan mini soccer outdoor dalam satu kawasan untuk memaksimalkan segmen pasar.</p>',
                'cat_label' => '🏟️ Mini Soccer',
                'cat_color' => 'bg-orange-100 text-orange-700',
                'read_time' => '5 menit',
                'tags' => ['mini soccer', 'futsal', 'lapangan'],
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(20),
            ],
            [
                'category' => 'badminton',
                'title' => 'Standar Lapangan Badminton Indoor: Dari Lantai hingga Tinggi Plafon',
                'excerpt' => 'Membangun lapangan badminton yang sesuai standar BWF/PBSI bukan hanya soal garis putih di lantai. Pelajari semua spesifikasi teknisnya di sini.',
                'body' => '<h2>Ukuran Standar</h2><p>Lapangan badminton standar berukuran 13,4 x 6,1 meter untuk tunggal dan ganda. Jarak antar lapangan minimal 1 meter, dan jarak dari dinding minimal 1,5 meter.</p><h2>Tinggi Plafon</h2><p>Ini sering diabaikan! Tinggi plafon minimum untuk badminton adalah 9 meter agar shuttlecock memiliki ruang gerak yang cukup saat smash dan lob tinggi.</p><h2>Material Lantai</h2><p>Lantai PVC vinyl khusus badminton adalah standar yang digunakan di turnamen nasional. Material ini memberikan cushioning yang melindungi lutut dan pergelangan kaki pemain.</p><h2>Pencahayaan</h2><p>Minimal 300 lux untuk latihan, dan 500-1000 lux untuk kompetisi. Gunakan lampu LED khusus olahraga dengan sudut pancaran yang tepat untuk menghindari silau.</p><h2>Biaya Pembangunan</h2><p>Satu lapangan badminton standar dengan konstruksi baja dan lantai vinyl berkualitas membutuhkan investasi Rp 200-350 juta.</p>',
                'cat_label' => '🏸 Badminton',
                'cat_color' => 'bg-yellow-100 text-yellow-700',
                'read_time' => '6 menit',
                'tags' => ['badminton', 'standar', 'konstruksi'],
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(25),
            ],
            [
                'category' => 'tips',
                'title' => '5 Kesalahan Fatal yang Harus Dihindari Saat Membangun Lapangan Olahraga',
                'excerpt' => 'Dari pengalaman menangani ratusan proyek lapangan olahraga, kami rangkum 5 kesalahan terbesar yang sering dilakukan pengusaha pemula dan cara menghindarinya.',
                'body' => '<h2>1. Mengabaikan Drainase</h2><p>Lapangan outdoor tanpa sistem drainase yang baik akan cepat rusak dan membahayakan pemain. Pastikan ada kemiringan 1-2% dan saluran air di sekeliling lapangan.</p><h2>2. Memilih Material Termurah</h2><p>Material murah membayar dua kali. Lantai berkualitas rendah cepat rusak, licin saat basah, dan bisa menyebabkan cedera pemain yang berujung reputasi buruk.</p><h2>3. Tidak Mengurus Izin</h2><p>Banyak lapangan dibangun tanpa IMB/PBG yang propert. Ini bisa berujung pada sengketa hukum atau bahkan pembongkaran paksa.</p><h2>4. Mengabaikan Pencahayaan</h2><p>Pencahayaan yang buruk membuat lapangan tidak bisa beroperasi malam hari, padahal sesi malam adalah slot paling dicari pemain kantoran.</p><h2>5. Tidak Ada Toilet dan Fasilitas Pendukung</h2><p>Pemain membutuhkan toilet bersih, area ganti, dan minimal kantin kecil. Fasilitas ini meningkatkan kepuasan pelanggan secara signifikan.</p>',
                'cat_label' => '💡 Tips & Trik',
                'cat_color' => 'bg-red-100 text-red-700',
                'read_time' => '5 menit',
                'tags' => ['tips', 'konstruksi', 'bisnis'],
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(30),
            ],
            [
                'category' => 'material',
                'title' => 'Mengenal Jenis-Jenis Rumput Sintetis untuk Lapangan Olahraga',
                'excerpt' => 'Tidak semua rumput sintetis diciptakan sama. Pelajari perbedaan rumput sintetis dari segi pile height, density, material serat, dan kegunaannya.',
                'body' => '<h2>Apa Itu Pile Height?</h2><p>Pile height adalah tinggi serat rumput sintetis. Untuk futsal dan mini soccer, pile height ideal antara 20-30mm. Rumput padel biasanya 10-12mm.</p><h2>Jenis Serat Rumput</h2><p><strong>Monofilament:</strong> Serat tunggal dan tebal, lebih tahan lama dan natural. Cocok untuk mini soccer dan padel.<br><strong>Fibrillated:</strong> Serat lebih tipis dan mengembang seperti rumput asli. Lebih affordable, cocok untuk lapangan latihan.</p><h2>Infill Material</h2><p>Rumput sintetis membutuhkan material pengisi (infill): pasir silika untuk stabilitas dan rubber crumb untuk cushioning. Perbandingan yang tepat sangat penting untuk performa optimal.</p><h2>Cara Memilih yang Tepat</h2><p>Pertimbangkan budget, frekuensi pemakaian, dan jenis olahraga. Green Deahan Sport menyediakan konsultasi gratis untuk membantu Anda memilih material yang paling sesuai.</p>',
                'cat_label' => '🌿 Material',
                'cat_color' => 'bg-emerald-100 text-emerald-700',
                'read_time' => '7 menit',
                'tags' => ['material', 'rumput sintetis', 'panduan'],
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(35),
            ],
            [
                'category' => 'tips',
                'title' => 'Cara Merawat Lapangan Futsal Vinyl agar Awet Bertahun-tahun',
                'excerpt' => 'Vinyl interlock yang terawat dengan baik bisa bertahan 10-15 tahun. Ikuti panduan perawatan rutin ini untuk memaksimalkan umur lapangan Anda.',
                'body' => '<h2>Perawatan Harian</h2><p>Sapu permukaan lapangan setelah setiap sesi bermain untuk menghilangkan debu dan kotoran. Gunakan sapu lembut agar tidak menggores permukaan vinyl.</p><h2>Perawatan Mingguan</h2><p>Pel lapangan dengan cairan pembersih pH netral. Hindari produk berbasis asam atau alkohol yang bisa merusak lapisan permukaan vinyl.</p><h2>Perawatan Bulanan</h2><p>Periksa seluruh sambungan interlock. Jika ada yang longgar atau terangkat, segera kencangkan atau ganti panel tersebut. Cek juga area garis lapangan yang sering terkelupas.</p><h2>Hal yang Harus Dihindari</h2><p>Jangan biarkan benda tajam atau berat di atas lapangan. Hindari paparan sinar matahari langsung berlebihan jika lapangan semi-outdoor. Jangan gunakan high-pressure washer yang bisa merusak sambungan.</p>',
                'cat_label' => '💡 Tips & Trik',
                'cat_color' => 'bg-red-100 text-red-700',
                'read_time' => '4 menit',
                'tags' => ['perawatan', 'vinyl', 'futsal'],
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(40),
            ],
        ];

        foreach ($posts as $data) {
            BlogPost::create(array_merge($data, [
                'slug' => $this->uniqueSlug($data['title']),
            ]));
        }
    }

    private function uniqueSlug(string $title): string
    {
        $slug = Str::slug($title);
        $original = $slug;
        $i = 1;

        while (BlogPost::where('slug', $slug)->exists()) {
            $slug = "{$original}-{$i}";
            $i++;
        }

        return $slug;
    }
}
