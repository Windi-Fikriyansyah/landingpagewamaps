<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Syarat & Ketentuan - Wamaps</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
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
    </style>
</head>

<body class="bg-[#f7f9fb] text-[#191c1e] antialiased">
    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl border-b border-gray-100">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-6 h-16">
            <a href="/" class="flex items-center text-xl font-bold tracking-tight text-[#0077B6]">
                <svg class="w-8 h-8 mr-2" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="8" fill="#145efc" />
                    <circle cx="16" cy="16" r="9" stroke="white" stroke-width="2.5" />
                    <circle cx="16" cy="16" r="4.5" stroke="white" stroke-width="2.5" />
                    <circle cx="16" cy="16" r="1.5" fill="white" />
                </svg>
                Wamaps
            </a>
            <a href="{{ route('checkout') }}"
                class="text-sm font-bold text-white bg-[#0077B6] px-4 py-2 rounded-lg hover:bg-[#005c8d] transition-colors">Beli
                Wamaps</a>
        </div>
    </nav>

    <!-- Content -->
    <main class="pt-32 pb-24 max-w-4xl mx-auto px-6">
        <div class="bg-white p-8 md:p-12 rounded-[2rem] shadow-sm border border-gray-100 space-y-8">
            <div class="text-center border-b border-gray-100 pb-8">
                <h1 class="text-3xl md:text-5xl font-black text-[#0077B6] tracking-tighter mb-4">Syarat & Ketentuan</h1>
                <p class="text-gray-500">Pembaruan Terakhir: 10 April 2026</p>
            </div>

            <div class="space-y-6 text-gray-700 leading-relaxed">
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">1. Penerimaan Syarat</h2>
                    <p>Dengan mengakses dan menggunakan sistem layanan Wamaps ("Aplikasi", "Kami"), Anda setuju untuk
                        terikat oleh Syarat dan Ketentuan (Terms of Service) ini. Jika Anda tidak setuju dengan
                        ketentuan yang berlaku, Anda dapat menahan diri untuk menggunakan layanan kami.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">2. Lisensi dan Akses</h2>
                    <p>Wamaps memberikan Anda lisensi terbatas, non-eksklusif, tidak dapat dipindahtangankan untuk
                        mengakses platform sesuai paket Lifetime (sekali bayar) yang Anda beli. Lisensi dilarang keras
                        untuk dijual kembali atau disewakan kepada pihak ketiga tanpa izin resmi.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">3. Penggunaan yang Sah</h2>
                    <p>Anda bertanggung jawab penuh atas segala aktivitas pada platform. Anda setuju untuk menggunakan
                        informasi ekstraksi leads (seperti scraping Google Maps) maupun integrasi pesan WhatsApp secara
                        etis dan sah, dan mematuhi aturan platform pesan lokal maupun regulasi spam/telekomunikasi di
                        negara Anda.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">4. Disclaimer Pemblokiran Nomor</h2>
                    <p>Wamaps memfasilitasi otomasi pengiriman pesan. Namun kami tidak bertanggung jawab atas akun
                        WhatsApp atau Facebook klien yang terblokir atau dibanned akibat pelanggaran ketentuan pihak
                        ketiga. Kami menggunakan sistem "human-like", namun segala risiko tetap ditanggung oleh pengguna
                        sepenuhnya.</p>
                </section>


            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-10">
        <div class="max-w-7xl mx-auto px-6 text-center text-sm text-gray-500">
            © 2026 Wamaps. Semua Hak Dilindungi.
        </div>
    </footer>
</body>

</html>