<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Wamaps - Tools Scrape google maps &amp; WhatsApp Broadcast</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed-dim": "#a2d2ff",
                        "on-surface-variant": "#444651",
                        "on-primary-fixed-variant": "#004b73",
                        "background": "#f7f9fb",
                        "tertiary": "#002e44",
                        "inverse-on-surface": "#eff1f3",
                        "error": "#ba1a1a",
                        "surface-container": "#eceef0",
                        "surface-container-low": "#f2f4f6",
                        "surface-tint": "#0077B6",
                        "on-primary-container": "#90daff",
                        "on-background": "#191c1e",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "secondary-fixed-dim": "#4ae176",
                        "inverse-surface": "#2d3133",
                        "surface-container-high": "#e6e8ea",
                        "on-secondary-fixed-variant": "#005321",
                        "surface-bright": "#f7f9fb",
                        "on-error-container": "#93000a",
                        "on-surface": "#191c1e",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#007432",
                        "secondary-container": "#6bff8f",
                        "surface": "#f7f9fb",
                        "tertiary-fixed-dim": "#89ceff",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed": "#001e2f",
                        "surface-variant": "#e0e3e5",
                        "on-secondary-fixed": "#002109",
                        "on-error": "#ffffff",
                        "inverse-primary": "#a2d2ff",
                        "outline": "#757682",
                        "on-tertiary-container": "#36b6fb",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#004565",
                        "primary-fixed": "#d0ecff",
                        "surface-dim": "#d8dadc",
                        "primary": "#0077B6",
                        "primary-container": "#005c8d",
                        "on-primary": "#ffffff",
                        "surface-container-highest": "#e0e3e5",
                        "on-primary-fixed": "#001e30",
                        "outline-variant": "#c5c5d3",
                        "secondary": "#006e2f",
                        "error-container": "#ffdad6",
                        "secondary-fixed": "#6bff8f",
                        "tertiary-fixed": "#c9e6ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-nav {
            backdrop-filter: blur(20px);
        }

        .material-symbols-outlined {
            display: inline-block;
            line-height: 1;
            /* Hide icon text during font load */
            color: transparent;
        }

        /* Once font is loaded, Material Symbols will handle the display */
        .wf-active .material-symbols-outlined,
        .fonts-loaded .material-symbols-outlined {
            color: inherit;
        }
    </style>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2691160627922371');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2691160627922371&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body class="bg-surface text-on-background antialiased">
    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-6 h-16">
            <a href="/" class="flex items-center text-xl font-bold tracking-tight text-primary dark:text-white">
                <svg class="w-8 h-8 mr-2" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="8" fill="#145efc" />
                    <circle cx="16" cy="16" r="9" stroke="white" stroke-width="2.5" />
                    <circle cx="16" cy="16" r="4.5" stroke="white" stroke-width="2.5" />
                    <circle cx="16" cy="16" r="1.5" fill="white" />
                </svg>
                Wamaps
            </a>
            <div class="hidden md:flex items-center space-x-8">
                <a class="text-primary dark:text-primary-fixed-dim font-semibold border-b-2 border-primary hover:text-primary-container transition-colors"
                    href="#features">Features</a>
                <a class="text-slate-600 dark:text-slate-400 font-medium hover:text-primary transition-colors"
                    href="#how-it-works">How it Works</a>
                <a class="text-slate-600 dark:text-slate-400 font-medium hover:text-primary transition-colors"
                    href="#pricing">Pricing</a>
            </div>
            <a href="{{ route('checkout') }}"
                class="bg-primary text-on-primary px-6 py-2 rounded-xl font-semibold scale-95 active:duration-150 transition-all hover:bg-primary-container">Beli
                Sekarang</a>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <span
                    class="inline-block px-4 py-1 bg-secondary-container text-on-secondary-container rounded-full text-xs font-bold tracking-widest uppercase">Ambil
                    Leads Otomatis</span>
                <h1 class="text-5xl lg:text-6xl font-extrabold text-on-surface leading-[1.1] tracking-tight">
                    Dapatkan 100-1000 Leads <span class="text-secondary">WhatsApp Bisnis Aktif Perhari</span> &amp;
                    Hanya Dalam
                    <span class="text-primary">1
                        Klik!</span>
                </h1>
                <p class="text-lg text-on-surface-variant max-w-xl leading-relaxed">
                    Ambil leads bisnis sesuai target, simpan otomatis, dan kirim broadcast WhatsApp tanpa ribet, tanpa
                    coding, dalam hitungan menit.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('checkout') }}"
                        class="bg-primary text-on-primary px-8 py-4 rounded-xl text-lg font-bold flex items-center justify-center gap-2 hover:bg-primary-container transition-all">
                        Beli Sekarang
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z" />
                        </svg>
                    <a href="#features"
                        class="bg-surface-container-low text-primary px-8 py-4 rounded-xl text-lg flex items-center justify-center font-bold hover:bg-surface-container-high transition-all">
                        Lihat Fitur
                    </a>
                </div>
                <div class="grid grid-cols-2 sm:flex sm:flex-wrap gap-2 text-[10px] sm:text-sm font-bold">
                    <div
                        class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                        <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                        <span class="leading-tight">Mengambil ribuan leads bisnis</span>
                    </div>
                    <div
                        class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                        <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                        <span class="leading-tight">Simpan data otomatis</span>
                    </div>
                    <div
                        class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                        <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                        <span class="leading-tight">Kirim broadcast massal</span>
                    </div>
                    <div
                        class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                        <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                        <span class="leading-tight">Export Excel</span>
                    </div>
                    <div
                        class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                        <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                        <span class="leading-tight">Autopost FB Group</span>
                    </div>
                    <div
                        class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                        <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                        <span class="leading-tight">Template Pesan Broadcast</span>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-primary/5 rounded-3xl -rotate-2 scale-105"></div>
                <div class="relative bg-surface-container-lowest rounded-3xl overflow-hidden shadow-2xl border border-outline-variant/10 group cursor-pointer"
                    onclick="const v = this.querySelector('video'); const o = this.querySelector('.play-overlay'); if(v.paused){v.play(); v.controls=true; o.classList.add('hidden')} else {v.pause()}">
                    <video class="w-full h-auto block focus:outline-none" poster="{{ asset('thumnail.webp') }}"
                        preload="metadata"
                        onended="this.controls=false; this.parentElement.querySelector('.play-overlay').classList.remove('hidden')">
                        <source src="https://ik.imagekit.io/bzq0b2kjq/0401.mp4?updatedAt=1775027577346"
                            type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <!-- Play Button Overlay -->
                    <div
                        class="play-overlay absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/40 transition-all duration-300">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 bg-primary text-on-primary rounded-full flex items-center justify-center shadow-2xl scale-90 group-hover:scale-100 transition-transform duration-300 border-4 border-white/20">
                            <svg class="w-10 h-10 md:w-12 md:h-12 fill-current ml-1" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Use Case / Target Audience -->
        <section class="py-16 bg-white border-y border-slate-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-on-surface tracking-tight">Siapa yang Cocok Pakai
                        Wamaps?
                    </h2>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                    <!-- Agency -->
                    <div
                        class="p-6 md:p-8 bg-surface-container-lowest rounded-3xl border border-outline-variant/10 text-center space-y-4 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-2xl flex items-center justify-center mx-auto group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm10 12h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2zm4 12h-2v-2h2v2zm0-4h-2v-2h2v2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-on-surface">Agency</h3>
                            <p class="text-[10px] md:text-xs text-on-surface-variant leading-relaxed mt-2">Dapatkan
                                supply leads klien baru setiap hari secara otomatis dari Google Maps untuk tawarkan jasa
                                marketing agensi kamu.</p>
                        </div>
                    </div>

                    <!-- Freelancer -->
                    <div
                        class="p-6 md:p-8 bg-surface-container-lowest rounded-3xl border border-outline-variant/10 text-center space-y-4 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="w-12 h-12 bg-secondary/10 text-secondary rounded-2xl flex items-center justify-center mx-auto group-hover:bg-secondary group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-on-surface">Freelancer</h3>
                            <p class="text-[10px] md:text-xs text-on-surface-variant leading-relaxed mt-2">Cari ribuan
                                bisnis lokal yang butuh jasa kamu dan kirim pesan penawaran profesional langsung ke
                                WhatsApp owner-nya.</p>
                        </div>
                    </div>

                    <!-- Sales B2B -->
                    <div
                        class="p-6 md:p-8 bg-surface-container-lowest rounded-3xl border border-outline-variant/10 text-center space-y-4 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="w-12 h-12 bg-tertiary/10 text-tertiary rounded-2xl flex items-center justify-center mx-auto group-hover:bg-tertiary group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-on-surface">Sales B2B</h3>
                            <p class="text-[10px] md:text-xs text-on-surface-variant leading-relaxed mt-2">Hubungi
                                decision maker bisnis di seluruh Indonesia tanpa door-to-door. Dapatkan data alamat dan
                                nomor WA valid dengan cepat.</p>
                        </div>
                    </div>

                    <!-- Owner Bisnis -->
                    <div
                        class="p-6 md:p-8 bg-surface-container-lowest rounded-3xl border border-outline-variant/10 text-center space-y-4 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="w-12 h-12 bg-error/10 text-error rounded-2xl flex items-center justify-center mx-auto group-hover:bg-error group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M20 4H4v2h16V4zm1 10v-2l-1-5H4l-1 5v2h1v6h10v-6h4v6h2v-6h1zm-9 4H6v-4h6v4z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-on-surface">Owner Bisnis</h3>
                            <p class="text-[10px] md:text-xs text-on-surface-variant leading-relaxed mt-2">Bangun
                                database pelanggan sendiri tanpa ketergantungan iklan, dan kirim pesan promosi massal
                                untuk tingkatkan omset.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pain Section / Masalah -->
        <section class="py-24 bg-surface-container-low overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-on-surface tracking-tight">Kenapa Banyak Orang
                        Gagal Dapat Leads?</h2>
                    <p class="text-on-surface-variant max-w-2xl mx-auto text-lg leading-relaxed">Mungkin selama ini kamu
                        melakukan cara yang salah, melelahkan, dan membuang banyak biaya tanpa hasil yang maksimal.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Pain 1 -->
                    <div
                        class="bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] border border-red-50 dark:border-red-900/20 relative group hover:shadow-xl transition-all duration-300">
                        <div
                            class="absolute -top-4 -left-4 w-12 h-12 bg-red-500 text-white rounded-xl flex items-center justify-center font-bold shadow-lg shadow-red-500/20">
                            1</div>
                        <div class="space-y-5">
                            <div class="text-red-500 bg-red-50 dark:bg-red-500/10 p-4 rounded-2xl w-fit">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-on-surface">Data Tidak Valid (Data Sampah)</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Sering dapat data nomor telepon
                                kantor atau nomor yang sudah tidak aktif saat mencari manual di internet. Rasio closing
                                pun jadi nol besar.</p>
                        </div>
                    </div>

                    <!-- Pain 2 -->
                    <div
                        class="bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] border border-red-50 dark:border-red-900/20 relative group hover:shadow-xl transition-all duration-300">
                        <div
                            class="absolute -top-4 -left-4 w-12 h-12 bg-red-500 text-white rounded-xl flex items-center justify-center font-bold shadow-lg shadow-red-500/20">
                            2</div>
                        <div class="space-y-5">
                            <div class="text-red-500 bg-red-50 dark:bg-red-500/10 p-4 rounded-2xl w-fit">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-on-surface">Scraping Manual Sangat Lambat</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Membuang waktu berjam-jam hanya
                                untuk buka-tutup tab Google Maps satu per satu demi mencatat 50 data leads yang belum
                                tentu mau beli.</p>
                        </div>
                    </div>

                    <!-- Pain 3 -->
                    <div
                        class="bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] border border-red-50 dark:border-red-900/20 relative group hover:shadow-xl transition-all duration-300">
                        <div
                            class="absolute -top-4 -left-4 w-12 h-12 bg-red-500 text-white rounded-xl flex items-center justify-center font-bold shadow-lg shadow-red-500/20">
                            3</div>
                        <div class="space-y-5">
                            <div class="text-red-500 bg-red-50 dark:bg-red-500/10 p-4 rounded-2xl w-fit">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm3.3 14.71L11 12.41V7h2v4.59l3.71 3.71-1.42 1.41z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-on-surface">Lelah Save Nomor & Chat Satu-Satu</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Energi habis hanya untuk
                                menyimpan kontak di HP secara manual sebelum bisa chat. Belum kirim pesan, tangan sudah
                                keriting duluan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-24" id="features">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-on-surface tracking-tight leading-tight">
                        Semua Fitur Wamaps untuk Lead Generation & WhatsApp Otomatis
                    </h2>
                    <p class="text-on-surface-variant max-w-4xl mx-auto text-lg leading-relaxed">
                        Wamaps membantu kamu mengambil leads bisnis dari Google Maps, menyimpannya rapi, dan mengirim
                        WhatsApp massal secara otomatis — tanpa ribet dan tanpa coding. Semua fitur dirancang agar kamu
                        hemat waktu hingga 90% dan bisa scale bisnis lebih cepat.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                    <!-- Auto Scraping Google Maps -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="aspect-[4/3] bg-slate-50 dark:bg-slate-800 rounded-3xl mb-6 overflow-hidden flex items-center justify-center border border-slate-100 dark:border-slate-700">
                            <img src="{{asset('searchleads.png')}}" alt="Auto Scraping"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-on-surface group-hover:text-primary transition-colors">
                            Auto Scraping Google Maps</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Ambil ribuan leads bisnis sesuai
                            lokasi dan keyword target secara otomatis dalam hitungan detik.</p>
                    </div>

                    <!-- Database Leads Rapi & Valid -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="aspect-[4/3] bg-slate-50 dark:bg-slate-800 rounded-3xl mb-6 overflow-hidden flex items-center justify-center border border-slate-100 dark:border-slate-700">
                            <img src="{{asset('dataleads.png')}}" alt="Database Leads"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-on-surface group-hover:text-primary transition-colors">
                            Database Leads Rapi & Valid</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Simpan nama, alamat, dan nomor
                            WhatsApp aktif dengan format yang siap pakai.</p>
                    </div>

                    <!-- WhatsApp Broadcast Otomatis -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="aspect-[4/3] bg-slate-50 dark:bg-slate-800 rounded-3xl mb-6 overflow-hidden flex items-center justify-center border border-slate-100 dark:border-slate-700">
                            <img src="{{asset('broadcast.png')}}" alt="WhatsApp Broadcast"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-on-surface group-hover:text-primary transition-colors">
                            WhatsApp Broadcast Otomatis</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Kirim pesan massal ke semua leads
                            tanpa copy-paste, semua bisa diatur langsung dari sistem.</p>
                    </div>

                    <!-- Export Data ke Excel / CSV -->






                    <!-- Filter Leads Sesuai Target -->




                    <!-- Auto Post ke Banyak Grup Facebook -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="aspect-[4/3] bg-slate-50 dark:bg-slate-800 rounded-3xl mb-6 overflow-hidden flex items-center justify-center border border-slate-100 dark:border-slate-700">
                            <img src="{{asset('bonus.png')}}" alt="Auto Post Facebook"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-on-surface group-hover:text-primary transition-colors">
                            Auto Post ke Banyak Grup Facebook</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Posting ke puluhan hingga ratusan
                            grup Facebook hanya dalam 1 klik secara otomatis.</p>
                    </div>

                    <!-- Multiple Message Templates -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="aspect-[4/3] bg-slate-50 dark:bg-slate-800 rounded-3xl mb-6 overflow-hidden flex items-center justify-center border border-slate-100 dark:border-slate-700">
                            <img src="{{asset('pesan.png')}}" alt="Multiple Message Templates"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-on-surface group-hover:text-primary transition-colors">
                            Multiple Message Templates</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Buat banyak template pesan sekaligus
                            untuk campaign yang lebih powerful dan variatif.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="py-24 bg-surface-container-low" id="how-it-works">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20 space-y-4">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-on-surface tracking-tight">Mulai Dalam 3 Langkah
                        Sederhana</h2>
                    <p class="text-on-surface-variant max-w-2xl mx-auto text-lg">Proses otomatis yang dirancang untuk
                        memudahkan bisnis kamu berkembang tanpa ribet.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-12 relative">
                    <!-- Step 1 -->
                    <div class="relative space-y-6 text-center group">
                        <div
                            class="w-20 h-20 bg-primary text-on-primary rounded-3xl flex items-center justify-center mx-auto text-3xl font-black shadow-xl shadow-primary/20 rotate-3 group-hover:rotate-0 transition-transform duration-300">
                            1</div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-on-surface">Masukkan Keyword & Lokasi</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Tentukan target bisnis dan lokasi
                                yang ingin kamu ambil datanya (Contoh: "Apotek di Jakarta").</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative space-y-6 text-center group">
                        <div
                            class="w-20 h-20 bg-secondary text-on-secondary rounded-3xl flex items-center justify-center mx-auto text-3xl font-black shadow-xl shadow-secondary/20 -rotate-3 group-hover:rotate-0 transition-transform duration-300">
                            2</div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-on-surface">Ambil Leads Otomatis</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Wamaps akan men-scan Google Maps
                                secara real-time dan mengumpulkan ribuan data nomor WhatsApp aktif.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative space-y-6 text-center group">
                        <div
                            class="w-20 h-20 bg-tertiary text-on-tertiary rounded-3xl flex items-center justify-center mx-auto text-3xl font-black shadow-xl shadow-tertiary/20 rotate-3 group-hover:rotate-0 transition-transform duration-300">
                            3</div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-on-surface">Kirim WhatsApp Langsung</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Tanpa perlu save nomor, kirim
                                pesan promosi massal langsung ke target leads yang sudah terkumpul.</p>
                        </div>
                    </div>
                </div>

                <!-- Trust Badge -->
                <div
                    class="mt-20 flex flex-col items-center justify-center gap-6 p-10 bg-white dark:bg-slate-900 rounded-[3rem] border border-primary/5 shadow-xl shadow-primary/5 max-w-4xl mx-auto">
                    <div class="flex items-center gap-3 text-secondary font-bold text-lg">
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.7l-3.61.81.34 3.69L1 12l2.44 2.79-.34 3.69 3.61.82 1.89 3.2L12 21.04l3.4 1.46 1.89-3.2 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z" />
                        </svg>
                        100% Otomatis & Tanpa Ribet
                    </div>
                    <p class="text-on-surface/80 text-center leading-relaxed italic">
                        "Gak perlu pusing mikirin coding atau input data satu-satu. Wamaps mengerjakan semuanya untuk
                        kamu."
                    </p>
                </div>
            </div>
        </section>
    </section>
    <!-- Testimonials -->
    <section class="py-24 bg-surface-container-lowest">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="lg:col-span-1 space-y-6">
                    <h2 class="text-4xl font-bold">Apa Kata Mereka Yang Sudah Pakai Wamaps?</h2>
                    <p class="text-on-surface-variant">Lebih dari 100+ pebisnis dan agensi telah melipatgandakan profit
                        mereka dengan mengotomatisasi pencarian leads tertarget.</p>

                </div>
                <div class="lg:col-span-2 grid md:grid-cols-2 gap-6">
                    <!-- Testi 1 -->
                    <div
                        class="bg-surface-container-low p-8 rounded-3xl group hover:bg-white transition-colors duration-300">
                        <p class="italic text-on-surface mb-6 leading-relaxed">"Gak perlu lagi bayar jasa cari database
                            jutaan rupiah. Pakai Wamaps, tim saya bisa dapet 500 leads tertarget setiap pagi cuma modal
                            1 klik. ROI gila-gilaan!"</p>
                        <div class="flex items-center gap-4 border-t border-outline-variant/10 pt-6">
                            <div
                                class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-bold text-xl">
                                A</div>
                            <div>
                                <p class="font-bold">Andi Pratama</p>
                                <p class="text-sm text-on-surface-variant">Owner Digital Agency</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testi 2 -->
                    <div
                        class="bg-surface-container-low p-8 rounded-3xl group hover:bg-white transition-colors duration-300">
                        <p class="italic text-on-surface mb-6 leading-relaxed">"Dulu pusing cari klien lokal. Sekarang
                            tinggal ketik 'Restoran di Bali', dapet ratusan nomor WA owner-nya. Closing rate saya naik
                            3x
                            lipat sejak pakai Wamaps!"</p>
                        <div class="flex items-center gap-4 border-t border-outline-variant/10 pt-6">
                            <div
                                class="w-12 h-12 bg-secondary text-on-secondary rounded-full flex items-center justify-center font-bold text-xl">
                                M</div>
                            <div>
                                <p class="font-bold">Maya Sari</p>
                                <p class="text-sm text-on-surface-variant">Freelance Web Architect</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testi 3 -->
                    <div
                        class="bg-surface-container-low p-8 rounded-3xl group hover:bg-white transition-colors duration-300">
                        <p class="italic text-on-surface mb-6 leading-relaxed">"Fitur Multiple Message Templates-nya
                            penyelamat banget. Saya bisa tes berbagai pesan promosi tanpa perlu save nomor satu-satu.
                            Hemat waktu luar biasa!"</p>
                        <div class="flex items-center gap-4 border-t border-outline-variant/10 pt-6">
                            <div
                                class="w-12 h-12 bg-tertiary text-on-tertiary rounded-full flex items-center justify-center font-bold text-xl">
                                R</div>
                            <div>
                                <p class="font-bold">Rully Sales</p>
                                <p class="text-sm text-on-surface-variant">Sales Manager B2B</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section -->
    <section class="py-24 bg-white" id="pricing">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 space-y-4">
                <h2 class="text-4xl md:text-6xl font-black text-on-surface tracking-tighter">Harga Transparan,<br>Tanpa
                    Biaya Tersembunyi</h2>
                <p class="text-on-surface-variant text-xl">Bayar sekali, pakai selamanya. Semua fitur langsung aktif</p>
            </div>

            <div class="max-w-md mx-auto">
                <!-- Lifetime Deal Card -->
                <div
                    class="bg-primary rounded-[3rem] p-6 md:p-8 text-white shadow-2xl relative overflow-hidden group border border-white/10">
                    <!-- Background Glow Overlay -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 blur-[100px] -mr-32 -mt-32"></div>

                    <div class="relative z-10">
                        <div class="flex justify-between items-start mb-10">
                            <h3 class="text-xl font-bold text-white/90 uppercase tracking-wider">Wamaps Pro</h3>
                            <span
                                class="bg-secondary text-on-secondary text-[10px] px-4 py-1.5 rounded-full font-black uppercase tracking-widest shadow-lg shadow-black/10">LIFETIME
                                DEAL</span>
                        </div>

                        <div class="space-y-1 mb-8">
                            <div class="text-4xl md:text-5xl font-black tracking-tighter">Rp 149.000</div>
                            <div class="flex items-center gap-3">
                                <span class="text-lg text-white/40 line-through font-medium">Rp 329.000</span>
                                <span
                                    class="bg-white/20 text-white px-3 py-1 rounded-full text-[10px] font-bold border border-white/20">Hemat
                                    64%</span>
                            </div>
                        </div>

                        <!-- Urgency Slot -->
                        <div
                            class="grid grid-cols-2 gap-4 mb-8 py-6 border-y border-white/10 uppercase tracking-tight text-[10px] font-bold">
                            <div class="space-y-1">
                                <div class="text-amber-400 flex items-center gap-1 text-[11px]">
                                    <span class="animate-pulse">🔥</span> 100 slot lagi
                                </div>
                                <div class="text-white/80">di harga ini</div>
                            </div>
                            <div class="text-right space-y-1">
                                <div class="text-white/80">Naik ke Rp 249.000</div>
                                <div class="text-white/80">setelahnya</div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="space-y-3 mb-12">
                            <div class="text-[11px] font-bold text-white/80">
                                0 dari 100 slot Level 1 terpakai
                            </div>
                            <div class="h-2.5 bg-white/10 rounded-full overflow-hidden p-0.5 border border-white/5">
                                <div
                                    class="h-full w-2 bg-secondary rounded-full shadow-[0_0_10px_rgba(var(--secondary),0.5)]">
                                </div>
                            </div>
                        </div>

                        <!-- Features -->
                        <ul class="space-y-5 mb-12">
                            <li class="flex items-center gap-4 text-base font-medium group/item">
                                <div
                                    class="w-6 h-6 bg-white/20 text-white rounded-full flex items-center justify-center border border-white/20 group-hover/item:scale-110 transition-transform">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                    </svg>
                                </div>
                                <span>Auto Scraping Google Maps</span>
                            </li>
                            <li class="flex items-center gap-4 text-base font-medium group/item">
                                <div
                                    class="w-6 h-6 bg-white/20 text-white rounded-full flex items-center justify-center border border-white/20 group-hover/item:scale-110 transition-transform">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                    </svg>
                                </div>
                                <span>WhatsApp Broadcast Otomatis</span>
                            </li>
                            <li class="flex items-center gap-4 text-base font-medium group/item">
                                <div
                                    class="w-6 h-6 bg-white/20 text-white rounded-full flex items-center justify-center border border-white/20 group-hover/item:scale-110 transition-transform">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                    </svg>
                                </div>
                                <span>Auto Posting Grup Otomatis</span>
                            </li>
                            <li class="flex items-center gap-4 text-base font-medium group/item">
                                <div
                                    class="w-6 h-6 bg-white/20 text-white rounded-full flex items-center justify-center border border-white/20 group-hover/item:scale-110 transition-transform">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                    </svg>
                                </div>
                                <span>Export Excel</span>
                            </li>
                            <li class="flex items-center gap-4 text-base font-medium group/item">
                                <div
                                    class="w-6 h-6 bg-white/20 text-white rounded-full flex items-center justify-center border border-white/20 group-hover/item:scale-110 transition-transform">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                    </svg>
                                </div>
                                <span>Multiple Message Templates</span>
                            </li>

                            <li class="flex items-center gap-4 text-base font-medium group/item text-white/80">
                                <div
                                    class="w-6 h-6 bg-white/5 text-white/30 rounded-full flex items-center justify-center border border-white/10 group-hover/item:scale-110 transition-transform">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                    </svg>
                                </div>
                                <span>Free Update Selamanya</span>
                            </li>
                            <a href="{{ route('checkout') }}"
                                class="w-full py-6 bg-white hover:bg-slate-100 text-primary rounded-2xl text-xl font-black shadow-2xl shadow-black/20 transition-all hover:-translate-y-1 active:scale-[0.98] flex items-center justify-center">
                                Beli Sekarang
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-slate-50 overflow-hidden" id="faq">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16 space-y-4">
                <h2 class="text-3xl md:text-5xl font-black text-on-surface tracking-tighter">Yang Sering Ditanyakan</h2>
                <p class="text-on-surface-variant text-lg">Semua yang perlu kamu ketahui tentang Wamaps ada di sini.</p>
            </div>

            <div class="space-y-4">
                <!-- Q1 -->
                <div
                    class="bg-white p-8 rounded-3xl border border-slate-200/60 shadow-sm hover:shadow-md transition-all group">
                    <h3 class="text-lg font-bold text-on-surface mb-3 flex items-center gap-3">
                        <span
                            class="w-8 h-8 bg-primary/10 text-primary rounded-xl flex items-center justify-center text-sm font-black group-hover:bg-primary group-hover:text-white transition-colors">Q</span>
                        Apakah nomor yang didapat valid?
                    </h3>
                    <p class="text-on-surface-variant leading-relaxed pl-11">Sangat valid. Sistem kami hanya mengambil
                        data bisnis aktif yang terdaftar di Google Maps secara real-time, memastikan Anda mendapatkan
                        data segar yang siap dihubungi.</p>
                </div>

                <!-- Q2 -->
                <div
                    class="bg-white p-8 rounded-3xl border border-slate-200/60 shadow-sm hover:shadow-md transition-all group">
                    <h3 class="text-lg font-bold text-on-surface mb-3 flex items-center gap-3">
                        <span
                            class="w-8 h-8 bg-primary/10 text-primary rounded-xl flex items-center justify-center text-sm font-black group-hover:bg-primary group-hover:text-white transition-colors">Q</span>
                        Apakah aman untuk akun WhatsApp?
                    </h3>
                    <p class="text-on-surface-variant leading-relaxed pl-11 text-sm md:text-base">Wamaps
                        dirancang dengan teknologi <strong class="text-primary">'Human-Like Sending'</strong> yang
                        dilengkapi fitur delay (jeda waktu antar pesan) dan simulasi mengetik, sehingga aktivitas
                        pengiriman kamu terlihat natural dan meminimalisir risiko banned.</p>
                </div>

                <!-- Q3 -->
                <div
                    class="bg-white p-8 rounded-3xl border border-slate-200/60 shadow-sm hover:shadow-md transition-all group">
                    <h3 class="text-lg font-bold text-on-surface mb-3 flex items-center gap-3">
                        <span
                            class="w-8 h-8 bg-primary/10 text-primary rounded-xl flex items-center justify-center text-sm font-black group-hover:bg-primary group-hover:text-white transition-colors">Q</span>
                        Apakah cocok untuk pemula?
                    </h3>
                    <p class="text-on-surface-variant leading-relaxed pl-11">Sangat cocok! Kamu tidak butuh pengalaman
                        digital marketing atau coding sekalipun. Cukup masukkan keyword, klik, dan kamu akan mendapatkan
                        data dalam hitungan detik.</p>
                </div>

                <!-- Q4 -->
                <div
                    class="bg-white p-8 rounded-3xl border-2 border-primary text-on-surface shadow-xl shadow-primary/5 transition-all">
                    <h3 class="text-lg font-bold text-primary mb-3 flex items-center gap-3">
                        <span
                            class="w-8 h-8 bg-primary text-white rounded-xl flex items-center justify-center text-sm font-black">Q</span>
                        Apakah ada biaya langganan/bulanan?
                    </h3>
                    <div class="pl-11 space-y-2">
                        <p class="text-on-surface leading-relaxed font-semibold">TIDAK ADA.</p>
                        <p class="text-on-surface-variant leading-relaxed text-sm md:text-base">Sekali lagi kami
                            tekankan: Cukup <strong class="text-primary text-xl">SEKALI BAYAR</strong>, Anda mendapatkan
                            akses <strong class="text-primary">LIFETIME (Seumur Hidup)</strong> selamanya tanpa biaya
                            tambahan apapun lagi di kemudian hari.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 md:px-6">
            <div
                class="bg-primary rounded-[2.5rem] md:rounded-[3.5rem] px-6 py-16 md:p-20 text-center relative overflow-hidden shadow-2xl shadow-primary/30">
                <!-- Background Decoration -->
                <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
                    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M0 0 L100 0 L100 100 L0 100 Z" fill="url(#grid)"></path>
                        <defs>
                            <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                                <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"></path>
                            </pattern>
                        </defs>
                    </svg>
                </div>
                <div class="absolute -top-24 -right-24 w-64 h-64 bg-white/10 blur-[80px] rounded-full"></div>
                <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-secondary/20 blur-[80px] rounded-full"></div>

                <div class="relative z-10 space-y-8">
                    <div
                        class="inline-block px-6 py-2 bg-white/10 backdrop-blur-md rounded-full text-white text-[10px] md:text-sm font-bold tracking-widest uppercase">
                        Terbatas untuk 100 Orang Pertama
                    </div>
                    <h2 class="text-3xl md:text-6xl font-black text-white tracking-tighter leading-tight">
                        Siap Melipatgandakan Omzet Bisnis Anda Hari Ini?
                    </h2>
                    <p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto font-medium">
                        Jangan biarkan calon pelanggan Anda diambil kompetitor. Dapatkan akses <span
                            class="text-white font-bold border-b-2 border-secondary">LIFETIME</span> Wamaps sekarang
                        sebelum harga naik kembali!
                    </p>
                    <div class="pt-6">
                        <a href="{{ route('checkout') }}"
                            class="inline-flex items-center gap-4 bg-white hover:bg-slate-100 text-primary px-10 py-6 rounded-2xl text-xl md:text-2xl font-black shadow-2xl shadow-black/20 transition-all hover:-translate-y-1 active:scale-[0.98] group">
                            YA, SAYA MAU WAMAPS SEKARANG!
                            <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="flex flex-col md:flex-row items-center justify-center gap-6 pt-8 text-white/80 text-[10px] md:text-sm font-bold">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            Sekali Bayar, Tanpa Biaya Bulanan
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            Update Fitur Gratis Selamanya
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            Akses dikirim otomatis setelah pembelian
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-50 dark:bg-slate-950 py-20 border-t border-slate-200/60 pb-32 md:pb-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Brand Info -->
                <div class="space-y-6">
                    <div class="flex items-center text-2xl font-black text-primary">
                        <svg class="w-8 h-8 mr-2" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="32" height="32" rx="8" fill="#145efc" />
                            <circle cx="16" cy="16" r="9" stroke="white" stroke-width="2.5" />
                            <circle cx="16" cy="16" r="4.5" stroke="white" stroke-width="2.5" />
                            <circle cx="16" cy="16" r="1.5" fill="white" />
                        </svg>
                        Wamaps
                    </div>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Wamaps adalah platform pintar untuk mengambil data dari Google Maps dan memudahkan Anda
                        mengelola komunikasi
                        WhatsApp secara otomatis. Dengan fitur autoscrape, template pesan, dan autoposting ke banyak
                        grup,
                        Wamaps membantu bisnis Anda menemukan calon pelanggan baru dan tetap terhubung dengan mereka
                        secara cepat dan efisien.
                    </p>
                </div>

                <!-- Fitur -->
                <div>
                    <h4 class="font-bold text-on-surface mb-6 uppercase tracking-wider text-xs">Fitur Utama</h4>
                    <ul class="space-y-4">
                        <li><a href="#features"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Auto Scrape
                                Google Maps</a></li>
                        <li><a href="#features"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Auto
                                WhatsApp Broadcast</a>
                        </li>
                        <li><a href="#features"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Auto
                                Posting Group</a></li>
                        <li><a href="#features"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Export Data
                                Excel</a></li>
                        <li><a href="#features"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Multiple
                                Message Templates</a></li>
                    </ul>
                </div>

                <!-- Produk -->
                <div>
                    <h4 class="font-bold text-on-surface mb-6 uppercase tracking-wider text-xs">Produk</h4>
                    <ul class="space-y-4">
                        <li><a href="#pricing"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Harga</a>
                        </li>

                    </ul>
                </div>

                <!-- Bantuan -->
                <div>
                    <h4 class="font-bold text-on-surface mb-6 uppercase tracking-wider text-xs">Bantuan & Kontak</h4>
                    <ul class="space-y-4">
                        <li>
                            <a href="https://wa.me/6289678386070"
                                class="inline-flex items-center gap-2 text-on-surface-variant hover:text-primary text-sm transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                                WhatsApp Admin
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-slate-200/60 pt-8 flex flex-col lg:flex-row justify-between items-center gap-6">
                <div class="text-on-surface-variant text-sm text-center lg:text-left">
                    © 2026 Wamaps. All rights reserved.
                </div>
                <div class="flex space-x-6 text-on-surface-variant text-sm mt-4 lg:mt-0">
                    <a class="hover:text-primary transition-colors" href="{{ route('privacy') }}">Privacy Policy</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('terms') }}">Terms of Service</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('support') }}">Support</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Sticky Mobile Checkout Bar -->
    <div
        class="fixed bottom-0 left-0 w-full md:hidden bg-primary/95 backdrop-blur-md border-t border-white/20 z-[100] px-4 py-2.5 pb-safe shadow-[0_-10px_40px_rgba(20,94,252,0.3)]">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-3">
            <!-- Price Info -->
            <div class="flex flex-col gap-0.5">
                <div class="flex items-center gap-1.5">
                    <div class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></div>
                    <span class="text-[9px] font-bold text-green-400 uppercase tracking-wider">Lifetime Deal • Bayar
                        Sekali</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="text-xl font-black text-white leading-none">Rp 149.000</span>
                    <span class="text-[10px] text-white/60 line-through leading-none">Rp 329.000</span>
                </div>
            </div>

            <!-- Action Button -->
            <a href="{{ route('checkout') }}"
                class="bg-green-600 hover:bg-green-500 text-white px-5 py-3 rounded-xl font-black text-xs flex items-center gap-2 shadow-xl shadow-green-900/10 active:scale-95 transition-all">
                Beli Sekarang
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</body>

</html>