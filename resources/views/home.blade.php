<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prediksi Risiko Kredit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #eef2f3, #dfe9f3);
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 15px 50px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar h2 {
            margin: 0;
            color: #2c3e50;
        }

        .nav-links a {
            margin-left: 20px;
            text-decoration: none;
            color: #2c3e50;
            font-weight: 500;
        }

        /* HERO */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px;
        }

        .hero-text {
            max-width: 50%;
        }

        .hero-text h1 {
            font-size: 32px;
            color: #2c3e50;
        }

        .hero-text p {
            color: #555;
            margin: 15px 0;
        }

        .btn {
            padding: 12px 25px;
            background: #3498db;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .btn:hover {
            background: #2980b9;
        }

        .hero img {
            width: 350px;
        }

        /* FITUR */
        .features {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 40px;
        }

        .card {
            background: white;
            padding: 20px;
            width: 250px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .card h3 {
            margin-bottom: 10px;
        }

    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <h2>SPK Kredit</h2>
    <div class="nav-links">
        <a href="/">Home</a>
        <a href="/predict" class="active">Predict</a>
        <a href="#">History</a>
        <a href="#">About</a>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <div class="hero-text">
        <h1>Prediksi Risiko Kredit dengan Machine Learning</h1>
        <p>Sistem ini membantu menganalisis kelayakan kredit pelanggan secara cepat dan akurat menggunakan teknologi AI.</p>
        <a href="/predict" class="btn">Mulai Prediksi</a>
    </div>

    <img src="{{ asset('images/image1.png') }}" alt="illustration">
</div>

<!-- FITUR -->
<div class="features">
    <div class="card">
        <h3>⚡ Cepat</h3>
        <p>Proses prediksi hanya dalam hitungan detik.</p>
    </div>

    <div class="card">
        <h3>📊 Akurat</h3>
        <p>Didukung model machine learning terpercaya.</p>
    </div>

    <div class="card">
        <h3>💡 Mudah</h3>
        <p>Interface sederhana dan user-friendly.</p>
    </div>
</div>

</body>
</html>