<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Wamaps - Payment Instructions</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block"
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
        fbq('init', '2691160627922371');
        fbq('track', 'PageView');
        fbq('track', 'AddPaymentInfo');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2691160627922371&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body class="bg-surface text-on-surface min-h-screen flex flex-col">
    <!-- Top Navigation (Shared Component) -->
    <nav class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-md border-b border-surface-variant/20 shadow-sm">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-6 h-16">
            <a href="/" class="text-2xl font-black tracking-tighter text-primary flex items-center gap-2">
                <svg class="w-8 h-8 mr-1" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="8" fill="#145efc" />
                    <circle cx="16" cy="16" r="9" stroke="white" stroke-width="2.5" />
                    <circle cx="16" cy="16" r="4.5" stroke="white" stroke-width="2.5" />
                    <circle cx="16" cy="16" r="1.5" fill="white" />
                </svg>
                Wamaps
            </a>
            <div class="hidden md:flex items-center gap-6">
                <div
                    class="flex items-center gap-2 text-[10px] font-bold text-green-600 bg-green-50 px-3 py-1 rounded-full border border-green-100 uppercase tracking-widest">
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
                <p class="text-on-surface-variant text-sm md:text-base font-medium max-w-lg mx-auto leading-relaxed">
                    Silakan pindai kode QRIS atau selesaikan instruksi pembayaran di bawah ini untuk aktivasi instan.
                </p>
            </div>

            <!-- Main Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                <!-- Timer Status -->
                <div class="lg:col-span-12">
                    <div
                        class="bg-white p-4 rounded-2xl border border-outline-variant/30 flex items-center justify-between shadow-sm">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center">
                                <span class="material-symbols-outlined text-red-600 text-lg">schedule</span>
                            </div>
                            <span class="text-sm font-bold text-on-surface">Batas Pembayaran</span>
                        </div>
                        <span id="timer"
                            class="text-lg font-black text-red-600 tabular-nums tracking-tighter">05:00</span>
                    </div>
                </div>

                <!-- Payment Area -->
                <div class="lg:col-span-12 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- QRIS CARD -->
                    <div
                        class="bg-white p-8 rounded-[2rem] border border-outline-variant/30 shadow-xl shadow-primary/5 text-center flex flex-col items-center justify-center">
                        @if($transaction->method === 'QRIS')
                            <p class="text-[10px] uppercase font-black text-primary tracking-[0.3em] mb-6">QRIS DIGITAL
                                PAYMENT</p>
                            <div class="bg-white p-4 rounded-3xl border-4 border-surface-container-low shadow-inner mb-4">
                                <img alt="QRIS payment code" class="w-56 h-56 md:w-64 md:h-64"
                                    src="{{ $transaction->payment_url }}" />
                            </div>
                            <a href="{{ route('qris.download', $transaction->merchant_ref) }}"
                                class="inline-flex items-center justify-center px-6 py-2.5 mb-6 bg-surface-container-low text-primary font-bold rounded-xl hover:bg-surface-container-high active:scale-95 transition-all text-sm gap-2 shadow-sm border border-primary/10">
                                <span class="material-symbols-outlined text-base">download</span>
                                Unduh QRIS
                            </a>
                            <p class="text-[11px] font-bold text-on-surface-variant max-w-[280px] leading-relaxed">Scan QRIS
                                di atas menggunakan aplikasi e-wallet <strong>(GOPAY, OVO, DANA, dll)</strong> atau
                                <strong>M-Banking Anda</strong>.
                            </p>
                        @else
                            <div class="py-6 md:py-10 flex flex-col items-center">
                                <div class="w-16 h-16 md:w-20 md:h-20 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-4xl md:text-5xl text-primary">account_balance</span>
                                </div>
                                <p class="text-[10px] uppercase font-black text-primary tracking-[0.3em] mb-6 text-center">{{ $transaction->method }} TRANSFER</p>
                                
                                <div class="w-full max-w-md px-4">
                                    <div class="bg-surface-container-low p-5 md:p-8 rounded-[2rem] border-2 border-dashed border-primary/30 text-center">
                                        <p class="text-[10px] md:text-xs font-bold text-on-surface-variant uppercase mb-4 tracking-widest">Nomor Virtual Account</p>
                                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                                            <span id="va-number" class="text-2xl sm:text-3xl md:text-4xl font-black text-primary tracking-wider break-all leading-tight">{{ $transaction->payment_number ?? '--------' }}</span>
                                            <button onclick="copyToClipboard('va-number')" class="flex items-center justify-center p-3 bg-white rounded-2xl shadow-sm hover:shadow-md active:scale-95 transition-all text-primary border border-primary/10 group flex-shrink-0">
                                                <span class="material-symbols-outlined text-xl group-hover:rotate-12 transition-transform">content_copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8 bg-blue-50/50 p-4 rounded-2xl border border-blue-100/50 max-w-sm">
                                    <p class="text-[11px] font-bold text-on-surface-variant text-center leading-relaxed">
                                        Gunakan nomor Virtual Account di atas untuk melakukan transfer melalui <br class="hidden sm:block"><strong>Mobile Banking, ATM, atau Internet Banking</strong> Anda.
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- ORDER DETAILS CARD -->
                    <div class="space-y-6">
                        <div
                            class="bg-surface-container-lowest p-8 rounded-[2rem] border border-outline-variant/30 shadow-sm">
                            <p class="text-[10px] uppercase font-black text-on-surface-variant tracking-[0.3em] mb-6">
                                DETAIL PESANAN</p>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center py-3 border-b border-outline-variant/20">
                                    <p class="text-on-surface-variant text-xs font-bold uppercase">ID Transaksi</p>
                                    <p class="text-on-surface font-black text-sm">#{{ $transaction->merchant_ref }}</p>
                                </div>
                                <div class="flex justify-between items-start py-3">
                                    <p class="text-on-surface-variant text-xs font-bold uppercase">Total Tagihan</p>
                                    <div class="text-right">
                                        <p class="text-primary font-black text-3xl tracking-tighter">Rp
                                            {{ number_format($transaction->amount, 0, ',', '.') }}
                                        </p>
                                        <div class="flex items-center justify-end gap-1 mt-1">
                                            <span
                                                class="material-symbols-outlined text-green-600 text-xs">verified_user</span>
                                            <p class="text-[9px] text-green-600 font-bold uppercase tracking-widest">
                                                Aktivasi Instan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Trust / Support -->
                        <div class="bg-primary/5 p-6 rounded-[1.5rem] border border-primary/10 flex gap-4 items-center">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-primary text-xl">verified_user</span>
                            </div>
                            <p class="text-[11px] text-primary/80 font-bold leading-relaxed">Pembayaran Anda diproses
                                secara aman. Lisensi lifetime akan dikirimkan ke email anda segera setelah transaksi
                                diverifikasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-surface-container py-10 mt-auto">
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

        function copyToClipboard(elementId) {
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(() => {
                alert('Nomor Virtual Account disalin ke clipboard!');
            }).catch(err => {
                console.error('Gagal menyalin: ', err);
            });
        }
    </script>
</body>

</html>