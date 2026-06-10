<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>MI HIDAYATUL ULUM - PPDB Online</title>
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
        
        /* Dropdown Menu Styles */
        .dropdown-menu {
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
        }
        .group:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .submenu {
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            transform: translateX(-10px);
        }
        .relative-group:hover .submenu {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }
        
        /* WhatsApp Button Animation */
        .whatsapp-btn {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(34, 197, 94, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
            }
        }
        
        .shadow-3d {
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2), -10px -10px 20px rgba(255, 255, 255, 0.5);
            transition: transform 0.3s ease-in-out;
        }
        .shadow-3d:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gradient-to-b from-green-50 to-gray-100">

    <!-- Navbar -->
    <nav class="bg-green-600 shadow-lg fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <img class="w-10 h-10 rounded-full bg-white p-1 shadow-sm object-contain" 
                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo">
                    <span class="text-white font-bold text-lg">MI HIDAYATUL ULUM</span>
                </div>

                <!-- Desktop Menu -->
                <ul class="hidden md:flex space-x-6">
                    <li>
                        <a href="#home" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-home mr-1"></i> Home
                        </a>
                    </li>

                    <!-- Profil Dropdown -->
                    <li class="relative group">
                        <a href="#" class="text-white hover:text-orange-200 flex items-center transition cursor-pointer">
                            <i class="fas fa-user mr-1"></i> Profil
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white text-gray-800 rounded-lg shadow-xl z-50">
                            <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-t-lg transition"><i class="fas fa-bullseye mr-2 text-green-600"></i> Visi & Misi</a></li>
                            <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 transition"><i class="fas fa-school mr-2 text-green-600"></i> Sejarah</a></li>
                            <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-b-lg transition"><i class="fas fa-microphone mr-2 text-green-600"></i> Sambutan Kepsek</a></li>
                        </ul>
                    </li>

                    <!-- Program Madrasah Dropdown -->
                    <li class="relative group">
                        <a href="#" class="text-white hover:text-orange-200 flex items-center transition cursor-pointer">
                            <i class="fas fa-book mr-1"></i> Program Madrasah
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <ul class="dropdown-menu absolute left-0 mt-2 w-64 bg-white text-gray-800 rounded-lg shadow-xl z-50">
                            <li class="relative-group">
                                <a href="#" class="flex items-center justify-between px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-t-lg transition">
                                    <span><i class="fas fa-users mr-2 text-green-600"></i> Ekstrakurikuler</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <ul class="submenu absolute left-full top-0 ml-1 w-56 bg-white text-gray-800 rounded-lg shadow-xl">
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-t-lg transition"><i class="fas fa-campground mr-2 text-green-600"></i> Pramuka</a></li>
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 transition"><i class="fas fa-desktop mr-2 text-green-600"></i> TIK Komputer</a></li>
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 transition"><i class="fas fa-quran mr-2 text-green-600"></i> Qiraat</a></li>
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-b-lg transition"><i class="fas fa-drum mr-2 text-green-600"></i> Hadroh</a></li>
                                </ul>
                            </li>
                            <li class="relative-group">
                                <a href="#" class="flex items-center justify-between px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-b-lg transition">
                                    <span><i class="fas fa-home mr-2 text-green-600"></i> Program Rumah Unggulan</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <ul class="submenu absolute left-full top-0 ml-1 w-56 bg-white text-gray-800 rounded-lg shadow-xl">
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-t-lg transition"><i class="fas fa-laptop mr-2 text-green-600"></i> Rumah Digital</a></li>
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-b-lg transition"><i class="fas fa-users mr-2 text-green-600"></i> Rumah Sosial Budaya</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#prestasi" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-trophy mr-1"></i> Prestasi
                        </a>
                    </li>
                    <li>
                        <a href="#informasi" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-info-circle mr-1"></i> Informasi
                        </a>
                    </li>
                    <li>
                        <a href="#ppdb" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-edit mr-1"></i> PPDB
                        </a>
                    </li>
                </ul>

                <!-- Hamburger Menu for Mobile -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-white text-2xl focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pt-4 border-t border-green-500">
                <a href="#home" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
                
                <div class="relative">
                    <button class="mobile-dropdown-btn w-full text-left py-2 text-white hover:text-orange-200 transition flex items-center justify-between">
                        <span><i class="fas fa-user mr-2"></i> Profil</span>
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1 mb-2">
                        <a href="#" class="block py-1 text-white/90 hover:text-orange-200 text-sm"><i class="fas fa-bullseye mr-2"></i> Visi & Misi</a>
                        <a href="#" class="block py-1 text-white/90 hover:text-orange-200 text-sm"><i class="fas fa-school mr-2"></i> Sejarah</a>
                        <a href="#" class="block py-1 text-white/90 hover:text-orange-200 text-sm"><i class="fas fa-microphone mr-2"></i> Sambutan Kepsek</a>
                    </div>
                </div>

                <div class="relative">
                    <button class="mobile-dropdown-btn w-full text-left py-2 text-white hover:text-orange-200 transition flex items-center justify-between">
                        <span><i class="fas fa-book mr-2"></i> Program Madrasah</span>
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1 mb-2">
                        <div class="relative">
                            <button class="sub-dropdown-btn w-full text-left py-1 text-white/90 hover:text-orange-200 text-sm flex items-center justify-between">
                                <span><i class="fas fa-users mr-2"></i> Ekstrakurikuler</span>
                                <i class="fas fa-chevron-right text-xs"></i>
                            </button>
                            <div class="sub-dropdown-content hidden pl-6 space-y-1">
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-campground mr-2"></i> Pramuka</a>
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-desktop mr-2"></i> TIK Komputer</a>
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-quran mr-2"></i> Qiraat</a>
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-drum mr-2"></i> Hadroh</a>
                            </div>
                        </div>
                        <div class="relative">
                            <button class="sub-dropdown-btn w-full text-left py-1 text-white/90 hover:text-orange-200 text-sm flex items-center justify-between">
                                <span><i class="fas fa-home mr-2"></i> Program Rumah Unggulan</span>
                                <i class="fas fa-chevron-right text-xs"></i>
                            </button>
                            <div class="sub-dropdown-content hidden pl-6 space-y-1">
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-laptop mr-2"></i> Rumah Digital</a>
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-users mr-2"></i> Rumah Sosial Budaya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#prestasi" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-trophy mr-2"></i> Prestasi
                </a>
                <a href="#informasi" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-info-circle mr-2"></i> Informasi
                </a>
                <a href="#ppdb" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-edit mr-2"></i> PPDB
                </a>
            </div>
        </div>
    </nav>

    <!-- Spacer untuk fixed navbar -->
    <div class="h-16"></div>

    <!-- Header Section -->
    <div class="bg-white py-6 px-8 shadow-lg flex flex-col md:flex-row items-center justify-between">
        <div class="flex items-center space-x-4">
            <img border="0" height="50" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" width="50">
            <h2 class="text-3xl font-bold text-green-700">MI HIDAYATUL ULUM</h2>
        </div>
        <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 mt-4 md:mt-0">
            <div class="flex items-center space-x-2">
                <i class="fas fa-map-marker-alt text-yellow-500"></i>
                <span>Jl. Blongko, Kec Ngetos Kab Nganjuk, Jawa Timur</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-clock text-yellow-500"></i>
                <span>Full-Day School Senin-Sabtu</span>
            </div>
        </div>
    </div>

    <!-- Hero Section PPDB -->
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
                <a href="#ppdb" class="btn-primary bg-orange-500 text-white px-8 py-3 rounded-full hover:bg-orange-600 transition flex items-center justify-center gap-2 font-semibold shadow-lg">
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

    <!-- Navigasi Utama -->
    <section class="bg-green-700 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-4 text-center px-4">
            <div class="bg-green-600 rounded-lg p-4 hover:bg-green-800 transition">
                <i class="fas fa-home text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Profil</h2>
                <p>Madrasah Ibtidaiyah HIDAYATUL ULUM</p>
                <a href="#" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900 inline-block mt-2">LIHAT SELENGKAPNYA</a>
            </div>
            <div class="bg-green-600 rounded-lg p-4 hover:bg-green-800 transition">
                <i class="fas fa-book text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Program Madrasah</h2>
                <p>Informasi Program Unggulan</p>
                <a href="#" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900 inline-block mt-2">LIHAT SELENGKAPNYA</a>
            </div>
            <div class="bg-green-600 rounded-lg p-4 hover:bg-green-800 transition">
                <i class="fas fa-trophy text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Prestasi</h2>
                <p>Prestasi Peserta Didik</p>
                <a href="#" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900 inline-block mt-2">LIHAT SELENGKAPNYA</a>
            </div>
            <div class="bg-green-600 rounded-lg p-4 hover:bg-green-800 transition">
                <i class="fas fa-info-circle text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Informasi</h2>
                <p>Kegiatan Di sekolah</p>
                <a href="#" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900 inline-block mt-2">LIHAT SELENGKAPNYA</a>
            </div>
        </div>
    </section>

    <!-- Syarat Pendaftaran -->
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
                         alt="Logo MI Hidayatul Ulum" class="max-w-full h-auto max-h-48 md:max-h-64 object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas Sekolah -->
    <div class="container mx-auto py-12 px-4">
        <h2 class="text-center text-3xl font-semibold text-green-700 mb-8">Fasilitas Sekolah</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-chalkboard-teacher text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Ruang Kelas</h3>
                <p>Tempat utama kegiatan belajar mengajar.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-futbol text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Lapangan Olah Raga</h3>
                <p>Fasilitas untuk mendukung minat dan bakat siswa.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-desktop text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Lab Komputer</h3>
                <p>Sarana untuk pembelajaran praktis siswa berkaitan dengan kompetensi di bidang IT dan komunikasi.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-book text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Perpustakaan</h3>
                <p>Pusat sumber ilmu pengetahuan dan informasi yang berbasis sekolah.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-utensils text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Kantin Sekolah</h3>
                <p>Menyediakan makanan dan minuman sehat untuk siswa.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-mosque text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Musholla</h3>
                <p>Tempat kegiatan Sholat berjamaah peserta didik.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-wifi text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Internet dan Media</h3>
                <p>Mendukung pembelajaran berbasis teknologi.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-flask text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Lab IPA</h3>
                <p>Sarana praktik pembelajaran Ilmu Pengetahuan Alam.</p>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-green-700">Frequently Asked Questions</h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto rounded-full mt-2"></div>
                <p class="text-gray-600 mt-4">Pertanyaan yang sering diajukan seputar MI Hidayatul Ulum</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div>
                    <div class="bg-gray-50 shadow-md rounded-lg mb-4">
                        <div class="border-b">
                            <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                                Apa Konsep MI HIDAYATUL ULUM?
                                <i class="fas fa-plus"></i>
                            </button>
                            <div class="hidden px-4 py-3 text-gray-700 border-t">
                                Sekolah yang mengimplementasikan konsep pendidikan Islam berlandaskan AlQur'an dan As Sunnah. Konsep operasional merupakan akumulasi dari proses pembudayaan, pewarisan dan pengembangan ajaran agama Islam, budaya dan peradaban Islam dari generasi ke generasi.
                            </div>
                        </div>
                        <div class="border-b">
                            <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                                Bagaimana Implementasi MI HIDAYATUL ULUM?
                                <i class="fas fa-plus"></i>
                            </button>
                            <div class="hidden px-4 py-3 text-gray-700 border-t">
                                Pelajaran yang diberikan sangat lengkap. Berupa pendidikan dasar umum dan pendidikan agama. Pelajarannya antara lain Pendidikan Kewarganegaraan, Bahasa Indonesia, Matematika, IPA, IPS, Seni Budaya, Seni Musik, Seni Rupa, dan Penjaskes.
                            </div>
                        </div>
                        <div class="border-b">
                            <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                                Apakah Mengajarkan Pengetahuan Umum?
                                <i class="fas fa-plus"></i>
                            </button>
                            <div class="hidden px-4 py-3 text-gray-700 border-t">
                                MI HIDAYATUL ULUM tetap mengajarkan pelajaran umum seperti sekolah biasa.
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-50 shadow-md rounded-lg mb-4">
                        <div class="border-b">
                            <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                                Apa Visi MI HIDAYATUL ULUM?
                                <i class="fas fa-plus"></i>
                            </button>
                            <div class="hidden px-4 py-3 text-gray-700 border-t">
                                <p class="font-bold">VISI:</p>
                                <p>Terwujudnya Sumber Daya Manusia Yang Berilmu Beriman Berakhlakul karimah Berdasarkan Iman Dan Bertaqwa</p>
                                <p class="font-bold mt-2">MISI:</p>
                                <ul class="list-disc pl-5">
                                    <li>Menanamkan keyakinan atau akidah melalui pengalaman ajaran agama</li>
                                    <li>Mengoptimalkan kegiatan pembelajaran siswa</li>
                                    <li>Menggali dan membimbing siswa agar kreatif dan inovatif</li>
                                    <li>Menumbuhkan semangat berprestasi kepada siswa</li>
                                    <li>Menjalin kerjasama yang harmonis antara warga sekitar dan lingkungan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Lokasi Sekolah -->
                    <div class="bg-white shadow-md rounded-lg p-4 border">
                        <h3 class="text-xl font-bold text-green-700 mb-3 flex items-center gap-2">
                            <i class="fas fa-map-marker-alt text-orange-500"></i> Lokasi Sekolah
                        </h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.4293078053556!2d111.8253141738045!3d-7.744204976770972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79ad150000
