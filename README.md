<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 (free icons) for optional enhancements -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>SIG - Sistem Informasi Geografis</title>
    <style>
        /* custom smooth shadow & navbar brand refinement */
        .navbar {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 0.75rem 1rem;
        }
        .navbar-brand {
            font-weight: 600;
            letter-spacing: -0.3px;
            font-size: 1.5rem;
        }
        .nav-link {
            font-weight: 500;
            margin: 0 0.2rem;
            transition: color 0.2s ease;
        }
        .nav-link:hover {
            color: #0a58ca !important;
        }
        .btn-outline-success {
            border-radius: 40px;
            padding: 0.375rem 1.2rem;
        }
        .search-input {
            border-radius: 40px;
            padding-left: 1rem;
        }
        /* make active link more visible */
        .nav-link.active {
            color: #0d6efd !important;
            font-weight: 600;
            border-bottom: 2px solid #0d6efd;
        }
        /* hero section placeholder to demonstrate complete page style */
        .hero-section {
            background: linear-gradient(135deg, #f8f9fc 0%, #e9ecef 100%);
            border-radius: 1.5rem;
            padding: 3rem 2rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 20px rgba(0,0,0,0.02);
        }
        .card-feature {
            transition: transform 0.2s;
            border-radius: 1rem;
            border: none;
            box-shadow: 0 6px 14px rgba(0,0,0,0.03);
        }
        .card-feature:hover {
            transform: translateY(-5px);
        }
        footer {
            margin-top: 3rem;
            background: #f1f3f5;
            border-radius: 1rem;
            padding: 1.2rem;
            text-align: center;
            font-size: 0.85rem;
            color: #495057;
        }
        @media (max-width: 991px) {
            .navbar-collapse {
                margin-top: 0.8rem;
                padding-bottom: 0.5rem;
            }
            .d-flex {
                margin-top: 0.8rem;
                width: 100%;
            }
            .search-input {
                flex: 1;
            }
        }
    </style>
</head>
<body>

    <!-- NAVBAR with proper Bootstrap 5 structure + brand -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <!-- brand / logo -->
            <a class="navbar-brand text-primary" href="#">
                <i class="fas fa-map-marked-alt me-2"></i>SIG<span class="text-dark"> Dashboard</span>
            </a>
            <!-- toggler button for mobile (fully functional) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo site_url('home/index'); ?>">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('home/wilayah'); ?>">
                            <i class="fas fa-draw-polygon me-1"></i>Wilayah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('home/login'); ?>">
                            <i class="fas fa-sign-in-alt me-1"></i>Login
                        </a>
                    </li>
                </ul>
                <!-- search form: improved style & accessibility -->
                <form class="d-flex" role="search" onsubmit="event.preventDefault(); handleSearch();">
                    <input class="form-control me-2 search-input" type="search" placeholder="Cari data geografis..." aria-label="Search" id="searchInput">
                    <button class="btn btn-outline-success" type="submit">
                        <i class="fas fa-search me-1"></i>Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- main container with content to make the page feel alive -->
    <div class="container mt-4">
        <!-- informative hero section as placeholder for home context -->
        <div class="hero-section text-center">
            <h1 class="display-5 fw-bold mb-3"><i class="fas fa-globe-asia text-primary"></i> Sistem Informasi Geografis</h1>
            <p class="lead">Visualisasi data spasial, pemetaan wilayah, dan analisis geospasial terintegrasi.</p>
            <hr class="my-4 w-25 mx-auto">
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#" class="btn btn-primary rounded-pill px-4" onclick="showDemoMessage('Peta interaktif segera hadir')"><i class="fas fa-map"></i> Lihat Peta</a>
                <a href="#" class="btn btn-outline-secondary rounded-pill px-4" onclick="showDemoMessage('Statistik wilayah & demografi')"><i class="fas fa-chart-line"></i> Eksplorasi Data</a>
            </div>
        </div>

        <!-- Feature cards: preview untuk wilayah, login, etc (menarik) -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card card-feature h-100">
                    <div class="card-body">
                        <div class="mb-3 text-primary"><i class="fas fa-map-marked-alt fa-2x"></i></div>
                        <h5 class="card-title">Kelola Wilayah</h5>
                        <p class="card-text">Akses data administratif, batas daerah, dan layer spasial. Dashboard wilayah terintegrasi.</p>
                        <a href="<?php echo site_url('home/wilayah'); ?>" class="btn btn-sm btn-light text-primary stretched-link">Jelajahi →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-feature h-100">
                    <div class="card-body">
                        <div class="mb-3 text-success"><i class="fas fa-lock fa-2x"></i></div>
                        <h5 class="card-title">Akses Khusus</h5>
                        <p class="card-text">Login untuk mengunggah peta, edit data geospasial, dan kolaborasi tim GIS.</p>
                        <a href="<?php echo site_url('home/login'); ?>" class="btn btn-sm btn-light text-success stretched-link">Masuk Akun →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-feature h-100">
                    <div class="card-body">
                        <div class="mb-3 text-warning"><i class="fas fa-search-location fa-2x"></i></div>
                        <h5 class="card-title">Pencarian Spasial</h5>
                        <p class="card-text">Temukan lokasi, titik koordinat, dan data tematik melalui kotak pencarian diatas.</p>
                        <button class="btn btn-sm btn-light text-warning" onclick="handleSearch()"><i class="fas fa-arrow-right"></i> Coba Sekarang</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- contoh area informasi dinamis / demo interaksi -->
        <div class="alert alert-light border shadow-sm" id="infoPanel" role="alert">
            <div class="d-flex align-items-center">
                <i class="fas fa-info-circle fa-2x text-info me-3"></i>
                <div>
                    <strong>Sistem Informasi Geografis (SIG)</strong> — Demo navigasi dengan Bootstrap 5. Gunakan menu <strong>Home</strong>, <strong>Wilayah</strong>, atau <strong>Login</strong> untuk menguji tautan PHP dinamis (site_url). 
                    Kotak pencarian memberikan feedback interaktif.
                </div>
            </div>
        </div>
    </div>

    <!-- footer sederhana -->
    <div class="container">
        <footer>
            <i class="far fa-copyright me-1"></i> 2026 SIG Platform — Pemetaan Digital Berkelanjutan 
            <span class="mx-2">|</span> <a href="#" class="text-decoration-none text-secondary" onclick="showDemoMessage('Kebijakan privasi dalam pengembangan')">Kebijakan Privasi</a>
        </footer>
    </div>

    <!-- Bootstrap JS Bundle (required for toggler and interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- custom interactive script (simulasi interaksi dan demo pesan) 
         karena environment ini hanya frontend, kita akan menghormati link PHP dengan tetap 
         menampilkan pesan console/alert bahwa link akan mengarah ke base_url jika framework berjalan.
         namun tetap menjaga fungsi navigasi sebenarnya: jika site_url didefinisikan di server, 
         akan berfungsi seperti biasa. di sisi frontend, kita beri alert demonstrasi ringan.
         Juga fitur search yang memberikan notifikasi interaktif.
    -->
    <script>
        // function to simulate smooth feedback for search and demo interactions
        function handleSearch() {
            const searchInput = document.getElementById('searchInput');
            const query = searchInput ? searchInput.value.trim() : '';
            if (query === '') {
                showDemoMessage('Silakan masukkan kata kunci pencarian (contoh: kecamatan, sungai, batas wilayah)');
            } else {
                showDemoMessage(`Pencarian untuk: "${query}" — Fitur pencarian spasial akan segera tersedia di backend penuh.`);
                // optional: log to console
                console.log(`[SIG Search] query: ${query}`);
                // you could also clear or keep
            }
        }

        // reusable toast-like alert (non-intrusive but informative)
        function showDemoMessage(message) {
            // cari panel info atau buat temporary alert
            let infoPanel = document.getElementById('infoPanel');
            if (infoPanel) {
                // change the inner content to show message temporarily but keep structure
                const originalHTML = infoPanel.innerHTML;
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = originalHTML;
                // store text for later?
                infoPanel.innerHTML = `
                    <div class="d-flex align-items-center">
                        <i class="fas fa-lightbulb fa-2x text-warning me-3"></i>
                        <div>
                            <strong>Demo interaktif:</strong> ${message}
                        </div>
                        <button type="button" class="btn-close ms-auto" style="font-size:0.8rem;" onclick="restoreInfoPanel()" aria-label="Close"></button>
                    </div>
                `;
                // add class transition
                infoPanel.classList.add('alert-warning');
                infoPanel.classList.remove('alert-light');
                // simpan state untuk restore
                window._originalPanelContent = originalHTML;
                window._originalClass = 'alert-light';
            } else {
                alert(message);
            }
        }

        function restoreInfoPanel() {
            const infoPanel = document.getElementById('infoPanel');
            if (infoPanel && window._originalPanelContent) {
                infoPanel.innerHTML = window._originalPanelContent;
                infoPanel.classList.remove('alert-warning');
                infoPanel.classList.add('alert-light');
            } else {
                // fallback jika tidak tersimpan
                location.reload(); 
            }
        }

        // optional: menambahkan efek untuk link navigasi agar memberi notifikasi ringan 
        // namun tetap mempertahankan fungsi asli (tidak mengganggu karena href asli menggunakan site_url)
        // Ini hanya untuk keperluan demo saat dijalankan di environment tanpa backend PHP,
        // tetapi untuk production, link akan mengarah ke controller yang sesuai.
        // kita bisa override click hanya untuk memberikan extra info jika diperlukan (opsional)
        // namun lebih baik tetap menjalankan default behavior agar integritas kode asli.
        // Agar pengguna mengerti bahwa link mengarah ke endpoint PHP, kita tambahkan eventListener
        // console.log saja. Tidak merusak navigasi.
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                // hanya untuk tujuan demo: menampilkan rute yang akan dituju di console, tidak mengganggu navigasi.
                const href = link.getAttribute('href');
                if (href && href.startsWith('<?php echo site_url')) {
                    console.log(`[Navigasi SIG] Mengarah ke: ${href}`);
                } else if (href) {
                    console.log(`[Navigasi SIG] Mengarah ke: ${href}`);
                }
                // Tidak melakukan preventDefault sehingga link bekerja seperti yang diharapkan.
                // Di environment asli (CodeIgniter / PHP framework), site_url akan dieksekusi.
                // Untuk tampilan statis, jika tidak ada backend, browser akan mencoba mengakses path tersebut.
                // Itu sesuai requirement.
            });
        });

        // Inisialisasi tooltip atau placeholder info bahwa ini adalah template SIG responsif
        console.log('SIG Bootstrap Navigation — siap pakai dengan routing PHP dinamis (site_url).');
        
        // menambahkan event pada search input enter juga
        const searchForm = document.querySelector('form.d-flex');
        if (searchForm) {
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                handleSearch();
            });
        }

        // tampilkan demo bahwa environment sudah siap tapi link asli terintegrasi dengan PHP
        // membuat fungsi untuk menjelaskan bahwa site_url aktif di backend.
        // agar tidak mengganggu user, kita tambahkan indikator elegan di console.
    </script>
    <!-- Catatan: 
         Semua tautan menggunakan <?php echo site_url(...); ?> yang merupakan helper bawaan CodeIgniter / framework PHP.
         Jika halaman dijalankan dalam konteks server PHP, tautan akan mengarah ke controller yang sesuai.
         Dalam preview statis, tautan tetap mempertahankan sintaks PHP yang akan di-proses oleh mesin PHP.
         Struktur Bootstrap 5 navbar collapsible berfungsi sempurna dengan data-bs-toggle dan target yang tepat.
         Tombol pencarian memberikan umpan balik interaktif tanpa reload berlebihan.
         Desain modern, komponen ikon yang menarik, dan responsif di berbagai perangkat.
    -->
</body>
</html>
