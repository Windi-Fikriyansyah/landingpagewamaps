<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LeadFlow Pro - Payment Instructions</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed-dim": "#8dcff1",
                        "on-surface-variant": "#41474d",
                        "on-primary-fixed-variant": "#004c75",
                        "background": "#f8f9fa",
                        "tertiary": "#00677d",
                        "inverse-on-surface": "#f0f1f3",
                        "error": "#ba1a1a",
                        "surface-container": "#eceef1",
                        "surface-container-low": "#f1f4f7",
                        "surface-tint": "#0077B6",
                        "on-primary-container": "#001e30",
                        "on-background": "#191c1e",
                        "on-tertiary-fixed-variant": "#004e5f",
                        "secondary-fixed-dim": "#4ae176",
                        "inverse-surface": "#2d3135",
                        "surface-container-high": "#e6e8eb",
                        "on-secondary-fixed-variant": "#005321",
                        "surface-bright": "#f8f9fa",
                        "on-error-container": "#93000a",
                        "on-surface": "#191c1e",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#007432",
                        "secondary-container": "#6bff8f",
                        "surface": "#f8f9fa",
                        "tertiary-fixed-dim": "#83d2e3",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed": "#001f27",
                        "surface-variant": "#dee3e9",
                        "on-secondary-fixed": "#002109",
                        "on-error": "#ffffff",
                        "inverse-primary": "#8dcff1",
                        "outline": "#71787e",
                        "on-tertiary-container": "#001f27",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#afecff",
                        "primary-fixed": "#c0e8ff",
                        "surface-dim": "#d8dadf",
                        "primary": "#0077B6",
                        "primary-container": "#c0e8ff",
                        "on-primary": "#ffffff",
                        "surface-container-highest": "#dee3e9",
                        "on-primary-fixed": "#001e30",
                        "outline-variant": "#c1c7ce",
                        "secondary": "#006e2f",
                        "error-container": "#ffdad6",
                        "secondary-fixed": "#6bff8f",
                        "tertiary-fixed": "#afecff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "full": "9999px"
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
        }

        h1,
        h2,
        h3 {
            font-family: 'Manrope', sans-serif;
        }

        /* Fix for icon text showing as text */
        .material-symbols-outlined {
            vertical-align: middle;
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            white-space: nowrap;
            font-family: 'Material Symbols Outlined' !important;
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen flex flex-col">
    <!-- Top Navigation (Shared Component) -->
    <nav
        class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-md border-b border-surface-variant/20 shadow-sm">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-6 h-16">
            <div class="text-2xl font-black tracking-tighter text-primary flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-3xl">api</span>
                Wamaps
            </div>
            <div class="hidden md:flex items-center gap-6">
                <div class="flex items-center gap-2 text-[10px] font-bold text-green-600 bg-green-50 px-3 py-1 rounded-full border border-green-100 uppercase tracking-widest">
                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                    Sistem Online
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-24 pb-12 px-4 md:px-6 flex-grow">
        <div class="max-w-4xl mx-auto">
            <!-- Professional Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl md:text-5xl font-black text-on-surface mb-3 tracking-tight">Menunggu Pembayaran</h1>
                <p class="text-on-surface-variant text-sm md:text-base font-medium max-w-lg mx-auto leading-relaxed">Silakan pindai kode QRIS atau selesaikan instruksi pembayaran di bawah ini untuk aktivasi instan.</p>
            </div>

            <!-- Main Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                <!-- Timer Status -->
                <div class="lg:col-span-12">
                     <div class="bg-white p-4 rounded-2xl border border-outline-variant/30 flex items-center justify-between shadow-sm">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center">
                                <span class="material-symbols-outlined text-red-600 text-lg">schedule</span>
                            </div>
                            <span class="text-sm font-bold text-on-surface">Batas Pembayaran</span>
                        </div>
                        <span id="timer" class="text-lg font-black text-red-600 tabular-nums tracking-tighter">05:00</span>
                    </div>
                </div>

                <!-- Payment Area -->
                <div class="lg:col-span-12 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- QRIS CARD -->
                    <div class="bg-white p-8 rounded-[2rem] border border-outline-variant/30 shadow-xl shadow-primary/5 text-center flex flex-col items-center justify-center">
                        @if($transaction->method === 'QRIS')
                            <p class="text-[10px] uppercase font-black text-primary tracking-[0.3em] mb-6">QRIS DIGITAL PAYMENT</p>
                            <div class="bg-white p-4 rounded-3xl border-4 border-surface-container-low shadow-inner mb-6">
                                <img alt="QRIS payment code" class="w-56 h-56 md:w-64 md:h-64" src="{{ $transaction->payment_url }}" />
                            </div>
                            <p class="text-[11px] font-bold text-on-surface-variant max-w-[280px] leading-relaxed">Scan QRIS di atas menggunakan aplikasi e-wallet <strong>(GOPAY, OVO, DANA, dll)</strong> atau <strong>M-Banking Anda</strong>.</p>
                        @else
                            <div class="py-12 flex flex-col items-center">
                                <span class="material-symbols-outlined text-7xl text-primary mb-6">account_balance</span>
                                <p class="text-[10px] uppercase font-black text-primary tracking-[0.3em] mb-4">{{ $transaction->method }} TRANSFER</p>
                                <a href="{{ $transaction->payment_url }}" target="_blank"
                                    class="inline-flex items-center justify-center px-8 bg-primary text-white py-4 rounded-2xl font-black gap-3 hover:bg-primary/90 transition-all shadow-lg shadow-primary/20 group">
                                    LIHAT INSTRUKSI BAYAR
                                    <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- ORDER DETAILS CARD -->
                    <div class="space-y-6">
                        <div class="bg-surface-container-lowest p-8 rounded-[2rem] border border-outline-variant/30 shadow-sm">
                            <p class="text-[10px] uppercase font-black text-on-surface-variant tracking-[0.3em] mb-6">DETAIL PESANAN</p>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center py-3 border-b border-outline-variant/20">
                                    <p class="text-on-surface-variant text-xs font-bold uppercase">ID Transaksi</p>
                                    <p class="text-on-surface font-black text-sm">#{{ $transaction->merchant_ref }}</p>
                                </div>
                                <div class="flex justify-between items-start py-3">
                                    <p class="text-on-surface-variant text-xs font-bold uppercase">Total Tagihan</p>
                                    <div class="text-right">
                                        <p class="text-primary font-black text-3xl tracking-tighter">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</p>
                                        <div class="flex items-center justify-end gap-1 mt-1">
                                            <span class="material-symbols-outlined text-green-600 text-xs">verified_user</span>
                                            <p class="text-[9px] text-green-600 font-bold uppercase tracking-widest">Aktivasi Instan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Trust / Support -->
                        <div class="bg-primary/5 p-6 rounded-[1.5rem] border border-primary/10 flex gap-4 items-center">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-primary text-xl">verified_user</span>
                            </div>
                            <p class="text-[11px] text-primary/80 font-bold leading-relaxed">Pembayaran Anda diproses secara aman. Lisensi premium akan dikirimkan ke email anda segera setelah transaksi diverifikasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-surface-container py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-2 opacity-50">
                    <span class="material-symbols-outlined text-sm">api</span>
                    <span class="text-xs font-black tracking-tighter uppercase">Wamaps Cloud</span>
                </div>
                <div class="flex gap-8 text-[10px] font-bold uppercase tracking-widest text-on-surface-variant opacity-60">
                    <a href="#" class="hover:text-primary transition-colors">Bantuan</a>
                    <a href="#" class="hover:text-primary transition-colors">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-primary transition-colors">Kebijakan Privasi</a>
                </div>
                <p class="text-[10px] font-bold text-on-surface-variant opacity-40">© 2026 Wamaps. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        const merchantRef = "{{ $transaction->merchant_ref }}";
        const checkStatusUrl = "/checkout/status/" + merchantRef;
        const successUrl = "{{ route('checkout.success', $transaction->merchant_ref) }}";

        // Timer Logic (5 Minutes)
        let timeLeft = 300;
        const timerEl = document.getElementById('timer');
        
        const countdown = setInterval(() => {
            if (timeLeft <= 0) {
                clearInterval(countdown);
                timerEl.textContent = "00:00 (Kadaluarsa)";
                timerEl.classList.add('animate-pulse');
            } else {
                timeLeft--;
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                timerEl.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            }
        }, 1000);

        async function checkPaymentStatus() {
            try {
                const response = await fetch(checkStatusUrl);
                const data = await response.json();
                
                if (data.status === 'PAID') {
                    window.location.href = successUrl;
                }
            } catch (error) {
                console.error("Error checking status:", error);
            }
        }

        // Poll every 3 seconds
        const pollInterval = setInterval(checkPaymentStatus, 3000);
    </script>
</body>

</html>