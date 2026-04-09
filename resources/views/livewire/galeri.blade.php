<div>

    {{-- PAGE HERO --}}
    <section class="pt-28 pb-10 px-6 max-w-6xl mx-auto">
        <div class="reveal">
            <div class="flex items-center gap-2 text-xs font-semibold text-stone-400 mb-4">
                <a href="{{ route('beranda') }}" class="hover:text-[#006400] transition-colors">Beranda</a>
                <span>›</span>
                <span class="text-[#006400]">Galeri Proyek</span>
            </div>
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <span
                        class="inline-block bg-green-100 text-[#006400] text-xs font-bold px-3 py-1.5 rounded-full mb-3 tracking-wide">
                        📸 Portofolio Nyata</span>
                    <h1 class="font-display font-black text-4xl md:text-5xl text-stone-900 leading-tight">
                        Galeri Proyek<br><span class="text-[#006400]">Green Deahan Sport</span>
                    </h1>
                    <p class="text-stone-500 text-sm md:text-base mt-3 max-w-xl">
                        Lihat hasil nyata konstruksi lapangan kami di berbagai kota Indonesia. Klik foto untuk melihat
                        detail proyek.
                    </p>
                </div>
                {{-- quick stats --}}
                <div class="flex gap-4 flex-shrink-0">
                    <div class="text-center bg-white border border-stone-200 rounded-xl px-5 py-3">
                        <div class="font-display font-black text-2xl text-[#006400]">100+</div>
                        <div class="text-xs text-stone-400 font-semibold mt-0.5">Proyek</div>
                    </div>
                    <div class="text-center bg-white border border-stone-200 rounded-xl px-5 py-3">
                        <div class="font-display font-black text-2xl text-[#006400]">15+</div>
                        <div class="text-xs text-stone-400 font-semibold mt-0.5">Kota</div>
                    </div>
                    <div class="text-center bg-white border border-stone-200 rounded-xl px-5 py-3">
                        <div class="font-display font-black text-2xl text-[#006400]">4</div>
                        <div class="text-xs text-stone-400 font-semibold mt-0.5">Jenis Lapangan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- TABS --}}
    <section class="sticky top-[65px] z-40 bg-[#f7f5f2] border-b border-stone-200 px-6 py-3">
        <div class="max-w-6xl mx-auto">
            <div class="flex gap-2 overflow-x-auto pb-1 scrollbar-hide">
                <button onclick="filterGal('semua')" data-tab="semua"
                    class="tab-btn active flex-shrink-0 text-sm font-bold px-5 py-2.5 rounded-xl border-2 border-[#006400] text-white bg-[#006400]">
                    🏟 Semua <span class="ml-1 text-xs opacity-75" id="count-semua"></span>
                </button>
                <button onclick="filterGal('futsal')" data-tab="futsal"
                    class="tab-btn flex-shrink-0 text-sm font-bold px-5 py-2.5 rounded-xl border-2 border-stone-200 text-stone-600 bg-white">
                    ⚽ Futsal <span class="ml-1 text-xs opacity-60" id="count-futsal"></span>
                </button>
                <button onclick="filterGal('minisoccer')" data-tab="minisoccer"
                    class="tab-btn flex-shrink-0 text-sm font-bold px-5 py-2.5 rounded-xl border-2 border-stone-200 text-stone-600 bg-white">
                    🟢 Mini Soccer <span class="ml-1 text-xs opacity-60" id="count-minisoccer"></span>
                </button>
                <button onclick="filterGal('padel')" data-tab="padel"
                    class="tab-btn flex-shrink-0 text-sm font-bold px-5 py-2.5 rounded-xl border-2 border-stone-200 text-stone-600 bg-white">
                    🎾 Padel <span class="ml-1 text-xs opacity-60" id="count-padel"></span>
                </button>
                <button onclick="filterGal('badminton')" data-tab="badminton"
                    class="tab-btn flex-shrink-0 text-sm font-bold px-5 py-2.5 rounded-xl border-2 border-stone-200 text-stone-600 bg-white">
                    🏸 Badminton <span class="ml-1 text-xs opacity-60" id="count-badminton"></span>
                </button>
                <button onclick="filterGal('proses')" data-tab="proses"
                    class="tab-btn flex-shrink-0 text-sm font-bold px-5 py-2.5 rounded-xl border-2 border-stone-200 text-stone-600 bg-white">
                    🏗 Proses Konstruksi <span class="ml-1 text-xs opacity-60" id="count-proses"></span>
                </button>
            </div>
        </div>
    </section>

    {{-- GALLERY GRID --}}
    <section class="py-10 px-6 max-w-6xl mx-auto">
        {{-- Result count --}}
        <div class="flex items-center justify-between mb-6 reveal">
            <p class="text-sm text-stone-500"><span id="result-count" class="font-bold text-stone-800"></span> foto
                ditampilkan</p>
            <p class="text-xs text-stone-400 italic">Klik foto untuk lihat detail</p>
        </div>

        {{-- Grid --}}
        <div class="gal-grid" id="gal-grid"></div>

        {{-- Empty state --}}
        <div id="empty-state" class="hidden text-center py-20">
            <div class="text-5xl mb-4">🔍</div>
            <h3 class="font-display font-black text-xl text-stone-700 mb-2">Foto tidak ditemukan</h3>
            <p class="text-stone-400 text-sm">Coba pilih kategori lain</p>
        </div>
    </section>

    {{-- CTA STRIP --}}
    <section class="py-16 px-6 bg-[#006400] mt-6">
        <div
            class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
            <div>
                <h2 class="font-display font-black text-2xl md:text-3xl text-white mb-2">Tertarik Punya Lapangan Seperti
                    Ini?</h2>
                <p class="text-green-200 text-sm">Konsultasi gratis dengan tim kami, respons dalam 1 jam!</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 flex-shrink-0">
                <a href="https://wa.me/6281357570064?text=Halo,%20saya%20tertarik%20membangun%20lapangan%20setelah%20lihat%20galeri"
                    target="_blank"
                    class="bg-white text-[#006400] font-bold px-7 py-3.5 rounded-xl hover:bg-green-50 transition-colors text-sm whitespace-nowrap">
                    💬 Konsultasi Gratis
                </a>
                <a href="{{ route('kontak') }}"
                    class="border-2 border-white text-white font-bold px-7 py-3.5 rounded-xl hover:bg-white/10 transition-colors text-sm whitespace-nowrap">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    {{-- Static HTML lightbox (controlled by JS) --}}
    <div id="lightbox" class="fixed inset-0 z-[1000] items-center justify-center p-4" onclick="closeLightbox(event)">
        <div class="relative max-w-3xl w-full rounded-2xl overflow-hidden" onclick="event.stopPropagation()">
            <div class="w-full aspect-[4/3] bg-[#d4e6d4] flex items-center justify-center">
                <div id="lb-ph-text"
                    class="text-[#006400] font-bold text-sm uppercase tracking-wider border-2 border-dashed border-[#006400]/40 px-6 py-4 rounded-lg bg-white/70 text-center leading-relaxed whitespace-pre-line">
                </div>
            </div>
            <div class="bg-white px-6 py-4">
                <span id="lb-badge" class="text-xs font-bold px-2.5 py-1 rounded-full border inline-block mb-2"></span>
                <h3 id="lb-title" class="font-display font-black text-stone-900 text-lg"></h3>
                <p id="lb-desc" class="text-stone-500 text-sm mt-1"></p>
            </div>
            <button onclick="navLightbox(-1)"
                class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/40 text-white rounded-full w-10 h-10 flex items-center justify-center text-xl transition-colors">‹</button>
            <button onclick="navLightbox(1)"
                class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/40 text-white rounded-full w-10 h-10 flex items-center justify-center text-xl transition-colors">›</button>
            <button onclick="closeLightbox()"
                class="absolute top-3 right-3 bg-black/50 hover:bg-black/70 text-white rounded-full w-8 h-8 flex items-center justify-center text-lg transition-colors">×</button>
        </div>
    </div>

