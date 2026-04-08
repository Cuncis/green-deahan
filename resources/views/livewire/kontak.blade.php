<div>

{{-- ══════════════ SUCCESS TOAST ══════════════ --}}
@if ($submitted)
<div
    x-data="{ show: true }"
    x-init="setTimeout(() => { show = false; $wire.set('submitted', false) }, 4000)"
    x-show="show"
    x-transition
    class="fixed bottom-24 left-1/2 -translate-x-1/2 bg-[#006400] text-white font-bold text-sm px-6 py-3.5 rounded-full z-[9999] shadow-xl whitespace-nowrap"
>
    ✅ Pesan terkirim! Kami akan menghubungi Anda segera.
    @if ($waLink)
    <a href="{{ $waLink }}" target="_blank" class="ml-2 underline text-green-200">Buka WhatsApp →</a>
    @endif
</div>
@endif

{{-- ══════════════ PAGE HERO ══════════════ --}}
<section class="pt-28 pb-12 px-6 max-w-6xl mx-auto text-center reveal">
    <span class="inline-block bg-green-100 text-[#006400] text-xs font-bold px-3 py-1.5 rounded-full mb-5 tracking-wide">📞 Hubungi Kami</span>
    <h1 class="font-display text-4xl md:text-5xl font-black text-stone-900 mb-4">Kontak & Konsultasi</h1>
    <p class="text-stone-500 text-base leading-relaxed max-w-xl mx-auto">
        Tim kami siap membantu Anda mewujudkan lapangan impian. Konsultasi 100% gratis, respon kurang dari 1 jam!
    </p>

    <div class="flex flex-wrap justify-center gap-4 mt-8">
        <a href="https://wa.me/6281357570064" target="_blank"
           class="flex items-center gap-2.5 bg-[#25d366] text-white font-bold px-6 py-3.5 rounded-xl hover:bg-[#20b858] transition-colors shadow-lg">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.553 4.118 1.522 5.855L0 24l6.335-1.508A11.955 11.955 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.854 0-3.594-.48-5.112-1.32l-.366-.213-3.762.895.952-3.648-.239-.386A10 10 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
            WhatsApp Langsung
        </a>
        <a href="tel:+6281357570064"
           class="flex items-center gap-2.5 bg-white border-2 border-[#006400] text-[#006400] font-bold px-6 py-3.5 rounded-xl hover:bg-green-50 transition-colors">
            📞 +62 813-5757-0064
        </a>
    </div>
</section>

