<!DOCTYPE html>
<html>

<head>
    <title>Akses Akun Wamaps</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #eee;
            border-radius: 10px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: #0077B6;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #888;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 style="color: #0077B6;">Selamat Bergabung!</h1>
        </div>
        <p>Halo <strong>{{ $name }}</strong>,</p>
        <p>Terima kasih telah berlangganan <strong>Wamaps Lifetime Deal</strong>. Akun Anda telah berhasil diaktifkan
            dan siap digunakan.</p>

        <div style="background: #f9f9f9; padding: 20px; border-radius: 8px; margin: 20px 0;">
            <p style="margin: 0;"><strong>Detail Login Anda:</strong></p>
            <p style="margin: 5px 0 0;">Email: {{ $email }}</p>
            <p style="margin: 5px 0 0;">Password: <code>{{ $password }}</code></p>
        </div>

        <p>Silakan login melalui tombol di bawah ini:</p>
        <p style="text-align: center;">
            <a href="{{ url('/login') }}" class="btn">Login ke Dashboard</a>
        </p>

        <p>Setelah login, kami sangat menyarankan Anda untuk segera merubah password demi keamanan akun.</p>

        <p>Terima kasih,<br>Tim Wamaps</p>

        <div class="footer">
            &copy; 2026 Wamaps. Semua Hak Dilindungi.
        </div>
    </div>
</body>

</html>