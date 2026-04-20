<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediksi - SPK Kredit</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f8;
            min-height: 100vh;
        }

        /* ===================== NAVBAR ===================== */
        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            padding: 0 40px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 1px 4px rgba(0,0,0,0.06);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #3b5bdb, #4dabf7);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-icon svg {
            width: 22px;
            height: 22px;
            color: #fff;
        }

        .brand-text .brand-title {
            font-size: 15px;
            font-weight: 700;
            color: #1a1a2e;
            line-height: 1.2;
        }

        .brand-text .brand-subtitle {
            font-size: 11px;
            color: #6b7280;
            line-height: 1.2;
        }

        .navbar-menu {
            display: flex;
            align-items: center;
            gap: 4px;
            list-style: none;
        }

        .navbar-menu a {
            display: flex;
            align-items: center;
            gap: 7px;
            padding: 8px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            color: #4b5563;
            transition: all 0.2s;
        }

        .navbar-menu a:hover {
            background-color: #f3f4f6;
            color: #1a1a2e;
        }

        .navbar-menu a.active {
            background-color: #eff2ff;
            color: #3b5bdb;
            font-weight: 600;
        }

        .navbar-menu a svg {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn-notif {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: none;
            background-color: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #4b5563;
            transition: background 0.2s;
            position: relative;
        }

        .btn-notif:hover {
            background-color: #e5e7eb;
        }

        .btn-notif svg {
            width: 18px;
            height: 18px;
        }

        .notif-dot {
            position: absolute;
            top: 7px;
            right: 8px;
            width: 7px;
            height: 7px;
            background: #ef4444;
            border-radius: 50%;
            border: 2px solid #fff;
        }

        .user-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .user-btn:hover {
            background-color: #f3f4f6;
        }

        .user-avatar {
            width: 34px;
            height: 34px;
            background: linear-gradient(135deg, #7950f2, #9c82f5);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 13px;
            font-weight: 700;
        }

        .user-name {
            font-size: 14px;
            font-weight: 500;
            color: #374151;
        }

        .user-btn svg {
            width: 14px;
            height: 14px;
            color: #9ca3af;
        }

        /* ===================== MAIN CONTENT ===================== */
        .main-content {
            padding: 40px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* ===================== CARD ===================== */
        .predict-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1.5px solid #cdd9f5;
            box-shadow: 0 4px 20px rgba(59, 91, 219, 0.07);
            overflow: hidden;
        }

        .card-header {
            padding: 36px 40px 28px;
            border-bottom: 1px solid #e9ecef;
            text-align: center;
        }

        .card-title {
            font-size: 22px;
            font-weight: 800;
            color: #1a1a2e;
            line-height: 1.45;
            max-width: 600px;
            margin: 0 auto;
        }

        .card-body {
            padding: 36px 40px 40px;
        }

        /* ===================== FORM GRID ===================== */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px 28px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-label {
            font-size: 13.5px;
            font-weight: 600;
            color: #374151;
        }

        .form-input,
        .form-select {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            color: #111827;
            background-color: #ffffff;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            appearance: none;
            -webkit-appearance: none;
        }

        .form-input::placeholder {
            color: #9ca3af;
        }

        .form-input:focus,
        .form-select:focus {
            border-color: #3b5bdb;
            box-shadow: 0 0 0 3px rgba(59, 91, 219, 0.12);
        }

        .select-wrapper {
            position: relative;
        }

        .select-wrapper .form-select {
            cursor: pointer;
            padding-right: 38px;
            color: #9ca3af;
        }

        .select-wrapper .form-select:not([value=""]) {
            color: #111827;
        }

        .select-icon {
            position: absolute;
            right: 13px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #9ca3af;
        }

        .select-icon svg {
            width: 16px;
            height: 16px;
        }

        /* ===================== BUTTON ===================== */
        .btn-row {
            margin-top: 32px;
            display: flex;
            justify-content: center;
        }

        .btn-predict {
            background-color: #3b5bdb;
            color: #ffffff;
            border: none;
            padding: 13px 40px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background-color 0.2s, box-shadow 0.2s, transform 0.1s;
            letter-spacing: 0.3px;
        }

        .btn-predict:hover {
            background-color: #3451c7;
            box-shadow: 0 4px 16px rgba(59, 91, 219, 0.35);
            transform: translateY(-1px);
        }

        .btn-predict:active {
            transform: translateY(0);
        }

        .btn-predict svg {
            width: 17px;
            height: 17px;
        }

        /* ===================== RESULT AREA ===================== */
        .result-area {
            margin-top: 24px;
            padding: 20px 24px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            text-align: center;
            display: none;
        }

        .result-area.success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1.5px solid #6ee7b7;
        }

        .result-area.danger {
            background-color: #fee2e2;
            color: #7f1d1d;
            border: 1.5px solid #fca5a5;
        }

        /* ===================== ALERT / VALIDATION ===================== */
        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-danger {
            background-color: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fca5a5;
        }

        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #6ee7b7;
        }

        /* ===================== RESPONSIVE ===================== */
        @media (max-width: 1024px) {
            .main-content {
                padding: 30px 30px;
            }

            .form-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 0 18px;
            }

            .navbar-menu {
                display: none;
            }

            .main-content {
                padding: 20px 16px;
            }

            .card-header {
                padding: 24px 20px 20px;
            }

            .card-body {
                padding: 20px 20px 28px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .card-title {
                font-size: 17px;
            }
        }
    </style>
