<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
                        "primary-fixed-dim": "#8dcffc",
                        "on-surface-variant": "#40484c",
                        "on-primary-fixed-variant": "#004a75",
                        "background": "#f5faff",
                        "tertiary": "#6b5c92",
                        "inverse-on-surface": "#f0f1f3",
                        "error": "#ba1a1a",
                        "surface-container": "#e2e2e6",
                        "surface-container-low": "#f0f1f3",
                        "surface-tint": "#0077B6",
                        "on-primary-container": "#001d31",
                        "on-background": "#191c1e",
                        "on-tertiary-fixed-variant": "#25144a",
                        "secondary-fixed-dim": "#b5c9d7",
                        "inverse-surface": "#2e3133",
                        "surface-container-high": "#d8dadd",
                        "on-secondary-fixed-variant": "#3a4954",
                        "surface-bright": "#f8f9fb",
                        "on-error-container": "#410002",
                        "on-surface": "#191c1e",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#0b1d28",
                        "secondary-container": "#d1e5f4",
                        "surface": "#f8f9fb",
                        "tertiary-fixed-dim": "#d6bdfb",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed": "#25144a",
                        "surface-variant": "#dee3e9",
                        "on-secondary-fixed": "#0b1d28",
                        "on-error": "#ffffff",
                        "inverse-primary": "#8dcffc",
                        "outline": "#71787d",
                        "on-tertiary-container": "#25144a",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#ede0ff",
                        "primary-fixed": "#c5e7ff",
                        "surface-dim": "#d8dadd",
                        "primary": "#0077B6",
                        "primary-container": "#c5e7ff",
                        "on-primary": "#ffffff",
                        "surface-container-highest": "#ced1d4",
                        "on-primary-fixed": "#001d31",
                        "outline-variant": "#c1c7ce",
                        "secondary": "#4e606e",
                        "error-container": "#ffdad6",
                        "secondary-fixed": "#d1e5f4",
                        "tertiary-fixed": "#ede0ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "1rem"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Manrope"],
                        "label": ["Manrope"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Manrope', sans-serif;
            background-color: #f5faff;
        }

        h1,
        h2,
        h3 {
            font-family: 'Manrope', sans-serif;
        }

        /* Prevent icon text from showing before font loads */
        .material-symbols-outlined {
            display: inline-block;
            overflow: hidden;
            text-indent: -9999px;
            vertical-align: middle;
        }

        .material-symbols-outlined::before {
            text-indent: 0;
            float: left;
            width: 1em;
        }
    </style>
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '943948765000391');
        fbq('track', 'PageView');
        fbq('track', 'InitiateCheckout');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=943948765000391&ev=PageView&noscript=1" /></noscript>
    <!-- Crisp Live Chat -->
    @if (config('services.crisp.id'))
        <script type="text/javascript">
            window.$crisp = [];
            window.CRISP_WEBSITE_ID = "{{ config('services.crisp.id') }}";
            (function () {
                // Set bahasa ke Indonesia
                window.$crisp.push(["set", "common:locale", ["id"]]);

                // Posisi agar tidak terlalu mepet di mobile
                if (window.matchMedia("(max-width: 1024px)").matches) {
                    window.$crisp.push(["set", "chat:offset:bottom", [75]]);
                    window.$crisp.push(["set", "chat:offset:right", [16]]);
                }

                d = document;
                s = d.createElement("script");
                s.src = "https://client.crisp.chat/l.js";
                s.async = 1;
                d.getElementsByTagName("head")[0].appendChild(s);
            })();
        </script>
    @endif
</head>


