<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title', 'Green Deahan Sport - Jasa Pembuatan Lapangan Futsal, Mini Soccer, Padel & Badminton Se-Indonesia')
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --green: #006400;
            --green-dark: #004d00;
            --green-light: #e8f5e9;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f7f5f2;
            color: #1a1a1a;
        }

        .font-display {
            font-family: 'DM Mono', monospace;
        }

        .img-ph {
            background: #d4e6d4;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        .img-ph::before {
            content: '';
            position: absolute;
            inset: 0;
            background: repeating-linear-gradient(45deg, rgba(0, 100, 0, .04) 0px, rgba(0, 100, 0, .04) 1px, transparent 1px, transparent 12px);
        }

        .img-ph-text {
            position: relative;
            z-index: 1;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #006400;
            line-height: 1.5;
            border: 2px dashed rgba(0, 100, 0, .35);
            padding: .75rem 1.2rem;
            border-radius: 6px;
            background: rgba(255, 255, 255, .6);
        }

        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .65s ease, transform .65s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ticker-wrap {
            overflow: hidden;
        }

        .ticker-inner {
            display: flex;
            gap: 3.5rem;
            animation: ticker 28s linear infinite;
            white-space: nowrap;
        }

        @keyframes ticker {
            0% {
                transform: translateX(0)
            }

            100% {
                transform: translateX(-50%)
            }
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height .4s ease, padding .3s ease;
        }

        .faq-answer.open {
            max-height: 300px;
        }

        .wa-float {
            position: fixed;
            bottom: 1.8rem;
            right: 1.8rem;
            z-index: 999;
            background: #25d366;
            color: #fff;
            border-radius: 50px;
            padding: .9rem 1.4rem;
            font-weight: 700;
            font-size: .9rem;
            box-shadow: 0 6px 24px rgba(37, 211, 102, .45);
            display: flex;
            align-items: center;
            gap: .5rem;
            text-decoration: none;
            transition: transform .2s, box-shadow .2s;
        }

        .wa-float:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(37, 211, 102, .5);
        }

        nav a.active {
            color: #006400;
            font-weight: 700;
        }

        @yield('styles')
    </style>
    @livewireStyles
</head>

