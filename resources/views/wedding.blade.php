{{-- wedding.blade.php — Wedding catalog landing page --}}
@extends('layouts.app')

@section('content')
<header class="fixed top-0 left-0 w-full z-50 bg-surface/90 backdrop-blur-md shadow-[0_1px_8px_rgba(31,27,24,0.04)]"><div class="bg-primary-container text-surface-container-lowest py-space-xs px-margin text-center font-label-sm text-label-sm tracking-wider flex items-center justify-center gap-space-sm"><span class="material-symbols-outlined text-[14px] text-secondary-container">auto_awesome</span><span>Promo Spesial Bulan Ini: Gratis Custom Domain &amp; Musik Latar untuk Paket Premium • Garansi Revisi Sepuasnya</span></div><div class="h-16 w-full px-margin flex items-center justify-between gap-space-lg"><div class="flex items-center gap-space-md"><img alt="Kalyana Invitation Catalog Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1XA6Llbb7bjujaBQshNIU5L5IpjwBnsO7zM5wzpQSSa9gdXzhhFW_maZ3XA7ZqpEjs6Har0DXLjPleEqSXGpC-_W_ynL5ffYZ9adZS8kqzQADai6dsaxIT9qBOiczR3BVo3FXyayRl6FZ6hjTQrN2h17gjeZZ6RL2Vwv6PYzDsfjeTHZYJ2cVilGhptiLOEHsmlynHafbwwbvErhK1ZZ2zpxKeHhQB9vTuFY8FjT2dCgpMEA-JAzcVPVIw"/><a class="flex flex-col" data-path="koleksi-desain" href="#"><span class="font-headline-sm text-headline-sm font-semibold tracking-tight text-on-surface">Kalyana</span><span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary">Invitation Studio</span></a></div><nav class="hidden xl:flex items-center gap-space-sm" data-active-classes="bg-surface-container-high text-on-surface font-semibold rounded-lg"><a aria-current="page" class="px-space-md py-space-xs transition-colors bg-surface-container-high text-on-surface font-semibold rounded-lg" data-path="koleksi-desain" href="#">Koleksi Desain</a><a class="px-space-md py-space-xs font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface transition-colors rounded" data-path="paket-dan-harga" href="#">Paket &amp; Harga</a><a class="px-space-md py-space-xs font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface transition-colors rounded" data-path="fitur-undangan" href="#">Fitur Undangan</a><a class="px-space-md py-space-xs font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface transition-colors rounded" data-path="cara-pemesanan" href="#">Cara Pemesanan</a><a class="px-space-md py-space-xs font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface transition-colors rounded" data-path="faq-dan-bantuan" href="#">FAQ &amp; Bantuan</a></nav><div class="flex items-center gap-space-md"><div class="hidden md:flex items-center bg-surface-container-lowest px-space-md py-space-xs rounded shadow-[0_1px_4px_rgba(0,0,0,0.03)]"><span class="material-symbols-outlined text-[18px] text-on-surface-variant mr-space-xs">search</span><input class="bg-transparent border-none outline-none font-body-sm text-body-sm text-on-surface placeholder:text-outline w-32 focus:w-44 transition-all" placeholder="Cari tema / warna..." type="text"/></div><span class="hidden lg:inline-flex px-space-sm py-space-xs bg-surface-container font-label-sm text-label-sm text-on-surface-variant rounded">IDR (Rp)</span><a class="hidden sm:inline-flex items-center gap-space-xs px-space-md py-space-xs bg-transparent text-primary hover:bg-surface-container hover:text-on-surface font-label-lg text-label-lg rounded transition-colors" href="https://wa.me/" target="_blank"><span class="material-symbols-outlined text-[18px]">chat</span><span>Konsultasi WA</span></a><a class="inline-flex items-center gap-space-xs px-space-lg py-space-xs bg-primary text-on-primary hover:bg-inverse-surface hover:text-inverse-on-surface font-label-lg text-label-lg rounded shadow-[0_2px_6px_-1px_rgba(31,27,24,0.08)] transition-all" data-path="checkout" href="#"><span>Pesan Sekarang</span><span class="material-symbols-outlined text-[16px]">arrow_forward</span></a><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></div></div></header>
<main class="flex flex-col w-full">
<div class="flex flex-col w-full">
<!-- Top Curatorial Banner / Notification Micro-Bar -->
<section class="w-full bg-surface-container-high text-on-surface py-2 px-6 sm:px-12 flex flex-wrap items-center justify-between gap-4 text-xs font-label-md">
<div class="flex items-center gap-2">
<span class="inline-block w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
<span class="tracking-wide uppercase text-on-surface-variant font-bold">Status Layanan:</span>
<span class="text-on-surface">Slot Desain Kilat 24 Jam Tersedia Hari Ini (Sisa 4 Kuota)</span>
</div>
<div class="flex items-center gap-6 text-on-surface-variant">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px] text-secondary">verified_user</span> Lisensi Resmi Audio BEKRAF</span>
<span class="hidden md:inline-flex items-center gap-1"><span class="material-symbols-outlined text-[16px] text-secondary">dns</span> Server High-Speed Cloudflare CDN</span>
</div>
</section>
<!-- Editorial Hero Section -->
<section class="relative w-full bg-surface-container-low px-6 sm:px-12 lg:px-16 pt-12 pb-16 overflow-hidden">
<div class="max-w-7xl mx-auto flex flex-col gap-10">
<!-- Top Grid: Typography & Key Visual Teaser -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
<div class="lg:col-span-8 flex flex-col gap-5">
<div class="inline-flex items-center gap-2 self-start bg-surface px-3 py-1.5 rounded text-xs font-label-sm text-secondary uppercase tracking-widest shadow-sm">
<span class="material-symbols-outlined text-[15px] text-secondary">brush</span>
            Koleksi Terkurasi Edisi 2025/2026
          </div>
<h1 class="font-headline-lg text-headline-lg lg:text-display-lg text-on-surface leading-tight tracking-tight">
            Koleksi Undangan Digital &amp; Cetak Premium untuk Hari Istimewa Anda
          </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
            Desain elegan, responsif di semua layar ponsel tamu, siap sebar dalam 24 jam dengan integrasi terlengkap: Konfirmasi RSVP, Musik Eksklusif, Navigasi Peta Presisi, dan Amplop Digital instan tanpa potongan.
          </p>
</div>
<!-- Quick Summary Micro Metric -->
<div class="lg:col-span-4 flex flex-col bg-surface p-6 rounded-lg shadow-sm gap-4">
<div class="flex items-center justify-between pb-3 bg-surface-container-low px-3 py-2 rounded">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Kepuasan Pengantin</span>
<div class="flex items-center gap-1 text-secondary font-bold text-sm">
<span class="material-symbols-outlined text-[18px] text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
              4.9 / 5.0
            </div>
