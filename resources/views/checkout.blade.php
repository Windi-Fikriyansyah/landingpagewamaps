<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- Top Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl border-b border-surface-container">
        <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
            <span class="text-xl font-bold tracking-tight text-primary">LeadFlow Pro</span>
            <div class="flex items-center space-x-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-sm">lock</span>
                <span class="text-sm font-medium">Checkout Aman</span>
            </div>
        </div>
    </nav>
    <!-- Main Content Canvas -->
    <main class="pt-24 pb-32 px-6 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left Column: Checkout Form -->
            <div class="lg:col-span-7 space-y-10">
                <!-- Information Section -->
                <section>
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-primary tracking-tight">Informasi Kontak</h2>
                        <p class="text-on-surface-variant text-sm mt-1">Lengkapi data diri untuk aktivasi akun Anda.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex flex-col">
                            <label class="text-sm font-semibold text-on-surface mb-2" for="full_name">Nama
                                Lengkap</label>
                            <input
                                class="w-full px-4 py-3 rounded-xl bg-surface-container-low border-none focus:ring-2 focus:ring-primary/20 transition-all text-on-surface placeholder-on-surface-variant/50"
                                id="full_name" placeholder="John Doe" type="text" />
                        </div>
                        <div class="flex flex-col">
                            <label class="text-sm font-semibold text-on-surface mb-2" for="email">Email Address</label>
                            <input
                                class="w-full px-4 py-3 rounded-xl bg-surface-container-low border-none focus:ring-2 focus:ring-primary/20 transition-all text-on-surface placeholder-on-surface-variant/50"
                                id="email" placeholder="email@contoh.com" type="email" />
                        </div>
                    </div>
                </section>
                <!-- Payment Method Section -->
                <section>
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-primary tracking-tight">Pilih Metode Pembayaran</h2>
                        <p class="text-on-surface-variant text-sm mt-1">Semua transaksi dienkripsi secara aman.</p>
                    </div>
                    <div class="grid grid-cols-1 gap-3">
                        <!-- QRIS Option -->
                        <label class="relative group cursor-pointer">
                            <input checked="" class="peer sr-only" name="payment" type="radio" />
                            <div
                                class="p-5 flex items-center justify-between rounded-xl bg-surface-container-lowest border-2 border-transparent peer-checked:border-primary peer-checked:bg-primary/5 transition-all group-hover:bg-surface-container-low">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="w-12 h-12 flex items-center justify-center bg-white rounded-lg shadow-sm">
                                        <span class="material-symbols-outlined text-primary"
                                            style="font-variation-settings: 'FILL' 1;">qr_code_2</span>
                                    </div>
                                    <div>
                                        <span class="block font-bold text-on-surface">QRIS</span>
                                        <span class="text-xs text-on-surface-variant">Pembayaran instan via GoPay, OVO,
                                            Dana, ShopeePay</span>
                                    </div>
                                </div>
                                <span
                                    class="material-symbols-outlined text-primary opacity-0 peer-checked:opacity-100">check_circle</span>
                            </div>
                        </label>
                        <!-- Bank Transfer Option -->
                        <label class="relative group cursor-pointer">
                            <input class="peer sr-only" name="payment" type="radio" />
                            <div
                                class="p-5 flex items-center justify-between rounded-xl bg-surface-container-lowest border-2 border-transparent peer-checked:border-primary peer-checked:bg-primary/5 transition-all group-hover:bg-surface-container-low">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="w-12 h-12 flex items-center justify-center bg-white rounded-lg shadow-sm">
                                        <span class="material-symbols-outlined text-primary"
                                            style="font-variation-settings: 'FILL' 1;">account_balance</span>
                                    </div>
                                    <div>
                                        <span class="block font-bold text-on-surface">Transfer Bank (Manual)</span>
                                        <span class="text-xs text-on-surface-variant">Konfirmasi manual via BCA atau
                                            Mandiri</span>
                                    </div>
                                </div>
                                <span
                                    class="material-symbols-outlined text-primary opacity-0 peer-checked:opacity-100">check_circle</span>
                            </div>
                        </label>
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
                    class="bg-surface-container-lowest rounded-full p-8 shadow-[0_20px_50px_rgba(0,119,182,0.08)] border border-outline-variant/10">
                    <h3 class="text-xl font-extrabold text-primary mb-6 tracking-tight">Ringkasan Pesanan</h3>
                    <div class="space-y-6">
                        <!-- Product Item -->
                        <div class="flex items-start justify-between pb-6 border-b border-surface-container">
                            <div class="flex space-x-4">
                                <div
                                    class="w-16 h-16 rounded-xl bg-primary-container/30 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary text-3xl"
                                        style="font-variation-settings: 'FILL' 1;">analytics</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-on-surface">LeadFlow Pro Annual</h4>
                                    <p class="text-sm text-on-surface-variant">Professional Dashboard Access</p>
                                    <span
                                        class="inline-block mt-2 px-2 py-0.5 bg-primary-container text-primary text-[10px] font-bold uppercase tracking-wider rounded">Save
                                        20%</span>
                                </div>
                            </div>
                            <span class="font-bold text-on-surface">Rp 2.499.000</span>
                        </div>
                        <!-- Calculations -->
                        <div class="space-y-3">
                            <div class="flex justify-between text-sm">
                                <span class="text-on-surface-variant">Subtotal</span>
                                <span class="text-on-surface font-medium">Rp 2.499.000</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-on-surface-variant">Pajak (11%)</span>
                                <span class="text-on-surface font-medium">Rp 274.890</span>
                            </div>
                            <div class="flex justify-between pt-4 border-t border-surface-container">
                                <span class="text-lg font-bold text-on-surface">Total Harga</span>
                                <div class="text-right">
                                    <span class="block text-2xl font-extrabold text-primary">Rp 2.773.890</span>
                                    <span class="text-[10px] text-on-surface-variant uppercase tracking-widest">Sekali
                                        Bayar</span>
                                </div>
                            </div>
                        </div>
                        <!-- CTA -->
                        <button
                            class="w-full py-4 bg-primary text-white font-bold rounded-xl text-lg hover:bg-primary/90 active:scale-[0.98] transition-all flex items-center justify-center space-x-2 shadow-lg shadow-primary/20">
                            <span>Bayar Sekarang</span>
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                        <p class="text-center text-[11px] text-on-surface-variant px-4 leading-relaxed">
                            Dengan menekan tombol di atas, Anda menyetujui <a
                                class="underline text-primary hover:text-primary/80" href="#">Syarat &amp; Ketentuan</a>
                            serta Kebijakan Privasi LeadFlow Pro.
                        </p>
                    </div>
                </div>
                <!-- Testimonial Mini Card -->
                <div
                    class="mt-8 bg-primary text-white p-6 rounded-full flex items-center space-x-4 shadow-xl shadow-primary/10">
                    <img alt="Customer" class="w-12 h-12 rounded-full object-cover border-2 border-white/20"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtblO32vkinaOM4S2r3_ONO7CJHCpVyFP0XWbpD2DraqAbaOuvsc2PjY3qQAr-PYk6qIfsrX3usjUhGsEG1HYQ423SvZ5nKxLfXsnNOiLo6EG0SdoujqFPbNx5Yc8HSYHHTv6vlqeepeeC0peXJWHsXR_oaK_FVbu_ijeHyx1eZTJUNejBz-OokhnSdd6FFL21tMyS0tHye1BMf-ar4-PeqGr9T0ZCWdYq_0Gg-zCqkCyF89tIAbPmNwjWbF8Ld9uhSK8k2_Xo8yc" />
                    <div>
                        <p class="text-xs italic font-medium leading-relaxed opacity-90">"LeadFlow Pro telah
                            meningkatkan konversi tim penjualan kami hingga 40% dalam 3 bulan."</p>
                        <p class="text-[10px] font-bold mt-1 text-primary-fixed">— Andi Pratama, CEO TechFlow</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-white border-t border-surface-container py-10">
        <div
            class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-on-surface-variant text-sm">
            <span>© 2024 LeadFlow Pro. Architectural Data Solutions.</span>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                <a class="hover:text-primary transition-colors" href="#">Support</a>
            </div>
        </div>
    </footer>
</body>

</html>