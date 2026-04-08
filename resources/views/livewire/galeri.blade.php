<div>

    {{-- ══════════════ LIGHTBOX ══════════════ --}}
    @if ($lightboxIndex !== null)
        @php $lb = $items[$lightboxIndex]; @endphp
        <div class="fixed inset-0 z-[1000] bg-black/92 flex items-center justify-center p-4" wire:click="closeLightbox"
            x-data @keydown.escape.window="$wire.closeLightbox()" @keydown.arrow-left.window="$wire.prevLightbox()"
            @keydown.arrow-right.window="$wire.nextLightbox()">
            <div class="relative max-w-3xl w-full rounded-2xl overflow-hidden" wire:click.stop>
                {{-- Placeholder image area --}}
                <div class="w-full aspect-[4/3] bg-[#d4e6d4] flex items-center justify-center">
                    <div
                        class="text-[#006400] font-bold text-sm uppercase tracking-wider border-2 border-dashed border-[#006400]/40 px-6 py-4 rounded-lg bg-white/70 text-center leading-relaxed">
                        {{ $lb['title'] }}
                    </div>
                </div>

                {{-- Info bar --}}
                <div class="bg-white px-6 py-4">
                    <span
                        class="text-xs font-bold px-2.5 py-1 rounded-full border inline-block mb-2 {{ $lb['badgeColor'] }}">{{ $lb['badge'] }}</span>
                    <h3 class="font-display font-black text-stone-900 text-lg">{{ $lb['title'] }}</h3>
                    <p class="text-stone-500 text-sm mt-1">{{ $lb['desc'] }} | 📍 {{ $lb['kota'] }} | 🧱
                        {{ $lb['material'] }}</p>
                </div>

                {{-- Nav arrows --}}
                <button wire:click="prevLightbox"
                    class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/40 text-white rounded-full w-10 h-10 flex items-center justify-center text-xl transition-colors">‹</button>
                <button wire:click="nextLightbox"
                    class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/40 text-white rounded-full w-10 h-10 flex items-center justify-center text-xl transition-colors">›</button>
                <button wire:click="closeLightbox"
                    class="absolute top-3 right-3 bg-black/50 hover:bg-black/70 text-white rounded-full w-8 h-8 flex items-center justify-center text-lg transition-colors">×</button>
            </div>
        </div>
    @endif

    {{-- ══════════════ PAGE HERO ══════════════ --}}
    <section class="pt-28 pb-12 px-6 max-w-6xl mx-auto text-center reveal">
        <span
            class="inline-block bg-green-100 text-[#006400] text-xs font-bold px-3 py-1.5 rounded-full mb-5 tracking-wide">🖼
            Portofolio Proyek Kami</span>
        <h1 class="font-display text-4xl md:text-5xl font-black text-stone-900 mb-4">Galeri Proyek</h1>
        <p class="text-stone-500 text-base leading-relaxed max-w-xl mx-auto">
            Lihat hasil nyata pekerjaan kami. 500+ lapangan sukses dibangun di seluruh Indonesia — dari Sabang sampai
            Merauke.
        </p>
    </section>

    {{-- ══════════════ FILTER TABS ══════════════ --}}
    <section class="px-6 max-w-6xl mx-auto mb-8">
        <div class="flex flex-wrap gap-2 justify-center">
            @foreach ($tabs as $tab)
                    <button wire:click="setFilter('{{ $tab['key'] }}')" class="tab-btn px-4 py-2 rounded-full border-2 text-sm font-bold transition-all
                        {{ $activeFilter === $tab['key']
                ? 'bg-[#006400] text-white border-[#006400] shadow-md'
                : 'bg-white text-stone-600 border-stone-200 hover:border-[#006400] hover:text-[#006400]' }}">
                        {{ $tab['label'] }}
                        <span class="text-xs opacity-70 ml-1">
                            ({{ $tab['key'] === 'semua' ? count($items) : collect($items)->where('cat', $tab['key'])->count() }})
                        </span>
                    </button>
            @endforeach
        </div>
        <p class="text-center text-sm text-stone-400 mt-4">Menampilkan <span
                class="font-bold text-stone-700">{{ count($items) }}</span> proyek</p>
    </section>

    {{-- ══════════════ GALLERY GRID ══════════════ --}}
    <section class="px-6 max-w-6xl mx-auto pb-20">
        @if (count($items) === 0)
            <div class="text-center py-20">
                <div class="text-5xl mb-4">🔍</div>
                <p class="text-stone-500 font-semibold">Tidak ada proyek ditemukan.</p>
            </div>
        @else
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4" style="grid-auto-rows: 220px;">
                @foreach ($items as $index => $item)
                    <div wire:click="openLightbox({{ $index }})" class="relative rounded-2xl overflow-hidden border-2 border-transparent bg-[#d4e6d4] cursor-pointer hover:-translate-y-1 hover:shadow-xl hover:border-[#006400] transition-all group
                        {{ $item['tall'] ? 'row-span-2' : '' }}">

                        {{-- Placeholder --}}
                        <div class="img-ph w-full h-full">
                            <div class="img-ph-text text-[0.65rem]">{{ $item['title'] }}</div>
                        </div>

                        {{-- Hover overlay --}}
                        <div
                            class="absolute inset-0 bg-[#006400]/75 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center gap-2">
                            <span class="text-3xl">{{ explode(' ', $item['badge'])[0] }}</span>
                            <p class="text-white font-bold text-sm px-4 text-center">{{ $item['title'] }}</p>
                            <span class="text-green-200 text-xs">Klik untuk detail →</span>
                        </div>

                        {{-- Bottom info --}}
                        <div class="absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur px-3 py-2">
                            <span class="text-[10px] font-bold text-[#006400]">{{ $item['badge'] }}</span>
                            <p class="text-xs font-semibold text-stone-800 leading-tight mt-0.5 truncate">{{ $item['title'] }}
                            </p>
                            <p class="text-[10px] text-stone-400 mt-0.5">📍 {{ $item['kota'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>

    {{-- ══════════════ CTA ══════════════ --}}
    <section class="py-16 px-6 bg-[#006400]">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="font-display text-3xl font-black text-white mb-3">Tertarik Membangun Lapangan?</h2>
            <p class="text-green-200 text-sm mb-8">Konsultasi gratis, survey lokasi, desain profesional. Bayar setelah
                selesai!</p>
            <a href="https://wa.me/6281357570064" target="_blank"
                class="bg-white text-[#006400] font-black px-8 py-4 rounded-xl hover:bg-green-50 transition-colors text-sm inline-flex items-center gap-2 shadow-xl">
                💬 Chat WhatsApp Sekarang
            </a>
        </div>
    </section>

</div>