</div>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded bg-secondary/10 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[26px]">all_inclusive</span>
</div>
<div>
<div class="font-headline-sm text-headline-sm text-on-surface font-semibold">1.840+ Pasangan</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Telah menyebarkan kebahagiaan mereka</div>
</div>
</div>
</div>
</div>
<!-- Quick Trust Badges Strip -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-3 pt-2">
<div class="flex items-center gap-3 bg-surface-container-lowest p-3.5 rounded shadow-sm">
<div class="w-9 h-9 rounded bg-secondary-container flex items-center justify-center text-on-secondary-fixed">
<span class="material-symbols-outlined text-[20px]">bolt</span>
</div>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface">Pengerjaan 1 Hari</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Draft kilat 24 jam</span>
</div>
</div>
<div class="flex items-center gap-3 bg-surface-container-lowest p-3.5 rounded shadow-sm">
<div class="w-9 h-9 rounded bg-surface-container-highest flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface">4.9/5 Rating Asli</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">1.800+ Ulasan Puas</span>
</div>
</div>
<div class="flex items-center gap-3 bg-surface-container-lowest p-3.5 rounded shadow-sm">
<div class="w-9 h-9 rounded bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed">
<span class="material-symbols-outlined text-[20px]">verified</span>
</div>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface">Garansi Revisi</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Pendampingan s.d Hari-H</span>
</div>
</div>
<div class="flex items-center gap-3 bg-surface-container-lowest p-3.5 rounded shadow-sm">
<div class="w-9 h-9 rounded bg-surface-container flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[20px]">devices</span>
</div>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface">100% Mobile Ready</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Lancar di iOS &amp; Android</span>
</div>
</div>
</div>
<!-- Advanced Filter & Search Hub -->
<div class="flex flex-col gap-5 bg-surface-container-lowest p-6 rounded-lg shadow-md">
<!-- Search row + Main category tabs -->
<div class="flex flex-col lg:flex-row gap-4 justify-between items-stretch">
<div class="relative flex-1">
<span class="material-symbols-outlined absolute left-3.5 top-3.5 text-outline text-[20px]">search</span>
<input class="w-full pl-11 pr-4 py-3 bg-surface-container-low text-on-surface placeholder:text-outline text-body-md font-body-md rounded focus:outline-none focus:bg-surface-container focus:ring-1 focus:ring-secondary transition-all" id="catalogSearchInput" placeholder="Cari nama tema atau nuansa warna (contoh: Sage, Minang, Velvet, Ivory)..." type="text"/>
</div>
<div class="flex items-center gap-3">
<label class="text-xs uppercase font-label-sm text-on-surface-variant whitespace-nowrap">Urutkan:</label>
<select class="bg-surface-container-low text-on-surface py-3 px-4 rounded text-body-sm font-label-lg focus:outline-none cursor-pointer">
<option value="populer">Terpopuler &amp; Paling Banyak Dilihat</option>
<option value="terbaru">Tema Rilis Terbaru (2025)</option>
<option value="harga-rendah">Harga Terendah</option>
<option value="harga-tinggi">Paket Terlengkap</option>
</select>
</div>
</div>
<!-- Filter Chips: Categories -->
<div class="flex flex-wrap items-center gap-2 pt-1">
<button class="px-4 py-2 bg-primary text-on-primary font-label-lg text-label-lg rounded transition-colors flex items-center gap-1.5">
<span>Semua Kategori</span>
<span class="text-xs bg-surface-container-highest/30 px-1.5 py-0.5 rounded text-on-primary">24</span>
</button>
<button class="px-4 py-2 bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg rounded transition-colors flex items-center gap-1.5">
<span>Modern Minimalis</span>
<span class="text-xs bg-surface-container-high px-1.5 py-0.5 rounded text-on-surface-variant">8</span>
</button>
<button class="px-4 py-2 bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg rounded transition-colors flex items-center gap-1.5">
<span>Adat &amp; Tradisional</span>
<span class="text-xs bg-surface-container-high px-1.5 py-0.5 rounded text-on-surface-variant">6</span>
</button>
<button class="px-4 py-2 bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg rounded transition-colors flex items-center gap-1.5">
<span>Floral &amp; Romantic</span>
<span class="text-xs bg-surface-container-high px-1.5 py-0.5 rounded text-on-surface-variant">5</span>
</button>
<button class="px-4 py-2 bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg rounded transition-colors flex items-center gap-1.5">
<span>Luxury Glamour</span>
<span class="text-xs bg-surface-container-high px-1.5 py-0.5 rounded text-on-surface-variant">3</span>
</button>
<button class="px-4 py-2 bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg rounded transition-colors flex items-center gap-1.5">
<span>Khitanan &amp; Ultah</span>
<span class="text-xs bg-surface-container-high px-1.5 py-0.5 rounded text-on-surface-variant">2</span>
</button>
</div>
<!-- Filter Sub-Controls: Color Palettes & Format Types -->
<div class="pt-3 flex flex-wrap items-center justify-between gap-4 text-xs font-label-sm bg-surface-container-low p-3 rounded">
<!-- Palette selection dots -->
<div class="flex items-center gap-2 flex-wrap">
<span class="text-on-surface-variant uppercase tracking-wider mr-1">Palet Warna:</span>
<button class="flex items-center gap-1.5 px-2.5 py-1 bg-surface rounded text-on-surface shadow-xs">
<span class="w-3 h-3 rounded-full bg-[#E8C5B0]"></span>
<span>Rose Gold</span>
</button>
<button class="flex items-center gap-1.5 px-2.5 py-1 bg-surface rounded text-on-surface shadow-xs">
<span class="w-3 h-3 rounded-full bg-[#8FA382]"></span>
<span>Sage Green</span>
</button>
<button class="flex items-center gap-1.5 px-2.5 py-1 bg-surface rounded text-on-surface shadow-xs">
<span class="w-3 h-3 rounded-full bg-[#E5D3B3]"></span>
<span>Champagne</span>
</button>
<button class="flex items-center gap-1.5 px-2.5 py-1 bg-surface rounded text-on-surface shadow-xs">
<span class="w-3 h-3 rounded-full bg-[#1F2C3F]"></span>
<span>Dark Navy</span>
</button>
<button class="flex items-center gap-1.5 px-2.5 py-1 bg-surface rounded text-on-surface shadow-xs">
<span class="w-3 h-3 rounded-full bg-[#C2B29F]"></span>
<span>Earthy Sand</span>
</button>
</div>
<!-- Format selector pills -->
<div class="flex items-center gap-1.5">
<span class="text-on-surface-variant uppercase tracking-wider mr-1">Format:</span>
<button class="px-2.5 py-1 bg-surface text-on-surface font-semibold rounded shadow-xs">Website Digital</button>
<button class="px-2.5 py-1 text-on-surface-variant hover:text-on-surface transition-colors">Cetak Fisik</button>
<button class="px-2.5 py-1 text-on-surface-variant hover:text-on-surface transition-colors">Bundle Keduanya</button>
</div>
</div>
</div>
</div>
</section>
<!-- Product Catalog Grid Section -->
<section class="w-full px-6 sm:px-12 lg:px-16 py-12 max-w-7xl mx-auto">
<div class="flex items-end justify-between mb-8 pb-4">
<div>
<div class="font-label-sm text-label-sm text-secondary uppercase tracking-widest mb-1">Pilihan Kuratorial</div>
<h2 class="font-headline-md text-headline-md text-on-surface">Katalog Undangan Terfavorit</h2>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant hidden sm:inline-block">Menampilkan 6 dari 24 Desain Eksklusif</span>
</div>
<!-- 6-Product Responsive Grid (3 columns on desktop) -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Card 1: The Ivory Serenity -->
<article class="bg-surface-container-lowest rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
<!-- Media Mockup Canvas -->
<div class="relative w-full aspect-[4/3] bg-surface-container overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Editorial close-up of The Ivory Serenity wedding invitation design displayed on a mobile smartphone placed on warm ivory textured linen cardstock with fine typography, delicate shadows, dried white florals, and neutral beige aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMlDjDBZp_Yf4yt7OrAq6GIAgDxQ-i8NzCXr3Vnr5EyNeyY3W76LyV0tlsi1AoEBNZUYg3aD60dlyL-trnboG4ZeLdMVW7PQWEkrItqVxcOJSDiLGPbPMhnKYKjCT3vvmwSQC0DMSkH2a3X9hwZh3prWM3hkYWJtAX97zeXleOhP-tkpe4Ue1zb9B6Yx2gzD7tJTjWcRouBobGd35t40jo0ZhxcibjKm1elF4e2tQ28dlbYkvtOc6q"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent opacity-80"></div>
<!-- Badges top left -->
<div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
<span class="px-2.5 py-1 bg-primary text-on-primary font-label-sm text-label-sm uppercase tracking-wider rounded font-bold">BEST SELLER</span>
<span class="px-2 py-1 bg-surface/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm rounded flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">tune</span> Modern
            </span>
