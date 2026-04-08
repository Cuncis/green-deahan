<div>

{{-- ══════════════ HERO ══════════════ --}}
<section class="pt-28 pb-0 px-6 max-w-6xl mx-auto">
    <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mb-8 text-xs font-semibold text-stone-500">
        <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-green-500 animate-pulse inline-block"></span> Melayani 24/7</span>
        <span>⭐ 5.0 Rating dari 100+ Klien</span>
        <span>✅ Garansi Resmi Konstruksi</span>
        <span>🗺 Se-Indonesia Sejak 2010</span>
    </div>

    <div class="grid md:grid-cols-2 gap-10 items-center pb-16">
        <div>
            <span class="inline-block bg-green-100 text-[#006400] text-xs font-bold px-3 py-1.5 rounded-full mb-5 tracking-wide">🏗 Jasa Pembuatan Lapangan #1 Se-Indonesia</span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-black text-stone-900 leading-tight mb-5">
                Bangun Lapangan<br>
                <span class="text-[#006400]">Futsal, Mini Soccer,</span><br>
                Padel & Badminton<br>
                dari Nol — Siap Pakai!
            </h1>
            <p class="text-stone-500 text-base md:text-lg leading-relaxed mb-6 max-w-lg">
                Kami kerjakan <strong class="text-stone-800">semua dari A sampai Z</strong> — survey lokasi, desain, perizinan, konstruksi, hingga lapangan siap beroperasi. Anda cukup duduk santai dan pantau hasilnya.
            </p>

            <div class="flex flex-wrap gap-3 mb-8">
                <div class="flex items-center gap-2 bg-white border border-stone-200 rounded-lg px-3 py-2 text-sm font-semibold text-stone-700">
                    ✅ Garansi Konstruksi
                </div>
                <div class="flex items-center gap-2 bg-white border border-stone-200 rounded-lg px-3 py-2 text-sm font-semibold text-stone-700">
                    💰 Bayar Setelah Selesai
                </div>
                <div class="flex items-center gap-2 bg-white border border-stone-200 rounded-lg px-3 py-2 text-sm font-semibold text-stone-700">
                    📐 Desain Gratis
                </div>
                <div class="flex items-center gap-2 bg-white border border-stone-200 rounded-lg px-3 py-2 text-sm font-semibold text-stone-700">
                    🗺 Se-Indonesia
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-3">
                <a href="https://wa.me/6281357570064?text=Halo%20GreenDeahan,%20saya%20ingin%20konsultasi%20pembuatan%20lapangan" target="_blank"
                   class="bg-[#006400] text-white font-black px-7 py-3.5 rounded-xl hover:bg-[#004d00] transition-colors text-sm flex items-center justify-center gap-2 shadow-lg">
                    💬 Konsultasi Gratis Sekarang
                </a>
                <a href="{{ route('galeri') }}"
                   class="border-2 border-stone-300 text-stone-700 font-bold px-7 py-3.5 rounded-xl hover:border-[#006400] hover:text-[#006400] transition-colors text-sm flex items-center justify-center gap-2">
                    🖼 Lihat Galeri Proyek
                </a>
            </div>
        </div>

        <div class="relative">
            <div class="img-ph rounded-2xl aspect-[4/3] shadow-2xl">
                <div class="img-ph-text">📸 HERO IMAGE<br>Lapangan Futsal / Mini Soccer<br>Tampak Full Lapangan Profesional<br>(800×600px)</div>
            </div>
            <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl p-4 border border-stone-100">
                <div class="text-2xl font-display font-black text-[#006400]">500+</div>
                <div class="text-xs font-semibold text-stone-500">Proyek Selesai</div>
            </div>
            <div class="absolute -top-4 -right-4 bg-[#006400] rounded-2xl shadow-xl p-4">
                <div class="text-2xl font-display font-black text-white">15+</div>
                <div class="text-xs font-semibold text-green-200">Tahun Pengalaman</div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════ TICKER ══════════════ --}}
<div class="bg-[#006400] py-3.5 overflow-hidden">
    <div class="ticker-wrap">
        <div class="ticker-inner text-white text-xs font-bold tracking-widest uppercase">
            @foreach (range(1,2) as $i)
                <span>⚽ Lapangan Futsal</span>
                <span>🟢 Mini Soccer</span>
                <span>🎾 Padel</span>
                <span>🏸 Badminton</span>
                <span>🏗 Konstruksi Profesional</span>
                <span>✅ Garansi Resmi</span>
                <span>🗺 Se-Indonesia</span>
                <span>📐 Desain Gratis</span>
                <span>💰 Bayar Setelah Selesai</span>
            @endforeach
        </div>
    </div>
</div>

{{-- ══════════════ STATS ══════════════ --}}
<section class="py-16 px-6 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        @foreach ($stats as $stat)
        <div class="reveal">
            <div class="font-display text-4xl font-black text-[#006400] mb-1" data-count="{{ $stat['count'] }}">0</div>
            <div class="text-sm text-stone-500 font-semibold">{{ $stat['label'] }}</div>
        </div>
        @endforeach
    </div>
</section>

