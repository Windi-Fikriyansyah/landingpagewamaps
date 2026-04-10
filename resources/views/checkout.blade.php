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
    fbq('track', 'InitiateCheckout');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2691160627922371&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body class="bg-surface text-on-surface">
    <!-- Top Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl border-b border-surface-container">
        <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
            <a href="/" class="flex items-center text-xl font-bold tracking-tight text-primary">
                <svg class="w-8 h-8 mr-2" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="8" fill="#145efc" />
                    <circle cx="16" cy="16" r="9" stroke="white" stroke-width="2.5" />
                    <circle cx="16" cy="16" r="4.5" stroke="white" stroke-width="2.5" />
                    <circle cx="16" cy="16" r="1.5" fill="white" />
                </svg>
                Wamaps
            </a>
            <div class="flex items-center space-x-2 text-on-surface-variant">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/>
                </svg>
                <span class="text-sm font-medium">Checkout Aman</span>
            </div>
        </div>
    </nav>
    <!-- Main Content Canvas -->
    <main class="pt-24 pb-32 px-6 max-w-6xl mx-auto">
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <!-- Left Column: Checkout Form -->
                <div class="lg:col-span-7 space-y-10">
                    <!-- Information Section -->
                    <div>
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-primary tracking-tight">Informasi Kontak</h2>
                        <p class="text-on-surface-variant text-sm mt-1">Lengkapi data diri untuk aktivasi akun Anda.</p>
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
                                id="full_name" name="name" placeholder="John Doe" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <label class="text-sm font-semibold text-on-surface mb-2" for="email">Email Address</label>
                            <input
                                class="w-full px-4 py-3 rounded-xl bg-surface-container-low border-none focus:ring-2 focus:ring-primary/20 transition-all text-on-surface placeholder-on-surface-variant/50"
                                id="email" name="email" placeholder="email@contoh.com" type="email" required />
                        </div>
                    </div>
                <section class="mt-10 pt-4">
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-primary tracking-tight">Pilih Metode Pembayaran</h2>
                        <p class="text-on-surface-variant text-sm mt-1">Semua transaksi dienkripsi secara aman.</p>
                    </div>
                    <div class="grid grid-cols-1 gap-3">
                        @foreach($channels as $index => $channel)
                        @php
                            $fee_fixed = (float) $channel['fee_amount'];
                            $fee_percent = (float) $channel['fee_percent'];
                            $subtotal = 149000;
                            $calculated_fee = $fee_fixed + ($subtotal * ($fee_percent / 100));
                        @endphp
                        <label class="relative group cursor-pointer">
                            <input {{ $index === 0 ? 'checked' : '' }} class="peer sr-only" name="payment_method" value="{{ $channel['code'] }}" type="radio" 
                                data-fee-fixed="{{ $fee_fixed }}" data-fee-percent="{{ $fee_percent }}" />
                            <div
                                class="p-4 flex items-center justify-between rounded-xl bg-surface-container-lowest border-2 border-transparent peer-checked:border-primary peer-checked:bg-primary/5 transition-all group-hover:bg-surface-container-low">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 flex items-center justify-center bg-white rounded-lg shadow-sm overflow-hidden">
                                        <img src="{{ $channel['image'] }}" alt="{{ $channel['name'] }}" class="max-w-full max-h-full object-contain">
                                    </div>
                                    <div>
                                        <span class="block font-bold text-on-surface">{{ $channel['name'] }}</span>
                                        <span class="text-xs text-on-surface-variant italic">Biaya Admin: Rp {{ number_format($calculated_fee, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined text-primary opacity-0 peer-checked:opacity-100">check_circle</span>
                            </div>
                        </label>
                        @endforeach
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
                </div>
            </div>
            <!-- Right Column: Order Summary Card -->
            <div class="lg:col-span-5 sticky top-24">
                <div
                    class="bg-surface-container-lowest rounded-[2.5rem] p-8 shadow-[0_20px_50px_rgba(0,119,182,0.08)] border border-outline-variant/10">
                    <h3 class="text-xl font-extrabold text-primary mb-6 tracking-tight">Ringkasan Pesanan</h3>
                    <div class="space-y-6">
                        <!-- Product Item -->
                        <div class="flex items-start justify-between pb-6 border-b border-surface-container">
                            <div class="flex space-x-4">
                                
                                <div>
                                    <h4 class="font-bold text-on-surface">Wamaps Lifetime Deal</h4>
                                    <p class="text-sm text-on-surface-variant">Marketing Automation Suite Access</p>
                                    <span
                                        class="inline-block mt-2 px-2 py-0.5 bg-green-100 text-green-700 text-[10px] font-bold uppercase tracking-wider rounded">Sekali Bayar</span>
                                </div>
                            </div>
                            <span class="font-bold text-on-surface">Rp 149.000</span>
                        </div>
                        <!-- Calculations -->
                        <div class="space-y-3">
                            <div class="flex justify-between text-sm">
                                <span class="text-on-surface-variant">Subtotal</span>
                                <span class="text-on-surface font-medium">Rp 149.000</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-on-surface-variant">Biaya Admin</span>
                                <span class="text-primary font-medium" id="admin_fee">Rp 0</span>
                            </div>
                            <div class="flex justify-between pt-4 border-t border-surface-container">
                                <span class="text-lg font-bold text-on-surface">Total Harga</span>
                                <div class="text-right">
                                    <span class="block text-2xl font-extrabold text-primary" id="total_price">Rp 149.000</span>
                                    <span class="text-[10px] text-on-surface-variant uppercase tracking-widest">Sekali
                                        Bayar</span>
                                </div>
                            </div>
                        </div>
                        <!-- CTA -->
                        <button type="submit" id="submit-btn" onclick="console.log('Form Submit Triggered')"
                            class="w-full py-4 bg-primary text-white font-bold rounded-xl text-lg hover:bg-primary/90 active:scale-[0.98] transition-all flex items-center justify-center space-x-2 shadow-lg shadow-primary/20 relative z-30">
                            <span>Bayar Sekarang</span>
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                        <p class="text-center text-[11px] text-on-surface-variant px-4 leading-relaxed">
                            Dengan menekan tombol di atas, Anda menyetujui <a
                                class="underline text-primary hover:text-primary/80" href="{{ route('terms') }}">Syarat &amp; Ketentuan</a>
                            serta Kebijakan Privasi Wamaps.
                        </p>
                    </div>
                </div>
                <!-- Testimonial Mini Card -->
                <div
                    class="mt-8 bg-primary text-white p-6 rounded-[2rem] flex items-center space-x-4 shadow-xl shadow-primary/10">
                    <div class="w-12 h-12 bg-white text-primary rounded-full flex items-center justify-center font-bold text-xl flex-shrink-0">
                        A
                    </div>
                    <div>
                        <p class="text-xs italic font-medium leading-relaxed opacity-90">"Gak perlu lagi bayar jasa cari database jutaan rupiah. Pakai Wamaps, tim saya bisa dapet 500 leads tertarget setiap pagi cuma modal 1 klik. ROI gila-gilaan!"</p>
                        <p class="text-[10px] font-bold mt-1 text-primary-fixed">— Andi Pratama, Owner Digital Agency</p>
                    </div>
                </div>
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
        const subtotal = 149000;
        const adminFeeEl = document.getElementById('admin_fee');
        const totalPriceEl = document.getElementById('total_price');

        function updatePrice() {
            const selected = document.querySelector('input[name="payment_method"]:checked');
            if (selected) {
                const feeFixed = parseFloat(selected.dataset.feeFixed);
                const feePercent = parseFloat(selected.dataset.feePercent);
                
                const fee = Math.round(feeFixed + (subtotal * (feePercent / 100)));
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
        document.getElementById('submit-btn').addEventListener('click', function(e) {
            console.log('Button clicked via JS listener');
            const form = document.querySelector('form[action="{{ route('checkout.store') }}"]');
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