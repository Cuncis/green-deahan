<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Kontak extends Component
{
    // Form fields
    public string $name = '';
    public string $phone = '';
    public string $email = '';
    public string $type = '';
    public string $city = '';
    public string $budget = '';
    public string $message = '';

    // UI state
    public bool $submitted = false;
    public string $waLink = '';

    public array $fieldTypes = [
        'Lapangan Futsal',
        'Mini Soccer',
        'Lapangan Padel',
        'Lapangan Badminton',
        'Konsultasi Umum',
        'Renovasi / Perbaikan',
        'Maintenance',
    ];

    public array $budgetRanges = [
        'Di bawah Rp 200 Juta',
        'Rp 200 – 500 Juta',
        'Rp 500 Juta – 1 Miliar',
        'Di atas Rp 1 Miliar',
        'Belum tahu / perlu konsultasi',
    ];

    public array $faqs = [
        ['q' => 'Apakah konsultasi benar-benar gratis?', 'a' => 'Ya, 100% gratis tanpa syarat apapun. Kami akan membantu Anda menghitung estimasi biaya, memilih material, dan merencanakan layout lapangan tanpa biaya konsultasi.'],
        ['q' => 'Berapa lama proses dari konsultasi ke eksekusi?', 'a' => 'Setelah konsultasi awal, kami akan melakukan survey lokasi (1–3 hari), menyiapkan desain dan RAB (3–5 hari), lalu penandatanganan kontrak dan mulai pengerjaan.'],
        ['q' => 'Apakah ada jaminan harga tidak berubah?', 'a' => 'Ya, setelah kontrak ditandatangani, harga bersifat fixed dan tidak akan berubah kecuali ada perubahan spesifikasi yang diminta oleh klien.'],
        ['q' => 'Bagaimana jika proyek tidak sesuai ekspektasi?', 'a' => 'Kami memberikan garansi kepuasan. Jika ada pekerjaan yang tidak sesuai standar, kami akan memperbaiki tanpa biaya tambahan hingga Anda benar-benar puas.'],
    ];

    protected array $rules = [
        'name' => 'required|min:2|max:100',
        'phone' => 'required|min:10|max:20',
        'type' => 'required',
        'city' => 'required|min:2|max:100',
        'email' => 'nullable|email|max:100',
        'budget' => 'nullable|max:100',
        'message' => 'nullable|max:1000',
    ];

    protected array $messages = [
        'name.required' => 'Nama wajib diisi.',
        'phone.required' => 'Nomor HP wajib diisi.',
        'type.required' => 'Pilih jenis lapangan terlebih dahulu.',
        'city.required' => 'Kota/daerah wajib diisi.',
    ];

    public function submit(): void
    {
        $this->validate();

        // Save to DB
        ContactMessage::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'type' => $this->type,
            'city' => $this->city,
            'budget' => $this->budget,
            'message' => $this->message,
        ]);

        // Build WhatsApp redirect link
        $text = "Halo GreenDeahan! Saya {$this->name} dari {$this->city}.\n\n"
            . "Saya tertarik membangun: *{$this->type}*\n"
            . ($this->budget ? "Estimasi budget: {$this->budget}\n" : '')
            . ($this->message ? "Pesan: {$this->message}\n" : '')
            . "\nNomor HP: {$this->phone}";

        $this->waLink = 'https://wa.me/6281357570064?text=' . urlencode($text);

        $this->submitted = true;

        // Reset form
        $this->name = $this->phone = $this->email = $this->type = $this->city = $this->budget = $this->message = '';
    }

    public function render()
    {
        return view('livewire.kontak');
    }
}