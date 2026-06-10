
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
                            <!-- Ekstrakurikuler Submenu -->
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
                            <!-- Program Rumah Unggulan Submenu -->
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
                        <a href="#" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-sign-in-alt mr-1"></i> Login
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
                
                <!-- Profil Mobile Dropdown -->
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

                <!-- Program Madrasah Mobile Dropdown -->
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

               
                <a href="#" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Spacer untuk fixed navbar -->
    <div class="h-16"></div>


<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI HIDAYATUL ULLUM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        a {
            color: inherit !important;
        }
        .shadow-3d {
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2), -10px -10px 20px rgba(255, 255, 255, 0.5);
            transition: transform 0.3s ease-in-out;
        }
        .shadow-3d:hover {
            transform: translateY(-5px);
        }
        .btn {
            background-color: #ffffff; /* Latar belakang putih */
            color: #4A8C2A; /* Warna teks hijau */
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #e0e0e0; /* Latar belakang saat hover */
        }
    </style>

<body class="font-sans bg-gray-100">
    <!-- Header -->
    <div class="bg-white py-6 px-8 shadow-lg flex flex-col md:flex-row items-center justify-between">
        <div class="flex items-center space-x-4">
           <img border="0" data-original-height="714" data-original-width="720" height="50" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" width="50">
            <h2 class="text-3xl font-bold text-green-700">MI HIDAYATUL ULLUM</h2>
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
    
       <!-- Navigasi Utama -->
    <section class="bg-green-700 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
            <div>

                <i class="fas fa-home text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Profil</h2>
                <p>Madrasah Ibtidaiyah HIDAYATUL ULLUM</p>
                <a href="<?= base_url();?>home/profil" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900">LIHAT SELENGKAPNYA</a>
            </div>
            <div>
                <i class="fas fa-book text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Program Madrasah</h2>
                <p>Informasi Program Unggulan</p>
                <a href="<?= base_url();?>home/program_madrasah" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900">LIHAT SELENGKAPNYA</a>
            </div>
            <div>
                <i class="fas fa-trophy text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Prestasi</h2>
                <p>Prestasi Peserta Didik</p>
                <a href="<?= base_url();?>home/prestasi" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900">LIHAT SELENGKAPNYA</a>
               
            </div>
            <div>
                <i class="fas fa-info-circle text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Informasi</h2>
                <p>Kegiatan Di sekolah</p>
                <a href="<?= base_url();?>home/informasi" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900">LIHAT SELENGKAPNYA</a>
               
            </div>
        </div>
    </section>

     <!-- Fasilitas Sekolah -->
     <div class="container mx-auto py-12">
        <h2 class="text-center text-3xl font-semibold text-green-700 mb-8">Fasilitas Sekolah</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
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
                <i class="fas fa-desktop text-3xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Lab Komputer</h3>
                <p>Sarana untuk pembelajaran praktis siswa berkaitan dengan kompetensi di bidang IT dan komunikasi.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-book text-3xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Perpustakaan dan e-Library</h3>
                <p>Pusat sumber ilmu pengetahuan dan informasi yang berbasis sekolah untuk mendukung proses pembelajaran.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-utensils text-3xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Kantin Sekolah</h3>
                <p>Satu ruang yang berada di sekolah untuk menyediakan makanan dan minuman sehat untuk siswa.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-mosque text-3xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Musholla</h3>
                <p>Tempat kegiatan Sholat berjamaah peserta didik.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-wifi text-3xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Internet dan Media</h3>
                <p>Mendukung pembelajaran berbasis teknologi.</p>
            </div>
        </div>
    </div>
    <html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Web Page
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <!-- FAQ Section -->
  <section class="py-8">
   <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
     <div>
      <h2 class="text-2xl font-bold text-green-700 mb-4">
       FAQ
      </h2>
       
        <div class="bg-white shadow-md rounded mb-4">
            <div class="border-b">
                <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                    
                    Apa Konsep MI HIDAYATUL ULLUM?
                    <i class="fas fa-plus"></i>
                </button>
                <div class="hidden px-4 py-3 text-gray-700">
                   Sekolah yang mengimplementasikan konsep pendidikan Islam berlandaskan AlQur’an dan As Sunnah. Konsep operasional merupakan akumulasi dari proses pembudayaan, pewarisan dan pengembangan ajaran agama Islam, budaya dan peradaban Islam dari generasi ke generasi.
                </div>
            </div>
            <div class="border-b">
                <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                    Bagaimana Implementasi MI HIDAYATUL ULLUM?
                    <i class="fas fa-plus"></i>
                </button>
                <div class="hidden px-4 py-3 text-gray-700">
                   Pelajaran yang diberikan sangat lengkap. Berupa pendidikan dasar umum dan pendidikan agama. Pelajarnnya antara lain Pendidikan Kewarganegaraan, Bahasa Indonesia, Matematika, IPA, IPS, Seni Budaya,Seni Musik,Seni Rupa, dan Penjaskes. Sementara pelajaran lainnya yang berkaitan dengan keislaman masuk dalam kategori Muatan Lokal yang terdiri dari Akidah Akhlak, Qur’an Hadis, Fiqih, BMK,PEGON, Bahasa Arab, Bahasa Inggris, Tahfidz, dan komputer.
                </div>
            </div>
            <div class="border-b">
                <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                    Apakah Mengajarkan Pengetahuan Umum?
                    <i class="fas fa-plus"></i>
                </button>
                <div class="hidden px-4 py-3 text-gray-700">
                    MI HIDAYATUL ULLUM tetap mengajarkan pelajaran umum seperti sekolah biasa.
                </div>
            </div>
            <div class="border-b">
                <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                    Apa Visi MI HIDAYATUL ULLUM ?
                    <i class="fas fa-minus"></i>
                </button>
                <div class="px-4 py-3 text-gray-700">
                   