<body>

    <!-- FLOATING WA BUTTON -->
    <a href="https://wa.me/6281357570064" target="_blank" class="wa-float">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
            <path
                d="M12 0C5.373 0 0 5.373 0 12c0 2.124.553 4.118 1.522 5.855L0 24l6.335-1.508A11.955 11.955 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.854 0-3.594-.48-5.112-1.32l-.366-.213-3.762.895.952-3.648-.239-.386A10 10 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z" />
        </svg>
        Chat WhatsApp
    </a>

    <!-- NAV -->
    <nav id="nav"
        class="fixed top-0 left-0 right-0 z-50 bg-[#f7f5f2] border-b border-stone-200 transition-shadow duration-300">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('beranda') }}" class="flex items-center gap-2.5">
                <div class="w-9 h-9 bg-[#006400] rounded-lg flex items-center justify-center">
                    <span class="text-white font-display font-black text-sm">GD</span>
                </div>
                <div>
                    <div class="font-display font-black text-[#006400] text-base leading-none">Green Deahan</div>
                    <div class="text-[10px] font-semibold text-stone-400 tracking-widest uppercase leading-none mt-0.5">
                        Sport</div>
                </div>
            </a>
            <div class="hidden md:flex items-center gap-7 text-sm font-semibold text-stone-500">
                <a href="{{ route('beranda') }}"
                    class="hover:text-[#006400] transition-colors {{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('galeri') }}"
                    class="hover:text-[#006400] transition-colors {{ request()->routeIs('galeri') ? 'active' : '' }}">Galeri</a>
                <a href="{{ route('blog') }}"
                    class="hover:text-[#006400] transition-colors {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
                <a href="{{ route('kontak') }}"
                    class="hover:text-[#006400] transition-colors {{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a>
            </div>
            <a href="https://wa.me/6281357570064" target="_blank"
                class="bg-[#006400] text-white text-sm font-bold px-5 py-2.5 rounded-lg hover:bg-[#004d00] transition-colors flex items-center gap-2">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                    <path
                        d="M12 0C5.373 0 0 5.373 0 12c0 2.124.553 4.118 1.522 5.855L0 24l6.335-1.508A11.955 11.955 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.854 0-3.594-.48-5.112-1.32l-.366-.213-3.762.895.952-3.648-.239-.386A10 10 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z" />
                </svg>
                Konsultasi Gratis
            </a>
            <button id="mob-menu-btn" class="md:hidden flex flex-col gap-1.5 p-1"
                onclick="document.getElementById('mob-menu').classList.toggle('hidden')">
                <span class="w-6 h-0.5 bg-stone-700 block"></span>
                <span class="w-6 h-0.5 bg-stone-700 block"></span>
                <span class="w-6 h-0.5 bg-stone-700 block"></span>
            </button>
        </div>
        <div id="mob-menu"
            class="hidden md:hidden bg-[#f7f5f2] border-t border-stone-200 px-6 py-4 flex flex-col gap-4 text-sm font-semibold text-stone-700">
            <a href="{{ route('beranda') }}" class="hover:text-[#006400]">Beranda</a>
            <a href="{{ route('galeri') }}" class="hover:text-[#006400]">Galeri</a>
            <a href="{{ route('blog') }}" class="hover:text-[#006400]">Blog</a>
            <a href="{{ route('kontak') }}" class="hover:text-[#006400]">Kontak</a>
            <a href="https://wa.me/6281357570064"
                class="bg-[#006400] text-white text-center py-2.5 rounded-lg">Konsultasi Gratis</a>
        </div>
    </nav>

    {{ $slot }}

    <!-- FOOTER -->
    <footer class="bg-stone-900 text-stone-400 pt-14 pb-8 px-6">
        <div class="max-w-6xl mx-auto grid sm:grid-cols-2 md:grid-cols-4 gap-10 mb-10">
            <div class="md:col-span-2">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="w-9 h-9 bg-[#006400] rounded-lg flex items-center justify-center">
                        <span class="text-white font-display font-black text-sm">GD</span>
                    </div>
                    <div>
                        <div class="font-display font-black text-white text-base leading-none">Green Deahan Sport</div>
                        <div
                            class="text-[10px] font-semibold text-stone-500 tracking-widest uppercase leading-none mt-0.5">
                            Sejak 2010</div>
                    </div>
                </div>
                <p class="text-sm text-stone-500 leading-relaxed max-w-xs mb-5">
                    Jasa pembuatan lapangan futsal, mini soccer, padel, dan badminton profesional sejak 2010. Melayani
                    seluruh Indonesia dengan garansi kualitas terbaik.
                </p>
                <div class="text-sm space-y-2">
                    <p>📞 <a href="tel:+6281357570064" class="hover:text-white transition-colors">+62 813-5757-0064</a>
                    </p>
                    <p>✉️ <a href="mailto:info@greendeahan.com"
                            class="hover:text-white transition-colors">info@greendeahan.com</a></p>
                    <p>🕐 Senin – Sabtu, 06.00 – 23.00 WIB</p>
                </div>
            </div>
            <div>
                <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-widest">Layanan</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors">Lapangan Futsal</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Mini Soccer</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Lapangan Padel</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Lapangan Badminton</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Konsultasi & Survey</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Maintenance & Servis</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-widest">Halaman</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a></li>
                    <li><a href="{{ route('galeri') }}" class="hover:text-white transition-colors">Galeri Proyek</a>
                    </li>
                    <li><a href="{{ route('blog') }}" class="hover:text-white transition-colors">Blog & Tips</a></li>
                    <li><a href="{{ route('kontak') }}" class="hover:text-white transition-colors">Kontak Kami</a></li>
                </ul>
                <div class="mt-6">
                    <h4 class="text-white font-bold text-sm mb-3 uppercase tracking-widest">Wilayah</h4>
                    <p class="text-xs text-stone-500 leading-relaxed">Jabodetabek · Jawa · Sumatera · Kalimantan ·
                        Sulawesi · Bali · NTB · Se-Indonesia</p>
                </div>
            </div>
        </div>
        <div
            class="max-w-6xl mx-auto pt-6 border-t border-stone-800 flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-stone-600">
            <p>© {{ date('Y') }} GreenDeahan.com — Jasa Pembuatan Lapangan Futsal, Mini Soccer, Padel & Badminton
                Se-Indonesia</p>
            <p>Dibuat dengan ❤️ untuk Indonesia</p>
        </div>
    </footer>

    @livewireScripts
    <script>
        // Reveal on scroll
        const observer = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); } });
        }, { threshold: 0.08 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Nav shadow on scroll
        window.addEventListener('scroll', () => {
            document.getElementById('nav').classList.toggle('shadow-md', window.scrollY > 40);
        });
    </script>
    @stack('scripts')
</body>

</html>