</div>
<!-- Interactive Micro Controls Bottom Overlay -->
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
<div class="flex items-center gap-1.5 bg-primary/70 backdrop-blur-md px-2.5 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[15px] animate-pulse text-secondary-container">graphic_eq</span>
<span>Audio Waveform Ready</span>
</div>
<div class="flex items-center gap-1 bg-primary/70 backdrop-blur-md px-2 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[14px]">how_to_reg</span>
<span>Auto RSVP</span>
</div>
</div>
</div>
<!-- Body Details -->
<div class="p-6 flex-1 flex flex-col justify-between gap-5">
<div>
<div class="flex items-center justify-between gap-2 mb-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface">The Ivory Serenity</h3>
<span class="text-xs font-label-md px-2 py-0.5 rounded bg-surface-container text-on-surface-variant">Minimalist</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
              Tipografi serif kontemporer berpadu aksen garis halus bernuansa hangat dan tenang.
            </p>
<!-- Deliverable Feature Chips -->
<ul class="mt-4 space-y-1.5 text-xs text-on-surface-variant font-body-sm">
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Unlimited Nama Tamu Undangan</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Navigasi Peta Google Presisi &amp; Countdown</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Koleksi 5 Pilihan Lagu Romantis Berlisensi</span>
</li>
</ul>
</div>
<!-- Price & Dual Action Bar -->
<div class="pt-4 bg-surface-container-low p-4 rounded-lg flex flex-col gap-3">
<div class="flex items-baseline justify-between">
<div>
<span class="text-xs text-outline line-through block font-body-sm">Rp 249.000</span>
<div class="font-headline-sm text-headline-sm font-bold text-on-surface">Rp 149.000</div>
</div>
<span class="text-xs font-label-sm text-secondary bg-secondary-container/40 px-2 py-0.5 rounded font-semibold">Hemat 40%</span>
</div>
<div class="grid grid-cols-2 gap-2 pt-1">
<button class="w-full py-2.5 px-3 bg-surface text-on-surface font-label-lg text-label-lg rounded hover:bg-surface-container transition-colors flex items-center justify-center gap-1.5 shadow-xs">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Demo Live</span>
</button>
<button class="w-full py-2.5 px-3 bg-primary text-on-primary font-label-lg text-label-lg rounded hover:bg-inverse-surface transition-colors flex items-center justify-center gap-1.5 shadow-sm">
<span>Pilih Desain</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</article>
<!-- Card 2: Javanese Royal Heritage -->
<article class="bg-surface-container-lowest rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
<!-- Media Mockup Canvas -->
<div class="relative w-full aspect-[4/3] bg-surface-container overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Editorial wedding invitation card mockup showcasing Javanese Royal Heritage motif with intricate gold pradan batik patterns on deep dark charcoal paper background, warm ceremonial lighting, and regal Indonesian royal typography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVvbS5HWmPZsuQPw25WmZBVR2VAlSyafqKaH7GQBUIGq2eYXRVuhPMpF6wITY0XnkUTxwRQgsF9KGkYCfYp8bW3bXs9gefp6n0DwwCxdjAV8fNza8IWFcSDOEZbSAaVNSkuUumh7REpdg6ypQ9f1svAcRtqsI-jbwi6TxBazjrd48sFN0xuHwrNY7tJGlHIj75kIVhWiQMBzueB1WZeZJ4HVMEimR96xCZzty4XtahdF5QHyOJF12K"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent opacity-80"></div>
<div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
<span class="px-2.5 py-1 bg-secondary text-on-secondary font-label-sm text-label-sm uppercase tracking-wider rounded font-bold">POPULER</span>
<span class="px-2 py-1 bg-surface/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm rounded flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">flare</span> Adat Jawa
            </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
