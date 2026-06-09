<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>PPDB Online - MI Hidayatul Ulum | Pendaftaran Peserta Didik Baru</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }
        .nav-link {
            transition: all 0.2s ease;
            position: relative;
        }
        .nav-link:hover {
            color: #f97316;
        }
        .nav-link.active {
            color: #f97316;
        }
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #f97316;
            border-radius: 2px;
        }
        .btn-primary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-8px);
        }
    </style>
</head>
<body class="bg-gradient-to-b from-green-50 to-gray-100">

    <!-- ==================== NAVBAR - LOGO KIRI, MENU KANAN ==================== -->
    <nav class="bg-green-700 text-white fixed w-full top-0 z-50 shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo / Brand - Kiri -->
                <a href="#home" class="flex items-center space-x-2 hover:opacity-90 transition">
                    <img class="w-8 h-8 rounded-full bg-white p-1 object-contain" 
                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo">
                    <h1 class="text-lg md:text-xl font-bold">PPDB Online</h1>
                </a>
                
                <!-- Desktop Menu - Rata KANAN (tanpa ruang kosong) -->
                <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="#home" class="nav-link px-3 py-2 rounded-lg transition whitespace-nowrap flex items-center gap-1">
                        <i class="fas fa-home"></i> Home
                    </a>
                    <a href="#syarat" class="nav-link px-3 py-2 rounded-lg transition whitespace-nowrap flex items-center gap-1">
                        <i class="fas fa-check-circle"></i> Syarat
                    </a>
                    <a href="#alur" class="nav-link px-3 py-2 rounded-lg transition whitespace-nowrap flex items-center gap-1">
                        <i class="fas fa-road"></i> Cara Daftar
                    </a>
                    <a href="#statistik" class="nav-link px-3 py-2 rounded-lg transition whitespace-nowrap flex items-center gap-1">
                        <i class="fas fa-chart-bar"></i> Statistik
                    </a>
                    <a href="#info" class="nav-link px-3 py-2 rounded-lg transition whitespace-nowrap flex items-center gap-1">
                        <i class="fas fa-info-circle"></i> Info
                    </a>
                    <a href="<?= base_url();?>home/formulir" class="bg-orange-500 hover:bg-orange-600 px-5 py-2 rounded-full flex items-center gap-2 transition ml-2 shadow-md whitespace-nowrap">
                        <i class="fas fa-file-alt"></i> Formulir
                    </a>
                </div>
                
                <!-- Mobile Menu Button (Hamburger) -->
                <button id="menu-toggle" class="md:hidden text-white text-2xl focus:outline-none p-2 hover:bg-green-600 rounded-lg transition">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <!-- Mobile Menu Dropdown -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pt-4 border-t border-green-600">
                <div class="flex flex-col space-y-2">
                    <a href="#home" class="mobile-nav-link hover:bg-green-600 py-3 px-3 rounded-lg flex items-center gap-3 transition">
                        <i class="fas fa-home w-5 text-green-200"></i> Home
                    </a>
                    <a href="#syarat" class="mobile-nav-link hover:bg-green-600 py-3 px-3 rounded-lg flex items-center gap-3 transition">
                        <i class="fas fa-check-circle w-5 text-green-200"></i> Syarat
                    </a>
                    <a href="#alur" class="mobile-nav-link hover:bg-green-600 py-3 px-3 rounded-lg flex items-center gap-3 transition">
                        <i class="fas fa-road w-5 text-green-200"></i> Cara Daftar
                    </a>
                    <a href="#statistik" class="mobile-nav-link hover:bg-green-600 py-3 px-3 rounded-lg flex items-center gap-3 transition">
                        <i class="fas fa-chart-bar w-5 text-green-200"></i> Statistik
                    </a>
                    <a href="#info" class="mobile-nav-link hover:bg-green-600 py-3 px-3 rounded-lg flex items-center gap-3 transition">
                        <i class="fas fa-info-circle w-5 text-green-200"></i> Info
                    </a>
                    <div class="pt-2">
                        <a href="<?= base_url();?>home/formulir" class="bg-orange-500 hover:bg-orange-600 text-center py-3 rounded-lg flex items-center justify-center gap-2 transition w-full">
                            <i class="fas fa-file-alt"></i> Formulir Pendaftaran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Spacer untuk fixed navbar -->
    <div class="h-16"></div>

    <!-- ==================== HERO SECTION (HOME) ==================== -->
    <section id="home" class="container mx-auto text-center py-12 md:py-16 px-4">
        <div class="hero-gradient rounded-2xl py-12 md:py-16 px-6 shadow-xl fade-in-up">
            <div class="flex justify-center mb-6">
                <img class="w-24 h-24 rounded-full bg-white p-2 shadow-md object-contain" 
                     src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                     alt="Logo MI Hidayatul Ulum">
            </div>
            <h1 class="text-green-700 text-3xl md:text-4xl font-extrabold mb-2">
                <i class="fas fa-graduation-cap mr-2"></i>Selamat Datang
            </h1>
            <h2 class="text-orange-500 text-2xl md:text-3xl font-bold mb-2">Penerimaan Peserta Didik Baru</h2>
            <h3 class="text-gray-800 text-xl md:text-2xl font-bold mb-4">TAHUN AJARAN 2025 / 2026</h3>
            <p class="text-base md:text-lg text-gray-700 mb-8 max-w-2xl mx-auto">Silahkan lengkapi formulir pendaftaran berikut untuk bergabung menjadi bagian dari keluarga besar MI Hidayatul Ulum.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?= base_url();?>home/formulir" class="btn-primary bg-orange-500 text-white px-8 py-3 rounded-full hover:bg-orange-600 transition flex items-center justify-center gap-2 font-semibold shadow-lg">
                    <i class="fas fa-edit"></i>
                    <span>Daftar Sekarang</span>
                </a>
                <a href="#syarat" class="btn-primary bg-green-600 text-white px-8 py-3 rounded-full hover:bg-green-700 transition flex items-center justify-center gap-2 font-semibold shadow-lg">
                    <i class="fas fa-file-alt"></i>
                    <span>Lihat Syarat</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== SYARAT PENDAFTARAN ==================== -->
    <section id="syarat" class="container mx-auto py-12 md:py-16 px-4">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6 md:p-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center">
                            <i class="fas fa-clipboard-list text-white text-xl"></i>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Syarat Pendaftaran</h2>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">1</div>
                            <div><h3 class="font-semibold text-gray-800">Mengisi Formulir Pendaftaran</h3></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">2</div>
                            <div><h3 class="font-semibold text-gray-800">Foto Copy KK 1 Lembar</h3></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">3</div>
                            <div><h3 class="font-semibold text-gray-800">Foto Copy Akta Kelahiran 1 Lembar</h3></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">4</div>
                            <div><h3 class="font-semibold text-gray-800">Foto Copy Ijazah TK/RA 1 Lembar</h3></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">5</div>
                            <div><h3 class="font-semibold text-gray-800">Foto Copy KTP Orang Tua</h3></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">6</div>
                            <div><h3 class="font-semibold text-gray-800">Foto Copy Kartu KIP/PKH (Jika Ada)</h3></div>
                        </div>
                    </div>
                </div>
                <div class="bg-green-50 flex items-center justify-center p-6 md:p-8">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo MI Hidayatul Ullum" class="max-w-full h-auto max-h-48 md:max-h-64 object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== ALUR PENDAFTARAN ==================== -->
    <section id="alur" class="container mx-auto py-12 md:py-16 px-4 bg-white">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Alur Pendaftaran</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4">Ikuti langkah mudah berikut untuk mendaftar</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center max-w-5xl mx-auto">
            <div class="order-2 md:order-1">
                <div class="space-y-5">
                    <div class="flex gap-4 p-3 rounded-xl hover:bg-green-50 transition">
                        <div class="bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">1</div>

                    </div>
                    <div class="flex gap-4 p-3 rounded-xl hover:bg-green-50 transition">
                        <div class="bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">2</div>
                        <div><h3 class="font-bold text-lg text-gray-800">Lengkapi Formulir</h3><p class="text-gray-600">Lengkapi formulir pendaftaran dan upload berkas</p></div>
                    </div>
                    <div class="flex gap-4 p-3 rounded-xl hover:bg-green-50 transition">
                        <div class="bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">3</div>
                        <div><h3 class="font-bold text-lg text-gray-800">Verifikasi Berkas</h3><p class="text-gray-600">Petugas akan memverifikasi berkas pendaftaran</p></div>
                    </div>
                    <div class="flex gap-4 p-3 rounded-xl hover:bg-green-50 transition">
                        <div class="bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">4</div>
                        <div><h3 class="font-bold text-lg text-gray-800">Daftar Ulang</h3><p class="text-gray-600">Siswa yang diterima melakukan daftar ulang</p></div>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2 flex justify-center">
                <div class="bg-green-100 rounded-2xl p-6 text-center">
                    <i class="fas fa-file-signature text-green-600 text-6xl mb-3"></i>
                    <p class="text-gray-700">Siap menjadi bagian dari<br>keluarga besar MI Hidayatul Ulum?</p>
                    <a href="<?= base_url();?>home/formulir" class="inline-block bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition mt-3">
                        Daftar Sekarang <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== STATISTIK PENDAFTAR ==================== -->
    <section id="statistik" class="container mx-auto py-12 md:py-16 px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Statistik Pendaftar</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4">Data peserta didik baru Tahun Ajaran 2025/2026</p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5 max-w-5xl mx-auto">
            <div class="stat-card bg-white rounded-xl shadow-md p-4 md:p-5 text-center">
                <div class="bg-blue-100 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center mx-auto mb-2 md:mb-3">
                    <i class="fas fa-users text-blue-600 text-xl md:text-2xl"></i>
                </div>
                <p class="text-gray-500 text-xs md:text-sm">Total Pendaftar</p>
                <p class="text-2xl md:text-3xl font-bold text-blue-600">70</p>
            </div>
            <div class="stat-card bg-white rounded-xl shadow-md p-4 md:p-5 text-center">
                <div class="bg-yellow-100 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center mx-auto mb-2 md:mb-3">
                    <i class="fas fa-clock text-yellow-600 text-xl md:text-2xl"></i>
                </div>
                <p class="text-gray-500 text-xs md:text-sm">Proses Seleksi</p>
                <p class="text-2xl md:text-3xl font-bold text-yellow-600">30</p>
            </div>
            <div class="stat-card bg-white rounded-xl shadow-md p-4 md:p-5 text-center">
                <div class="bg-green-100 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center mx-auto mb-2 md:mb-3">
                    <i class="fas fa-check-circle text-green-600 text-xl md:text-2xl"></i>
                </div>
                <p class="text-gray-500 text-xs md:text-sm">Diterima</p>
                <p class="text-2xl md:text-3xl font-bold text-green-600">0</p>
            </div>
            <div class="stat-card bg-white rounded-xl shadow-md p-4 md:p-5 text-center">
                <div class="bg-purple-100 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center mx-auto mb-2 md:mb-3">
                    <i class="fas fa-ticket-alt text-purple-600 text-xl md:text-2xl"></i>
                </div>
                <p class="text-gray-500 text-xs md:text-sm">Kuota</p>
                <p class="text-2xl md:text-3xl font-bold text-purple-600">100</p>
            </div>
        </div>
    </section>

    <!-- ==================== INFO SECTION ==================== -->
    <section id="info" class="container mx-auto py-12 md:py-16 px-4 pb-20">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="bg-gray-700 text-white px-6 py-4">
                <h2 class="text-xl font-semibold flex items-center gap-2"><i class="fas fa-bullhorn"></i> Pengumuman</h2>
            </div>
            <div class="p-6">
                <p class="text-gray-600 mb-3">Informasi terbaru mengenai PPDB Online MI Hidayatul Ulum</p>
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded">
                    <p class="text-sm text-gray-700">📢 Pendaftaran dibuka mulai bulan Januari 2026. Segera daftarkan putra-putri Anda!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FOOTER ==================== -->
    <footer class="bg-green-700 text-white py-6 md:py-8 mt-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center text-center">
                <div class="flex items-center space-x-2 mb-4">
                    <img class="w-8 h-8 rounded-full bg-white p-1 object-contain" 
                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo">
                    <h1 class="font-bold text-base md:text-lg">PPDB Online - MI Hidayatul Ulum</h1>
                </div>
                <p class="text-green-200 text-xs md:text-sm mb-2">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    Jl. Blongko, Kec. Ngetos, Kab. Nganjuk, Jawa Timur
                </p>
                <p class="text-green-300 text-xs">© 2026 MI Hidayatul Ulum. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- ==================== JAVASCRIPT ==================== -->
    <script>
        // Toggle mobile menu
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (menuToggle) {
            menuToggle.addEventListener('click', (e) => {
                e.stopPropagation();
                mobileMenu.classList.toggle('hidden');
                const icon = menuToggle.querySelector('i');
                if (icon) {
                    if (mobileMenu.classList.contains('hidden')) {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    } else {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    }
                }
            });
        }
        
        // Tutup menu mobile saat link diklik
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                const icon = menuToggle?.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
        
        // Active menu highlight saat scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        
        function updateActiveMenu() {
            let current = '';
            const scrollPosition = window.scrollY + 120;
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                const href = link.getAttribute('href');
                if (href === `#${current}`) {
                    link.classList.add('active');
                }
            });
        }
        
        window.addEventListener('scroll', updateActiveMenu);
        window.addEventListener('load', updateActiveMenu);
        
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                mobileMenu.classList.add('hidden');
                const icon = menuToggle?.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            }
        });
    </script>
</body>
</html>