{{-- ══════════════ SERVICES ══════════════ --}}
<section id="layanan" class="py-20 px-6 max-w-6xl mx-auto">
    <div class="text-center mb-14 reveal">
        <span class="inline-block bg-green-100 text-[#006400] text-xs font-bold px-3 py-1.5 rounded-full mb-4 tracking-wide">Layanan Kami</span>
        <h2 class="font-display text-3xl md:text-4xl font-black text-stone-900 mb-3">Ahlinya Lapangan Olahraga</h2>
        <p class="text-stone-500 max-w-xl mx-auto text-sm leading-relaxed">Dari futsal hingga padel, kami bangun semuanya dengan standar internasional dan material terbaik.</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($services as $service)
        <div class="reveal bg-white border-2 border-stone-200 rounded-2xl p-6 hover:border-[#006400] hover:shadow-lg transition-all">
            <div class="text-3xl mb-3">{{ $service['icon'] }}</div>
            <h3 class="font-display font-black text-stone-900 text-base mb-2">{{ $service['title'] }}</h3>
            <p class="text-stone-500 text-sm leading-relaxed mb-4">{{ $service['desc'] }}</p>
            <ul class="space-y-1">
                @foreach ($service['specs'] as $spec)
                <li class="text-xs text-stone-400 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#006400] flex-shrink-0"></span>
                    {{ $spec }}
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</section>

{{-- ══════════════ HOW IT WORKS ══════════════ --}}
<section class="py-20 px-6 bg-stone-50">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-14 reveal">
            <span class="inline-block bg-green-100 text-[#006400] text-xs font-bold px-3 py-1.5 rounded-full mb-4 tracking-wide">Cara Kerja Kami</span>
            <h2 class="font-display text-3xl md:text-4xl font-black text-stone-900 mb-3">Proses Mudah & Transparan</h2>
        </div>
        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ([
                ['step'=>'01','icon'=>'💬','title'=>'Konsultasi Gratis','desc'=>'Hubungi kami via WhatsApp atau telepon. Diskusikan kebutuhan, lokasi, dan anggaran Anda.'],
                ['step'=>'02','icon'=>'📐','title'=>'Survey & Desain','desc'=>'Tim kami survey lokasi, buat desain lapangan, dan berikan estimasi biaya detail.'],
                ['step'=>'03','icon'=>'🏗','title'=>'Konstruksi','desc'=>'Pengerjaan dimulai setelah kontrak disetujui. Anda dapat memantau progress secara real-time.'],
                ['step'=>'04','icon'=>'✅','title'=>'Serah Terima','desc'=>'Lapangan diserahterimakan setelah 100% selesai. Pelunasan dilakukan setelah Anda puas.'],
            ] as $step)
            <div class="reveal bg-white rounded-2xl p-6 border border-stone-200 relative">
                <div class="font-display text-5xl font-black text-stone-100 absolute top-4 right-5">{{ $step['step'] }}</div>
                <div class="text-3xl mb-3">{{ $step['icon'] }}</div>
                <h3 class="font-display font-black text-stone-900 text-sm mb-2">{{ $step['title'] }}</h3>
                <p class="text-stone-500 text-xs leading-relaxed">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══════════════ FAQ ══════════════ --}}
<section class="py-20 px-6 max-w-3xl mx-auto">
    <div class="text-center mb-12 reveal">
        <span class="inline-block bg-green-100 text-[#006400] text-xs font-bold px-3 py-1.5 rounded-full mb-4 tracking-wide">FAQ</span>
        <h2 class="font-display text-3xl font-black text-stone-900">Pertanyaan Umum</h2>
    </div>
    <div class="space-y-3 reveal">
        @foreach ($faqs as $index => $faq)
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
</section>

{{-- ══════════════ CTA FINAL ══════════════ --}}
<section class="py-20 px-6 bg-[#006400]">
    <div class="max-w-3xl mx-auto text-center">
        <span class="inline-block bg-white/20 text-white text-xs font-bold px-3 py-1.5 rounded-full mb-5 tracking-wide">🎯 Siap Mulai Proyek Anda?</span>
        <h2 class="font-display text-3xl md:text-5xl font-black text-white mb-4 leading-tight">
            Wujudkan Lapangan<br>Impian Anda Sekarang!
        </h2>
        <p class="text-green-200 text-base leading-relaxed mb-3 max-w-xl mx-auto">
            Konsultasi <strong class="text-white">GRATIS</strong>, survey lokasi, desain profesional, konstruksi berkualitas. Garansi resmi & pelunasan setelah lapangan 100% selesai.
        </p>
        <p class="text-green-300 text-sm mb-10">⏱ Tim kami merespons dalam waktu kurang dari 1 jam!</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/6281357570064?text=Halo%20GreenDeahan,%20saya%20ingin%20konsultasi%20pembuatan%20lapangan" target="_blank"
               class="bg-white text-[#006400] font-black px-8 py-4 rounded-xl hover:bg-green-50 transition-colors text-sm flex items-center justify-center gap-2 shadow-xl">
                💬 Chat WhatsApp Sekarang
            </a>
            <a href="tel:+6281357570064"
               class="border-2 border-white text-white font-bold px-8 py-4 rounded-xl hover:bg-white/10 transition-colors text-sm flex items-center justify-center gap-2">
                📞 +62 813-5757-0064
            </a>
        </div>
        <p class="text-green-400 text-xs mt-5">*Konsultasi 100% gratis, tidak ada kewajiban apapun</p>
    </div>
</section>

</div>

@push('scripts')
<script>
    // Counter animation
    const cObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (!e.isIntersecting) return;
            const el = e.target, target = parseInt(el.dataset.count);
            let cur = 0; const step = Math.ceil(target / 50);
            const t = setInterval(() => {
                cur = Math.min(cur + step, target);
                el.textContent = cur;
                if (cur >= target) { el.textContent = target + '+'; clearInterval(t); }
            }, 28);
            cObs.unobserve(el);
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('[data-count]').forEach(el => cObs.observe(el));

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