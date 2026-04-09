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
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen pb-20 md:pb-0">
    <!-- Top Navigation (Shared Component) -->
    <nav
        class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl border-b border-surface-variant/30">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-6 h-16">
            <div class="text-xl font-extrabold tracking-tight text-primary">LeadFlow Pro</div>
            <div class="hidden md:flex space-x-8">
                <a class="text-on-surface-variant font-semibold hover:text-primary transition-colors"
                    href="#">Features</a>
                <a class="text-on-surface-variant font-semibold hover:text-primary transition-colors" href="#">How it
                    Works</a>
                <a class="text-on-surface-variant font-semibold hover:text-primary transition-colors"
                    href="#">Pricing</a>
            </div>
            <button class="bg-primary text-on-primary px-6 py-2 rounded-xl font-bold active:scale-95 transition-all">Buy
                Now</button>
        </div>
    </nav>
    <main class="pt-24 pb-12 px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Hero Success Message -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-secondary-container rounded-full mb-6">
                    <span class="material-symbols-outlined text-on-secondary-container text-4xl"
                        style="font-variation-settings: 'FILL' 1;">check_circle</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-primary mb-4 tracking-tight">Pesanan Berhasil Dibuat
                </h1>
                <p class="text-on-surface-variant text-lg max-w-xl mx-auto font-medium">Terima kasih telah memilih
                    LeadFlow Pro. Langkah terakhir untuk mengaktifkan fitur premium Anda.</p>
            </div>
            <!-- Asymmetric Payment Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Left Column: Instructions & Timer -->
                <div class="lg:col-span-7 space-y-6">
                    <!-- Timer Card -->
                    <div
                        class="bg-surface-container-low p-6 rounded-xl border border-surface-variant/20 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-error">schedule</span>
                            <span class="font-bold text-on-surface">Selesaikan pembayaran dalam:</span>
                        </div>
                        <div class="text-xl font-extrabold font-headline text-error tabular-nums">23:59:54</div>
                    </div>
                    <!-- Bank Details Card -->
                    <div class="bg-surface-container-lowest p-8 rounded-xl border border-surface-variant/20 shadow-sm">
                        <p class="text-xs uppercase tracking-widest text-primary font-extrabold mb-6">Silahkan lakukan
                            pembayaran ke:</p>
                        <div class="flex items-start gap-6 mb-8 p-6 bg-surface-container-low rounded-xl">
                            <div
                                class="w-16 h-10 bg-white rounded flex items-center justify-center font-extrabold text-blue-700 shadow-sm">
                                BCA</div>
                            <div>
                                <p class="text-on-surface-variant text-sm font-semibold">Nomor Rekening</p>
                                <div class="flex items-center gap-2">
                                    <h2 class="text-2xl font-extrabold font-headline tracking-wider text-on-surface">
                                        1234567890</h2>
                                    <span
                                        class="material-symbols-outlined text-primary cursor-pointer text-xl">content_copy</span>
                                </div>
                                <p class="text-on-surface font-bold mt-1">a/n LeadFlow Pro</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-end border-b border-surface-variant/30 pb-4">
                                <p class="text-on-surface-variant font-semibold">Jumlah Total</p>
                                <div class="text-right">
                                    <span class="text-primary font-extrabold text-3xl font-headline">Rp 499.123</span>
                                    <p class="text-xs text-error font-bold mt-1">Sertakan 3 angka terakhir agar otomatis
                                        aktif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Instructions Card -->
                    <div class="bg-primary/5 p-6 rounded-xl border-l-4 border-primary">
                        <div class="flex gap-4">
                            <span class="material-symbols-outlined text-primary">info</span>
                            <p class="text-primary font-semibold text-sm">Setelah bayar, akses tool akan otomatis aktif.
                                Sistem kami akan memverifikasi pembayaran Anda dalam hitungan menit.</p>
                        </div>
                    </div>
                </div>
                <!-- Right Column: QRIS & Confirmation -->
                <div class="lg:col-span-5 space-y-6">
                    <div
                        class="bg-surface-container-lowest p-8 rounded-xl border border-surface-variant/20 shadow-sm text-center">
                        <p class="text-xs uppercase tracking-widest text-on-surface-variant font-extrabold mb-6">Scan
                            QRIS</p>
                        <div
                            class="bg-white p-4 rounded-xl border border-surface-variant/30 inline-block mb-6 shadow-sm">
                            <img alt="QRIS payment code for LeadFlow Pro"
                                class="w-64 h-64 mix-blend-multiply opacity-90"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDtDPgz3Q-hNZVlB6c6OPGTmOxxzMHAvWG4uATdfDlUUq0g7zK8w4nRdIWhjIj6II1lu3AAQmWicCX7YeQ2_Gb4lYoZnm3v146sdZhUXqgT_w-ti2GFB7r4jBIUUvZodTcA_c4WavYgoBIjAH3G5Vnv8jabZ-91UzeiPUmFgH5QD03eOfo4VtE4BXo5zdqDezP9a0nt6F7eDj3uHfy9WAGG_L6BO5zucwr7nVSUzCK-4uI3Mr7_nDiPhJ6AfT7KL3z5nP6kKf4n38" />
                        </div>
                        <p class="text-sm text-on-surface-variant mb-8 px-4 font-medium">Bisa menggunakan GoPay, OVO,
                            Dana, LinkAja, atau Mobile Banking lainnya.</p>
                        <div class="space-y-3">
                            <button
                                class="w-full bg-secondary text-on-secondary py-4 rounded-xl font-extrabold flex items-center justify-center gap-2 hover:brightness-110 active:scale-[0.98] transition-all">
                                <span class="material-symbols-outlined"
                                    style="font-variation-settings: 'FILL' 1;">chat</span>
                                Konfirmasi via WhatsApp
                            </button>
                            <p class="text-xs text-on-surface-variant italic font-medium">Butuh bantuan? Tim CS kami
                                siap membantu.</p>
                        </div>
                    </div>
                    <!-- Trust Badge -->
                    <div class="flex items-center justify-center gap-2 text-on-surface-variant opacity-60">
                        <span class="material-symbols-outlined text-sm">lock</span>
                        <span class="text-[10px] font-extrabold uppercase tracking-widest">Secure Architectural Data
                            Transaction</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer (Shared Component) -->
    <footer class="bg-surface-container-low w-full py-12 px-6 border-t border-surface-variant/20">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
            <div class="text-lg font-extrabold text-primary">LeadFlow Pro</div>
            <div class="flex gap-8">
                <a class="text-on-surface-variant hover:text-primary text-sm font-semibold transition-colors"
                    href="#">Terms of Service</a>
                <a class="text-on-surface-variant hover:text-primary text-sm font-semibold transition-colors"
                    href="#">Privacy Policy</a>
                <a class="text-on-surface-variant hover:text-primary text-sm font-semibold transition-colors"
                    href="#">API Docs</a>
                <a class="text-on-surface-variant hover:text-primary text-sm font-semibold transition-colors"
                    href="#">Affiliate</a>
            </div>
            <p class="text-on-surface-variant text-xs font-medium">© 2024 LeadFlow Pro. Architectural Data Solutions.
            </p>
        </div>
    </footer>
    <!-- Bottom Navigation (Mobile Only) -->
    <div
        class="fixed bottom-0 left-0 w-full flex justify-around items-center px-4 py-2 md:hidden bg-white dark:bg-slate-900 border-t border-surface-variant/30 shadow-[0_-4px_20px_rgba(0,0,0,0.04)] z-50">
        <div
            class="flex flex-col items-center justify-center text-on-surface-variant p-2 hover:bg-surface-container-high rounded-xl transition-all">
            <span class="material-symbols-outlined">explore</span>
            <span class="text-[10px] uppercase tracking-wider font-extrabold">Features</span>
        </div>
        <div
            class="flex flex-col items-center justify-center text-on-surface-variant p-2 hover:bg-surface-container-high rounded-xl transition-all">
            <span class="material-symbols-outlined">payments</span>
            <span class="text-[10px] uppercase tracking-wider font-extrabold">Pricing</span>
        </div>
        <div
            class="flex flex-col items-center justify-center text-on-surface-variant p-2 hover:bg-surface-container-high rounded-xl transition-all">
            <span class="material-symbols-outlined">chat</span>
            <span class="text-[10px] uppercase tracking-wider font-extrabold">WhatsApp</span>
        </div>
        <div
            class="flex flex-col items-center justify-center bg-primary/10 text-primary rounded-xl p-2 active:scale-95 transition-all">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">shopping_cart</span>
            <span class="text-[10px] uppercase tracking-wider font-extrabold">Buy Now</span>
        </div>
    </div>
</body>

</html>