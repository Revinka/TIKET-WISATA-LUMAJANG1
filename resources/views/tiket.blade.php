<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Tiket Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #43cea2, #185a9d);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            width: 420px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            background: white;
            text-align: center;
            padding: 40px 30px;
            transition: 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        h3 {
            font-weight: 600;
            color: #185a9d;
            margin-bottom: 20px;
        }
        .tempat {
            font-size: 1.2rem;
            font-weight: 500;
            color: #333;
        }
        .harga {
            color: #28a745;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .btn-custom {
            margin-top: 25px;
            background: #185a9d;
            color: white;
            border-radius: 10px;
            padding: 10px 25px;
            border: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #43cea2;
            color: #fff;
            transform: scale(1.05);
        }
        img {
            width: 100%;
            border-radius: 15px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="card">
        @if ($tempat == 'TumpakSewu')
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/Tumpak_Sewu_Lumajang.jpg" alt="Tumpak Sewu">
        @elseif ($tempat == 'AirTerjunKabutPelangi')
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Air_Terjun_Kabut_Pelangi.jpg" alt="Kabut Pelangi">
        @endif

        <h3>Informasi Tiket Wisata</h3>
        <p class="tempat">Tempat Wisata: <strong>{{ str_replace('_', ' ', $tempat) }}</strong></p>
        <p>Harga Tiket: <span class="harga">Rp {{ number_format($harga, 0, ',', '.') }}</span></p>
        <a href="/" class="btn btn-custom">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
