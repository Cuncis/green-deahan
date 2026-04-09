<?php

namespace Database\Seeders;

use App\Models\GaleriItem;
use Illuminate\Database\Seeder;

class GaleriItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            // Futsal
            [
                'category' => 'futsal',
                'title' => 'Lapangan Futsal Grand Sport Center',
                'kota' => 'Jakarta Selatan',
                'material' => 'Vinyl Interlock Pro',
                'description' => 'Lapangan futsal indoor 4 lapangan dengan sistem pencahayaan LED 500 lux, lantai vinyl interlock premium, dan tribune penonton kapasitas 200 orang.',
                'badge' => '⚽ Futsal',
                'badge_color' => 'bg-green-100 text-green-700',
                'is_tall' => false,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'category' => 'futsal',
                'title' => 'SKY Futsal Arena',
                'kota' => 'Surabaya',
                'material' => 'Vinyl Interlock Standard',
                'description' => 'Kompleks futsal 6 lapangan di rooftop gedung 5 lantai. Konsep unik dengan pemandangan kota sebagai backdrop bermain.',
                'badge' => '⚽ Futsal',
                'badge_color' => 'bg-green-100 text-green-700',
                'is_tall' => true,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'category' => 'futsal',
                'title' => 'Arena Futsal Bandung Sport Mall',
                'kota' => 'Bandung',
                'material' => 'Vinyl Interlock Pro',
                'description' => 'Pembangunan lapangan futsal di dalam mall dengan konsep semi-outdoor. Dilengkapi sistem ventilasi khusus dan tribun modern.',
                'badge' => '⚽ Futsal',
                'badge_color' => 'bg-green-100 text-green-700',
                'is_tall' => false,
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'category' => 'futsal',
                'title' => 'Futsal Center Yogyakarta',
                'kota' => 'Yogyakarta',
                'material' => 'Rumput Sintetis 25mm',
                'description' => 'Lapangan futsal dengan konsep rumput sintetis natural. Favorit komunitas mahasiswa UGM dan UNY. 3 lapangan standar beroperasi 24 jam.',
                'badge' => '⚽ Futsal',
                'badge_color' => 'bg-green-100 text-green-700',
                'is_tall' => true,
                'sort_order' => 4,
                'is_active' => true,
            ],

            // Mini Soccer
            [
                'category' => 'minisoccer',
                'title' => 'Delta Mini Soccer Field',
                'kota' => 'Bekasi',
                'material' => 'Rumput Sintetis FIFA Quality',
                'description' => 'Lapangan mini soccer outdoor 60x40 meter. Material rumput sintetis FIFA Quality Pro untuk pengalaman bermain setara stadion profesional.',
                'badge' => '🏟️ Mini Soccer',
                'badge_color' => 'bg-orange-100 text-orange-700',
                'is_tall' => false,
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'category' => 'minisoccer',
                'title' => 'Garuda Mini Soccer Complex',
                'kota' => 'Tangerang',
                'material' => 'Rumput Sintetis Monofilament',
                'description' => 'Kompleks mini soccer 2 lapangan lengkap dengan tribun, ruang ganti berAC, kantin, dan area parkir luas. Venue favorit turnamen antar perusahaan.',
                'badge' => '🏟️ Mini Soccer',
                'badge_color' => 'bg-orange-100 text-orange-700',
                'is_tall' => true,
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'category' => 'minisoccer',
                'title' => 'Sentul Mini Soccer Park',
                'kota' => 'Bogor',
                'material' => 'Rumput Sintetis 40mm',
                'description' => 'Mini soccer dengan suasana alam pegunungan Sentul. Lapangan semi-outdoor dengan roof canopy dan natural ventilation.',
                'badge' => '🏟️ Mini Soccer',
                'badge_color' => 'bg-orange-100 text-orange-700',
                'is_tall' => false,
                'sort_order' => 7,
                'is_active' => true,
            ],

            // Padel
            [
                'category' => 'padel',
                'title' => 'The Padel Club Jakarta',
                'kota' => 'Jakarta Pusat',
                'material' => 'Artificial Grass Padel 12mm',
                'description' => 'Lapangan padel kaca pertama di Jakarta Pusat. 4 court berstandar World Padel Tour dengan kaca tempered 10mm dan LED lighting 750 lux.',
                'badge' => '🎾 Padel',
                'badge_color' => 'bg-purple-100 text-purple-700',
                'is_tall' => true,
                'sort_order' => 8,
                'is_active' => true,
            ],
            [
                'category' => 'padel',
                'title' => 'Padel Surabaya Sport House',
                'kota' => 'Surabaya',
                'material' => 'Artificial Grass Padel 10mm',
                'description' => 'Sport house dengan 3 lapangan padel indoor fully air-conditioned. Dilengkapi pro shop, locker room premium, dan coaching area.',
                'badge' => '🎾 Padel',
                'badge_color' => 'bg-purple-100 text-purple-700',
                'is_tall' => false,
                'sort_order' => 9,
                'is_active' => true,
            ],

            // Badminton
            [
                'category' => 'badminton',
                'title' => 'GOR Badminton Elite Semarang',
                'kota' => 'Semarang',
                'material' => 'Vinyl PVC Badminton Grade A',
                'description' => 'GOR badminton 8 lapangan standar PBSI dengan lantai vinyl premium, tinggi plafon 12 meter, dan pencahayaan 1000 lux. Reguler digunakan untuk seleksi daerah.',
                'badge' => '🏸 Badminton',
                'badge_color' => 'bg-yellow-100 text-yellow-700',
                'is_tall' => false,
                'sort_order' => 10,
                'is_active' => true,
            ],
            [
                'category' => 'badminton',
                'title' => 'Bima Badminton Center',
                'kota' => 'Malang',
                'material' => 'Vinyl PVC Badminton Pro',
                'description' => 'Pusat pelatihan badminton 6 lapangan dengan lantai cushioned vinyl anti-slip. Dilengkapi ruang fisioterapi dan video analysis room.',
                'badge' => '🏸 Badminton',
                'badge_color' => 'bg-yellow-100 text-yellow-700',
                'is_tall' => true,
                'sort_order' => 11,
                'is_active' => true,
            ],
            [
                'category' => 'badminton',
                'title' => 'Rajawali Badminton Hall',
                'kota' => 'Medan',
                'material' => 'PVC Vinyl Tournament',
                'description' => 'Hall badminton 10 lapangan terbesar di Sumatera Utara. Konstruksi baja bentang lebar dengan sistem akustik khusus untuk meredam kebisingan.',
                'badge' => '🏸 Badminton',
                'badge_color' => 'bg-yellow-100 text-yellow-700',
                'is_tall' => false,
                'sort_order' => 12,
                'is_active' => true,
            ],

            // Proses
            [
                'category' => 'proses',
                'title' => 'Proses Pembangunan Arena Multi Sport Depok',
                'kota' => 'Depok',
                'material' => 'Vinyl + Rumput Sintetis',
                'description' => 'Dokumentasi proses pembangunan arena multi sport: tahap persiapan lahan, pemasangan struktur baja, instalasi atap polycarbonate, hingga finishing lantai.',
                'badge' => '🏗️ Proses',
                'badge_color' => 'bg-gray-100 text-gray-700',
                'is_tall' => true,
                'sort_order' => 13,
                'is_active' => true,
            ],
            [
                'category' => 'proses',
                'title' => 'Pemasangan Rumput Sintetis Mini Soccer Bali',
                'kota' => 'Denpasar',
                'material' => 'Rumput Sintetis FIFA Quality',
                'description' => 'Time-lapse proses pemasangan rumput sintetis FIFA Quality dari penyiapan base course, pemasangan shock pad, hingga seaming dan infill sand & rubber.',
                'badge' => '🏗️ Proses',
                'badge_color' => 'bg-gray-100 text-gray-700',
                'is_tall' => false,
                'sort_order' => 14,
                'is_active' => true,
            ],
        ];

        foreach ($items as $item) {
            GaleriItem::create($item);
        }
    }
}
