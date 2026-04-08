<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GaleriItem;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Galeri extends Component
{
    public string $activeFilter = 'semua';
    public ?int $lightboxIndex = null;

    public array $tabs = [
        ['key' => 'semua', 'label' => '🏆 Semua Proyek'],
        ['key' => 'futsal', 'label' => '⚽ Futsal'],
        ['key' => 'minisoccer', 'label' => '🟢 Mini Soccer'],
        ['key' => 'padel', 'label' => '🎾 Padel'],
        ['key' => 'badminton', 'label' => '🏸 Badminton'],
        ['key' => 'proses', 'label' => '🏗 Proses Konstruksi'],
    ];

    /**
     * Static gallery data — replace with DB query when you have real images.
     * Each item: id, cat, tall (bool), title, kota, material, desc, badge, badgeColor
     */
    public function getGaleriProperty(): array
    {
        return GaleriItem::when($this->activeFilter !== 'semua', function ($q) {
            $q->where('category', $this->activeFilter);
        })->orderBy('sort_order')->get()->toArray();
    }

    public function getFilteredItemsProperty(): array
    {
        // Fallback static data when no DB records exist yet
        $all = [
            ['id' => 1, 'cat' => 'futsal', 'tall' => true, 'title' => 'Futsal Indoor Premium Jakarta', 'kota' => 'Jakarta Selatan', 'material' => 'Vinyl Sport', 'desc' => 'Lapangan futsal indoor premium dengan lantai vinyl sport anti-slip. Dilengkapi pencahayaan LED 500 lux standar FIFA. Selesai 18 hari.', 'badge' => '⚽ Futsal', 'badgeColor' => 'text-green-700 bg-green-50 border-green-200'],
            ['id' => 2, 'cat' => 'futsal', 'tall' => false, 'title' => 'Futsal Interlock Surabaya', 'kota' => 'Surabaya', 'material' => 'Interlock', 'desc' => '3 lapangan futsal interlock outdoor. Drainase baik, permukaan non-slip, garis lapangan cat epoxy tahan lama.', 'badge' => '⚽ Futsal', 'badgeColor' => 'text-green-700 bg-green-50 border-green-200'],
            ['id' => 3, 'cat' => 'futsal', 'tall' => false, 'title' => 'Futsal Parket Bandung', 'kota' => 'Bandung', 'material' => 'Parket Kayu', 'desc' => 'Lapangan futsal indoor dengan lantai parket kayu jati premium. Anti-selip, ramah lutut, akustik ruangan baik.', 'badge' => '⚽ Futsal', 'badgeColor' => 'text-green-700 bg-green-50 border-green-200'],
            ['id' => 4, 'cat' => 'futsal', 'tall' => false, 'title' => 'Futsal Outdoor Medan', 'kota' => 'Medan', 'material' => 'Interlock Premium', 'desc' => '2 lapangan futsal outdoor dengan kanopi baja ringan. Tahan panas dan hujan, sirkulasi udara baik.', 'badge' => '⚽ Futsal', 'badgeColor' => 'text-green-700 bg-green-50 border-green-200'],
            ['id' => 5, 'cat' => 'futsal', 'tall' => true, 'title' => 'Futsal Complex Makassar', 'kota' => 'Makassar', 'material' => 'Vinyl Sport', 'desc' => 'Kompleks 4 lapangan futsal dengan tribun penonton, ruang ganti, cafe, dan parkir luas. Proyek selesai 35 hari.', 'badge' => '⚽ Futsal', 'badgeColor' => 'text-green-700 bg-green-50 border-green-200'],
            ['id' => 6, 'cat' => 'minisoccer', 'tall' => true, 'title' => 'Mini Soccer Rumput Sintetis Bali', 'kota' => 'Denpasar, Bali', 'material' => 'Rumput Sintetis', 'desc' => 'Lapangan mini soccer dengan rumput sintetis FIFA Quality Pro. Infill rubber, drainase sempurna.', 'badge' => '🟢 Mini Soccer', 'badgeColor' => 'text-blue-700 bg-blue-50 border-blue-200'],
            ['id' => 7, 'cat' => 'minisoccer', 'tall' => false, 'title' => 'Mini Soccer Residensial Jakarta', 'kota' => 'Tangerang', 'material' => 'Rumput Sintetis', 'desc' => 'Mini soccer dalam kawasan perumahan premium. Pagar jaring galvanis, lampu sorot LED, parkir memadai.', 'badge' => '🟢 Mini Soccer', 'badgeColor' => 'text-blue-700 bg-blue-50 border-blue-200'],
            ['id' => 8, 'cat' => 'padel', 'tall' => true, 'title' => 'Padel Indoor Premiere Surabaya', 'kota' => 'Surabaya', 'material' => 'Kaca Tempered 12mm', 'desc' => '2 lapangan padel indoor standar FIP. Kaca tempered 12mm, artificial grass padel import, lighting 500 lux.', 'badge' => '🎾 Padel', 'badgeColor' => 'text-orange-700 bg-orange-50 border-orange-200'],
            ['id' => 9, 'cat' => 'badminton', 'tall' => true, 'title' => 'Badminton 4 Court Bandung', 'kota' => 'Bandung', 'material' => 'Vinyl Sport', 'desc' => '4 lapangan badminton indoor dengan lantai vinyl sport premium. Pencahayaan LED 500 lux anti-silau.', 'badge' => '🏸 Badminton', 'badgeColor' => 'text-purple-700 bg-purple-50 border-purple-200'],
            ['id' => 10, 'cat' => 'proses', 'tall' => false, 'title' => 'Survey Lokasi — Sebelum Mulai', 'kota' => 'Berbagai Kota', 'material' => 'Survey & Pengukuran', 'desc' => 'Tim lapangan kami melakukan survey lokasi, pengukuran lahan, dan analisis tanah sebelum konstruksi dimulai.', 'badge' => '🏗 Proses', 'badgeColor' => 'text-stone-700 bg-stone-50 border-stone-200'],
        ];

        if ($this->activeFilter === 'semua')
            return $all;
        return array_values(array_filter($all, fn($i) => $i['cat'] === $this->activeFilter));
    }

    public function setFilter(string $cat): void
    {
        $this->activeFilter = $cat;
        $this->lightboxIndex = null;
    }

    public function openLightbox(int $index): void
    {
        $this->lightboxIndex = $index;
    }

    public function closeLightbox(): void
    {
        $this->lightboxIndex = null;
    }

    public function prevLightbox(): void
    {
        $count = count($this->filteredItems);
        $this->lightboxIndex = ($this->lightboxIndex - 1 + $count) % $count;
    }

    public function nextLightbox(): void
    {
        $count = count($this->filteredItems);
        $this->lightboxIndex = ($this->lightboxIndex + 1) % $count;
    }

    public function render()
    {
        return view('livewire.galeri', [
            'items' => $this->filteredItems,
        ]);
    }
}