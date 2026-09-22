<?php
date_default_timezone_set('Asia/Jakarta');

$namaAplikasi = 'Sistem Inventaris Laboratorium';
$waktuServer = date('H:i:s');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($namaAplikasi) ?></title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="app">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <div class="logo-icon">💻</div>

            <div>
                <h2>LAB<span>TECH</span></h2>
                <p>Inventory System</p>
            </div>
        </div>

        <div class="menu-label">
            MENU UTAMA
        </div>

        <nav>

            <a href="#" class="menu active">
                <span>▣</span>
                Dashboard
            </a>

            <a href="#" class="menu">
                <span>▤</span>
                Data Inventaris
            </a>

            <a href="#" class="menu">
                <span>💻</span>
                Perangkat
            </a>

            <a href="#" class="menu">
                <span>↔</span>
                Peminjaman
            </a>

            <a href="#" class="menu">
                <span>↩</span>
                Pengembalian
            </a>

        </nav>

        <div class="menu-label sistem">
            SISTEM
        </div>

        <nav>

            <a href="#" class="menu">
                <span>⚙</span>
                Pengaturan
            </a>

            <a href="#" class="menu">
                <span>?</span>
                Bantuan
            </a>

        </nav>

        <div class="sidebar-bottom">

            <div class="server-status">
                <span class="online-dot"></span>

                <div>
                    <strong>Server Online</strong>
                    <small>All systems operational</small>
                </div>
            </div>

            <p>v1.0.0 • RPL Laboratory</p>

        </div>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <header class="topbar">

            <div>
                <small>LABORATORIUM / DASHBOARD</small>
                <h1>Dashboard</h1>
            </div>

            <div class="user">

                <div class="notification">
                    🔔
                    <span></span>
                </div>

                <div class="avatar">
                    A
                </div>

                <div>
                    <strong>Administrator</strong>
                    <small>Laboratorium</small>
                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <section class="content">

            <!-- WELCOME -->
            <div class="welcome">

                <div class="welcome-text">

                    <div class="system-active">
                        <span></span>
                        SISTEM AKTIF
                    </div>

                    <h2>
                        Selamat Datang di
                        <strong>LabTech</strong>
                    </h2>

                    <p>
                        Kelola seluruh inventaris perangkat
                        laboratorium dengan mudah dan terorganisir.
                    </p>

                    <button>
                        + Tambah Inventaris
                    </button>

                </div>

                <div class="computer">
                    <div class="monitor">
                        <div class="screen">

                            <div class="terminal-line">
                                &gt; system online
                            </div>

                            <div class="terminal-line">
                                &gt; inventory ready
                            </div>

                            <div class="terminal-line">
                                &gt; database connected
                            </div>

                        </div>
                    </div>

                    <div class="stand"></div>
                    <div class="base"></div>
                </div>

            </div>


            <!-- TITLE -->
            <div class="section-heading">

                <div>
                    <h2>Ringkasan Inventaris</h2>
                    <p>Informasi inventaris laboratorium saat ini</p>
                </div>

                <span>● LIVE DATA</span>

            </div>


            <!-- STATISTICS -->
            <div class="stats">

                <div class="stat-card">

                    <div class="stat-icon blue">
                        📦
                    </div>

                    <p>Total Inventaris</p>

                    <h2>128</h2>

                    <small>
                        <b>+8.2%</b> dari bulan lalu
                    </small>

                </div>


                <div class="stat-card">

                    <div class="stat-icon green">
                        ✓
                    </div>

                    <p>Perangkat Aktif</p>

                    <h2>116</h2>

                    <small>
                        <b>90.6%</b> kondisi aktif
                    </small>

                </div>


                <div class="stat-card">

                    <div class="stat-icon orange">
                        ⚠
                    </div>

                    <p>Perlu Perbaikan</p>

                    <h2>12</h2>

                    <small class="warning">
                        9.4% dari total
                    </small>

                </div>


                <div class="stat-card">

                    <div class="stat-icon purple">
                        👥
                    </div>

                    <p>Pengguna Sistem</p>

                    <h2>24</h2>

                    <small>
                        <b>+4</b> pengguna baru
                    </small>

                </div>

            </div>


            <!-- MAIN GRID -->
            <div class="grid">

                <!-- CLOCK -->
                <div class="card clock-card">

                    <div class="card-header">

                        <div>
                            <h3>Waktu Server</h3>
                            <p>Waktu sistem laboratorium</p>
                        </div>

                        <span class="realtime">
                            ● REALTIME
                        </span>

                    </div>

                    <div class="clock-icon">
                        ◷
                    </div>

                    <div
                        class="clock"
                        id="server-time"
                    >
                        <?= htmlspecialchars($waktuServer) ?>
                    </div>

                    <div
                        class="date"
                        id="server-date"
                    >
                        Memuat tanggal...
                    </div>

                    <div class="timezone">
                        GMT+7 • Asia/Jakarta
                    </div>

                    <div class="server-footer">
                        <span>SERVER STATUS</span>

                        <strong>
                            ● ONLINE
                        </strong>
                    </div>

                </div>


                <!-- SYSTEM STATUS -->
                <div class="card">

                    <div class="card-header">

                        <div>
                            <h3>Status Sistem</h3>
                            <p>Kondisi layanan laboratorium</p>
                        </div>

                        <span class="more">•••</span>

                    </div>


                    <div class="system-list">

                        <div class="system-item">

                            <div class="service">

                                <div class="service-icon green-bg">
                                    DB
                                </div>

                                <div>
                                    <strong>Database</strong>
                                    <small>MySQL Server</small>
                                </div>

                            </div>

                            <span class="online">
                                ● Online
                            </span>

                        </div>


                        <div class="system-item">

                            <div class="service">

                                <div class="service-icon blue-bg">
                                    WEB
                                </div>

                                <div>
                                    <strong>Web Server</strong>
                                    <small>Apache Server</small>
                                </div>

                            </div>

                            <span class="online">
                                ● Online
                            </span>

                        </div>


                        <div class="system-item">

                            <div class="service">

                                <div class="service-icon purple-bg">
                                    APP
                                </div>

                                <div>
                                    <strong>Application</strong>
                                    <small>LabTech Service</small>
                                </div>

                            </div>

                            <span class="online">
                                ● Online
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            <!-- BOTTOM GRID -->
            <div class="grid bottom">

                <!-- USAGE -->
                <div class="card">

                    <div class="card-header">

                        <div>
                            <h3>Penggunaan Laboratorium</h3>
                            <p>Statistik penggunaan perangkat</p>
                        </div>

                        <button class="period">
                            Minggu ini ▾
                        </button>

                    </div>


                    <div class="usage-number">
                        <strong>78%</strong>
                        <span>tingkat penggunaan</span>
                    </div>


                    <div class="progress-item">

                        <div>
                            <span>Komputer</span>
                            <b>85%</b>
                        </div>

                        <div class="progress">
                            <span style="width:85%"></span>
                        </div>

                    </div>


                    <div class="progress-item">

                        <div>
                            <span>Proyektor</span>
                            <b>62%</b>
                        </div>

                        <div class="progress">
                            <span style="width:62%"></span>
                        </div>

                    </div>


                    <div class="progress-item">

                        <div>
                            <span>Jaringan</span>
                            <b>91%</b>
                        </div>

                        <div class="progress">
                            <span style="width:91%"></span>
                        </div>

                    </div>

                </div>


                <!-- ACTIVITY -->
                <div class="card">

                    <div class="card-header">

                        <div>
                            <h3>Aktivitas Terbaru</h3>
                            <p>Aktivitas sistem terbaru</p>
                        </div>

                        <span class="more">•••</span>

                    </div>


                    <div class="activity">

                        <div class="activity-item">

                            <div class="activity-icon green-bg">
                                +
                            </div>

                            <div>
                                <strong>Inventaris baru</strong>
                                <p>PC Laboratorium #128 ditambahkan</p>
                                <small>5 menit yang lalu</small>
                            </div>

                        </div>


                        <div class="activity-item">

                            <div class="activity-icon blue-bg">
                                ↔
                            </div>

                            <div>
                                <strong>Peminjaman perangkat</strong>
                                <p>Proyektor LCD dipinjam</p>
                                <small>24 menit yang lalu</small>
                            </div>

                        </div>


                        <div class="activity-item">

                            <div class="activity-icon orange-bg">
                                !
                            </div>

                            <div>
                                <strong>Pemberitahuan</strong>
                                <p>2 perangkat memerlukan pemeriksaan</p>
                                <small>1 jam yang lalu</small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- FOOTER -->
        <footer>

            <span>
                © <?= date('Y') ?> Sistem Inventaris Laboratorium
            </span>

            <span>
                Rekayasa Perangkat Lunak • LabTech
            </span>

        </footer>

    </main>

</div>


<!-- REALTIME CLOCK -->
<script>

function updateClock() {

    const now = new Date();

    const time = new Intl.DateTimeFormat('id-ID', {

        timeZone: 'Asia/Jakarta',

        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',

        hour12: false

    }).format(now);


    const date = new Intl.DateTimeFormat('id-ID', {

        timeZone: 'Asia/Jakarta',

        weekday: 'long',
        day: 'numeric',
        month: 'long',
        year: 'numeric'

    }).format(now);


    document.getElementById('server-time').textContent = time;

    document.getElementById('server-date').textContent = date;

}


updateClock();

setInterval(updateClock, 1000);

</script>

</body>
</html>