<div class="flex items-center gap-1.5 bg-primary/70 backdrop-blur-md px-2.5 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[15px] text-secondary-container">qr_code_2</span>
<span>QR Code Check-in Tamu</span>
</div>
<div class="flex items-center gap-1 bg-primary/70 backdrop-blur-md px-2 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[14px]">menu_book</span>
<span>Buku Tamu Digital</span>
</div>
</div>
</div>
<!-- Body Details -->
<div class="p-6 flex-1 flex flex-col justify-between gap-5">
<div>
<div class="flex items-center justify-between gap-2 mb-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Javanese Royal Heritage</h3>
<span class="text-xs font-label-md px-2 py-0.5 rounded bg-surface-container text-on-surface-variant">Tradisional</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
              Keagungan adat Jawa keraton dengan aksen pradan emas halus dan tipografi aksara modern.
            </p>
<ul class="mt-4 space-y-1.5 text-xs text-on-surface-variant font-body-sm">
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Modul Ayat Suci / Doa Adat Kustom</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Sistem Tiket Check-in QR Kehadiran</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Galeri Slider 10 Foto Pre-wedding</span>
</li>
</ul>
</div>
<div class="pt-4 bg-surface-container-low p-4 rounded-lg flex flex-col gap-3">
<div class="flex items-baseline justify-between">
<div>
<span class="text-xs text-outline line-through block font-body-sm">Rp 299.000</span>
<div class="font-headline-sm text-headline-sm font-bold text-on-surface">Rp 179.000</div>
</div>
<span class="text-xs font-label-sm text-secondary bg-secondary-container/40 px-2 py-0.5 rounded font-semibold">Hemat 40%</span>
</div>
<div class="grid grid-cols-2 gap-2 pt-1">
<button class="w-full py-2.5 px-3 bg-surface text-on-surface font-label-lg text-label-lg rounded hover:bg-surface-container transition-colors flex items-center justify-center gap-1.5 shadow-xs">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Demo Live</span>
</button>
<button class="w-full py-2.5 px-3 bg-primary text-on-primary font-label-lg text-label-lg rounded hover:bg-inverse-surface transition-colors flex items-center justify-center gap-1.5 shadow-sm">
<span>Pilih Desain</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</article>
<!-- Card 3: Botanical Eucalyptus & Sage -->
<article class="bg-surface-container-lowest rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
<!-- Media Mockup Canvas -->
<div class="relative w-full aspect-[4/3] bg-surface-container overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Editorial wedding invitation template Botanical Eucalyptus and Sage showing soft sage green foliage water-colored motifs, deckled edge paper stationery, romantic clean layout with natural morning sunlight." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAY3_aVvjzfXhHDUVDYbw4Av-JSqajXEt1gA9deHZh3iHiv6SZCeNvlVER9P2jdYeEn_jo0qgDhBZcNjVZ6xJLaYclvm53jWYVpFdCOsg3tSs0Y41wLsR9Nk_TBCYcGFYN27OkLzUnUpwgJVgpCm8zSIBqka599gnwPiKD6Q4llOLRyBBEuTVTBZ9mLxNLiZQDC05VIKQtYFvTuPRv8D4vuqqC9lC193lToTbjQYJrFTW0Yc2Kpp5tO"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent opacity-80"></div>
<div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
<span class="px-2.5 py-1 bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm uppercase tracking-wider rounded font-bold">NEW THEME</span>
<span class="px-2 py-1 bg-surface/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm rounded flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">eco</span> Rustic
            </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
<div class="flex items-center gap-1.5 bg-primary/70 backdrop-blur-md px-2.5 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[15px] text-secondary-container">mail</span>
<span>Animasi Buka Amplop</span>
</div>
<div class="flex items-center gap-1 bg-primary/70 backdrop-blur-md px-2 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[14px]">favorite</span>
<span>Love Story</span>
</div>
</div>
</div>
<!-- Body Details -->
<div class="p-6 flex-1 flex flex-col justify-between gap-5">
<div>
<div class="flex items-center justify-between gap-2 mb-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Botanical Eucalyptus</h3>
<span class="text-xs font-label-md px-2 py-0.5 rounded bg-surface-container text-on-surface-variant">Rustic Flora</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
              Sentuhan ilustrasi daun eucalyptus cat air lembut dengan nuansa alam yang menenangkan jiwa.
            </p>
<ul class="mt-4 space-y-1.5 text-xs text-on-surface-variant font-body-sm">
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Animasi Interaktif Buka Segel Lilin / Amplop</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Love Story Timeline Interaktif</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>RSVP Langsung Tersambung ke WhatsApp</span>
</li>
</ul>
</div>
<div class="pt-4 bg-surface-container-low p-4 rounded-lg flex flex-col gap-3">
<div class="flex items-baseline justify-between">
<div>
<span class="text-xs text-outline line-through block font-body-sm">Rp 199.000</span>
<div class="font-headline-sm text-headline-sm font-bold text-on-surface">Rp 129.000</div>
</div>
<span class="text-xs font-label-sm text-secondary bg-secondary-container/40 px-2 py-0.5 rounded font-semibold">Best Value</span>
</div>
<div class="grid grid-cols-2 gap-2 pt-1">
<button class="w-full py-2.5 px-3 bg-surface text-on-surface font-label-lg text-label-lg rounded hover:bg-surface-container transition-colors flex items-center justify-center gap-1.5 shadow-xs">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Demo Live</span>
</button>
<button class="w-full py-2.5 px-3 bg-primary text-on-primary font-label-lg text-label-lg rounded hover:bg-inverse-surface transition-colors flex items-center justify-center gap-1.5 shadow-sm">
<span>Pilih Desain</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</article>
<!-- Card 4: Celestial Golden Velvet -->
<article class="bg-surface-container-lowest rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
<!-- Media Mockup Canvas -->
<div class="relative w-full aspect-[4/3] bg-surface-container overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Editorial wedding invitation visual Celestial Golden Velvet featuring deep moody black velvet and dark navy backdrop with shimmering gold leaf constellations, champagne gold serif lettering, high luxury aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKOsHc5fEjuOt91OY0UIREeFRnvtPkC82SjO2-f_qWc6V09detHt1TujZqMrfuU0PSaFjz0xTkZTXeTRAYoeIKgimvnoDvEmzHM8hNuguXlLPGDeLKV89OnU_5EYvcgsG0zvm5qs5pvmwilEP4YSkqtSMm3cdwOl8mxTer44zQZaXwrMfs53r2AwD2GsfBJ-ssl863JBIwNj_hgLzU8WNNbiOaZUdi4qceMWcoPEbYGTNGhwYKi4HI"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent opacity-80"></div>
<div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
<span class="px-2.5 py-1 bg-surface-container-highest text-on-surface font-label-sm text-label-sm uppercase tracking-wider rounded font-bold">PREMIUM</span>
<span class="px-2 py-1 bg-surface/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm rounded flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">star_half</span> Luxury
            </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