</head>
<body>

    <!-- ==================== NAVBAR ==================== -->
    <nav class="navbar">

        <!-- Brand -->
        <a href="{{ url('/dashboard') }}" class="navbar-brand">
            <div class="brand-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="10"/>
                    <line x1="12" y1="20" x2="12" y2="4"/>
                    <line x1="6"  y1="20" x2="6"  y2="14"/>
                </svg>
            </div>
            <div class="brand-text">
                <div class="brand-title">SPK Kredit</div>
                <div class="brand-subtitle"></div>
            </div>
        </a>

        <!-- Menu -->
        <ul class="navbar-menu">
            <li>
                <a href="{{ url('/dashboard') }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
                        <rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('/predict') }}" class="active">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                    Prediksi
                </a>
            </li>
            <li>
                <a href="{{ url('/riwayat') }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                    Riwayat
                </a>
            </li>
            <li>
                <a href="{{ url('/tentang') }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                    Tentang
                </a>
            </li>
        </ul>

        <!-- Right side -->
        <div class="navbar-right">
            <!-- Notifikasi -->
            <button class="btn-notif" title="Notifikasi">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                </svg>
                <span class="notif-dot"></span>
            </button>

            <!-- User -->
            <button class="user-btn">
                <div class="user-avatar">P</div>
                <span class="user-name">Pengguna</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
        </div>

    </nav>

    <!-- ==================== MAIN CONTENT ==================== -->
    <main class="main-content">

        <!-- Predict Card -->
        <div class="predict-card">

            <!-- Header -->
            <div class="card-header">
                <h1 class="card-title">
                    Sistem Informasi Prediksi Risiko Kredit Keuangan Berbasis<br>Web Machine Learning
                </h1>
            </div>

            <!-- Body / Form -->
            <div class="card-body">

                {{-- Flash Messages --}}
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="margin:0; padding-left:18px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('/predict') }}" method="POST">
                    @csrf

                    <div class="form-grid">

                        <!-- 1. Umur Orang -->
                        <div class="form-group">
                            <label class="form-label" for="umur">👤 Umur Orang:</label>
                            <input
                                type="number"
                                id="umur"
                                name="umur"
                                class="form-input"
                                placeholder="Contoh: 30"
                                value="{{ old('umur') }}"
                                min="17"
                                max="100"
                                step="1"
                                class="form-input"
                            >
                        </div>

                        <!-- 2. Pendapatan Orang (IDR) -->
                        <div class="form-group">
                            <label class="form-label" for="pendapatan">💰 Pendapatan (IDR):</label>
                            <input
                                type="number"
                                id="pendapatan"
                                name="pendapatan"
                                class="form-input"
                                placeholder="Contoh: 5.000.000"
                                value="{{ old('pendapatan') }}"
                                min="0"
                                step="1"
                            >
                        </div>

                        <!-- 3. Kepemilikan Rumah -->
                        <div class="form-group">
                            <label class="form-label" for="kepemilikan_rumah">🏠 Kepemilikan Rumah:</label>
                            <div class="select-wrapper">
                                <select id="kepemilikan_rumah" name="kepemilikan_rumah" class="form-select">
                                    <option value="" disabled {{ old('kepemilikan_rumah') ? '' : 'selected' }}></option>
                                    <option value="RENT"     {{ old('kepemilikan_rumah') == 'RENT'     ? 'selected' : '' }}>Sewa (RENT)</option>
                                    <option value="OWN"      {{ old('kepemilikan_rumah') == 'OWN'      ? 'selected' : '' }}>Milik Sendiri (OWN)</option>
                                    <option value="MORTGAGE" {{ old('kepemilikan_rumah') == 'MORTGAGE' ? 'selected' : '' }}>KPR (MORTGAGE)</option>
                                    <option value="OTHER"    {{ old('kepemilikan_rumah') == 'OTHER'    ? 'selected' : '' }}>Lainnya (OTHER)</option>
                                </select>
                                <span class="select-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"/>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <!-- 4. Lama Kerja (tahun) -->
                        <div class="form-group">
                            <label class="form-label" for="lama_kerja">📅 Lama Kerja (tahun):</label>
                            <input
                                type="number"
                                id="lama_kerja"
                                name="lama_kerja"
                                class="form-input"
                                placeholder="Contoh: 5"
                                value="{{ old('lama_kerja') }}"
                                min="0"
                                step="1"
                                class="form-input"
                                oninput="
                                    let umur = document.getElementById('umur').value;
                                    let maxKerja = umur - 17;
                                    this.max = maxKerja;
                                    this.setCustomValidity(
                                    this.value > maxKerja 
                                    ? 'Lama kerja tidak boleh lebih batas maksimal umur' 
                                    : ''
                                );
                              "
                            >
                        </div>

                        <!-- 5. Tujuan Peminjaman -->
                        <div class="form-group">
                            <label class="form-label" for="tujuan_pinjaman">🎯 Tujuan Pinjaman:</label>
                            <div class="select-wrapper">
                                <select id="tujuan_pinjaman" name="tujuan_pinjaman" class="form-select">
                                    <option value="" disabled {{ old('tujuan_pinjaman') ? '' : 'selected' }}></option>
                                    <option value="education"       {{ old('tujuan_pinjaman') == 'education'       ? 'selected' : '' }}>Pendidikan</option>
                                    <option value="medical"         {{ old('tujuan_pinjaman') == 'medical'         ? 'selected' : '' }}>Medis / Kesehatan</option>
                                    <option value="venture"         {{ old('tujuan_pinjaman') == 'venture'         ? 'selected' : '' }}>Usaha / Bisnis</option>
                                    <option value="personal"        {{ old('tujuan_pinjaman') == 'personal'        ? 'selected' : '' }}>Keperluan Pribadi</option>
                                    <option value="homeimprovement" {{ old('tujuan_pinjaman') == 'homeimprovement' ? 'selected' : '' }}>Renovasi Rumah</option>
                                    <option value="debtconsolidation" {{ old('tujuan_pinjaman') == 'debtconsolidation' ? 'selected' : '' }}>Konsolidasi Utang</option>
                                </select>
                                <span class="select-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"/>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <!-- 6. Grade Pinjaman -->
                        <div class="form-group">
                            <label class="form-label" for="grade_pinjaman">⭐ Grade Pinjaman:</label>
                            <div class="select-wrapper">
                                <select id="grade_pinjaman" name="grade_pinjaman" class="form-select">
                                    <option value="" disabled {{ old('grade_pinjaman') ? '' : 'selected' }}></option>
                                    <option value="A" {{ old('grade_pinjaman') == 'A' ? 'selected' : '' }}>A</option>
                                    <option value="B" {{ old('grade_pinjaman') == 'B' ? 'selected' : '' }}>B</option>
                                    <option value="C" {{ old('grade_pinjaman') == 'C' ? 'selected' : '' }}>C</option>
                                    <option value="D" {{ old('grade_pinjaman') == 'D' ? 'selected' : '' }}>D</option>
                                    <option value="E" {{ old('grade_pinjaman') == 'E' ? 'selected' : '' }}>E</option>
                                    <option value="F" {{ old('grade_pinjaman') == 'F' ? 'selected' : '' }}>F</option>
                                    <option value="G" {{ old('grade_pinjaman') == 'G' ? 'selected' : '' }}>G</option>
                                </select>
                                <span class="select-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"/>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <!-- 7. Jumlah Pinjaman (IDR) -->
                        <div class="form-group">
                            <label class="form-label" for="jumlah_pinjaman">💵 Jumlah Pinjaman (IDR):</label>
                            <input
                                type="number"
                                id="jumlah_pinjaman"
                                name="jumlah_pinjaman"
                                class="form-input"
                                placeholder="Contoh: 5.000.000"
                                value="{{ old('jumlah_pinjaman') }}"
                                min="0"
                                step="1"
                            >
                        </div>

                        <!-- 8. Suku Bunga Pinjaman (%) -->
                        <div class="form-group">
                            <label class="form-label" for="suku_bunga">📊 Suku Bunga (%):</label>
                            <input
                                type="number"
                                id="suku_bunga"
                                name="suku_bunga"
                                class="form-input"
                                placeholder="Contoh: 13.75"
                                value="{{ old('suku_bunga') }}"
                                min="0"
                                max="100"
                                step="0.01"
                            >
                        </div>

                        <!-- 9. Status Pinjaman (saat ini) -->
                        <div class="form-group">
                            <label class="form-label" for="status_pinjaman">📌 Status Pinjaman:</label>
                            <div class="select-wrapper">
                                <select id="status_pinjaman" name="status_pinjaman" class="form-select">
                                    <option value="" disabled {{ old('status_pinjaman') ? '' : 'selected' }}></option>
                                    <option value="Fully Paid"   {{ old('status_pinjaman') == 'Fully Paid'   ? 'selected' : '' }}>Lunas (Fully Paid)</option>
                                    <option value="Current"      {{ old('status_pinjaman') == 'Current'      ? 'selected' : '' }}>Aktif (Current)</option>
                                    <option value="Charged Off"  {{ old('status_pinjaman') == 'Charged Off'  ? 'selected' : '' }}>Macet (Charged Off)</option>
                                    <option value="Late"         {{ old('status_pinjaman') == 'Late'         ? 'selected' : '' }}>Terlambat (Late)</option>
                                    <option value="In Grace Period" {{ old('status_pinjaman') == 'In Grace Period' ? 'selected' : '' }}>Masa Tenggang</option>
                                </select>
                                <span class="select-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"/>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <!-- 10. Persentase Pinjaman dari Pendapatan -->
                        <div class="form-group">
                            <label class="form-label" for="persen_pinjaman">📈 Persentase Pendapatan:</label>
                            <input
                                type="number"
                                id="persen_pinjaman"
                                name="persen_pinjaman"
                                class="form-input"
                                placeholder="Contoh: 0.5"
                                value="{{ old('persen_pinjaman') }}"
                                min="0"
                                max="1"
                                step="0.01"
                            >
                        </div>

                        <!-- 11. Default di Catatan Kredit (riwayat) -->
                        <div class="form-group">
                            <label class="form-label" for="default_kredit">⚠️ Riwayat Default:</label>
                            <div class="select-wrapper">
                                <select id="default_kredit" name="default_kredit" class="form-select">
                                    <option value="" disabled {{ old('default_kredit') ? '' : 'selected' }}></option>
                                    <option value="0" {{ old('default_kredit') === '0' ? 'selected' : '' }}>Tidak (0)</option>
                                    <option value="1" {{ old('default_kredit') === '1' ? 'selected' : '' }}>Ya (1)</option>
                                </select>
                                <span class="select-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"/>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <!-- 12. Lama Catatan Kredit (tahun) -->
                        <div class="form-group">
                            <label class="form-label" for="lama_kredit">📚 Lama Riwayat Kredit:</label>
                            <input
                                type="number"
                                id="lama_kredit"
                                name="lama_kredit"
                                class="form-input"
                                placeholder="Contoh: 3"
                                value="{{ old('lama_kredit') }}"
                                min="0"
                                step="1"
                            >
                        </div>

                    </div><!-- /form-grid -->

                    <!-- Button Prediksi -->
                    <div class="btn-row">
                        <button type="submit" class="btn-predict">
                            Prediksi
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </button>
                    </div>

                    {{-- Hasil Prediksi (ditampilkan setelah submit) --}}
                    @if (isset($hasil))
                        <div class="result-area {{ $hasil === 'Layak' ? 'success' : 'danger' }}" style="display:block;">
                            @if ($hasil === 'Layak')
                                ✅ Hasil Prediksi: <strong>LAYAK</strong> — Pemohon dinyatakan layak mendapatkan kredit.
                            @else
                                ❌ Hasil Prediksi: <strong>TIDAK LAYAK</strong> — Pemohon dinyatakan tidak layak mendapatkan kredit.
                            @endif
                        </div>
                    @endif

                </form>

            </div><!-- /card-body -->

        </div><!-- /predict-card -->

    </main>

</body>
</html>