VISI MI HIDAYATUL ULLUM

Terwujudnya Sumber Daya Manusia Yang Berilmu Beriman Berakhlakul kharimah Berdasarkan Iman Dan Bertaqwa
MISI MI HIDAYATUL ULLUM

    Menanamkan keyakinan atau akidah melalui pengalaman ajaran agama
    Mengoptimalkan kegiatan pembelajaran siswa.
    Menggali dan membimbing siswa agar kreatif dan inofatif
    Menumbuhkan semangat berprestasi kepada siswa
    Menjalin kerjasama yang harmonis antara warga sekitar dan lingkungan.


                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.toggle-button').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('i');

                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                } else {
                    content.classList.add('hidden');
                    icon.classList.remove('fa-minus');
                    icon.classList.add('fa-plus');
                }
            });
        });
    </script>
     <div>
      <h2 class="text-2xl font-bold text-green-700 mb-4">
       Lokasi Sekolah
      </h2>
      <div class="bg-white shadow-md rounded-lg p-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.4293078053556!2d111.8253141738045!3d-7.744204976770972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79ad1500000001%3A0xc29525c5c62f855d!2sMadrasah%20Ibtidaiyah%20Hidayatul%20Ulum!5e0!3m2!1sid!2sid!4v1737705179012!5m2!1sid!2sid" width="570" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
     </div>
    </div>
   </div>
  </section>
<!-- Yellow Banner -->
<div class="bg-yellow-500 py-4">
    <div class="container mx-auto text-center">
        <p class="text-lg font-semibold text-green-900">Madrasah Mandiri Berprestasi</p>
    </div>
</div>

<!-- Footer Section -->
<footer class="bg-green-800 py-8 text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- School Info -->
            <div>
                <h2 class="text-xl font-bold mb-4">Madrasah Ibtidaiyah Hidayatul Ullum</h2>
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                    alt="Image of students at Madrasah Ibtidaiyah Hidayatul Ullum" width="250" height="200" />
            </div>

            <!-- Contact Info -->
      
     <div>
      <h2 class="text-xl font-bold mb-4">Kontak Kami </h2>
      <p> Alamat</p>
      <p>Jl. Blongko, Kec Ngetos Kab Nganjuk, Jawa Timur</p>
      <p>Telepon: +62 813-5725-1463</p>
      <p>Email: mihidayatulullum@gmail.com</p>
    </div>
     <div>
      <h2 class="text-xl font-bold mb-4">
       Pengunjung
      </h2>
      <p>
       User Online: 1
      </p>
      <p>
       Today Visitors: 3
      </p>
      <p>
       Yesterday Visitors: 3
      </p>
      <p>
       Total Visitors: 7460
      </p>
      <p>
       Total Hits: 39616
      </p>
     </div>
    </div>
   </div>
  </footer>
  <!-- WhatsApp Button -->
  <div class="fixed bottom-4 right-4">
   <button class="bg-green-500 text-white px-4 py-2 rounded-full shadow-lg flex items-center">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                    </svg>
    <a href="https://wa.me/6281249327710?text=Assalaamu'alaikum." class="text-white" target="_blank">
                
                                            <span class="d-none d-md-inline-block">Butuh Bantuan</span>
                                    </a>
   </button>
  </div>
 </body>
</html>