<div class="flex items-center gap-1.5 bg-primary/70 backdrop-blur-md px-2.5 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[15px] text-secondary-container">language</span>
<span>Custom Domain .com</span>
</div>
<div class="flex items-center gap-1 bg-primary/70 backdrop-blur-md px-2 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[14px]">videocam</span>
<span>Video Background</span>
</div>
</div>
</div>
<!-- Body Details -->
<div class="p-6 flex-1 flex flex-col justify-between gap-5">
<div>
<div class="flex items-center justify-between gap-2 mb-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Celestial Golden Velvet</h3>
<span class="text-xs font-label-md px-2 py-0.5 rounded bg-surface-container text-on-surface-variant">Glamour</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
              Visual gelap dramatis bernuansa midnight navy dengan taburan foil champagne mewah.
            </p>
<ul class="mt-4 space-y-1.5 text-xs text-on-surface-variant font-body-sm">
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Gratis Custom Domain nama-anda.com</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Background Video Bergerak &amp; Filter IG</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Galeri HD hingga 20 Foto + Video Teaser</span>
</li>
</ul>
</div>
<div class="pt-4 bg-surface-container-low p-4 rounded-lg flex flex-col gap-3">
<div class="flex items-baseline justify-between">
<div>
<span class="text-xs text-outline line-through block font-body-sm">Rp 349.000</span>
<div class="font-headline-sm text-headline-sm font-bold text-on-surface">Rp 199.000</div>
</div>
<span class="text-xs font-label-sm text-secondary bg-secondary-container/40 px-2 py-0.5 rounded font-semibold">Paket VIP</span>
</div>
<div class="grid grid-cols-2 gap-2 pt-1">
<button class="w-full py-2.5 px-3 bg-surface text-on-surface font-label-lg text-label-lg rounded hover:bg-surface-container transition-colors flex items-center justify-center gap-1.5 shadow-xs">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Demo Live</span>
</button>
<button class="w-full py-2.5 px-3 bg-primary text-on-primary font-label-lg text-label-lg rounded hover:bg-inverse-surface transition-colors flex items-center justify-center gap-1.5 shadow-sm">
<span>Pilih Desain</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</article>
<!-- Card 5: Minimalist Monogram Line -->
<article class="bg-surface-container-lowest rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
<!-- Media Mockup Canvas -->
<div class="relative w-full aspect-[4/3] bg-surface-container overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Editorial wedding invitation design Minimalist Monogram Line shown on an ultra-clean mobile mockup against crisp textured off-white background with refined editorial typesetting, embossed monogram emblem, subtle drop shadows." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJY0FUJanxbN32KO5EI4nbJldagv-9oQV1SX8BuR2UDaJ9SCswddroSiq4j5bWkwzANhORl62HKqyv8EmHeHIcuIso0s4aru7-OlxZS9oezgQ6NHb5W76ENdfYXHZ2eeRJrIAjwUmQ4gbhwKW833J4F8LAEYGjUohGHnbjFx0ekw2EJ8rA4z75hpzGeUzrraBCjMC2F5AKx6iWlyeDmEBisoLJ7JUUW963S2PG8eaylH7qdVydYBQL"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent opacity-80"></div>
<div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
<span class="px-2.5 py-1 bg-surface-container-high text-on-surface font-label-sm text-label-sm uppercase tracking-wider rounded font-bold">LIGHTWEIGHT</span>
<span class="px-2 py-1 bg-surface/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm rounded flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">speed</span> &lt; 1 Detik
            </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
<div class="flex items-center gap-1.5 bg-primary/70 backdrop-blur-md px-2.5 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[15px] text-secondary-container">credit_card</span>
<span>Amplop BCA &amp; QRIS</span>
</div>
<div class="flex items-center gap-1 bg-primary/70 backdrop-blur-md px-2 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[14px]">notifications_active</span>
<span>Notif WA Otomatis</span>
</div>
</div>
</div>
<!-- Body Details -->
<div class="p-6 flex-1 flex flex-col justify-between gap-5">
<div>
<div class="flex items-center justify-between gap-2 mb-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Minimalist Monogram Line</h3>
<span class="text-xs font-label-md px-2 py-0.5 rounded bg-surface-container text-on-surface-variant">Clean</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
              Desain monokromatik modern dengan monogram inisial eksklusif dan performa loading super cepat.
            </p>
<ul class="mt-4 space-y-1.5 text-xs text-on-surface-variant font-body-sm">
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Clean White Monogram &amp; Tipografi Mewah</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Amplop Digital Multi Rekening &amp; QRIS</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Pemberitahuan Ucapan via WhatsApp</span>
</li>
</ul>
</div>
<div class="pt-4 bg-surface-container-low p-4 rounded-lg flex flex-col gap-3">
<div class="flex items-baseline justify-between">
<div>
<span class="text-xs text-outline line-through block font-body-sm">Rp 189.000</span>
<div class="font-headline-sm text-headline-sm font-bold text-on-surface">Rp 119.000</div>
</div>
<span class="text-xs font-label-sm text-secondary bg-secondary-container/40 px-2 py-0.5 rounded font-semibold">Hemat 37%</span>
</div>
<div class="grid grid-cols-2 gap-2 pt-1">
<button class="w-full py-2.5 px-3 bg-surface text-on-surface font-label-lg text-label-lg rounded hover:bg-surface-container transition-colors flex items-center justify-center gap-1.5 shadow-xs">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Demo Live</span>
</button>
<button class="w-full py-2.5 px-3 bg-primary text-on-primary font-label-lg text-label-lg rounded hover:bg-inverse-surface transition-colors flex items-center justify-center gap-1.5 shadow-sm">
<span>Pilih Desain</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</article>
<!-- Card 6: Padang Suntiang Gold & Maroon -->
<article class="bg-surface-container-lowest rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
<!-- Media Mockup Canvas -->
<div class="relative w-full aspect-[4/3] bg-surface-container overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Editorial wedding invitation design Padang Suntiang Gold and Maroon featuring ornate Minangkabau songket tapestry accents in deep rich maroon and warm gold leaf, traditional ceremonial ornaments, high end editorial finish." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAN5q6cZwIMBvEpffa84mtZSYYNAsCRIGtiOjYSccPtX1WPeOSQTPK0QlWPBHb24S-ok__ijBOCtOuiKzRIh4_x1Zy6J2OGHQAVpAWXaEsOR1btzvHiyX1HFF16CH3epBcC7z8NJfvvSRD5XF-bl-9zHNJERR2XMuOEMgOvj1VqRo2jglQgtbrVLh9vV3cMEp2SQnqd0D9dDCog0lS8aong3-zjd3F7UARVvYNZsTNlIlN0qu6-Jj3D"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent opacity-80"></div>
<div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
<span class="px-2.5 py-1 bg-secondary text-on-secondary font-label-sm text-label-sm uppercase tracking-wider rounded font-bold">ETHNIC CHIC</span>
<span class="px-2 py-1 bg-surface/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm rounded flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">festival</span> Minang
            </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
