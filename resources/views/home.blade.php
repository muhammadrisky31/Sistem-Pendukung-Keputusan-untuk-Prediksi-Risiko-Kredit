<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prediksi Risiko Kredit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #eef3f7;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90vh;
            text-align: center;
            flex-direction: column;
        }

        .image {
            max-width: 400px;
        }

        .title {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #2c3e50;
        }

        .subtitle {
            font-size: 14px;
            color: #7f8c8d;
            margin-top: 5px;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Gambar -->
    <img src="{{ asset('images/image1.png') }}" class="image" alt="Credit Illustration">

    <!-- Judul -->
    <div class="title">
        Prediksi Risiko Kredit Berbasis Machine Learning
    </div>

    <!-- Sub Judul -->
    <div class="subtitle">
        Sistem pendukung keputusan untuk menganalisis risiko kredit pelanggan
    </div>

    <!-- Tombol -->
    <a href="/predict" class="btn">
        Mulai Prediksi
    </a>
</div>

</body>
</html>