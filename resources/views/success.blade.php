<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil - Wamaps</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Manrope:wght@800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }

        .success-card {
            animation: slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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
        fbq('track', 'Purchase', { value: {{ $transaction->amount ?? 500 }}, currency: 'IDR' });
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2691160627922371&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body class="flex items-center justify-center min-h-screen p-4 overflow-hidden">
    <div class="max-w-md w-full success-card">
        <div
            class="bg-white rounded-[2.5rem] p-10 shadow-[0_20px_50px_rgba(0,119,182,0.1)] border border-blue-50 text-center relative overflow-hidden">
            <!-- Decorative circle -->
            <div class="absolute -top-12 -right-12 w-32 h-32 bg-blue-50 rounded-full opacity-50"></div>

            <!-- Success Icon -->
            <div
                class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-8 relative z-10">
                <span class="material-symbols-outlined text-5xl text-green-600">check_circle</span>
            </div>

            <h1 class="text-3xl font-extrabold text-slate-900 mb-4 tracking-tight">Pembayaran Lunas!</h1>
            <p class="text-slate-500 mb-10 leading-relaxed">Selamat! Akses <strong>Wamaps Lifetime Access</strong> Anda
                telah diaktifkan secara otomatis.</p>

            <!-- Order Details -->
            <div class="bg-slate-50 rounded-3xl p-6 mb-10 text-left border border-slate-100">
                <div class="flex justify-between items-center mb-4 pb-4 border-b border-slate-200">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Order ID</span>
                    <span class="text-sm font-bold text-slate-700">#{{ $transaction->merchant_ref }}</span>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Paket</span>
                    <span class="text-sm font-bold text-slate-700">Lifetime Pro Access</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Status</span>
                    <span
                        class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-black uppercase rounded-full">Berhasil</span>
                </div>
            </div>

            <p class="text-sm text-slate-600 mb-6 flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-blue-500 text-lg">mail</span>
                Cek email untuk detail login akun Anda.
            </p>

            <a href="{{ url('/login') }}"
                class="w-full py-4 px-8 bg-blue-600 text-white font-extrabold rounded-2xl hover:bg-blue-700 active:scale-[0.98] transition-all flex items-center justify-center gap-3 shadow-lg shadow-blue-200 group">
                Mulai Gunakan Wamaps
                <span
                    class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>

            <p class="mt-8 text-xs text-slate-400 font-medium">Halaman ini akan menutup otomatis dalam <span
                    id="timer">60</span> detik</p>
        </div>
    </div>

    <script>
        // Trigger Confetti
        const duration = 3 * 1000;
        const animationEnd = Date.now() + duration;
        const defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

        function randomInRange(min, max) {
            return Math.random() * (max - min) + min;
        }

        const interval = setInterval(function () {
            const timeLeft = animationEnd - Date.now();

            if (timeLeft <= 0) {
                return clearInterval(interval);
            }

            const particleCount = 50 * (timeLeft / duration);
            confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } }));
            confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } }));
        }, 250);

        // Simple Timer
        let time = 60;
        const timerEl = document.getElementById('timer');
        setInterval(() => {
            if (time > 0) {
                time--;
                timerEl.textContent = time;
            }
        }, 1000);
    </script>
</body>

</html>