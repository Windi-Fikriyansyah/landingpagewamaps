<!DOCTYPE html>
<html>
<head>
    <title>Notifikasi Penjualan Baru - Wamaps</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #f0f0f0; border-radius: 10px; background: #fff; }
        .header { background: #0077B6; color: #fff; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table th, table td { text-align: left; padding: 12px; border-bottom: 1px solid #eee; }
        .footer { margin-top: 30px; font-size: 12px; color: #888; text-align: center; }
    </style>
</head>
<body style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <div class="header">
            <h2>💰 Penjualan Baru Berhasil!</h2>
        </div>
        <div class="content">
            <p>Halo Admin,</p>
            <p>Kabar baik! Ada transaksi baru yang telah berhasil dibayar melalui WijayaPay.</p>
            
            <table>
                <tr>
                    <th>Ref ID</th>
                    <td>{{ $merchant_ref }} @if($status === 'paid') <span style="color: green; font-weight: bold;">[LUNAS]</span> @endif</td>
                </tr>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>{{ $customer_name }}</td>
                </tr>
                <tr>
                    <th>Email Pembeli</th>
                    <td>{{ $customer_email }}</td>
                </tr>
                <tr>
                    <th>Nominal</th>
                    <td>Rp {{ number_format($amount, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Metode</th>
                    <td>{{ $method }}</td>
                </tr>
                <tr>
                    <th>Waktu</th>
                    <td>{{ $paid_at }}</td>
                </tr>
            </table>

            <p style="margin-top: 30px;">Silakan cek dashboard admin atau database untuk detail lebih lanjut.</p>
        </div>
        <div class="footer">
            Sistem Notifikasi Wamaps &bull; 2026
        </div>
    </div>
</body>
</html>
