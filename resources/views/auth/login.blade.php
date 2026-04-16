<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - SPK Kredit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #eef2f7, #dfe6ec);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 420px;
        }

        .back {
            margin-bottom: 15px;
            color: #6b7280;
            font-size: 14px;
            text-decoration: none;
        }

        .card {
            background: #fff;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        h1 {
            font-size: 24px;
            font-weight: 700;
            text-align: center;
            color: #1f2937;
        }

        .subtitle {
            text-align: center;
            color: #6b7280;
            font-size: 14px;
            margin-top: 8px;
            margin-bottom: 25px;
        }

        label {
            font-size: 14px;
            color: #374151;
            margin-bottom: 6px;
            display: block;
        }

        .input-group {
            margin-bottom: 18px;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            font-size: 14px;
        }

        .btn {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(90deg, #2563eb, #1d4ed8);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
            color: #6b7280;
        }

        .footer a {
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="/" class="back">← Kembali ke Beranda</a>

    <div class="card">
        <h1>Selamat Datang!</h1>
        <div class="subtitle">Masuk ke akun SPK Kredit Anda</div>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <div class="input-group">
                <label>Alamat Email</label>
                <input type="email" name="email" placeholder="contoh@email.com" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Minimal 6 karakter" required>
            </div>

            <button type="submit" class="btn">Masuk</button>
        </form>

        <div class="footer">
            Belum punya akun? <a href="/register">Daftar Sekarang</a>
        </div>
    </div>
</div>

</body>
</html>