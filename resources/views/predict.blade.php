<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prediksi Risiko Kredit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #eef2f3, #dfe9f3);
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 15px 40px;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .logo {
            font-weight: bold;
            color: #2c3e50;
        }

        .nav-links a {
            margin: 0 15px;
            text-decoration: none;
            color: #555;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #3498db;
        }

        .active {
            color: #3498db;
            font-weight: bold;
        }

        /* CONTAINER */
        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
        }

        /* FORM GRID */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: 0.3s;
        }

        input:focus, select:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52,152,219,0.3);
        }

        label {
            font-size: 13px;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        /* BUTTON */
        .btn {
            display: block;
            margin: 30px auto 0;
            padding: 12px 35px;
            background: linear-gradient(135deg, #3498db, #6dd5fa);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* RESPONSIVE */
        @media(max-width: 768px){
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">SPK Kredit</div>
    <div class="nav-links">
        <a href="/">Home</a>
        <a href="/predict" class="active">Predict</a>
        <a href="#">History</a>
        <a href="#">About</a>
    </div>
</div>

<div class="container">
    <h2 class="title">Sistem Informasi Prediksi Risiko Kredit</h2>

    <form method="POST" action="#">
        @csrf

        <div class="form-grid">

            <div class="form-group">
                <label>👤 Umur Orang</label>
                <input type="number" name="age">
            </div>

            <div class="form-group">
                <label>💰 Pendapatan (IDR)</label>
                <input type="number" name="income">
            </div>

            <div class="form-group">
                <label>🏠 Kepemilikan Rumah</label>
                <select name="home">
                    <option>Rent</option>
                    <option>Own</option>
                    <option>Mortgage</option>
                </select>
            </div>

            <div class="form-group">
                <label>📅 Lama Kerja (tahun)</label>
                <input type="number" name="work">
            </div>

            <div class="form-group">
                <label>🎯 Tujuan Pinjaman</label>
                <select name="intent">
                    <option>Education</option>
                    <option>Medical</option>
                    <option>Personal</option>
                </select>
            </div>

            <div class="form-group">
                <label>⭐ Grade Pinjaman</label>
                <select name="grade">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>

            <div class="form-group">
                <label>💵 Jumlah Pinjaman</label>
                <input type="number" name="amount">
            </div>

            <div class="form-group">
                <label>📊 Suku Bunga (%)</label>
                <input type="number" step="0.01" name="interest">
            </div>

            <div class="form-group">
                <label>📌 Status Pinjaman</label>
                <select name="status">
                    <option>Current</option>
                    <option>Late</option>
                </select>
            </div>

            <div class="form-group">
                <label>📈 Persentase Pendapatan</label>
                <input type="number" step="0.01" name="percent">
            </div>

            <div class="form-group">
                <label>⚠️ Riwayat Default</label>
                <select name="default">
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>

            <div class="form-group">
                <label>📚 Lama Riwayat Kredit</label>
                <input type="number" name="history">
            </div>

        </div>

        <button class="btn">Prediksi →</button>
    </form>
</div>

</body>
</html>