{{-- ══════════════ MAIN CONTENT ══════════════ --}}
<section class="px-6 max-w-6xl mx-auto pb-20">
    <div class="grid lg:grid-cols-3 gap-10">

        {{-- ══ CONTACT FORM ══ --}}
        <div class="lg:col-span-2 reveal">
            <div class="bg-white border-2 border-stone-200 rounded-2xl p-8">
                <h2 class="font-display font-black text-xl text-stone-900 mb-1">Form Konsultasi</h2>
                <p class="text-stone-500 text-sm mb-6">Isi form di bawah dan tim kami akan menghubungi Anda segera.</p>

                <div class="space-y-5">
                    {{-- Name --}}
                    <div>
                        <label class="block text-sm font-bold text-stone-700 mb-1.5">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input wire:model="name" type="text" placeholder="Contoh: Budi Santoso"
                               class="form-input w-full border-2 border-stone-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#006400] focus:ring-2 focus:ring-[#006400]/10 transition-all" />
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    {{-- Phone + Email --}}
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-bold text-stone-700 mb-1.5">Nomor HP/WA <span class="text-red-500">*</span></label>
                            <input wire:model="phone" type="tel" placeholder="08xx-xxxx-xxxx"
                                   class="form-input w-full border-2 border-stone-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#006400] focus:ring-2 focus:ring-[#006400]/10 transition-all" />
                            @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-stone-700 mb-1.5">Email <span class="text-stone-400 font-normal">(opsional)</span></label>
                            <input wire:model="email" type="email" placeholder="email@domain.com"
                                   class="form-input w-full border-2 border-stone-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#006400] focus:ring-2 focus:ring-[#006400]/10 transition-all" />
                            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    {{-- Type + City --}}
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-bold text-stone-700 mb-1.5">Jenis Lapangan <span class="text-red-500">*</span></label>
                            <select wire:model="type"
                                    class="form-input w-full border-2 border-stone-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#006400] focus:ring-2 focus:ring-[#006400]/10 transition-all bg-white">
                                <option value="">-- Pilih Jenis --</option>
                                @foreach ($fieldTypes as $ft)
                                <option value="{{ $ft }}">{{ $ft }}</option>
                                @endforeach
                            </select>
                            @error('type') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-stone-700 mb-1.5">Kota / Daerah <span class="text-red-500">*</span></label>
                            <input wire:model="city" type="text" placeholder="Contoh: Surabaya, Jawa Timur"
                                   class="form-input w-full border-2 border-stone-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#006400] focus:ring-2 focus:ring-[#006400]/10 transition-all" />
                            @error('city') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    {{-- Budget --}}
                    <div>
                        <label class="block text-sm font-bold text-stone-700 mb-1.5">Estimasi Budget <span class="text-stone-400 font-normal">(opsional)</span></label>
                        <select wire:model="budget"
                                class="form-input w-full border-2 border-stone-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#006400] focus:ring-2 focus:ring-[#006400]/10 transition-all bg-white">
                            <option value="">-- Pilih Range Budget --</option>
                            @foreach ($budgetRanges as $br)
                            <option value="{{ $br }}">{{ $br }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Message --}}
                    <div>
                        <label class="block text-sm font-bold text-stone-700 mb-1.5">Pesan / Detail Kebutuhan</label>
                        <textarea wire:model="message" rows="4" placeholder="Ceritakan kebutuhan Anda: ukuran lahan, indoor/outdoor, target opening, dll."
                                  class="form-input w-full border-2 border-stone-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#006400] focus:ring-2 focus:ring-[#006400]/10 transition-all resize-none"></textarea>
                    </div>

                    {{-- Submit --}}
                    <button wire:click="submit" wire:loading.attr="disabled"
                            class="w-full bg-[#006400] text-white font-black py-4 rounded-xl hover:bg-[#004d00] transition-colors text-sm flex items-center justify-center gap-2 shadow-lg disabled:opacity-60">
                        <span wire:loading.remove wire:target="submit">💬 Kirim & Lanjut ke WhatsApp</span>
                        <span wire:loading wire:target="submit">⏳ Mengirim...</span>
                    </button>

                    <p class="text-center text-xs text-stone-400">*Data Anda aman dan tidak akan dibagikan ke pihak ketiga.</p>
                </div>
            </div>
        </div>

        {{-- ══ SIDEBAR ══ --}}
        <div class="space-y-6 reveal">
            {{-- Contact info --}}
            <div class="bg-white border-2 border-stone-200 rounded-2xl p-6">
                <h3 class="font-display font-black text-stone-900 text-base mb-4">Kontak Langsung</h3>
                <div class="space-y-4 text-sm">
                    <div class="flex items-start gap-3">
                        <span class="text-xl flex-shrink-0">📞</span>
                        <div>
                            <div class="font-semibold text-stone-800">Telepon / WhatsApp</div>
                            <a href="tel:+6281357570064" class="text-[#006400] font-bold">+62 813-5757-0064</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-xl flex-shrink-0">✉️</span>
                        <div>
                            <div class="font-semibold text-stone-800">Email</div>
                            <a href="mailto:info@greendeahan.com" class="text-[#006400] font-bold">info@greendeahan.com</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-xl flex-shrink-0">🕐</span>
                        <div>
                            <div class="font-semibold text-stone-800">Jam Operasional</div>
                            <p class="text-stone-500">Senin – Sabtu, 06.00 – 23.00 WIB</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-xl flex-shrink-0">⚡</span>
                        <div>
                            <div class="font-semibold text-stone-800">Waktu Respons</div>
                            <p class="text-stone-500">Kurang dari 1 jam</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Why us --}}
            <div class="bg-[#006400] rounded-2xl p-6 text-white">
                <h3 class="font-display font-black text-base mb-4">Mengapa GreenDeahan?</h3>
                <ul class="space-y-3 text-sm">
                    @foreach (['✅ 500+ proyek sukses se-Indonesia','💰 Bayar setelah lapangan selesai','📐 Konsultasi & desain GRATIS','🏗 Garansi resmi konstruksi','🗺 Melayani seluruh Indonesia','⏱ Respons cepat < 1 jam'] as $item)
                    <li class="flex items-center gap-2 text-green-100">{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            {{-- Stats --}}
            <div class="bg-white border-2 border-stone-200 rounded-2xl p-6">
                <div class="grid grid-cols-2 gap-4 text-center">
                    @foreach ([['500+','Proyek'],['150+','Kota'],['15+','Tahun'],['5.0','Rating']] as $s)
                    <div>
                        <div class="font-display font-black text-2xl text-[#006400]">{{ $s[0] }}</div>
                        <div class="text-xs text-stone-500 font-semibold">{{ $s[1] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════ FAQ ══════════════ --}}
<section class="py-16 px-6 bg-stone-50">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-10 reveal">
            <span class="inline-block bg-green-100 text-[#006400] text-xs font-bold px-3 py-1.5 rounded-full mb-3 tracking-wide">FAQ</span>
            <h2 class="font-display text-2xl font-black text-stone-900">Pertanyaan Seputar Konsultasi</h2>
        </div>
        <div class="space-y-3 reveal">
            @foreach ($faqs as $faq)
            <div class="bg-white border border-stone-200 rounded-xl overflow-hidden">
                <button onclick="toggleFaq(this)" class="w-full text-left px-5 py-4 flex items-center justify-between font-semibold text-stone-800 text-sm">
                    {{ $faq['q'] }}
                    <span class="faq-icon text-[#006400] font-black text-xl flex-shrink-0 ml-3">+</span>
                </button>
                <div class="faq-answer px-5 text-stone-500 text-sm leading-relaxed">
                    <p class="pb-4">{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══════════════ CTA ══════════════ --}}
