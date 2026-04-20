<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SPK Kredit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', 'Segoe UI', sans-serif; }
        body { background-color: #f3f4f8; }

        /* ---- Navbar ---- */
        .nav-active {
            background-color: #2563eb;
            color: #ffffff !important;
            border-radius: 8px;
            padding: 7px 16px;
        }
        .nav-link {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
            color: #6b7280;
            padding: 7px 14px;
            border-radius: 8px;
            transition: background 0.15s, color 0.15s;
            text-decoration: none;
        }
        .nav-link:hover { background-color: #f3f4f6; color: #374151; }

        /* ---- Hero ---- */
        .hero-banner {
            background: linear-gradient(130deg, #1230b8 0%, #1a3fd4 35%, #2554e8 65%, #3b6af8 100%);
        }

        /* ---- Cards ---- */
        .stat-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #f1f2f6;
            padding: 20px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .stat-card:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.07); }

        .icon-box {
            width: 42px; height: 42px;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 18px;
        }
        .icon-blue  { background: #eff2ff; color: #3b5bdb; }
        .icon-green { background: #ecfdf5; color: #059669; }
        .icon-red   { background: #fff1f2; color: #e11d48; }
        .icon-teal  { background: #f0fdfa; color: #0d9488; }
        .icon-purple{ background: #f5f3ff; color: #7c3aed; }

        /* ---- Action Items ---- */
        .action-item {
            display: flex; align-items: center; gap: 16px;
            background: #ffffff;
            border: 1px solid #f1f2f6;
            border-radius: 14px;
            padding: 16px;
            text-decoration: none;
            transition: background 0.15s, box-shadow 0.15s;
            margin-bottom: 10px;
        }
        .action-item:last-child { margin-bottom: 0; }
        .action-item:hover { background: #f8f9ff; box-shadow: 0 4px 12px rgba(59,91,219,0.06); }

        /* ---- Prediksi Terbaru ---- */
        .prediction-card {
            background: #ffffff;
            border: 1px solid #f1f2f6;
            border-radius: 16px;
            overflow: hidden;
        }
        .prediction-row {
            display: flex; align-items: center; gap: 14px;
            padding: 14px 20px;
            border-bottom: 1px solid #f8f9fb;
        }
        .prediction-row:last-child { border-bottom: none; }

        /* ---- Badges ---- */
        .badge-rendah { background: #dcfce7; color: #15803d; font-size: 11px; font-weight: 600; padding: 3px 10px; border-radius: 999px; }
        .badge-tinggi { background: #fee2e2; color: #dc2626; font-size: 11px; font-weight: 600; padding: 3px 10px; border-radius: 999px; }

        /* ---- Info Bar ---- */
        .info-bar {
            background: linear-gradient(90deg, #eff6ff 0%, #e0eaff 100%);
            border: 1px solid #bfdbfe;
            border-radius: 16px;
            display: flex; align-items: center; gap: 16px;
            padding: 18px 24px;
        }

        /* ---- Credit Score SVG ---- */
        .score-ring-bg { stroke: rgba(255,255,255,0.2); }
        .score-ring-fill { stroke: #93c5fd; stroke-linecap: round; }

        /* ---- Avatar ---- */
        .avatar-blue {
            width: 34px; height: 34px;
            background: #2563eb;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: #fff; font-weight: 700; font-size: 13px;
        }

        /* ---- Scrollbar ---- */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-thumb { background: #c7d2fe; border-radius: 4px; }
    </style>
</head>
<body>

{{-- ===================== NAVBAR ===================== --}}
<nav style="background:#fff; border-bottom:1px solid #f1f2f6; position:sticky; top:0; z-index:50;">
    <div style="max-width:1200px; margin:0 auto; padding:10px 28px; display:flex; align-items:center; justify-content:space-between;">

        {{-- Logo --}}
        <div style="display:flex; align-items:center; gap:12px;">
            <div style="width:40px; height:40px; background:#2563eb; border-radius:12px; display:flex; align-items:center; justify-content:center; box-shadow:0 4px 12px rgba(37,99,235,0.25);">
                <i class="fa-solid fa-chart-bar" style="color:#fff; font-size:16px;"></i>
            </div>
            <div>
                <div style="font-weight:700; color:#111827; font-size:15px; line-height:1.2;">SPK Kredit</div>
                <div style="font-size:11px; color:#9ca3af; line-height:1.2;"></div>
            </div>
        </div>

        {{-- Navigation Links --}}
        <div style="display:flex; align-items:center; gap:4px;">
            <a href="{{ route('dashboard') }}" class="nav-active nav-link" style="font-weight:500; font-size:14px;">
                <i class="fa-solid fa-table-cells-large" style="font-size:13px;"></i>
                Dashboard
            </a>
            <a href="{{ route('prediksi') }}" class="nav-link">
                <i class="fa-solid fa-chart-line" style="font-size:13px;"></i>
                Prediksi
            </a>
            <a href="{{ route('riwayat') }}" class="nav-link">
                <i class="fa-regular fa-clock" style="font-size:13px;"></i>
                Riwayat
            </a>
            <a href="{{ route('tentang') }}" class="nav-link">
                <i class="fa-solid fa-circle-info" style="font-size:13px;"></i>
                Tentang
            </a>
        </div>

        {{-- Right: Bell + User --}}
        <div style="display:flex; align-items:center; gap:10px;">
            {{-- Notification Bell --}}
            <button style="width:38px; height:38px; border-radius:50%; border:1px solid #e5e7eb; background:#fff; display:flex; align-items:center; justify-content:center; cursor:pointer; position:relative; transition:background 0.15s;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='#fff'">
                <i class="fa-regular fa-bell" style="font-size:16px; color:#6b7280;"></i>
                <span style="position:absolute; top:8px; right:8px; width:8px; height:8px; background:#ef4444; border-radius:50%; border:1.5px solid #fff;"></span>
            </button>

            {{-- User --}}
            <div style="display:flex; align-items:center; gap:8px; cursor:pointer; padding:5px 10px; border-radius:10px; transition:background 0.15s;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='transparent'">
                <div class="avatar-blue">P</div>
                <span style="font-size:14px; font-weight:500; color:#374151;">Pengguna</span>
                <i class="fa-solid fa-chevron-down" style="font-size:11px; color:#9ca3af;"></i>
            </div>
        </div>
    </div>
</nav>

{{-- ===================== MAIN CONTENT ===================== --}}
<main style="max-width:1200px; margin:0 auto; padding:24px 28px;">

    {{-- ===== HERO BANNER ===== --}}
    <div class="hero-banner" style="border-radius:20px; overflow:hidden; margin-bottom:24px; min-height:165px; position:relative; display:flex; align-items:stretch;">

        {{-- Left: Text --}}
        <div style="flex:1; padding:32px 36px; display:flex; flex-direction:column; justify-content:center; z-index:2; position:relative;">
            <p style="color:rgba(219,234,254,0.9); font-size:13.5px; margin-bottom:6px;">
                &#128075; Selamat datang kembali,
            </p>
            <h1 style="color:#ffffff; font-size:30px; font-weight:800; margin-bottom:10px; letter-spacing:-0.3px;">
                Risky!
            </h1>
            <p style="color:rgba(191,219,254,0.85); font-size:13.5px; line-height:1.65; max-width:480px;">
                Sistem SPK Kredit siap membantu Anda memprediksi risiko kredit dengan akurasi tinggi berbasis Machine Learning.
            </p>
        </div>

        {{-- Right: Decorative Area --}}
        <div style="position:relative; min-width:460px; display:flex; align-items:center; justify-content:flex-end; padding-right:20px; overflow:hidden;">

           

           
                
                
                </div>
            </div>
        </div>
    </div>

    {{-- ===== STAT CARDS ===== --}}
    <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:16px; margin-bottom:28px;">

        {{-- Total Prediksi --}}
        <div class="stat-card">
            <div class="icon-box icon-blue">
                <i class="fa-solid fa-chart-column" style="font-size:17px;"></i>
            </div>
            <div style="font-size:32px; font-weight:800; color:#111827; line-height:1; margin-bottom:6px;">3</div>
            <div style="font-size:13.5px; font-weight:600; color:#4b5563; margin-bottom:3px;">Total Prediksi</div>
            <div style="font-size:12px; color:#9ca3af;">Semua waktu</div>
        </div>

        {{-- Risiko Rendah --}}
        <div class="stat-card">
            <div class="icon-box icon-green">
                <i class="fa-solid fa-circle-check" style="font-size:17px;"></i>
            </div>
            <div style="font-size:32px; font-weight:800; color:#111827; line-height:1; margin-bottom:6px;">2</div>
            <div style="font-size:13.5px; font-weight:600; color:#4b5563; margin-bottom:3px;">Risiko Rendah</div>
            <div style="font-size:12px; color:#9ca3af;">67% dari total</div>
        </div>

        {{-- Risiko Tinggi --}}
        <div class="stat-card">
            <div class="icon-box icon-red">
                <i class="fa-solid fa-triangle-exclamation" style="font-size:17px;"></i>
            </div>
            <div style="font-size:32px; font-weight:800; color:#111827; line-height:1; margin-bottom:6px;">1</div>
            <div style="font-size:13.5px; font-weight:600; color:#4b5563; margin-bottom:3px;">Risiko Tinggi</div>
            <div style="font-size:12px; color:#9ca3af;">33% dari total</div>
        </div>

        {{-- Status Sistem --}}
        <div class="stat-card">
            <div class="icon-box icon-teal">
                <i class="fa-solid fa-heart-pulse" style="font-size:17px;"></i>
            </div>
            <div style="font-size:28px; font-weight:800; color:#111827; line-height:1.1; margin-bottom:6px;">Online</div>
            <div style="font-size:13.5px; font-weight:600; color:#4b5563; margin-bottom:3px;">Status Sistem</div>
            <div style="font-size:12px; color:#9ca3af;">Model siap digunakan</div>
        </div>

    </div>

    {{-- ===== AKSI CEPAT + PREDIKSI TERBARU ===== --}}
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:24px; margin-bottom:24px;">

        {{-- ---- Aksi Cepat ---- --}}
        <div>
            <h2 style="font-size:17px; font-weight:700; color:#111827; margin-bottom:16px;">Aksi Cepat</h2>

            {{-- Mulai Prediksi Baru --}}
            <a href="{{ route('prediksi') }}" class="action-item">
                <div class="icon-box icon-blue" style="margin-bottom:0; flex-shrink:0;">
                    <i class="fa-solid fa-chart-column" style="font-size:16px;"></i>
                </div>
                <div style="flex:1; min-width:0;">
                    <div style="font-size:13.5px; font-weight:600; color:#1f2937; margin-bottom:3px;">Mulai Prediksi Baru</div>
                    <div style="font-size:12px; color:#9ca3af;">Analisis risiko kredit dengan data terbaru</div>
                </div>
                <i class="fa-solid fa-chevron-right" style="font-size:12px; color:#d1d5db;"></i>
            </a>

            {{-- Lihat Riwayat --}}
            <a href="{{ route('riwayat') }}" class="action-item">
                <div class="icon-box icon-purple" style="margin-bottom:0; flex-shrink:0;">
                    <i class="fa-regular fa-clock" style="font-size:16px;"></i>
                </div>
                <div style="flex:1; min-width:0;">
                    <div style="font-size:13.5px; font-weight:600; color:#1f2937; margin-bottom:3px;">Lihat Riwayat</div>
                    <div style="font-size:12px; color:#9ca3af;">Cek semua hasil prediksi sebelumnya</div>
                </div>
                <i class="fa-solid fa-chevron-right" style="font-size:12px; color:#d1d5db;"></i>
            </a>

            {{-- Pelajari Sistem --}}
            <a href="{{ route('tentang') }}" class="action-item">
                <div class="icon-box icon-teal" style="margin-bottom:0; flex-shrink:0;">
                    <i class="fa-solid fa-arrow-trend-up" style="font-size:16px;"></i>
                </div>
                <div style="flex:1; min-width:0;">
                    <div style="font-size:13.5px; font-weight:600; color:#1f2937; margin-bottom:3px;">Pelajari Sistem</div>
                    <div style="font-size:12px; color:#9ca3af;">Pahami cara kerja Decision Tree</div>
                </div>
                <i class="fa-solid fa-chevron-right" style="font-size:12px; color:#d1d5db;"></i>
            </a>
        </div>

        {{-- ---- Prediksi Terbaru ---- --}}
        <div>
            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:16px;">
                <h2 style="font-size:17px; font-weight:700; color:#111827;">Prediksi Terbaru</h2>
                <a href="{{ route('riwayat') }}" style="font-size:13.5px; font-weight:600; color:#2563eb; text-decoration:none; display:flex; align-items:center; gap:4px;">
                    Lihat Semua <i class="fa-solid fa-chevron-right" style="font-size:11px;"></i>
                </a>
            </div>

            <div class="prediction-card">

                {{-- Budi Santoso --}}
                <div class="prediction-row">
                    <div class="icon-box icon-green" style="margin-bottom:0; flex-shrink:0; width:38px; height:38px; border-radius:10px;">
                        <i class="fa-solid fa-arrow-trend-down" style="font-size:14px;"></i>
                    </div>
                    <div style="flex:1; min-width:0;">
                        <div style="font-size:13.5px; font-weight:600; color:#1f2937; margin-bottom:3px;">Budi Santoso</div>
                        <div style="font-size:11.5px; color:#9ca3af;">OWN &middot; PERSONAL &middot; 2026-04-01</div>
                    </div>
                    <div style="text-align:right; flex-shrink:0;">
                        <div><span class="badge-rendah">Risiko Rendah</span></div>
                        <div style="font-size:12px; color:#9ca3af; margin-top:5px;">87.5%</div>
                    </div>
                </div>

                {{-- Siti Rahayu --}}
                <div class="prediction-row">
                    <div class="icon-box icon-red" style="margin-bottom:0; flex-shrink:0; width:38px; height:38px; border-radius:10px;">
                        <i class="fa-solid fa-arrow-trend-up" style="font-size:14px;"></i>
                    </div>
                    <div style="flex:1; min-width:0;">
                        <div style="font-size:13.5px; font-weight:600; color:#1f2937; margin-bottom:3px;">Siti Rahayu</div>
                        <div style="font-size:11.5px; color:#9ca3af;">RENT &middot; VENTURE &middot; 2026-04-02</div>
                    </div>
                    <div style="text-align:right; flex-shrink:0;">
                        <div><span class="badge-tinggi">Risiko Tinggi</span></div>
                        <div style="font-size:12px; color:#9ca3af; margin-top:5px;">91.2%</div>
                    </div>
                </div>

                {{-- Ahmad Fauzi --}}
                <div class="prediction-row">
                    <div class="icon-box icon-green" style="margin-bottom:0; flex-shrink:0; width:38px; height:38px; border-radius:10px;">
                        <i class="fa-solid fa-arrow-trend-down" style="font-size:14px;"></i>
                    </div>
                    <div style="flex:1; min-width:0;">
                        <div style="font-size:13.5px; font-weight:600; color:#1f2937; margin-bottom:3px;">Ahmad Fauzi</div>
                        <div style="font-size:11.5px; color:#9ca3af;">MORTGAGE &middot; HOMEIMPROVEMENT &middot; 2026-04-03</div>
                    </div>
                    <div style="text-align:right; flex-shrink:0;">
                        <div><span class="badge-rendah">Risiko Rendah</span></div>
                        <div style="font-size:12px; color:#9ca3af; margin-top:5px;">78.3%</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ===== INFO BAR ===== --}}
    <div class="info-bar">
        <div style="width:38px; height:38px; background:#dbeafe; border-radius:12px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
            <i class="fa-solid fa-heart-pulse" style="font-size:16px; color:#2563eb;"></i>
        </div>
        <div>
            <div style="font-size:14px; font-weight:700; color:#1e40af; margin-bottom:3px;">
                Sistem Aktif &amp; Berjalan Normal
            </div>
            <div style="font-size:12.5px; color:#3b82f6; line-height:1.5;">
                Model Decision Tree terlatih dari 32.000+ data kredit. Akurasi validasi: 93.2%. Gunakan sistem ini sebagai pendukung keputusan, bukan satu-satunya acuan.
            </div>
        </div>
    </div>

</main>

</body>
</html>
