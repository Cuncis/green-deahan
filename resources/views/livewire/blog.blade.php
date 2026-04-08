<div>

    {{-- ══════════════ ARTICLE MODAL ══════════════ --}}
    @if ($openArticle)
        <div class="fixed inset-0 z-[1000] bg-black/70 flex items-start justify-center p-4 overflow-y-auto"
            wire:click="closeArticle" x-data @keydown.escape.window="$wire.closeArticle()">
            <div class="bg-white rounded-2xl max-w-2xl w-full my-8 overflow-hidden" wire:click.stop>
                {{-- Hero placeholder --}}
                <div class="img-ph w-full" style="height:260px">
                    <div class="img-ph-text">{{ $openArticle['title'] }}</div>
                </div>

                {{-- Article body --}}
                <div class="px-8 py-7 prose prose-sm max-w-none article-body">
                    {!! $openArticle['body'] !!}
                </div>

                {{-- Footer CTA --}}
                <div
                    class="px-6 pb-6 pt-3 border-t border-stone-100 bg-[#f7f5f2] flex flex-col sm:flex-row items-center gap-3">
                    <div class="flex-1 text-sm text-stone-500">Tertarik membangun lapangan? Konsultasi gratis dengan tim
                        kami!</div>
                    <a href="https://wa.me/6281357570064" target="_blank" onclick="event.stopPropagation()"
                        class="bg-[#006400] text-white font-bold px-6 py-2.5 rounded-xl text-sm hover:bg-[#004d00] transition-colors whitespace-nowrap">
                        💬 Konsultasi Gratis →
                    </a>
                </div>
            </div>
        </div>
    @endif

    {{-- ══════════════ PAGE HERO ══════════════ --}}
    <section class="pt-28 pb-10 px-6 max-w-6xl mx-auto text-center reveal">
        <span
            class="inline-block bg-green-100 text-[#006400] text-xs font-bold px-3 py-1.5 rounded-full mb-5 tracking-wide">📖
            Blog & Tips Lapangan Olahraga</span>
        <h1 class="font-display text-4xl md:text-5xl font-black text-stone-900 mb-4">Blog & Tips</h1>
        <p class="text-stone-500 text-base leading-relaxed max-w-xl mx-auto">
            Panduan bisnis, tips teknis, dan inspirasi proyek lapangan olahraga dari tim ahli GreenDeahan.
        </p>
    </section>

    {{-- ══════════════ FEATURED ARTICLE ══════════════ --}}
    @if ($featuredArticle)
        <section class="px-6 max-w-6xl mx-auto mb-14">
            <div wire:click="openArticle({{ $featuredArticle['id'] }})"
                class="cursor-pointer grid md:grid-cols-2 gap-0 bg-white border-2 border-stone-200 rounded-2xl overflow-hidden hover:border-[#006400] hover:shadow-xl transition-all group">
                <div class="img-ph" style="height:320px">
                    <div class="img-ph-text">📌 ARTIKEL UTAMA<br>{{ $featuredArticle['title'] }}</div>
                </div>
                <div class="p-8 flex flex-col justify-center">
                    <span
                        class="inline-block text-xs font-bold px-2.5 py-1 rounded-full border mb-4 {{ $featuredArticle['catColor'] }}">
                        ⭐ Artikel Pilihan · {{ $featuredArticle['catLabel'] }}
                    </span>
                    <h2
                        class="font-display font-black text-xl text-stone-900 mb-3 group-hover:text-[#006400] transition-colors leading-tight">
                        {{ $featuredArticle['title'] }}
                    </h2>
                    <p class="text-stone-500 text-sm leading-relaxed mb-6">{{ $featuredArticle['excerpt'] }}</p>
                    <div class="flex items-center justify-between pt-4 border-t border-stone-100">
                        <span class="text-xs text-stone-400">📅 {{ $featuredArticle['date'] }} · ⏱
                            {{ $featuredArticle['read'] }}</span>
                        <span class="text-[#006400] font-bold text-sm">Baca Selengkapnya →</span>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- ══════════════ SEARCH + FILTER ══════════════ --}}
    <section class="px-6 max-w-6xl mx-auto mb-10">
        <div class="flex flex-col md:flex-row gap-4 items-center justify-between mb-6">
            {{-- Search --}}
            <div class="relative w-full md:max-w-xs">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-stone-400">🔍</span>
                <input wire:model.live.debounce.300ms="search" type="text" placeholder="Cari artikel..."
                    class="w-full pl-9 pr-4 py-2.5 border-2 border-stone-200 rounded-xl text-sm focus:outline-none focus:border-[#006400] focus:ring-2 focus:ring-[#006400]/10 transition-all" />
            </div>
            <p class="text-sm text-stone-400">Menampilkan <strong class="text-stone-700">{{ count($articles) }}</strong>
                artikel</p>
        </div>

        {{-- Category pills --}}
        <div class="flex flex-wrap gap-2">
            @foreach ($categories as $cat)
                    <button wire:click="setCat('{{ $cat['key'] }}')" class="cat-pill px-4 py-2 rounded-xl border-2 text-sm font-semibold transition-all
                        {{ $activeCat === $cat['key']
                ? 'bg-[#006400] text-white border-[#006400]'
                : 'bg-white text-stone-600 border-stone-200 hover:border-[#006400] hover:text-[#006400]' }}">
                        {{ $cat['label'] }}
                    </button>
            @endforeach
        </div>
    </section>

    {{-- ══════════════ ARTICLE GRID ══════════════ --}}
    <section class="px-6 max-w-6xl mx-auto pb-20">
        @if (count($articles) === 0)
            <div class="text-center py-20">
                <div class="text-5xl mb-4">📭</div>
                <p class="text-stone-500 font-semibold">Tidak ada artikel ditemukan.</p>
                <button wire:click="setCat('semua')" class="mt-4 text-[#006400] font-bold text-sm underline">Lihat semua
                    artikel</button>
            </div>
        @else
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($articles as $article)
                    <div wire:click="openArticle({{ $article['id'] }})"
                        class="blog-card bg-white border-2 border-stone-200 rounded-2xl overflow-hidden cursor-pointer hover:-translate-y-1 hover:shadow-xl hover:border-[#006400] transition-all group">
                        <div class="img-ph" style="height:180px">
                            <div class="img-ph-text text-[0.62rem]">{{ $article['title'] }}</div>
                        </div>
                        <div class="p-5">
                            <span
                                class="text-xs font-bold px-2.5 py-1 rounded-full border {{ $article['catColor'] }} inline-block mb-3">
                                {{ $article['catLabel'] }}
                            </span>
                            <h3
                                class="font-display font-black text-base text-stone-900 leading-tight mb-2 group-hover:text-[#006400] transition-colors">
                                {{ $article['title'] }}
                            </h3>
                            <p class="text-xs text-stone-500 leading-relaxed mb-4">{{ $article['excerpt'] }}</p>
                            <div class="flex items-center justify-between pt-3 border-t border-stone-100">
                                <span class="text-xs text-stone-400">📅 {{ $article['date'] }} · ⏱ {{ $article['read'] }}</span>
                                <span class="text-[#006400] font-bold text-xs">Baca →</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>

    {{-- ══════════════ CTA ══════════════ --}}
    <section class="py-16 px-6 bg-[#006400]">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="font-display text-3xl font-black text-white mb-3">Siap Bangun Lapangan Anda?</h2>
            <p class="text-green-200 text-sm mb-8">Konsultasi gratis dengan tim ahli kami. Tanpa kewajiban apapun!</p>
            <a href="https://wa.me/6281357570064" target="_blank"
                class="bg-white text-[#006400] font-black px-8 py-4 rounded-xl hover:bg-green-50 transition-colors text-sm inline-flex items-center gap-2 shadow-xl">
                💬 Chat WhatsApp Sekarang
            </a>
        </div>
    </section>

</div>

@push('styles')
    <style>
        .article-body h1 {
            font-family: 'DM Mono', monospace;
            font-size: 1.5rem;
            font-weight: 900;
            line-height: 1.3;
            color: #1a1a1a;
            margin-bottom: 1rem;
        }

        .article-body h2 {
            font-family: 'DM Mono', monospace;
            font-size: 1.1rem;
            font-weight: 900;
            color: #006400;
            margin: 1.8rem 0 .7rem;
        }

        .article-body p {
            font-size: .9rem;
            line-height: 1.8;
            color: #444;
            margin-bottom: 1rem;
        }

        .article-body ul {
            padding-left: 1.4rem;
            margin-bottom: 1rem;
        }

        .article-body ul li {
            font-size: .88rem;
            line-height: 1.75;
            color: #444;
            margin-bottom: .3rem;
        }

        .article-body .tip-box {
            background: #e8f5e9;
            border-left: 4px solid #006400;
            padding: 1rem 1.2rem;
            border-radius: 0 8px 8px 0;
            margin: 1.2rem 0;
            font-size: .88rem;
            color: #1a4d1a;
            line-height: 1.7;
        }
    </style>
@endpush