<section class="py-20 px-6 bg-[#006400]">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="font-display text-3xl md:text-4xl font-black text-white mb-4">Wujudkan Lapangan Impian Anda!</h2>
        <p class="text-green-200 text-sm mb-8 max-w-xl mx-auto">Respon dalam 1 jam · Konsultasi 100% gratis · Tanpa kewajiban apapun</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/6281357570064?text=Halo%20GreenDeahan,%20saya%20ingin%20konsultasi%20lapangan" target="_blank"
               class="bg-white text-[#006400] font-black px-8 py-4 rounded-xl hover:bg-green-50 transition-colors text-sm flex items-center justify-center gap-2 shadow-xl">
                💬 Chat WhatsApp Sekarang
            </a>
            <a href="tel:+6281357570064"
               class="border-2 border-white text-white font-bold px-8 py-4 rounded-xl hover:bg-white/10 transition-colors text-sm flex items-center justify-center gap-2">
                📞 +62 813-5757-0064
            </a>
        </div>
    </div>
</section>

</div>

@push('scripts')
<script>
    function toggleFaq(btn) {
        const answer = btn.nextElementSibling;
        const icon = btn.querySelector('.faq-icon');
        const isOpen = answer.classList.contains('open');
        document.querySelectorAll('.faq-answer.open').forEach(a => {
            a.classList.remove('open');
            a.previousElementSibling.querySelector('.faq-icon').textContent = '+';
        });
        if (!isOpen) { answer.classList.add('open'); icon.textContent = '−'; }
    }
</script>
@endpush