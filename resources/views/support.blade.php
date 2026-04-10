<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pusat Bantuan - Wamaps</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=block"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fb;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="text-[#191c1e] antialiased">
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
        <div class="bg-white p-8 md:p-12 rounded-[2rem] shadow-sm border border-gray-100 text-center space-y-8">
            <div
                class="w-20 h-20 bg-[#0077B6]/10 text-[#0077B6] mx-auto rounded-3xl flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-4xl">support_agent</span>
            </div>

            <h1 class="text-3xl md:text-5xl font-black text-[#0077B6] tracking-tighter">Pusat Bantuan & Kontak</h1>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto leading-relaxed">Punya pertanyaan seputar produk,
                pembayaran, atau butuh bantuan teknis terkait Wamaps? Tim support kami selalu siap membantu Anda kapan
                saja!</p>

            <div class="pt-8 grid md:grid-cols-2 gap-6 text-left">
                <!-- Kontak Email -->
                <div class="p-8 border border-gray-100 rounded-3xl hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-gray-600">mail</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Email Resmi</h3>
                    <p class="text-gray-500 mb-6 text-sm">Untuk pertanyaan kerjasama, tagihan bisnis, atau keluhan
                        teknis.</p>
                    <a href="mailto:wamaps@wamapss.com"
                        class="font-bold text-[#0077B6] hover:underline">wamaps@wamapss.com</a>
                </div>

                <!-- Kontak WA -->
                <div class="p-8 border border-blue-50 bg-[#0077B6]/5 rounded-3xl hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center mb-4 shadow-sm">
                        <span class="material-symbols-outlined text-[#0077B6]">chat</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-[#0077B6]">Live Chat WhatsApp</h3>
                    <p class="text-gray-600 mb-6 text-sm">Butuh respons sangat cepat di jam kerja? Segera chat tim admin
                        kami.</p>
                    <a href="https://wa.me/6289678386070"
                        class="inline-flex items-center gap-2 font-bold text-white bg-[#0077B6] px-5 py-2.5 rounded-xl hover:bg-[#005c8d] transition-all focus:scale-95 text-sm">
                        Hubungi via WhatsApp
                    </a>
                </div>
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