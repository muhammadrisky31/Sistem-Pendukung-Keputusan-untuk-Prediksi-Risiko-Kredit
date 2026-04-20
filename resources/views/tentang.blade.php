<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - SPK Kredit</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fb;
            color: #1a1a2e;
            font-size: 14px;
        }

        /* ===================== NAVBAR ===================== */
        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #e8eaed;
            padding: 0 32px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .brand-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, #3b5bdb, #4c6ef5);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            font-size: 13px;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
        }

        .brand-text .brand-title {
            font-size: 13px;
            font-weight: 700;
            color: #1a1a2e;
            line-height: 1.2;
        }

        .brand-text .brand-subtitle {
            font-size: 10px;
            color: #8a8fa3;
            line-height: 1.2;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 4px;
            list-style: none;
        }

        .navbar-nav a {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            color: #6b7280;
            transition: all 0.2s;
        }

        .navbar-nav a:hover {
            background-color: #f3f4f6;
            color: #374151;
        }

        .navbar-nav a.active {
            background-color: #eff2ff;
            color: #3b5bdb;
        }

        .navbar-nav a svg {
            width: 15px;
            height: 15px;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn-notif {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: #f3f4f6;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            position: relative;
            transition: background 0.2s;
        }

        .btn-notif:hover {
            background: #e5e7eb;
        }

        .notif-badge {
            position: absolute;
            top: 6px;
            right: 6px;
            width: 7px;
            height: 7px;
            background: #ef4444;
            border-radius: 50%;
            border: 1.5px solid #fff;
        }

        .user-dropdown {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px 12px 6px 6px;
            border-radius: 8px;
            cursor: pointer;
            background: #f3f4f6;
            border: none;
            transition: background 0.2s;
        }

        .user-dropdown:hover {
            background: #e5e7eb;
        }

        .user-avatar {
            width: 28px;
            height: 28px;
            background: linear-gradient(135deg, #4c6ef5, #748ffc);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
        }

        .user-name {
            font-size: 13px;
            font-weight: 500;
            color: #374151;
        }

        .user-dropdown svg {
            width: 14px;
            height: 14px;
            color: #9ca3af;
        }

        /* ===================== MAIN CONTENT ===================== */
        .main-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 32px 24px 60px;
        }

        /* Page Header */
        .page-header {
            margin-bottom: 28px;
        }

        .page-header h1 {
            font-size: 22px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 6px;
        }

        .page-header p {
            font-size: 13px;
            color: #6b7280;
        }

        /* ===================== HERO CARD ===================== */
        .hero-card {
            background: linear-gradient(135deg, #3b5bdb 0%, #4c6ef5 50%, #5c7cfa 100%);
            border-radius: 16px;
            padding: 32px;
            color: #fff;
            margin-bottom: 32px;
            position: relative;
            overflow: hidden;
        }

        .hero-card::before {
            content: '';
            position: absolute;
            top: -60px;
            right: -60px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255,255,255,0.06);
        }

        .hero-card::after {
            content: '';
            position: absolute;
            bottom: -80px;
            right: 80px;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: rgba(255,255,255,0.04);
        }

        .hero-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 16px;
        }

        .hero-badge-icon {
            width: 32px;
            height: 32px;
            background: rgba(255,255,255,0.15);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-badge-icon svg {
            width: 18px;
            height: 18px;
        }

        .hero-badge-text {
            display: flex;
            flex-direction: column;
        }

        .hero-badge-text .label-small {
            font-size: 10px;
            opacity: 0.75;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }

        .hero-badge-text .label-main {
            font-size: 13px;
            font-weight: 600;
            opacity: 0.95;
        }

        .hero-card h2 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .hero-card p {
            font-size: 13px;
            line-height: 1.7;
            opacity: 0.88;
            max-width: 600px;
            margin-bottom: 28px;
        }

        .hero-card p strong {
            font-weight: 700;
            opacity: 1;
        }

        .hero-stats {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .stat-box {
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 10px;
            padding: 12px 20px;
            text-align: center;
            min-width: 95px;
            backdrop-filter: blur(4px);
        }

        .stat-box .stat-value {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.2;
        }

        .stat-box .stat-label {
            font-size: 11px;
            opacity: 0.75;
            margin-top: 3px;
        }

        /* ===================== FAQ SECTION ===================== */
        .section-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 16px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 16px;
        }

        .section-title svg {
            width: 18px;
            height: 18px;
            color: #3b5bdb;
        }

        .faq-container {
            background: #fff;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            overflow: hidden;
            margin-bottom: 28px;
        }

        .faq-item {
            border-bottom: 1px solid #f3f4f6;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-question {
            width: 100%;
            background: none;
            border: none;
            padding: 20px 24px;
            text-align: left;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
            font-weight: 600;
            color: #111827;
            transition: background 0.2s;
        }

        .faq-question:hover {
            background: #f9fafb;
        }

        .faq-question svg {
            width: 16px;
            height: 16px;
            color: #9ca3af;
            flex-shrink: 0;
            transition: transform 0.3s;
        }

        .faq-item.open .faq-question svg {
            transform: rotate(180deg);
        }

        .faq-answer {
            display: none;
            padding: 0 24px 20px;
            font-size: 13px;
            color: #6b7280;
            line-height: 1.7;
        }

        .faq-item.open .faq-answer {
            display: block;
        }

        /* ===================== DEVELOPER CARD ===================== */
        .developer-card {
            background: #fff;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            padding: 24px;
            margin-bottom: 32px;
        }

        .developer-inner {
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }

        .dev-avatar {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #3b5bdb, #4c6ef5);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .dev-info h3 {
            font-size: 15px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 6px;
        }

        .dev-info p {
            font-size: 13px;
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 12px;
        }

        .dev-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .dev-tag {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 12px;
            color: #6b7280;
            background: #f3f4f6;
            padding: 5px 10px;
            border-radius: 6px;
        }

        .dev-tag svg {
            width: 13px;
            height: 13px;
            color: #9ca3af;
        }

        /* ===================== CTA FOOTER ===================== */
        .cta-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%);
            border-radius: 16px;
            padding: 40px 32px;
            text-align: center;
            color: #fff;
        }

        .cta-icon {
            width: 48px;
            height: 48px;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cta-icon svg {
            width: 40px;
            height: 40px;
            opacity: 0.9;
        }

        .cta-section h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .cta-section p {
            font-size: 13px;
            opacity: 0.82;
            max-width: 420px;
            margin: 0 auto 24px;
            line-height: 1.6;
        }

        .btn-cta {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #fff;
            color: #1d4ed8;
            font-size: 13px;
            font-weight: 600;
            padding: 11px 24px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .btn-cta:hover {
            background: #f0f4ff;
            transform: translateY(-1px);
            box-shadow: 0 4px 14px rgba(0,0,0,0.2);
        }

        .btn-cta svg {
            width: 15px;
            height: 15px;
        }
    </style>
</head>
<body>

<!-- ===================== NAVBAR ===================== -->
<nav class="navbar">
    <a href="#" class="navbar-brand">
        <div class="brand-icon">UI</div>
        <div class="brand-text">
            <span class="brand-title">SPK Kredit</span>
            <span class="brand-subtitle">Decision Tree</span>
        </div>
    </a>

    <ul class="navbar-nav">
        <li>
            <a href="{{ route('dashboard') }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('prediksi') }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                Prediksi
            </a>
        </li>
        <li>
            <a href="{{ route('riwayat') }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                Riwayat
            </a>
        </li>
        <li>
            <a href="{{ route('tentang') }}" class="active">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                Tentang
            </a>
        </li>
    </ul>

    <div class="navbar-right">
        <button class="btn-notif">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="17" height="17"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
            <span class="notif-badge"></span>
        </button>

        <button class="user-dropdown">
            <div class="user-avatar">P</div>
            <span class="user-name">Pengguna</span>
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
    </div>
</nav>

<!-- ===================== MAIN CONTENT ===================== -->
<div class="main-content">

    <!-- Page Header -->
    <div class="page-header">
        <h1>Tentang &amp; Panduan Sistem</h1>
        <p>Pelajari cara kerja SPK Kredit dan panduan lengkap penggunaan aplikasi.</p>
    </div>

    <!-- Hero Card -->
    <div class="hero-card">
        <div class="hero-badge">
            <div class="hero-badge-icon">
                <!-- Gear/system icon -->
                <svg fill="none" stroke="white" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
            <div class="hero-badge-text">
                <span class="label-small">Sistem Berbasis</span>
                <span class="label-main">Machine Learning Decision Tree</span>
            </div>
        </div>

        <h2>SPK Prediksi Risiko Kredit</h2>

        <p>
            Sistem Pendukung Keputusan ini menggunakan algoritma <strong>Decision Tree</strong>
            yang dilatih dari data kredit nyata untuk memprediksi kemungkinan gagal
            bayar (default) seorang pemohon kredit dengan akurasi tinggi.
        </p>

        <div class="hero-stats">
            <div class="stat-box">
                <div class="stat-value">93.2%</div>
                <div class="stat-label">Akurasi</div>
            </div>
            <div class="stat-box">
                <div class="stat-value">32K+</div>
                <div class="stat-label">Data Training</div>
            </div>
            <div class="stat-box">
                <div class="stat-value">11</div>
                <div class="stat-label">Fitur Input</div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="section-title">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        Pertanyaan Umum (FAQ)
    </div>

    <div class="faq-container">

        <!-- FAQ Item 1 -->
        <div class="faq-item open">
            <button class="faq-question" onclick="toggleFaq(this)">
                Apa itu Sistem Pendukung Keputusan (SPK)?
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="faq-answer">
                SPK adalah sistem berbasis komputer yang membantu pengambil keputusan dalam memilih alternatif terbaik berdasarkan data dan analisis. SPK tidak menggantikan keputusan manusia, melainkan menjadi alat bantu yang memperkuat proses pengambilan keputusan.
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
                Bagaimana cara kerja Decision Tree?
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="faq-answer">
                Decision Tree bekerja seperti diagram pohon keputusan. Algoritma ini memecah masalah menjadi serangkaian pertanyaan ya/tidak berdasarkan fitur-fitur data. Setiap cabang mewakili sebuah keputusan, dan setiap daun mewakili hasil akhir (klasifikasi).
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
                Seberapa akurat prediksi sistem ini?
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="faq-answer">
                Model telah divalidasi dengan akurasi 93.2% menggunakan teknik cross-validation pada dataset 32.000+ data kredit. Namun, akurasi dapat bervariasi tergantung pada kualitas dan kelengkapan data yang dimasukkan.
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
                Apakah data saya aman?
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="faq-answer">
                Ya, semua data diproses secara lokal dan tidak disimpan di server eksternal. Sistem ini menggunakan enkripsi untuk melindungi data Anda. Namun, hindari memasukkan data sensitif yang tidak diperlukan.
            </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
                Bisakah saya menggunakan hasil prediksi sebagai keputusan final?
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="faq-answer">
                Hasil prediksi sebaiknya digunakan sebagai salah satu bahan pertimbangan, bukan satu-satunya dasar keputusan. Keputusan pemberian kredit harus mempertimbangkan faktor-faktor lain yang tidak tercakup dalam model.
            </div>
        </div>

    </div>

    <!-- Developer Info -->
    <div class="section-title">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
        </svg>
        Info Developer
    </div>

    <div class="developer-card">
        <div class="developer-inner">
            <div class="dev-avatar">D</div>
            <div class="dev-info">
                <h3>Muhammad Risky &amp; Nadyawati</h3>
                <p>Sistem ini dikembangkan sebagai proyek tugas akhir, dengan fokus pada penerapan Machine Learning Decision Tree dalam bidang analisis risiko kredit.</p>
                <div class="dev-tags">
                    <span class="dev-tag">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        Tugas Akhir
                    </span>
                    <span class="dev-tag">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        Machine Learning
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section">
        <div class="cta-icon">
            <svg fill="none" stroke="white" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
        </div>
        <h3>Siap Mulai Prediksi?</h3>
        <p>Anda sudah memahami cara kerjanya. Saatnya mencoba prediksi pertama Anda!</p>
        <a href="{{ route('prediksi') }}" class="btn-cta">
            Mulai Prediksi Sekarang
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
        </a>
    </div>

</div>

<!-- ===================== FAQ JAVASCRIPT ===================== -->
<script>
    function toggleFaq(btn) {
        const item = btn.closest('.faq-item');
        const isOpen = item.classList.contains('open');

        // Close all
        document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));

        // Open clicked if it was closed
        if (!isOpen) {
            item.classList.add('open');
        }
    }
</script>

</body>
</html>
