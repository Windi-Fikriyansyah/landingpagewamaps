<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Kebijakan Privasi - Wamaps</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4 { font-family: 'Manrope', sans-serif; }
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
            <a href="{{ route('checkout') }}" class="text-sm font-bold text-white bg-[#0077B6] px-4 py-2 rounded-lg hover:bg-[#005c8d] transition-colors">Beli Wamaps</a>
        </div>
    </nav>

    <!-- Content -->
    <main class="pt-32 pb-24 max-w-4xl mx-auto px-6">
        <div class="bg-white p-8 md:p-12 rounded-[2rem] shadow-sm border border-gray-100 space-y-8">
            <div class="text-center border-b border-gray-100 pb-8">
                <h1 class="text-3xl md:text-5xl font-black text-[#0077B6] tracking-tighter mb-4">Kebijakan Privasi</h1>
                <p class="text-gray-500">Pembaruan Terakhir: 10 April 2026</p>
            </div>
            
            <div class="space-y-6 text-gray-700 leading-relaxed">
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">1. Pendahuluan</h2>
                    <p>Privasi Anda sangat penting bagi kami. Kebijakan Privasi ini menguraikan bagaimana Wamaps mengumpulkan, menggunakan, menyimpan, dan melindungi informasi pribadi Anda secara etis ketika Anda memakai layanan kami.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">2. Pengumpulan Data</h2>
                    <p>Mencakup nama, alamat email yang Anda berikan pada saat registrasi / checkout pembayaran maupun nomor/akun yang direpresentasikan pada alat otomasi. Termasuk riwayat transaksi yang dijaga transparan dan aman antara platform penyedia pihak ketiga.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">3. Tujuan Penggunaan</h2>
                    <p>Informasi dikumpulkan hanya untuk: aktivasi izin software, tagihan pembayaran, menunjang kebutuhan dukungan Anda ke Support, dan pemberitahuan update server utama platform kami.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">4. Keamanan Informasi</h2>
                    <p>Server kami menggunakan standar keamanan SSL terbaru untuk mengenkripsi aliran data, kata sandi, dan data penagihan. Kami juga menjamin untuk menghindari dan tidak pernah menjual atau menukar informasi pribadi / data target yang ditarik klien kepada agen pemasaran lain di luar persetujuan.</p>
                </section>
                
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">5. Cookies</h2>
                    <p>Layanan kami secara minimalis menaruh "cookie" untuk menyimpan sesi sesi yang aktif dari para Pengguna. Anda dimohon agar tidak menolak fungsi ini di browser agar dashboard bisa menyala secara normal dan responsif.</p>
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
