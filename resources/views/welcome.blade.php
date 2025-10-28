<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Tiket Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ABE2, #5563DE);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            color: white;
        }
        .card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 40px 50px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        h1 {
            font-weight: 600;
            margin-bottom: 15px;
        }
        p {
            font-size: 1.1rem;
        }
        .btn-custom {
            background: white;
            color: #5563DE;
            border: none;
            font-weight: 500;
            border-radius: 10px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            transform: scale(1.05);
            background: #ffda79;
            color: #333;
        }
        footer {
            margin-top: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1> Sistem Tiket Wisata</h1>
        <p>Pilih destinasi wisata untuk melihat harga tiket:</p>

        <div class="d-grid gap-3 mt-4">
            <a href="/tiket/TumpakSewu/35000" class="btn btn-custom py-3"> Tumpak Sewu (Rp 35.000)</a>
            <a href="/tiket/AirTerjunKabutPelangi/15000" class="btn btn-custom py-3"> Air Terjun Kabut Pelangi (Rp 15.000)</a>
        </div>

        <footer>© 2025 Sistem Tiket Wisata Shey — Laravel Route Demo</footer>
    </div>
</body>
</html>