</div>

@push('styles')
    .gal-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: 220px;
    gap: 1.25rem;
    }
    @verbatim
        @media (max-width: 768px) {
        .gal-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 480px) {
        .gal-grid { grid-template-columns: 1fr; }
        }
    @endverbatim
    .gal-item {
    position: relative;
    cursor: pointer;
    border-radius: 1rem;
    overflow: hidden;
    border: 1px solid #e7e4e0;
    transition: box-shadow 0.2s, transform 0.2s;
    }
    .gal-item:hover { box-shadow: 0 8px 30px rgba(0,0,0,.15); transform: translateY(-2px); }
    .gal-item.tall { grid-row: span 2; }
    .gal-item .img-ph { height: 100%; }
    .overlay {
    position: absolute; inset: 0;
    background: rgba(0,100,0,.78);
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    gap: .5rem; opacity: 0;
    transition: opacity .3s; z-index: 10;
    padding-bottom: 3.5rem;
    }
    .gal-item:hover .overlay { opacity: 1; }
    #lightbox { display: none; }
    #lightbox.open { display: flex; background: rgba(0,0,0,.85); }
@endpush

@push('scripts')
    <script>
        // ── DATA GALERI ──
        const galeriData = [
            // FUTSAL
            { id: 1, cat: 'futsal', tall: true, title: 'Futsal Indoor Jakarta Selatan', kota: 'Jakarta Selatan', material: 'Lantai Interlock', desc: 'Lapangan futsal indoor standar internasional. Lantai interlock premium, pencahayaan LED 1000 lux, pagar galvanis.', badge: '⚽ Futsal', badgeColor: 'text-green-700 bg-green-50 border-green-200', ph: '📸 FOTO FUTSAL 1\nInterior Lapangan — View Lebar\n(700×500px)' },
            { id: 2, cat: 'futsal', tall: false, title: 'Futsal Outdoor Bekasi', kota: 'Bekasi, Jawa Barat', material: 'Rumput Sintetis', desc: 'Lapangan futsal outdoor dengan rumput sintetis 40mm tahan cuaca. Sistem drainase profesional.', badge: '⚽ Futsal', badgeColor: 'text-green-700 bg-green-50 border-green-200', ph: '📸 FOTO FUTSAL 2\nEksterior Outdoor — Rumput Sintetis\n(700×440px)' },
            { id: 3, cat: 'futsal', tall: false, title: 'Futsal Arena Complex Bandung', kota: 'Bandung, Jawa Barat', material: 'Lantai Interlock', desc: 'Kompleks futsal 2 lapangan dengan ruang ganti, tribun, dan kantin. Proyek turnkey selesai 28 hari.', badge: '⚽ Futsal', badgeColor: 'text-green-700 bg-green-50 border-green-200', ph: '📸 FOTO FUTSAL 3\nTampak Depan Gedung / Kompleks\n(700×440px)' },
            { id: 4, cat: 'futsal', tall: true, title: 'Futsal Indoor Makassar', kota: 'Makassar, Sulawesi Selatan', material: 'Rumput Sintetis', desc: 'Lapangan futsal indoor dengan pencahayaan LED anti-silau. Kapasitas penonton 150 orang.', badge: '⚽ Futsal', badgeColor: 'text-green-700 bg-green-50 border-green-200', ph: '📸 FOTO FUTSAL 4\nPencahayaan Malam Hari\n(700×500px)' },
            { id: 5, cat: 'futsal', tall: false, title: 'Futsal Outdoor Medan', kota: 'Medan, Sumatera Utara', material: 'Lantai Interlock', desc: 'Lapangan futsal outdoor dengan lantai interlock anti-UV. Finishing line cat epoxy berkualitas.', badge: '⚽ Futsal', badgeColor: 'text-green-700 bg-green-50 border-green-200', ph: '📸 FOTO FUTSAL 5\nMarking Lapangan / Close-Up Lantai\n(700×440px)' },
            { id: 6, cat: 'futsal', tall: false, title: 'Futsal Indoor Surabaya', kota: 'Surabaya, Jawa Timur', material: 'Lantai Interlock', desc: 'Lapangan futsal indoor dengan sistem ventilasi baik. Dilengkapi papan skor digital.', badge: '⚽ Futsal', badgeColor: 'text-green-700 bg-green-50 border-green-200', ph: '📸 FOTO FUTSAL 6\nView dari Tribun / Papan Skor\n(700×440px)' },

            // MINI SOCCER
            { id: 7, cat: 'minisoccer', tall: true, title: 'Mini Soccer Outdoor Surabaya', kota: 'Surabaya, Jawa Timur', material: 'Rumput Sintetis Grade A', desc: 'Lapangan mini soccer outdoor premium. Rumput sintetis grade A ketebalan 50mm, tribun 200 orang, pencahayaan malam.', badge: '🟢 Mini Soccer', badgeColor: 'text-blue-700 bg-blue-50 border-blue-200', ph: '📸 FOTO MINI SOCCER 1\nAerial / Tampak Atas Lapangan\n(700×500px)' },
            { id: 8, cat: 'minisoccer', tall: false, title: 'Mini Soccer Indoor Semarang', kota: 'Semarang, Jawa Tengah', material: 'Rumput Sintetis', desc: 'Mini soccer indoor dengan atap baja ringan. Bisa beroperasi malam dan hujan tanpa gangguan.', badge: '🟢 Mini Soccer', badgeColor: 'text-blue-700 bg-blue-50 border-blue-200', ph: '📸 FOTO MINI SOCCER 2\nInterior Indoor — Full Lapangan\n(700×440px)' },
            { id: 9, cat: 'minisoccer', tall: false, title: 'Mini Soccer Outdoor Bali', kota: 'Denpasar, Bali', material: 'Rumput Sintetis Grade A', desc: 'Mini soccer outdoor view pantai. Material tahan garam dan kelembapan tinggi. Drainase cepat.', badge: '🟢 Mini Soccer', badgeColor: 'text-blue-700 bg-blue-50 border-blue-200', ph: '📸 FOTO MINI SOCCER 3\nOutdoor — Suasana Sore Hari\n(700×440px)' },
            { id: 10, cat: 'minisoccer', tall: false, title: 'Mini Soccer Outdoor Palembang', kota: 'Palembang, Sumatera Selatan', material: 'Rumput Sintetis', desc: 'Lapangan mini soccer dengan tribun baja ringan dan atap polycarbonate. Kapasitas 100 penonton.', badge: '🟢 Mini Soccer', badgeColor: 'text-blue-700 bg-blue-50 border-blue-200', ph: '📸 FOTO MINI SOCCER 4\nTribun & Atap Polycarbonate\n(700×440px)' },
            { id: 11, cat: 'minisoccer', tall: true, title: 'Mini Soccer Indoor Balikpapan', kota: 'Balikpapan, Kalimantan Timur', material: 'Rumput Sintetis Grade B', desc: 'Mini soccer indoor dengan desain modern. Ruang ganti 2 tim, pantry, area parkir luas.', badge: '🟢 Mini Soccer', badgeColor: 'text-blue-700 bg-blue-50 border-blue-200', ph: '📸 FOTO MINI SOCCER 5\nView dari Gawang / Close Up Rumput\n(700×500px)' },

            // PADEL
            { id: 12, cat: 'padel', tall: true, title: 'Padel Premium Medan', kota: 'Medan, Sumatera Utara', material: 'Kaca Tempered + Artificial Grass', desc: 'Lapangan padel standar internasional IFF. Rangka baja galvanis, kaca tempered 12mm safety glass, artificial grass padel 10mm.', badge: '🎾 Padel', badgeColor: 'text-orange-700 bg-orange-50 border-orange-200', ph: '📸 FOTO PADEL 1\nStruktur Kaca Full View\n(700×500px)' },
            { id: 13, cat: 'padel', tall: false, title: 'Padel Indoor Jakarta Pusat', kota: 'Jakarta Pusat', material: 'Kaca Tempered + Artificial Grass', desc: '2 lapangan padel indoor. Pencahayaan LED 400 lux standar FIP, flooring padel premium import.', badge: '🎾 Padel', badgeColor: 'text-orange-700 bg-orange-50 border-orange-200', ph: '📸 FOTO PADEL 2\nInterior 2 Court — View dari Atas\n(700×440px)' },
            { id: 14, cat: 'padel', tall: false, title: 'Padel Outdoor Bali', kota: 'Kuta, Bali', material: 'Kaca + Artificial Grass', desc: 'Padel outdoor dengan view alam tropis. Struktur tahan angin dan hujan. Drainase cepat.', badge: '🎾 Padel', badgeColor: 'text-orange-700 bg-orange-50 border-orange-200', ph: '📸 FOTO PADEL 3\nOutdoor — Suasana Tropis / View Hijau\n(700×440px)' },
            { id: 15, cat: 'padel', tall: false, title: 'Padel Complex Surabaya', kota: 'Surabaya, Jawa Timur', material: 'Kaca Tempered', desc: 'Kompleks 3 lapangan padel dengan lounge, ruang ganti, dan pro shop. Proyek selesai 25 hari.', badge: '🎾 Padel', badgeColor: 'text-orange-700 bg-orange-50 border-orange-200', ph: '📸 FOTO PADEL 4\nKompleks 3 Lapangan — Tampak Luar\n(700×440px)' },
            { id: 16, cat: 'padel', tall: true, title: 'Padel Indoor Yogyakarta', kota: 'Yogyakarta', material: 'Kaca Tempered + Artificial Grass', desc: 'Lapangan padel indoor pertama di Yogyakarta. Desain estetik dengan lighting warna-warni untuk foto instagramable.', badge: '🎾 Padel', badgeColor: 'text-orange-700 bg-orange-50 border-orange-200', ph: '📸 FOTO PADEL 5\nPencahayaan Malam / Aesthetic Shot\n(700×500px)' },

            // BADMINTON
            { id: 17, cat: 'badminton', tall: true, title: 'Badminton 4 Court Bandung', kota: 'Bandung, Jawa Barat', material: 'Vinyl Sport', desc: '4 lapangan badminton indoor dengan lantai vinyl sport premium. Pencahayaan LED 500 lux anti-silau. Selesai 30 hari.', badge: '🏸 Badminton', badgeColor: 'text-purple-700 bg-purple-50 border-purple-200', ph: '📸 FOTO BADMINTON 1\n4 Court View dari Tribun\n(700×500px)' },
            { id: 18, cat: 'badminton', tall: false, title: 'Badminton 2 Court Semarang', kota: 'Semarang, Jawa Tengah', material: 'Kayu Keras', desc: '2 lapangan badminton dengan lantai kayu keras jati lokal. Akustik ruangan baik, non-slip, ramah lutut.', badge: '🏸 Badminton', badgeColor: 'text-purple-700 bg-purple-50 border-purple-200', ph: '📸 FOTO BADMINTON 2\nClose-Up Lantai Kayu / Net BWF\n(700×440px)' },
            { id: 19, cat: 'badminton', tall: false, title: 'Badminton Indoor Makassar', kota: 'Makassar, Sulawesi Selatan', material: 'Vinyl Sport', desc: 'Lapangan badminton dengan ventilasi optimal. Tiang net standar BWF, marking garis cat epoxy.', badge: '🏸 Badminton', badgeColor: 'text-purple-700 bg-purple-50 border-purple-200', ph: '📸 FOTO BADMINTON 3\nView Full Lapangan + Lampu LED\n(700×440px)' },
            { id: 20, cat: 'badminton', tall: false, title: 'Badminton 6 Court Jakarta Utara', kota: 'Jakarta Utara', material: 'Vinyl Sport Premium', desc: 'Kompleks badminton 6 court terbesar di kawasan Jakarta Utara. Dilengkapi ruang ganti, pantry, dan area parkir.', badge: '🏸 Badminton', badgeColor: 'text-purple-700 bg-purple-50 border-purple-200', ph: '📸 FOTO BADMINTON 4\n6 Court Aerial / Tampak Atas\n(700×440px)' },
            { id: 21, cat: 'badminton', tall: true, title: 'Badminton Indoor Medan', kota: 'Medan, Sumatera Utara', material: 'Kayu Keras', desc: 'Lapangan badminton kayu keras dengan akustik ruangan premium. Tribun 100 kursi, papan skor digital.', badge: '🏸 Badminton', badgeColor: 'text-purple-700 bg-purple-50 border-purple-200', ph: '📸 FOTO BADMINTON 5\nSuasana Pertandingan / Tribun\n(700×500px)' },

            // PROSES KONSTRUKSI
            { id: 22, cat: 'proses', tall: false, title: 'Survey Lokasi — Sebelum Mulai', kota: 'Berbagai Kota', material: 'Survey & Pengukuran', desc: 'Tim lapangan kami melakukan survey lokasi, pengukuran lahan, dan analisis tanah sebelum konstruksi dimulai.', badge: '🏗 Proses', badgeColor: 'text-stone-700 bg-stone-50 border-stone-200', ph: '📸 FOTO PROSES 1\nTim Survey + Alat Ukur di Lokasi\n(700×440px)' },
            { id: 23, cat: 'proses', tall: true, title: 'Pengerjaan Struktur Dasar', kota: 'On Progress', material: 'Konstruksi', desc: 'Proses pengerjaan pondasi dan struktur dasar lapangan. Material berkualitas, pengawasan ketat di setiap tahap.', badge: '🏗 Proses', badgeColor: 'text-stone-700 bg-stone-50 border-stone-200', ph: '📸 FOTO PROSES 2\nStruktur Besi / Pengecoran Pondasi\n(700×500px)' },
            { id: 24, cat: 'proses', tall: false, title: 'Pemasangan Lantai Interlock', kota: 'On Progress', material: 'Lantai Interlock', desc: 'Proses pemasangan lantai interlock yang presisi. Setiap tile dipasang dengan cermat untuk hasil rata dan rapi.', badge: '🏗 Proses', badgeColor: 'text-stone-700 bg-stone-50 border-stone-200', ph: '📸 FOTO PROSES 3\nPemasangan Tile Interlock\n(700×440px)' },
            { id: 25, cat: 'proses', tall: false, title: 'Pengiriman Material Lapangan', kota: 'Logistik', material: 'Material & Logistik', desc: 'Pengiriman material ke lokasi proyek di seluruh Indonesia. Kami handle logistik sepenuhnya untuk Anda.', badge: '🏗 Proses', badgeColor: 'text-stone-700 bg-stone-50 border-stone-200', ph: '📸 FOTO PROSES 4\nTruk Pengiriman / Unloading Material\n(700×440px)' },
            { id: 26, cat: 'proses', tall: false, title: 'Pemasangan Rumput Sintetis', kota: 'On Progress', material: 'Rumput Sintetis', desc: 'Proses pemasangan rumput sintetis tahap demi tahap. Jahitan presisi, permukaan rata, hasil rapi.', badge: '🏗 Proses', badgeColor: 'text-stone-700 bg-stone-50 border-stone-200', ph: '📸 FOTO PROSES 5\nRoll Rumput / Proses Pemasangan\n(700×440px)' },
            { id: 27, cat: 'proses', tall: true, title: 'Before vs After Konstruksi', kota: 'Dokumentasi', material: 'Before After', desc: 'Transformasi lahan kosong menjadi lapangan profesional siap pakai. Bukti nyata kemampuan tim kami.', badge: '🏗 Proses', badgeColor: 'text-stone-700 bg-stone-50 border-stone-200', ph: '📸 FOTO PROSES 6\nBefore–After Split / Transformasi\n(700×500px)' },
        ];

        let activeFilter = 'semua';
        let currentIndex = 0;
        let filteredItems = [];

        // Count tabs
        function updateCounts() {
            const cats = ['futsal', 'minisoccer', 'padel', 'badminton', 'proses'];
            document.getElementById('count-semua').textContent = '(' + galeriData.length + ')';
            cats.forEach(c => {
                const el = document.getElementById('count-' + c);
                if (el) el.textContent = '(' + galeriData.filter(i => i.cat === c).length + ')';
            });
        }

        // Render grid
        function renderGrid(cat) {
            filteredItems = cat === 'semua' ? [...galeriData] : galeriData.filter(i => i.cat === cat);
            const grid = document.getElementById('gal-grid');
            const empty = document.getElementById('empty-state');
            document.getElementById('result-count').textContent = filteredItems.length;

            if (filteredItems.length === 0) { grid.innerHTML = ''; empty.classList.remove('hidden'); return; }
            empty.classList.add('hidden');

            grid.innerHTML = filteredItems.map((item, idx) => `
                    <div class="gal-item relative ${item.tall ? 'tall' : ''}" onclick="openLightbox(${idx})">
                      <div class="img-ph" style="height:100%">
                        <div class="img-ph-text" style="font-size:.65rem">${item.ph}</div>
                      </div>
                      <div class="overlay">
                        <span class="text-white text-3xl">${item.badge.split(' ')[0]}</span>
                        <p class="text-white font-bold text-sm px-4 text-center">${item.title}</p>
                        <span class="text-green-200 text-xs">Klik untuk detail →</span>
                      </div>
                      <div class="absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur px-3 py-2">
                        <span class="text-[10px] font-bold text-[#006400]">${item.badge}</span>
                        <p class="text-xs font-semibold text-stone-800 leading-tight mt-0.5 truncate">${item.title}</p>
                        <p class="text-[10px] text-stone-400 mt-0.5">📍 ${item.kota}</p>
                      </div>
                    </div>
                  `).join('');
        }

        // Filter
        function filterGal(cat) {
            activeFilter = cat;
            // update tab styles
            document.querySelectorAll('.tab-btn').forEach(btn => {
                const isActive = btn.dataset.tab === cat;
                btn.classList.toggle('active', isActive);
                btn.classList.toggle('bg-[#006400]', isActive);
                btn.classList.toggle('text-white', isActive);
                btn.classList.toggle('border-[#006400]', isActive);
                btn.classList.toggle('bg-white', !isActive);
                btn.classList.toggle('text-stone-600', !isActive);
                btn.classList.toggle('border-stone-200', !isActive);
            });
            renderGrid(cat);
        }

        // Lightbox
        function openLightbox(idx) {
            currentIndex = idx;
            showLightboxItem(idx);
            document.getElementById('lightbox').classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function showLightboxItem(idx) {
            const item = filteredItems[idx];
            document.getElementById('lb-ph-text').innerHTML = item.ph;
            document.getElementById('lb-title').textContent = item.title;
            document.getElementById('lb-desc').textContent = item.desc + ' | 📍 ' + item.kota + ' | 🧱 ' + item.material;
            const badge = document.getElementById('lb-badge');
            badge.textContent = item.badge;
            badge.className = 'text-xs font-bold px-2.5 py-1 rounded-full border inline-block mb-2 ' + item.badgeColor;
        }

        function navLightbox(dir) {
            currentIndex = (currentIndex + dir + filteredItems.length) % filteredItems.length;
            showLightboxItem(currentIndex);
        }

        function closeLightbox(e) {
            if (!e || e.target === document.getElementById('lightbox')) {
                document.getElementById('lightbox').classList.remove('open');
                document.body.style.overflow = '';
            }
        }

        // Keyboard nav
        document.addEventListener('keydown', e => {
            if (!document.getElementById('lightbox').classList.contains('open')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') navLightbox(-1);
            if (e.key === 'ArrowRight') navLightbox(1);
        });

        // Init
        updateCounts();
        renderGrid('semua');
    </script>
@endpush
</script>