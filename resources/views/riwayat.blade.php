<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Prediksi - SPK Kredit</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            color: #1a1a2e;
            min-height: 100vh;
        }

        /* ============ NAVBAR ============ */
        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #e8eaed;
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

        .navbar-left {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .navbar-logo {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #3b5bdb, #4c6ef5);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-logo svg {
            width: 22px;
            height: 22px;
            color: #fff;
        }

        .navbar-brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .navbar-brand-title {
            font-size: 15px;
            font-weight: 700;
            color: #1a1a2e;
        }

        .navbar-brand-sub {
            font-size: 11px;
            color: #6b7280;
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
            padding: 8px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            color: #6b7280;
            transition: all 0.2s;
        }

        .navbar-nav a:hover {
            background-color: #f3f4f6;
            color: #1a1a2e;
        }

        .navbar-nav a.active {
            background-color: #eef2ff;
            color: #4c6ef5;
            font-weight: 600;
        }

        .navbar-nav a svg {
            width: 16px;
            height: 16px;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .notif-btn {
            position: relative;
            width: 38px;
            height: 38px;
            background: #f3f4f6;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.2s;
        }

        .notif-btn:hover {
            background: #e5e7eb;
        }

        .notif-btn svg {
            width: 18px;
            height: 18px;
            color: #6b7280;
        }

        .notif-badge {
            position: absolute;
            top: 6px;
            right: 6px;
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            border: 1.5px solid #fff;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .user-menu:hover {
            background: #f3f4f6;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, #4c6ef5, #748ffc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            font-size: 14px;
        }

        .user-name {
            font-size: 14px;
            font-weight: 500;
            color: #1a1a2e;
        }

        .user-menu svg {
            width: 14px;
            height: 14px;
            color: #9ca3af;
        }

        /* ============ MAIN CONTENT ============ */
        .main-content {
            max-width: 1100px;
            margin: 0 auto;
            padding: 36px 24px;
        }

        /* ============ PAGE HEADER ============ */
        .page-header {
            margin-bottom: 28px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 6px;
        }

        .page-subtitle {
            font-size: 14px;
            color: #6b7280;
        }

        /* ============ STAT CARDS ============ */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 22px 24px;
            display: flex;
            align-items: center;
            gap: 16px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.06);
            border: 1px solid #f0f0f0;
        }

        .stat-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .stat-icon.blue {
            background-color: #eef2ff;
        }

        .stat-icon.red {
            background-color: #fff1f2;
        }

        .stat-icon.green {
            background-color: #f0fdf4;
        }

        .stat-icon svg {
            width: 22px;
            height: 22px;
        }

        .stat-icon.blue svg { color: #4c6ef5; }
        .stat-icon.red svg  { color: #ef4444; }
        .stat-icon.green svg { color: #22c55e; }

        .stat-info {}

        .stat-number {
            font-size: 26px;
            font-weight: 700;
            color: #1a1a2e;
            line-height: 1;
            margin-bottom: 4px;
        }

        .stat-label {
            font-size: 13px;
            color: #9ca3af;
        }

        /* ============ SEARCH & FILTER ============ */
        .search-filter-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 20px 24px;
            margin-bottom: 20px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.06);
            border: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .search-wrapper {
            flex: 1;
            min-width: 220px;
            position: relative;
        }

        .search-wrapper svg {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            color: #9ca3af;
            pointer-events: none;
        }

        .search-input {
            width: 100%;
            padding: 10px 14px 10px 40px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            font-size: 14px;
            color: #374151;
            background: #f9fafb;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .search-input::placeholder {
            color: #b0b7c3;
        }

        .search-input:focus {
            border-color: #4c6ef5;
            box-shadow: 0 0 0 3px rgba(76,110,245,0.1);
            background: #fff;
        }

        .filter-buttons {
            display: flex;
            gap: 8px;
            flex-shrink: 0;
        }

        .filter-btn {
            padding: 9px 20px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            border: 1.5px solid #e5e7eb;
            background: #ffffff;
            color: #6b7280;
            transition: all 0.2s;
            white-space: nowrap;
        }

        .filter-btn:hover {
            border-color: #4c6ef5;
            color: #4c6ef5;
        }

        .filter-btn.active {
            background: #1a1a2e;
            color: #ffffff;
            border-color: #1a1a2e;
        }

        /* ============ TABLE ============ */
        .table-card {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 1px 4px rgba(0,0,0,0.06);
            border: 1px solid #f0f0f0;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table thead tr {
            border-bottom: 1px solid #f0f2f5;
        }

        .data-table thead th {
            padding: 14px 20px;
            text-align: left;
            font-size: 11px;
            font-weight: 600;
            color: #9ca3af;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            background: #ffffff;
        }

        .data-table tbody tr {
            border-bottom: 1px solid #f8f9fa;
            transition: background 0.15s;
        }

        .data-table tbody tr:last-child {
            border-bottom: none;
        }

        .data-table tbody tr:hover {
            background-color: #fafbff;
        }

        .data-table tbody td {
            padding: 18px 20px;
            font-size: 14px;
            vertical-align: middle;
        }

        /* Name + Date */
        .td-name {
            font-weight: 600;
            color: #1a1a2e;
            font-size: 14px;
        }

        .td-date {
            font-size: 12px;
            color: #9ca3af;
            margin-top: 3px;
        }

        /* Age + Income */
        .td-age {
            font-weight: 500;
            color: #374151;
        }

        .td-income {
            font-size: 12px;
            color: #9ca3af;
            margin-top: 3px;
        }

        /* Status Badge */
        .badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .badge-owner {
            background: #f1f5f9;
            color: #475569;
        }

        .badge-rent {
            background: #f0f9ff;
            color: #0369a1;
        }

        .badge-cicilan {
            background: #fef3c7;
            color: #92400e;
        }

        /* Tujuan */
        .td-tujuan {
            font-size: 13px;
            color: #374151;
            font-weight: 500;
        }

        /* Hasil Prediksi */
        .prediksi-wrapper {}

        .prediksi-label {
            display: flex;
            align-items: center;
            gap: 5px;
            font-weight: 600;
            font-size: 14px;
        }

        .prediksi-label.rendah {
            color: #16a34a;
        }

        .prediksi-label.tinggi {
            color: #ef4444;
        }

        .prediksi-label svg {
            width: 16px;
            height: 16px;
        }

        .prediksi-conf {
            font-size: 11px;
            color: #9ca3af;
            margin-top: 3px;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .action-btn {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
        }

        .action-btn.view {
            background: #eef2ff;
            color: #4c6ef5;
        }

        .action-btn.view:hover {
            background: #4c6ef5;
            color: #ffffff;
        }

        .action-btn.delete {
            background: #fff1f2;
            color: #ef4444;
        }

        .action-btn.delete:hover {
            background: #ef4444;
            color: #ffffff;
        }

        .action-btn svg {
            width: 15px;
            height: 15px;
        }

        /* Empty State */
        .empty-state {
            padding: 60px 20px;
            text-align: center;
            color: #9ca3af;
        }

        .empty-state svg {
            width: 48px;
            height: 48px;
            margin-bottom: 12px;
            color: #d1d5db;
        }

        .empty-state p {
            font-size: 15px;
        }

        @media (max-width: 768px) {
            .navbar { padding: 0 16px; }
            .navbar-nav { display: none; }
            .stats-grid { grid-template-columns: 1fr; }
            .main-content { padding: 20px 16px; }
            .search-filter-card { flex-direction: column; }
            .search-wrapper { width: 100%; }
        }
    </style>
</head>
<body>

    {{-- ============ NAVBAR ============ --}}
    <nav class="navbar">
        <div class="navbar-left">
            {{-- Brand --}}
            <a href="{{ url('/') }}" class="navbar-brand">
                <div class="navbar-logo">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 20V10M12 20V4M6 20v-6"/>
                    </svg>
                </div>
                <div class="navbar-brand-text">
                    <span class="navbar-brand-title">SPK Kredit</span>
                    <span class="navbar-brand-sub"></span>
                </div>
            </a>

            {{-- Nav Links --}}
            <ul class="navbar-nav">
                <li>
                    <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
                            <rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('/prediksi') }}" class="{{ request()->is('prediksi') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                        </svg>
                        Prediksi
                    </a>
                </li>
                <li>
                    <a href="{{ url('/riwayat') }}" class="{{ request()->is('riwayat') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="12 8 12 12 14 14"/>
                            <path d="M3.05 11a9 9 0 1 0 .5-4.5"/>
                            <polyline points="3 3 3 9 9 9"/>
                        </svg>
                        Riwayat
                    </a>
                </li>
                <li>
                    <a href="{{ url('/tentang') }}" class="{{ request()->is('tentang') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/>
                        </svg>
                        Tentang
                    </a>
                </li>
            </ul>
        </div>

        {{-- Right Section --}}
        <div class="navbar-right">
            <button class="notif-btn" title="Notifikasi">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                </svg>
                <span class="notif-badge"></span>
            </button>

            <div class="user-menu">
                <div class="user-avatar">
                    {{ strtoupper(substr(Auth::user()->name ?? 'P', 0, 1)) }}
                </div>
                <span class="user-name">{{ Auth::user()->name ?? 'Pengguna' }}</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </div>
        </div>
    </nav>

    {{-- ============ MAIN CONTENT ============ --}}
    <main class="main-content">

        {{-- Page Header --}}
        <div class="page-header">
            <h1 class="page-title">Riwayat Prediksi</h1>
            <p class="page-subtitle">Semua hasil prediksi risiko kredit yang telah dilakukan.</p>
        </div>

        {{-- Stat Cards --}}
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="12 8 12 12 14 14"/>
                        <path d="M3.05 11a9 9 0 1 0 .5-4.5"/>
                        <polyline points="3 3 3 9 9 9"/>
                    </svg>
                </div>
                <div class="stat-info">
                    <div class="stat-number">{{ $totalPrediksi ?? 3 }}</div>
                    <div class="stat-label">Total Prediksi</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="12 8 12 12 14 14"/>
                        <path d="M3.05 11a9 9 0 1 0 .5-4.5"/>
                        <polyline points="3 3 3 9 9 9"/>
                    </svg>
                </div>
                <div class="stat-info">
                    <div class="stat-number">{{ $risikoTinggi ?? 1 }}</div>
                    <div class="stat-label">Risiko Tinggi</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="12 8 12 12 14 14"/>
                        <path d="M3.05 11a9 9 0 1 0 .5-4.5"/>
                        <polyline points="3 3 3 9 9 9"/>
                    </svg>
                </div>
                <div class="stat-info">
                    <div class="stat-number">{{ $risikoRendah ?? 2 }}</div>
                    <div class="stat-label">Risiko Rendah</div>
                </div>
            </div>
        </div>

        {{-- Search & Filter --}}
        <div class="search-filter-card">
            <div class="search-wrapper">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
                </svg>
                <input
                    type="text"
                    class="search-input"
                    id="searchInput"
                    placeholder="Cari nama, tujuan, atau status rumah..."
                    value="{{ request('search') }}"
                    oninput="filterTable()"
                />
            </div>

            <div class="filter-buttons">
                <button
                    class="filter-btn {{ !request('filter') || request('filter') === 'semua' ? 'active' : '' }}"
                    onclick="setFilter('semua', this)"
                >Semua</button>
                <button
                    class="filter-btn {{ request('filter') === 'rendah' ? 'active' : '' }}"
                    onclick="setFilter('rendah', this)"
                >Risiko Rendah</button>
                <button
                    class="filter-btn {{ request('filter') === 'tinggi' ? 'active' : '' }}"
                    onclick="setFilter('tinggi', this)"
                >Risiko Tinggi</button>
            </div>
        </div>

        {{-- Data Table --}}
        <div class="table-card">
            <table class="data-table" id="riwayatTable">
                <thead>
                    <tr>
                        <th>NAMA / TANGGAL</th>
                        <th>UMUR / PENDAPATAN</th>
                        <th>STATUS RUMAH</th>
                        <th>TUJUAN PINJAMAN</th>
                        <th>HASIL PREDIKSI</th>
                        <th style="text-align:right;">AKSI</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    @forelse($riwayat ?? [] as $item)
                        @php
                            $isRendah = strtolower($item->hasil_prediksi ?? '') === 'risiko rendah';
                            $conf     = $item->confidence ?? 0;
                        @endphp
                        <tr data-filter="{{ $isRendah ? 'rendah' : 'tinggi' }}">
                            {{-- Nama / Tanggal --}}
                            <td>
                                <div class="td-name">{{ $item->nama ?? '-' }}</div>
                                <div class="td-date">{{ \Carbon\Carbon::parse($item->created_at ?? now())->format('Y-m-d') }}</div>
                            </td>

                            {{-- Umur / Pendapatan --}}
                            <td>
                                <div class="td-age">{{ $item->umur ?? '-' }} thn</div>
                                <div class="td-income">Rp{{ number_format($item->pendapatan ?? 0, 0, ',', '.') }}</div>
                            </td>

                            {{-- Status Rumah --}}
                            <td>
                                @php
                                    $status = strtoupper($item->status_rumah ?? '');
                                    $badgeClass = match(true) {
                                        str_contains($status, 'PEMILIK')  => 'badge-owner',
                                        str_contains($status, 'RENTAL') || str_contains($status, 'KONTRAK') => 'badge-rent',
                                        str_contains($status, 'CICILAN') => 'badge-cicilan',
                                        default => 'badge-owner',
                                    };
                                @endphp
                                <span class="badge {{ $badgeClass }}">{{ $status }}</span>
                            </td>

                            {{-- Tujuan Pinjaman --}}
                            <td>
                                <div class="td-tujuan">{{ strtoupper($item->tujuan_pinjaman ?? '-') }}</div>
                            </td>

                            {{-- Hasil Prediksi --}}
                            <td>
                                <div class="prediksi-wrapper">
                                    @if($isRendah)
                                        <div class="prediksi-label rendah">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                                <polyline points="22 4 12 14.01 9 11.01"/>
                                            </svg>
                                            Risiko Rendah
                                        </div>
                                    @else
                                        <div class="prediksi-label tinggi">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                                                <line x1="12" y1="9" x2="12" y2="13"/>
                                                <line x1="12" y1="17" x2="12.01" y2="17"/>
                                            </svg>
                                            Risiko Tinggi
                                        </div>
                                    @endif
                                    <div class="prediksi-conf">{{ number_format($conf, 1) }}% conf.</div>
                                </div>
                            </td>

                            {{-- Aksi --}}
                            <td>
                                <div class="action-buttons" style="justify-content:flex-end;">
                                    <a href="{{ url('/riwayat/'.$item->id) }}" class="action-btn view" title="Lihat Detail">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                            <circle cx="12" cy="12" r="3"/>
                                        </svg>
                                    </a>
                                    <form action="{{ url('/riwayat/'.$item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn delete" title="Hapus">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="3 6 5 6 21 6"/>
                                                <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                                                <path d="M10 11v6M14 11v6"/>
                                                <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    @empty
                        {{-- Demo Rows (hapus ini jika sudah ada data dari database) --}}
                        <tr data-filter="rendah">
                            <td>
                                <div class="td-name">Budi Santoso</div>
                                <div class="td-date">2026-04-01</div>
                            </td>
                            <td>
                                <div class="td-age">35 thn</div>
                                <div class="td-income">Rp15.000.000</div>
                            </td>
                            <td><span class="badge badge-owner">PEMILIK</span></td>
                            <td><div class="td-tujuan">PERSONAL</div></td>
                            <td>
                                <div class="prediksi-wrapper">
                                    <div class="prediksi-label rendah">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
                                        </svg>
                                        Risiko Rendah
                                    </div>
                                    <div class="prediksi-conf">87.5% conf.</div>
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons" style="justify-content:flex-end;">
                                    <a href="#" class="action-btn view" title="Lihat Detail">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                                        </svg>
                                    </a>
                                    <button class="action-btn delete" title="Hapus">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"/>
                                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                                            <path d="M10 11v6M14 11v6"/>
                                            <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr data-filter="tinggi">
                            <td>
                                <div class="td-name">Siti Rahayu</div>
                                <div class="td-date">2026-04-02</div>
                            </td>
                            <td>
                                <div class="td-age">23 thn</div>
                                <div class="td-income">Rp4.000.000</div>
                            </td>
                            <td><span class="badge badge-rent">RENTAL/KONTRAK</span></td>
                            <td><div class="td-tujuan">PERUSAHAAN BERSAMA</div></td>
                            <td>
                                <div class="prediksi-wrapper">
                                    <div class="prediksi-label tinggi">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                                            <line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/>
                                        </svg>
                                        Risiko Tinggi
                                    </div>
                                    <div class="prediksi-conf">91.2% conf.</div>
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons" style="justify-content:flex-end;">
                                    <a href="#" class="action-btn view" title="Lihat Detail">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                                        </svg>
                                    </a>
                                    <button class="action-btn delete" title="Hapus">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"/>
                                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                                            <path d="M10 11v6M14 11v6"/>
                                            <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr data-filter="rendah">
                            <td>
                                <div class="td-name">Ahmad Fauzi</div>
                                <div class="td-date">2026-04-03</div>
                            </td>
                            <td>
                                <div class="td-age">40 thn</div>
                                <div class="td-income">Rp10.000.000</div>
                            </td>
                            <td><span class="badge badge-cicilan">DALAM CICILAN</span></td>
                            <td><div class="td-tujuan">PERBAIKAN RUMAH/<br>RENOVASI</div></td>
                            <td>
                                <div class="prediksi-wrapper">
                                    <div class="prediksi-label rendah">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
                                        </svg>
                                        Risiko Rendah
                                    </div>
                                    <div class="prediksi-conf">78.3% conf.</div>
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons" style="justify-content:flex-end;">
                                    <a href="#" class="action-btn view" title="Lihat Detail">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                                        </svg>
                                    </a>
                                    <button class="action-btn delete" title="Hapus">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"/>
                                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                                            <path d="M10 11v6M14 11v6"/>
                                            <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </main>

    {{-- ============ JAVASCRIPT ============ --}}
    <script>
        let activeFilter = '{{ request("filter") ?: "semua" }}';

        function setFilter(filter, btn) {
            activeFilter = filter;
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            applyFilter();
        }

        function filterTable() {
            applyFilter();
        }

        function applyFilter() {
            const keyword = document.getElementById('searchInput').value.toLowerCase();
            const rows    = document.querySelectorAll('#tableBody tr');

            rows.forEach(row => {
                const text        = row.innerText.toLowerCase();
                const rowFilter   = row.getAttribute('data-filter');

                const matchSearch = keyword === '' || text.includes(keyword);
                const matchFilter = activeFilter === 'semua' || rowFilter === activeFilter;

                row.style.display = matchSearch && matchFilter ? '' : 'none';
            });
        }
    </script>

</body>
</html>