<div class="flex items-center gap-1.5 bg-primary/70 backdrop-blur-md px-2.5 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[15px] text-secondary-container">music_note</span>
<span>Audio Saluang / Talempong</span>
</div>
<div class="flex items-center gap-1 bg-primary/70 backdrop-blur-md px-2 py-1 rounded text-xs">
<span class="material-symbols-outlined text-[14px]">map</span>
<span>Panduan Rute Adat</span>
</div>
</div>
</div>
<!-- Body Details -->
<div class="p-6 flex-1 flex flex-col justify-between gap-5">
<div>
<div class="flex items-center justify-between gap-2 mb-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Padang Suntiang Gold</h3>
<span class="text-xs font-label-md px-2 py-0.5 rounded bg-surface-container text-on-surface-variant">Minang Modern</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
              Paduan megah songket Pandai Sikek bernuansa marun dalam bingkai tata letak bersih kontemporer.
            </p>
<ul class="mt-4 space-y-1.5 text-xs text-on-surface-variant font-body-sm">
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Background Songket Tenun Beresolusi Tinggi</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Susunan Protokol Tata Tertib Baralek Gadang</span>
</li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
<span>Audio Instrumen Tradisional Eksklusif</span>
</li>
</ul>
</div>
<div class="pt-4 bg-surface-container-low p-4 rounded-lg flex flex-col gap-3">
<div class="flex items-baseline justify-between">
<div>
<span class="text-xs text-outline line-through block font-body-sm">Rp 289.000</span>
<div class="font-headline-sm text-headline-sm font-bold text-on-surface">Rp 179.000</div>
</div>
<span class="text-xs font-label-sm text-secondary bg-secondary-container/40 px-2 py-0.5 rounded font-semibold">Hemat 38%</span>
</div>
<div class="grid grid-cols-2 gap-2 pt-1">
<button class="w-full py-2.5 px-3 bg-surface text-on-surface font-label-lg text-label-lg rounded hover:bg-surface-container transition-colors flex items-center justify-center gap-1.5 shadow-xs">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Demo Live</span>
</button>
<button class="w-full py-2.5 px-3 bg-primary text-on-primary font-label-lg text-label-lg rounded hover:bg-inverse-surface transition-colors flex items-center justify-center gap-1.5 shadow-sm">
<span>Pilih Desain</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</article>
</div>
<!-- Catalog Footer Actions & Pagination -->
<div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-4 bg-surface-container-low p-6 rounded-lg">
<div class="text-sm font-body-md text-on-surface-variant">
        Ingin tema dengan warna custom keluarga Anda? Kami menyediakan layanan desain <span class="font-semibold text-on-surface">Bespoke Full Custom</span>.
      </div>
<div class="flex items-center gap-3">
<button class="px-5 py-2.5 bg-surface text-on-surface font-label-lg text-label-lg rounded hover:bg-surface-container transition-colors shadow-xs">
          Muat 18 Desain Lainnya
        </button>
<button class="px-5 py-2.5 bg-primary text-on-primary font-label-lg text-label-lg rounded hover:bg-inverse-surface transition-colors">
          Konsultasi Tema Custom
        </button>
</div>
</div>
</section>
<!-- Section: Mengapa Memilih Katalog Kalyana -->
<section class="w-full bg-surface-container-low py-16 px-6 sm:px-12 lg:px-16 mt-8">
<div class="max-w-7xl mx-auto flex flex-col gap-12">
<!-- Section Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div class="max-w-xl">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest block mb-2">Keunggulan Eksklusif</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface">
            Mengapa Memilih Katalog Kalyana?
          </h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">
          Kami memadukan kemewahan seni grafis cetak dengan ketangguhan teknologi web modern untuk kelancaran momen berharga Anda.
        </p>
</div>
<!-- 4 Bento Cards of Key Features -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Card 1 -->
<div class="bg-surface-container-lowest p-7 rounded-lg shadow-sm flex flex-col justify-between gap-6 hover:shadow-md transition-shadow">
<div class="w-12 h-12 rounded bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[28px]">speed</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Tampilan Jernih &amp; Ringan di HP Tamu</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
              Dioptimasi dengan ukuran file di bawah 2MB. Tidak membuat HP tamu lag saat dibuka, kompatibel sempurna di Safari iPhone maupun Chrome Android.
            </p>
</div>
<div class="pt-2 text-xs font-label-sm text-secondary uppercase tracking-wider font-semibold">
            Speed Score 99/100
          </div>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest p-7 rounded-lg shadow-sm flex flex-col justify-between gap-6 hover:shadow-md transition-shadow">
<div class="w-12 h-12 rounded bg-secondary-container flex items-center justify-center text-on-secondary-fixed">
<span class="material-symbols-outlined text-[28px]">account_balance_wallet</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Buku Tamu &amp; Amplop Digital Otomatis</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
              Ucapan doa tercatat rapi di dasbor Anda. Transfer dana amplop atau saldo e-wallet langsung ke rekening pengantin tanpa potongan komisi sepeser pun.
            </p>
</div>
<div class="pt-2 text-xs font-label-sm text-secondary uppercase tracking-wider font-semibold">
            0% Biaya Platform
          </div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest p-7 rounded-lg shadow-sm flex flex-col justify-between gap-6 hover:shadow-md transition-shadow">
<div class="w-12 h-12 rounded bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed">
<span class="material-symbols-outlined text-[28px]">badge</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Bebas Kustomisasi Nama Tamu Undangan</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
              Generator link tamu tak terbatas. Tulis ratusan nama keluarga dan relasi secara instan dengan generator pesan personal WhatsApp sekali klik.
            </p>
</div>
<div class="pt-2 text-xs font-label-sm text-secondary uppercase tracking-wider font-semibold">
            Generator Link WhatsApp
          </div>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest p-7 rounded-lg shadow-sm flex flex-col justify-between gap-6 hover:shadow-md transition-shadow">
<div class="w-12 h-12 rounded bg-surface-container-highest flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[28px]">support_agent</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Proses Cepat &amp; Didampingi Tim Desainer</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
              Sibuk menjelang hari H? Cukup kirim materi teks dan foto lewat formulir atau WhatsApp, tim desainer Kalyana akan menginputkan seluruh data terima beres.
            </p>
</div>
<div class="pt-2 text-xs font-label-sm text-secondary uppercase tracking-wider font-semibold">
            Layanan VIP Terima Beres
          </div>