<body class="bg-surface text-on-surface">
    <!-- Top Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl border-b border-surface-container">
        <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
            <a href="https://ekspor.wamapss.com/"
                class="flex items-center text-xl font-bold tracking-tight text-primary">
                <svg class="w-8 h-8 mr-2" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="8" fill="#145efc" />
                    <circle cx="16" cy="16" r="9" stroke="white" stroke-width="2.5" />
                    <circle cx="16" cy="16" r="4.5" stroke="white" stroke-width="2.5" />
                    <circle cx="16" cy="16" r="1.5" fill="white" />
                </svg>
                Wamaps
            </a>
            <div class="flex flex-col items-end text-on-surface-variant">
                <div class="flex items-center space-x-1.5">
                    <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z" />
                    </svg>
                    <span class="text-sm font-bold">Checkout Aman</span>
                </div>
                <span class="text-[10px] opacity-60 font-medium">Data & pembayaran terenkripsi</span>
            </div>
        </div>
    </nav>
    <!-- Main Content Canvas -->
    <main class="pt-24 pb-32 px-6 max-w-6xl mx-auto">
        <form action="{{ route('checkout_ekspor.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <!-- Left Column: Checkout Form -->
                <div class="lg:col-span-7 space-y-10">
                    <!-- Information Section -->
                    <div>
                        <div class="mb-6">
                            <div
                                class="bg-amber-50 border border-amber-200 text-amber-800 px-4 py-2.5 rounded-xl text-center text-sm mb-6 font-semibold shadow-sm animate-pulse">
                                🔥 Promo terbatas! Harga akan naik setelah hari ini
                            </div>
                            <h6 class="text-lg font-bold text-on-surface mb-2">Informasi Akun</h6>
                        </div>

                        @if ($errors->any())
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                <ul class="list-disc pl-5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="space-y-4">
                            <div class="flex flex-col">
                                <label class="text-sm font-semibold text-on-surface mb-2" for="full_name">Nama
                                    Lengkap</label>
                                <input
                                    class="w-full px-4 py-3 rounded-xl bg-surface-container-low border-none focus:ring-2 focus:ring-primary/20 transition-all text-on-surface placeholder-on-surface-variant/50"
                                    id="full_name" name="name" type="text" placeholder="Untuk aktivasi akun" required />
                            </div>
                            <div class="flex flex-col">
                                <label class="text-sm font-semibold text-on-surface mb-2" for="email">Email
                                    Address</label>
                                <input
                                    class="w-full px-4 py-3 rounded-xl bg-surface-container-low border-none focus:ring-2 focus:ring-primary/20 transition-all text-on-surface placeholder-on-surface-variant/50"
                                    id="email" name="email" type="email" placeholder="Akses akan dikirim ke email ini"
                                    required />
                            </div>
                        </div>
                        <section class="mt-10 pt-4">
                            <div class="mb-6">
                                <h2 class="text-2xl font-bold text-primary tracking-tight">Pilih Metode Pembayaran</h2>
                                <p class="text-on-surface-variant text-sm mt-1">Semua transaksi dienkripsi secara aman.
                                </p>
                            </div>
                            <div class="space-y-3">
                                @php
                                    $qris_channel = collect($channels)->firstWhere('code', 'QRIS');
                                    $other_channels = collect($channels)->reject(fn($c) => $c['code'] === 'QRIS');
                                @endphp

                                @if($qris_channel)
                                    @php
                                        $fee_fixed = (float) $qris_channel['fee_amount'];
                                        $fee_percent = (float) $qris_channel['fee_percent'];
                                        $subtotal = 239000;
                                        $calculated_fee = $fee_fixed + ($subtotal * ($fee_percent / 100)) + 200;
                                    @endphp
                                    <label class="relative group cursor-pointer block">
                                        <input checked class="peer sr-only" name="payment_method"
                                            value="{{ $qris_channel['code'] }}" type="radio"
                                            data-fee-fixed="{{ $fee_fixed }}" data-fee-percent="{{ $fee_percent }}" />
                                        <div
                                            class="p-4 flex items-center justify-between rounded-xl bg-surface-container-lowest border-2 border-transparent peer-checked:border-primary peer-checked:bg-primary/5 transition-all group-hover:bg-surface-container-low shadow-sm">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="w-12 h-12 flex items-center justify-center bg-white rounded-lg shadow-sm overflow-hidden">
                                                    <img src="{{ $qris_channel['image'] }}"
                                                        alt="{{ $qris_channel['name'] }}"
                                                        class="max-w-full max-h-full object-contain">
                                                </div>
                                                <div>
                                                    <span class="block font-bold text-on-surface">QRIS</span>
                                                    <span class="text-xs text-primary font-bold block">Paling cepat &
                                                        mudah</span>
                                                    <span class="text-[10px] text-on-surface-variant opacity-70">Biaya
                                                        Admin: Rp {{ number_format($calculated_fee, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
                                            <div class="opacity-0 peer-checked:opacity-100 transition-opacity">
                                                <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </label>
                                @endif

                                @if($other_channels->count() > 0)
                                    <div class="mt-4">
                                        <details class="group">
                                            <summary class="list-none cursor-pointer">
                                                <div
                                                    class="flex items-center justify-between p-4 rounded-xl border border-surface-container-high bg-white hover:bg-surface-container-lowest transition-all shadow-sm group-open:rounded-b-none group-open:border-b-transparent">
                                                    <div class="flex items-center gap-3">
                                                        <div
                                                            class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center">
                                                            <svg class="w-5 h-5 text-primary" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <span class="font-bold text-on-surface text-sm">Metode Pembayaran
                                                            Lain</span>
                                                    </div>
                                                    <svg class="w-5 h-5 text-on-surface-variant transition-transform duration-300 group-open:rotate-180"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                                                    </svg>
                                                </div>
                                            </summary>

                                            <div
                                                class="p-4 bg-white border border-t-0 border-surface-container-high rounded-b-xl space-y-2">
                                                <p
                                                    class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-3 px-1">
                                                    Pilih Bank</p>
                                                <div class="grid grid-cols-1 gap-2">
                                                    @foreach($other_channels as $channel)
                                                        @php
                                                            $fee_fixed = (float) $channel['fee_amount'];
                                                            $fee_percent = (float) $channel['fee_percent'];
                                                            $subtotal = 239000;
                                                            $calculated_fee = $fee_fixed + ($subtotal * ($fee_percent / 100)) + 500;
                                                        @endphp
                                                        <label class="relative group cursor-pointer">
                                                            <input class="peer sr-only" name="payment_method"
                                                                value="{{ $channel['code'] }}" type="radio"
                                                                data-fee-fixed="{{ $fee_fixed }}"
                                                                data-fee-percent="{{ $fee_percent }}" />
                                                            <div
                                                                class="p-3 flex items-center justify-between rounded-lg bg-surface-container-lowest border border-surface-container-high peer-checked:border-primary peer-checked:bg-primary/5 transition-all group-hover:bg-surface-container-low">
                                                                <div class="flex items-center space-x-3">
                                                                    <div
                                                                        class="w-10 h-10 flex items-center justify-center bg-white rounded-md shadow-sm overflow-hidden p-1">
                                                                        <img src="{{ $channel['image'] }}"
                                                                            alt="{{ $channel['name'] }}"
                                                                            class="max-w-full max-h-full object-contain">
                                                                    </div>
                                                                    <div>
                                                                        <span
                                                                            class="block text-sm font-bold text-on-surface">{{ $channel['name'] }}</span>
                                                                        <span
                                                                            class="text-[9px] text-on-surface-variant opacity-70">Admin:
                                                                            Rp
                                                                            {{ number_format($calculated_fee, 0, ',', '.') }}</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="w-5 h-5 rounded-full border-2 border-surface-container-high peer-checked:border-primary peer-checked:bg-primary flex items-center justify-center transition-all">
                                                                    <div
                                                                        class="w-2 h-2 rounded-full bg-white opacity-0 peer-checked:opacity-100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </details>
                                    </div>
                                @endif
                            </div>
                        </section>
                        <!-- Security Badges -->
                        <div
                            class="flex flex-wrap items-center gap-6 pt-6 opacity-60 grayscale hover:grayscale-0 transition-all">
                            <div class="flex items-center space-x-2">
                                <span class="material-symbols-outlined text-xl">verified_user</span>
                                <span class="text-xs font-bold uppercase tracking-widest">SSL SECURE</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="material-symbols-outlined text-xl">verified</span>
                                <span class="text-xs font-bold uppercase tracking-widest">TRUSTED SELLER</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                                </svg>
                                <span class="text-xs font-bold uppercase tracking-widest">GARANSI 7 HARI</span>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Order Summary Card -->
                    <div class="lg:col-span-5 sticky top-24">
                        <div
                            class="bg-surface-container-lowest rounded-[2.5rem] p-8 shadow-[0_20px_50px_rgba(0,119,182,0.08)] border border-outline-variant/10">
                            <h3 class="text-xl font-extrabold text-primary mb-6 tracking-tight">Ringkasan</h3>
                            <div class="space-y-6">
                                <!-- Product Item -->
                                <div class="flex flex-col w-full">
                                    <div class="flex justify-between w-full mb-1">
                                        <span class="text-on-surface-variant text-sm">Harga Normal</span>
                                        <span class="text-on-surface-variant text-sm line-through decoration-red-400">Rp
                                            499.000</span>
                                    </div>
                                    <div class="flex justify-between w-full">
                                        <span
                                            class="text-on-surface hover:text-primary transition-colors font-semibold">Harga
                                            Promo</span>
                                        <span class="font-bold text-green-600">Rp 239.000</span>
                                    </div>
                                    <div class="mt-1">
                                        <span
                                            class="inline-block px-2 py-0.5 bg-green-100 text-green-700 text-[10px] font-bold uppercase tracking-wider rounded">Sekali
                                            Bayar</span>
                                        <span
                                            class="inline-block px-2 py-0.5 bg-green-100 text-green-700 text-[10px] font-bold uppercase tracking-wider rounded">Lifetime</span>
                                    </div>
                                </div>
                                <!-- Calculations -->
                                <div class="space-y-3">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-on-surface-variant">Subtotal</span>
                                        <span class="text-on-surface font-medium">Rp 239.000</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-on-surface-variant">Biaya Admin</span>
                                        <span class="text-primary font-medium" id="admin_fee">Rp 0</span>
                                    </div>
                                    <div class="flex justify-between pt-4 border-t border-surface-container">
                                        <span class="text-lg font-bold text-on-surface">Total</span>
                                        <div class="text-right">
                                            <span class="block text-2xl font-extrabold text-primary" id="total_price">Rp
                                                239.000</span>
                                            <span class="text-[11px] text-green-600 font-bold">Hemat 70% hari ini</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- CTA -->
                                <div class="px-4">
                                    <button type="submit" id="submit-btn" onclick="console.log('Form Submit Triggered')"
                                        class="w-full py-5 bg-primary text-white font-black rounded-2xl text-xl hover:bg-primary/90 active:scale-[0.98] transition-all flex items-center justify-center space-x-3 shadow-xl shadow-primary/25 relative z-30">
                                        <span>Bayar & Aktifkan Sekarang</span>
                                    </button>
                                </div>
                                <div class="text-center mt-3">
                                    <div
                                        class="inline-flex items-center gap-2 px-4 py-2 bg-green-50 border border-green-200 rounded-full">
                                        <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                                        </svg>
                                        <span class="text-green-700 font-bold text-sm">Garansi 7 Hari Uang
                                            Kembali</span>
                                    </div>
                                    <p class="text-[11px] text-on-surface-variant mt-2">🔒 Pembayaran aman & terenkripsi
                                    </p>
                                </div>
                                <p class="text-center text-[10px] text-on-surface-variant/60 px-4 mt-4 leading-relaxed">
                                    Dengan menekan tombol di atas, Anda menyetujui <a
                                        class="underline text-primary hover:text-primary/80"
                                        href="{{ route('terms') }}">Syarat &amp; Ketentuan</a>
                                    serta Kebijakan Privasi Wamaps.
                                </p>
                            </div>
                        </div>
                        <!-- Testimonial Mini Card -->

                    </div>
        </form>
    </main>
    <!-- Footer -->
    <footer class="bg-white border-t border-surface-container py-10">
        <div
            class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-on-surface-variant text-sm">
            <span>© 2026 Wamaps. Semua Hak Dilindungi.</span>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a class="hover:text-primary transition-colors" href="{{ route('privacy') }}">Privacy Policy</a>
                <a class="hover:text-primary transition-colors" href="{{ route('terms') }}">Terms of Service</a>
                <a class="hover:text-primary transition-colors" href="{{ route('support') }}">Support</a>
            </div>
        </div>
    </footer>
    <script>
        const subtotal = 239000;
        const adminFeeEl = document.getElementById('admin_fee');
        const totalPriceEl = document.getElementById('total_price');

        function updatePrice() {
            const selected = document.querySelector('input[name="payment_method"]:checked');
            if (selected) {
                const feeFixed = parseFloat(selected.dataset.feeFixed);
                const feePercent = parseFloat(selected.dataset.feePercent);

                let fee = Math.round(feeFixed + (subtotal * (feePercent / 100)));

                // Tambahan biaya sesuai request user
                if (selected.value === 'QRIS') {
                    fee += 200;
                } else {
                    fee += 500;
                }

                const total = subtotal + fee;

                adminFeeEl.textContent = 'Rp ' + fee.toLocaleString('id-ID');
                totalPriceEl.textContent = 'Rp ' + total.toLocaleString('id-ID');
            }
        }

        document.querySelectorAll('input[name="payment_method"]').forEach(input => {
            input.addEventListener('change', updatePrice);
        });

        // Run once on load
        window.addEventListener('DOMContentLoaded', updatePrice);

        // Force Submit for Debugging
        document.getElementById('submit-btn').addEventListener('click', function (e) {
            console.log('Button clicked via JS listener');
            const form = document.querySelector('form[action="{{ route('checkout_ekspor.store') }}"]');
            if (form) {
                console.log('Form found, submitting...');
                this.innerHTML = 'Memproses...';
                this.disabled = true;
                form.submit();
            } else {
                console.error('Form not found!');
                alert('Sistem sedang memuat, silakan muat ulang halaman (Refresh).');
            }
        });
    </script>
</body>

</html>