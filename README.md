
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI Hidayatul Ulum - Madrasah Ibtidaiyah Unggulan</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        .dropdown-menu {
            transition: all 0.2s ease;
        }
        .dropdown-submenu {
            position: relative;
        }
        .dropdown-submenu > .submenu {
            position: absolute;
            left: 100%;
            top: 0;
            display: none;
            min-width: 200px;
        }
        .dropdown-submenu:hover > .submenu {
            display: block;
        }
        .nav-link-hover {
            transition: all 0.2s ease;
        }
        .nav-link-hover:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateX(2px);
        }
        .whatsapp-button {
            transition: all 0.3s ease;
        }
        .whatsapp-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .mobile-menu-open {
            animation: fadeIn 0.3s ease-out;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- ==================== NAVBAR SECTION ==================== -->
    <nav class="bg-green-700 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo dan Nama Sekolah -->
                <div class="flex items-center space-x-3">
                    <img class="w-12 h-12 object-contain rounded-full bg-white p-1" 
                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo MI Hidayatul Ulum">
                    <div>
                        <span class="text-white font-bold text-lg md:text-xl">MI HIDAYATUL ULUM</span>
                        <p class="text-green-200 text-xs hidden md:block">Madrasah Mandiri Berprestasi</p>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <ul class="hidden md:flex space-x-1 lg:space-x-2">
                    <!-- Home -->
                    <li>
                        <a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition nav-link-hover" href="<?= base_url();?>home/index">
                            <i class="fas fa-home mr-2"></i> Home
                        </a>
                    </li>

                    <!-- Profil Dropdown -->
                    <li class="relative group">
                        <a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition nav-link-hover cursor-pointer" href="<?= base_url();?>home/profil">
                            <i class="fas fa-user mr-2"></i> Profil <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <ul class="absolute left-0 hidden group-hover:block bg-green-600 text-white rounded-lg shadow-lg min-w-[200px] z-20 dropdown-menu">
                            <li><a class="flex items-center px-4 py-2 hover:bg-green-700 rounded-t-lg transition" href="<?= base_url();?>home/profil_visi_misi"><i class="fas fa-bullseye mr-2 w-5"></i> Visi & Misi</a></li>
                            <li><a class="flex items-center px-4 py-2 hover:bg-green-700 transition" href="<?= base_url();?>home/profil_sejarah"><i class="fas fa-history mr-2 w-5"></i> Sejarah</a></li>
                            <li><a class="flex items-center px-4 py-2 hover:bg-green-700 rounded-b-lg transition" href="<?= base_url();?>home/profil_sambutan"><i class="fas fa-chalkboard-user mr-2 w-5"></i> Sambutan Kepsek</a></li>
                        </ul>
                    </li>

                    <!-- Program Madrasah Dropdown dengan Submenu -->
                    <li class="relative group">
                        <a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition nav-link-hover cursor-pointer" href="<?= base_url();?>home/program_madrasah">
                            <i class="fas fa-book mr-2"></i> Program <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <ul class="absolute left-0 hidden group-hover:block bg-green-600 text-white rounded-lg shadow-lg min-w-[220px] z-20 dropdown-menu">
                            <!-- Ekstrakurikuler dengan Submenu -->
                            <li class="relative dropdown-submenu">
                                <a class="flex items-center justify-between px-4 py-2 hover:bg-green-700 transition rounded-t-lg" href="#">
                                    <span><i class="fas fa-futbol mr-2 w-5"></i> Ekstrakurikuler</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <ul class="submenu bg-green-600 rounded-lg shadow-lg min-w-[180px]">
                                    <li><a class="block px-4 py-2 hover:bg-green-700 rounded-t-lg transition" href="<?= base_url();?>home/pramuka"><i class="fas fa-campground mr-2"></i> Pramuka</a></li>
                                    <li><a class="block px-4 py-2 hover:bg-green-700 transition" href="<?= base_url();?>home/tik_komputer"><i class="fas fa-laptop-code mr-2"></i> TIK Komputer</a></li>
                                    <li><a class="block px-4 py-2 hover:bg-green-700 transition" href="<?= base_url();?>home/qiraat"><i class="fas fa-quran mr-2"></i> Qira'at</a></li>
                                    <li><a class="block px-4 py-2 hover:bg-green-700 rounded-b-lg transition" href="<?= base_url();?>home/hadroh"><i class="fas fa-music mr-2"></i> Hadroh</a></li>
                                </ul>
                            </li>
                            <!-- Program Rumah Unggulan dengan Submenu -->
                            <li class="relative dropdown-submenu">
                                <a class="flex items-center justify-between px-4 py-2 hover:bg-green-700 transition rounded-b-lg" href="#">
                                    <span><i class="fas fa-home mr-2 w-5"></i> Program Rumah Unggulan</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <ul class="submenu bg-green-600 rounded-lg shadow-lg min-w-[200px]">
                                    <li><a class="block px-4 py-2 hover:bg-green-700 rounded-t-lg transition" href="<?= base_url();?>home/rumah_digital"><i class="fas fa-laptop mr-2"></i> Rumah Digital</a></li>
                                    <li><a class="block px-4 py-2 hover:bg-green-700 rounded-b-lg transition" href="<?= base_url();?>home/rumah_sosialbudaya"><i class="fas fa-hand-holding-heart mr-2"></i> Rumah Sosial Budaya</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- PPDB -->
                    <li>
                        <a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition nav-link-hover" href="<?= base_url();?>home/ppdb">
                            <i class="fas fa-user-graduate mr-2"></i> PPDB
                        </a>
                    </li>

                    <!-- Login -->
                    <li>
                        <a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition nav-link-hover" href="<?= base_url();?>home/login">
                            <i class="fas fa-sign-in-alt mr-2"></i> Login
                        </a>
                    </li>
                </ul>

                <!-- Hamburger Menu Mobile -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-white text-2xl focus:outline-none p-2 hover:bg-green-600 rounded-lg transition">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pt-4 border-t border-green-600 mobile-menu-open">
                <ul class="space-y-2">
                    <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/index"><i class="fas fa-home mr-3 w-5"></i> Home</a></li>
                    
                    <!-- Profil Mobile -->
                    <li>
                        <button class="mobile-dropdown-btn w-full text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center justify-between transition">
                            <span><i class="fas fa-user mr-3 w-5"></i> Profil</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <ul class="mobile-submenu hidden ml-6 mt-1 space-y-1">
                            <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/profil_visi_misi"><i class="fas fa-bullseye mr-3 w-5"></i> Visi & Misi</a></li>
                            <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/profil_sejarah"><i class="fas fa-history mr-3 w-5"></i> Sejarah</a></li>
                            <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/profil_sambutan"><i class="fas fa-chalkboard-user mr-3 w-5"></i> Sambutan Kepsek</a></li>
                        </ul>
                    </li>
                    
                    <!-- Program Madrasah Mobile -->
                    <li>
                        <button class="mobile-dropdown-btn w-full text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center justify-between transition">
                            <span><i class="fas fa-book mr-3 w-5"></i> Program Madrasah</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <ul class="mobile-submenu hidden ml-6 mt-1 space-y-1">
                            <li>
                                <button class="sub-dropdown-btn w-full text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center justify-between transition">
                                    <span><i class="fas fa-futbol mr-3 w-5"></i> Ekstrakurikuler</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </button>
                                <ul class="sub-submenu hidden ml-6 mt-1 space-y-1">
                                    <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/pramuka"><i class="fas fa-campground mr-3 w-5"></i> Pramuka</a></li>
                                    <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/tik_komputer"><i class="fas fa-laptop-code mr-3 w-5"></i> TIK Komputer</a></li>
                                    <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/qiraat"><i class="fas fa-quran mr-3 w-5"></i> Qira'at</a></li>
                                    <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/hadroh"><i class="fas fa-drum mr-3 w-5"></i> Hadroh</a></li>
                                </ul>
                            </li>
                            <li>
                                <button class="sub-dropdown-btn w-full text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center justify-between transition">
                                    <span><i class="fas fa-home mr-3 w-5"></i> Program Rumah Unggulan</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </button>
                                <ul class="sub-submenu hidden ml-6 mt-1 space-y-1">
                                    <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/rumah_digital"><i class="fas fa-laptop mr-3 w-5"></i> Rumah Digital</a></li>
                                    <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/rumah_sosialbudaya"><i class="fas fa-hand-holding-heart mr-3 w-5"></i> Rumah Sosial Budaya</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/ppdb"><i class="fas fa-user-graduate mr-3 w-5"></i> PPDB</a></li>
                    <li><a class="text-white hover:bg-green-600 px-3 py-2 rounded-lg flex items-center transition" href="<?= base_url();?>home/login"><i class="fas fa-sign-in-alt mr-3 w-5"></i> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ==================== YELLOW BANNER ==================== -->
    <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 py-4 shadow-md">
        <div class="container mx-auto px-4 text-center">
            <p class="text-lg md:text-xl font-bold text-green-900">
                <i class="fas fa-star-of-life mr-2"></i> Madrasah Mandiri Berprestasi <i class="fas fa-star-of-life ml-2"></i>
            </p>
            <p class="text-sm text-green-800 mt-1">Beriman, Berilmu, Berakhlakul Karimah</p>
        </div>
    </div>

    <!-- ==================== FOOTER SECTION ==================== -->
    <footer class="bg-green-800 text-white pt-10 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- School Info -->
                <div class="text-center md:text-left">
                    <h2 class="text-xl font-bold mb-4 flex items-center justify-center md:justify-start gap-2">
                        <img class="w-8 h-8 rounded-full bg-white p-1" 
                             src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                             alt="Logo">
                        MI Hidayatul Ullum
                    </h2>
                    <p class="text-green-200 text-sm leading-relaxed">
                        Madrasah Ibtidaiyah unggulan yang mengintegrasikan ilmu pengetahuan umum dan agama untuk mencetak generasi berakhlak mulia, berprestasi, dan mandiri.
                    </p>
                </div>

                <!-- Contact Info -->
                <div class="text-center md:text-left">
                    <h2 class="text-xl font-bold mb-4"><i class="fas fa-address-card mr-2"></i> Kontak Kami</h2>
                    <div class="space-y-2 text-green-200 text-sm">
                        <p class="flex items-center justify-center md:justify-start gap-2">
                            <i class="fas fa-map-marker-alt text-yellow-400 w-5"></i> Jl. Blongko, Kec. Ngetos, Kab. Nganjuk, Jawa Timur
                        </p>
                        <p class="flex items-center justify-center md:justify-start gap-2">
                            <i class="fas fa-phone-alt text-yellow-400 w-5"></i> +62 813-5725-1463
                        </p>
                        <p class="flex items-center justify-center md:justify-start gap-2">
                            <i class="fas fa-envelope text-yellow-400 w-5"></i> mihidayatulullum@gmail.com
                        </p>
                    </div>
                </div>

                <!-- Visitor Stats -->
                <div class="text-center md:text-left">
                    <h2 class="text-xl font-bold mb-4"><i class="fas fa-chart-line mr-2"></i> Pengunjung</h2>
                    <div class="grid grid-cols-2 gap-3 text-green-200 text-sm">
                        <div>
                            <p class="font-semibold text-white">User Online:</p>
                            <p class="text-xl font-bold text-yellow-400">1</p>
                        </div>
                        <div>
                            <p class="font-semibold text-white">Today:</p>
                            <p class="text-xl font-bold text-yellow-400">3</p>
                        </div>
                        <div>
                            <p class="font-semibold text-white">Yesterday:</p>
                            <p class="text-lg">3</p>
                        </div>
                        <div>
                            <p class="font-semibold text-white">Total Visitors:</p>
                            <p class="text-lg">7,460</p>
                        </div>
                        <div class="col-span-2">
                            <p class="font-semibold text-white">Total Hits:</p>
                            <p class="text-lg">39,616</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-green-700 mt-8 pt-6 text-center text-green-300 text-sm">
                <p>&copy; 2026 MI Hidayatul Ulum. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- ==================== WHATSAPP BUTTON ==================== -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/6281249327710?text=Assalaamu%27alaikum.%20Saya%20ingin%20bertanya%20tentang%20MI%20Hidayatul%20Ulum" 
           target="_blank" 
           class="whatsapp-button bg-green-500 hover:bg-green-600 text-white px-5 py-3 rounded-full shadow-xl flex items-center gap-2 transition-all duration-300">
            <i class="fab fa-whatsapp text-2xl"></i>
            <span class="hidden sm:inline font-semibold">Butuh Bantuan?</span>
        </a>
    </div>

    <!-- ==================== JAVASCRIPT FOR MOBILE MENU ==================== -->
    <script>
        // Toggle mobile menu
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (menuToggle) {
            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
        
        // Handle mobile dropdown buttons
        document.querySelectorAll('.mobile-dropdown-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const submenu = this.nextElementSibling;
                const icon = this.querySelector('.fa-chevron-down, .fa-chevron-up');
                if (submenu) {
                    submenu.classList.toggle('hidden');
                    if (icon) {
                        if (submenu.classList.contains('hidden')) {
                            icon.classList.remove('fa-chevron-up');
                            icon.classList.add('fa-chevron-down');
                        } else {
                            icon.classList.remove('fa-chevron-down');
                            icon.classList.add('fa-chevron-up');
                        }
                    }
                }
            });
        });
        
        // Handle sub dropdown buttons
        document.querySelectorAll('.sub-dropdown-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const submenu = this.nextElementSibling;
                const icon = this.querySelector('.fa-chevron-right, .fa-chevron-down');
                if (submenu) {
                    submenu.classList.toggle('hidden');
                    if (icon) {
                        if (submenu.classList.contains('hidden')) {
                            icon.classList.remove('fa-chevron-down');
                            icon.classList.add('fa-chevron-right');
                        } else {
                            icon.classList.remove('fa-chevron-right');
                            icon.classList.add('fa-chevron-down');
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