</div>
</div>
</div>
</section>
<!-- Section: Testimoni Pasangan Pengantin -->
<section class="w-full px-6 sm:px-12 lg:px-16 py-16 max-w-7xl mx-auto">
<div class="flex flex-col items-center text-center gap-3 mb-12">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest">Kisah Nyata Pasangan</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface">Dipercaya Lebih dari 1.800 Pasangan</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xl">
        Inilah tanggapan mereka setelah menyebarkan undangan Kalyana kepada ribuan kerabat dan tamu kehormatan.
      </p>
</div>
<!-- Testimonial Mosaic Triplet -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Review 1 -->
<div class="bg-surface-container-lowest p-8 rounded-lg shadow-sm flex flex-col justify-between gap-6">
<div>
<!-- Star Rating -->
<div class="flex items-center gap-1 text-secondary mb-4">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface italic leading-relaxed mb-4">
            "Semua tamu memuji betapa mewahnya tema Ivory Serenity. Musik latarnya sangat jernih dan fitur kirim amplop digital memudahkan teman-teman kantor yang berhalangan hadir langsung ke gedung."
          </p>
</div>
<div class="pt-4 bg-surface-container-low p-4 rounded flex items-center gap-4">
<img class="w-12 h-12 rounded-full object-cover shadow-xs" data-alt="Square portrait photo of a joyful Indonesian newlywed couple, Dimas and Amanda, dressed in elegant modern minimalist wedding attire with warm natural smiles." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPXcizML8ysyJFMx-3PNp29SLb7uo3YY9eeabXqXSSZZ1gSh0XReXSQKiMP5aiFHkz_mETbBZvlRUEvBrSToJ3pjgrcD7CyzyMlSnJ6UZMNiUtwoDms-AYFYd1HiXSpCU3VcAb3eX3qlJibaiXcz1Ob0OphapKHhxJoQ1rbqADiy2apPf7D3vrpvYVZ4VfgIWLOdKFvctuHVGRmH0v3TUnK2ux3swc-rPW9uknA4hrz6A34OnZoQjH"/>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface font-semibold">Dimas &amp; Amanda</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Pernikahan di Jakarta • Tema Ivory</span>
</div>
</div>
</div>
<!-- Review 2 -->
<div class="bg-surface-container-lowest p-8 rounded-lg shadow-sm flex flex-col justify-between gap-6">
<div>
<div class="flex items-center gap-1 text-secondary mb-4">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface italic leading-relaxed mb-4">
            "Paling salut sama fitur scan QR Check-in tamu di tema Javanese Royal. Penerima tamu resepsi kami jadi tidak kerepotan mencatat satu per satu, antrean jadi sangat tertib dan profesional!"
          </p>
</div>
<div class="pt-4 bg-surface-container-low p-4 rounded flex items-center gap-4">
<img class="w-12 h-12 rounded-full object-cover shadow-xs" data-alt="Square portrait photo of an Indonesian married couple, Raden Bayu and Sekar, wearing traditional Javanese royal wedding attire with blangkon and subtle gold accessories." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwx8Sl6LYKI_9V8QMFEE9OpALIm7lV5AF9MxY1ZTPpR5TQXFC9J8tKU9j9A4Wu4csPy3F4NhTIW8gvY_Y-_NgTy_O3G2D5v9QX4Omr77sz_BIj2wtXdXHJUJHt6u-kiVYvSy5jeyZnLb0F-IvnujwHl0jefp0t8Q7tyqN2QAYSIL50Yw3Gns1In_zisoUPZ-2VGtCu8AMyv6fOfSZlfrkKEqlS-yIC08SBV7KjjMLiJzDJ81cW0u9N"/>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface font-semibold">Raden Bayu &amp; Sekar</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Resepsi di Yogyakarta • Royal Heritage</span>
</div>
</div>
</div>
<!-- Review 3 -->
<div class="bg-surface-container-lowest p-8 rounded-lg shadow-sm flex flex-col justify-between gap-6">
<div>
<div class="flex items-center gap-1 text-secondary mb-4">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface italic leading-relaxed mb-4">
            "Desain selesai dalam hitungan jam setelah kami bayar. Tim CS ramah sekali mendampingi pas kami minta ganti foto cover sampai 3 kali revisi. Sangat kami rekomendasikan untuk semua calon pengantin!"
          </p>
</div>
<div class="pt-4 bg-surface-container-low p-4 rounded flex items-center gap-4">
<img class="w-12 h-12 rounded-full object-cover shadow-xs" data-alt="Square portrait photo of a cheerful young married couple, Kevin and Clarissa, posing outdoors with soft natural bokeh, dressed in contemporary neutral beige party outfits." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgZWiJYkdQO9uO_64KQRVd57SpMHPy3auGwoPYg_eCQisRjuGX7hHS3Jx2NhBYRzFIe7nsdJq4E4sZ4ePfjQMiToA4w8h0mXvX3EPQbyINF734r-ybqQIhkB1qkIJDtosN_fu-OY-k2fX9dhQcsyr4Jj3jVLXcKxl2a21Avz7FS1pOkAZL1IxU69-KMeukwhDlu_URDb_auGmbFd7OBrVKAchnCpXocjdVka5888Kx2RBnpvl26z0L"/>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface font-semibold">Kevin &amp; Clarissa</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Pernikahan di Bandung • Botanical Sage</span>
</div>
</div>
</div>
</div>
</section>
<!-- Big Editorial Call to Action Banner -->
<section class="w-full px-6 sm:px-12 lg:px-16 pb-16">
<div class="max-w-7xl mx-auto bg-primary text-on-primary rounded-xl p-8 sm:p-14 lg:p-16 relative overflow-hidden shadow-xl">
<!-- Decorative background glow and texture elements -->
<div class="absolute -right-20 -bottom-20 w-96 h-96 bg-secondary/20 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute top-0 right-1/4 w-64 h-64 bg-secondary-container/10 rounded-full blur-2xl pointer-events-none"></div>
<div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
<div class="lg:col-span-8 flex flex-col gap-4">
<div class="inline-flex items-center gap-2 self-start bg-on-primary/10 px-3 py-1 rounded text-xs font-label-sm tracking-widest uppercase text-secondary-container">
<span class="material-symbols-outlined text-[15px]">headset_mic</span>
            Konsultasi Desain Tanpa Biaya
          </div>
<h2 class="font-headline-lg text-headline-lg lg:text-display-lg text-on-primary leading-tight font-medium">
            Sudah Menemukan Desain Impian Anda?
          </h2>
<p class="font-body-lg text-body-lg text-primary-fixed max-w-2xl leading-relaxed">
            Diskusikan palet warna, susunan akad, atau integrasi lagu khusus langsung dengan tim art director Kalyana melalui WhatsApp. Kami siap mewujudkan undangan pernikahan yang abadi dan berkesan.
          </p>
<div class="flex flex-wrap items-center gap-4 text-xs font-label-md text-primary-fixed pt-2">
<span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px] text-secondary-container">check</span> Respon Cepat &lt; 5 Menit</span>
<span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px] text-secondary-container">check</span> Preview Mockup Gratis</span>
<span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px] text-secondary-container">check</span> Pembayaran Aman Bergaransi</span>
</div>
</div>
<div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-4">
<a class="w-full py-4 px-6 bg-surface text-on-surface hover:bg-surface-container-low font-label-lg text-label-lg rounded font-semibold flex items-center justify-center gap-3 shadow-lg transition-all transform hover:-translate-y-0.5" href="https://wa.me/" target="_blank">
<span class="material-symbols-outlined text-[20px] text-secondary">chat</span>
<span>Konsultasi Gratis via WhatsApp</span>
</a>
<button class="w-full py-4 px-6 bg-transparent hover:bg-on-primary/10 text-on-primary font-label-lg text-label-lg rounded flex items-center justify-center gap-2 transition-colors">
<span>Pelajari Alur Pemesanan</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</section>
</div>
<footer class="w-full bg-surface-container-low mt-space-xl pt-space-xl pb-space-lg shadow-[0_-1px_8px_rgba(31,27,24,0.02)]"><div class="w-full px-margin"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-xl pb-space-xl"><div class="space-y-space-md"><div class="flex items-center gap-space-sm"><img alt="Kalyana Logo" class="h-7 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1XA6Llbb7bjujaBQshNIU5L5IpjwBnsO7zM5wzpQSSa9gdXzhhFW_maZ3XA7ZqpEjs6Har0DXLjPleEqSXGpC-_W_ynL5ffYZ9adZS8kqzQADai6dsaxIT9qBOiczR3BVo3FXyayRl6FZ6hjTQrN2h17gjeZZ6RL2Vwv6PYzDsfjeTHZYJ2cVilGhptiLOEHsmlynHafbwwbvErhK1ZZ2zpxKeHhQB9vTuFY8FjT2dCgpMEA-JAzcVPVIw"/><span class="font-headline-sm text-headline-sm font-semibold tracking-tight text-on-surface">Kalyana</span></div><p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Platform kurasi undangan digital interaktif dan stationery fisik premium dengan estetika editorial modern untuk pernikahan, pertunangan, dan momen istimewa Anda.</p><div class="flex items-center gap-space-xs text-secondary font-label-sm text-label-sm"><span class="material-symbols-outlined text-[16px]">verified</span><span>Terpercaya • 10,000+ Pasangan Bahagia</span></div></div><div class="space-y-space-md"><h4 class="font-headline-sm text-headline-sm text-on-surface text-[18px]">Kategori Undangan</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li class="hover:text-primary transition-colors cursor-pointer">Pernikahan Modern &amp; Minimalis</li><li class="hover:text-primary transition-colors cursor-pointer">Tema Adat &amp; Budaya Nusantara</li><li class="hover:text-primary transition-colors cursor-pointer">Minimalist Floral &amp; Botanical</li><li class="hover:text-primary transition-colors cursor-pointer">Luxury Foil &amp; Gold Embellished</li><li class="hover:text-primary transition-colors cursor-pointer">Aqiqah, Ulang Tahun &amp; Khitan</li></ul></div><div class="space-y-space-md"><h4 class="font-headline-sm text-headline-sm text-on-surface text-[18px]">Layanan Pelanggan</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="cara-pemesanan" href="#">Panduan Order &amp; Aktivasi</a></li><li><a class="hover:text-primary transition-colors" data-path="faq-dan-bantuan" href="#">Pusat Bantuan &amp; Tanya CS WA</a></li><li><a class="hover:text-primary transition-colors" data-path="status-pesanan" href="#">Lacak Status Pesanan</a></li><li><a class="hover:text-primary transition-colors" data-path="kebijakan-garansi" href="#">Kebijakan Garansi &amp; Revisi</a></li><li><a class="hover:text-primary transition-colors" data-path="syarat-dan-ketentuan" href="#">Syarat &amp; Ketentuan Layanan</a></li></ul></div><div class="space-y-space-md"><h4 class="font-headline-sm text-headline-sm text-on-surface text-[18px]">Metode Pembayaran</h4><p class="font-body-sm text-body-sm text-on-surface-variant">Pembayaran instan dan terverifikasi otomatis via Payment Gateway resmi.</p><div class="flex flex-wrap gap-space-xs pt-space-xs"><span class="px-space-sm py-space-xs bg-surface-container-lowest font-label-sm text-label-sm text-on-surface rounded shadow-[0_1px_3px_rgba(0,0,0,0.03)]">BCA</span><span class="px-space-sm py-space-xs bg-surface-container-lowest font-label-sm text-label-sm text-on-surface rounded shadow-[0_1px_3px_rgba(0,0,0,0.03)]">Mandiri</span><span class="px-space-sm py-space-xs bg-surface-container-lowest font-label-sm text-label-sm text-on-surface rounded shadow-[0_1px_3px_rgba(0,0,0,0.03)]">QRIS</span><span class="px-space-sm py-space-xs bg-surface-container-lowest font-label-sm text-label-sm text-on-surface rounded shadow-[0_1px_3px_rgba(0,0,0,0.03)]">GoPay</span><span class="px-space-sm py-space-xs bg-surface-container-lowest font-label-sm text-label-sm text-on-surface rounded shadow-[0_1px_3px_rgba(0,0,0,0.03)]">OVO</span></div><div class="pt-space-xs text-on-surface-variant font-body-sm text-body-sm flex items-center gap-space-xs"><span class="material-symbols-outlined text-[16px] text-secondary">lock</span><span>Enkripsi SSL 256-bit Aman</span></div></div></div><div class="pt-space-md flex flex-col md:flex-row items-center justify-between gap-space-md font-label-sm text-label-sm text-on-surface-variant"><p>© 2025 Kalyana Invitation Studio. Seluruh hak cipta dilindungi.</p><div class="flex items-center gap-space-lg"><a class="hover:text-primary transition-colors" data-path="kebijakan-privasi" href="#">Kebijakan Privasi</a><a class="hover:text-primary transition-colors" data-path="syarat-dan-ketentuan" href="#">Ketentuan Layanan</a><span class="text-secondary">Dibuat dengan cinta untuk hari bahagia Anda</span></div></div></div></footer>
</main>
@endsection
