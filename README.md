<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online - MI Hidayatul Ulum | Pendaftaran Peserta Didik Baru</title>
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
        html {
            scroll-behavior: smooth;
        }
        .nav-link {
            transition: all 0.2s ease;
        }
        .nav-link:hover {
            color: #f97316;
            transform: translateY(-2px);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }
        .hero-gradient {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }
        .step-circle {
            transition: all 0.3s ease;
        }
        .step-item:hover .step-circle {
            transform: scale(1.1);
            background-color: #ea580c;
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
        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
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

    <!-- ==================== NAVIGATION BAR ==================== -->
    <nav class="bg-green-700 text-white fixed w-full top-0 z-50 shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo dan Brand -->
                <div class="flex items-center space-x-3">
                    <img class="w-10 h-10 rounded-full bg-white p-1 object-contain" 
                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo">
                    <div>
                        <h1 class="font-bold text-lg">PPDB Online</h1>
                        <p class="text-xs text-green-200">MI Hidayatul Ulum</p>
                    </div>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-6">
                    <a href="#home" class="nav-link flex items-center gap-1"><i class="fas fa-home"></i> Home</a>
                    <a href="#syarat" class="nav-link flex items-center gap-1"><i class="fas fa-check-circle"></i> Syarat</a>
                    <a href="#alur" class="nav-link flex items-center gap-1"><i class="fas fa-road"></i> Alur</a>
                    <a href="#cara-daftar" class="nav-link flex items-center gap-1"><i class="fas fa-edit"></i> Cara Daftar</a>
                    <a href="#statistik" class="nav-link flex items-center gap-1"><i class="fas fa-chart-bar"></i> Statistik</a>
                    <a href="#info" class="nav-link flex items-center gap-1"><i class="fas fa-info-circle"></i> Info</a>
                    <a href="<?= base_url();?>home/formulir" class="bg-orange-500 hover:bg-orange-600 px-4 py-1 rounded-full flex items-center gap-1 transition">
                        <i class="fas fa-file-alt"></i> Formulir
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="menu-toggle" class="md:hidden text-white text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pt-4 border-t border-green-600">
                <div class="flex flex-col space-y-3">
                    <a href="#home" class="hover:text-orange-300 py-1 flex items-center gap-2"><i class="fas fa-home w-5"></i> Home</a>
                    <a href="#syarat" class="hover:text-orange-300 py-1 flex items-center gap-2"><i class="fas fa-check-circle w-5"></i> Syarat</a>
                    <a href="#alur" class="hover:text-orange-300 py-1 flex items-center gap-2"><i class="fas fa-road w-5"></i> Alur Pendaftaran</a>
                    <a href="#cara-daftar" class="hover:text-orange-300 py-1 flex items-center gap-2"><i class="fas fa-edit w-5"></i> Cara Daftar</a>
                    <a href="#statistik" class="hover:text-orange-300 py-1 flex items-center gap-2"><i class="fas fa-chart-bar w-5"></i> Statistik</a>
                    <a href="#info" class="hover:text-orange-300 py-1 flex items-center gap-2"><i class="fas fa-info-circle w-5"></i> Info</a>
                    <a href="<?= base_url();?>home/formulir" class="bg-orange-500 text-center py-2 rounded-lg flex items-center justify-center gap-2"><i class="fas fa-file-alt"></i> Formulir Pendaftaran</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== HERO SECTION (HOME) ==================== -->
    <main id="home" class="container mx-auto text-center py-28 pt-36 px-4">
        <div class="hero-gradient rounded-2xl py-16 px-6 shadow-xl fade-in-up">
            <h1 class="text-green-700 text-4xl md:text-5xl font-extrabold mb-4">
                <i class="fas fa-graduation-cap mr-3"></i>Selamat Datang
            </h1>
            <h2 class="text-orange-500 text-3xl md:text-4xl font-bold mb-2">Penerimaan Peserta Didik Baru</h2>
            <h3 class="text-gray-800 text-2xl md:text-3xl font-bold mb-4">TAHUN AJARAN 2025 / 2026</h3>
            <p class="text-lg text-gray-700 mb-8 max-w-2xl mx-auto">Silahkan lengkapi formulir pendaftaran berikut untuk bergabung menjadi bagian dari keluarga besar MI Hidayatul Ulum.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?= base_url();?>home/formulir" class="bg-orange-500 text-white px-8 py-3 rounded-full hover:bg-orange-600 transition flex items-center justify-center gap-2 font-semibold shadow-lg">
                    <i class="fas fa-edit"></i>
                    <span>Daftar Sekarang</span>
                </a>
                <a href="#syarat" class="bg-green-600 text-white px-8 py-3 rounded-full hover:bg-green-700 transition flex items-center justify-center gap-2 font-semibold shadow-lg">
                    <i class="fas fa-file-alt"></i>
                    <span>Lihat Syarat</span>
                </a>
            </div>
        </div>
    </main>

    <!-- ==================== SYARAT PENDAFTARAN ==================== -->
    <main id="syarat" class="container mx-auto py-16 px-4">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Syarat Content -->
                <div class="p-8 md:p-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center">
                            <i class="fas fa-clipboard-list text-white text-xl"></i>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Syarat Pendaftaran</h2>
                    </div>
                    <div class="space-y-4">
                        <div class="step-item flex items-start gap-4">
                            <div class="step-circle bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">1</div>
                            <div><h3 class="font-bold text-gray-800">Mengisi Formulir Pendaftaran</h3></div>
                        </div>
                        <div class="step-item flex items-start gap-4">
                            <div class="step-circle bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">2</div>
                            <div><h3 class="font-bold text-gray-800">Foto Copy KK 1 Lembar</h3></div>
                        </div>
                        <div class="step-item flex items-start gap-4">
                            <div class="step-circle bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">3</div>
                            <div><h3 class="font-bold text-gray-800">Foto Copy Akta Kelahiran 1 Lembar</h3></div>
                        </div>
                        <div class="step-item flex items-start gap-4">
                            <div class="step-circle bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">4</div>
                            <div><h3 class="font-bold text-gray-800">Foto Copy Ijazah TK/RA 1 Lembar</h3></div>
                        </div>
                        <div class="step-item flex items-start gap-4">
                            <div class="step-circle bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">5</div>
                            <div><h3 class="font-bold text-gray-800">Foto Copy KTP Orang Tua</h3></div>
                        </div>
                        <div class="step-item flex items-start gap-4">
                            <div class="step-circle bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">6</div>
                            <div><h3 class="font-bold text-gray-800">Foto Copy Kartu KIP/PKH (Jika Ada)</h3></div>
                        </div>
                    </div>
                </div>
                <!-- Image -->
                <div class="bg-green-50 flex items-center justify-center p-8">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo MI Hidayatul Ullum" class="max-w-full h-auto max-h-80 object-contain">
                </div>
            </div>
        </div>
    </main>

    <!-- ==================== ALUR PENDAFTARAN ==================== -->
    <main id="alur" class="container mx-auto py-16 px-4 bg-white">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Alur Pendaftaran</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4">Ikuti langkah-langkah berikut untuk mendaftar</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="order-2 md:order-1">
                <div class="space-y-6">
                    <div class="step-item flex gap-4 p-4 rounded-xl hover:bg-green-50 transition">
                        <div class="step-circle bg-green-500 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl flex-shrink-0">1</div>
                        <div><h3 class="font-bold text-xl text-gray-800">Daftar Akun</h3><p class="text-gray-600">Daftar pada portal PPDB Online</p></div>
                    </div>
                    <div class="step-item flex gap-4 p-4 rounded-xl hover:bg-green-50 transition">
                        <div class="step-circle bg-green-500 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl flex-shrink-0">2</div>
                        <div><h3 class="font-bold text-xl text-gray-800">Lengkapi Formulir</h3><p class="text-gray-600">Lengkapi formulir pendaftaran dan upload berkas pendaftaran / dapat dikirim ke sekretariat PPDB</p></div>
                    </div>
                    <div class="step-item flex gap-4 p-4 rounded-xl hover:bg-green-50 transition">
                        <div class="step-circle bg-green-500 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl flex-shrink-0">3</div>
                        <div><h3 class="font-bold text-xl text-gray-800">Tes Masuk</h3><p class="text-gray-600">Mengikuti tes masuk sesuai dengan regulasi PPDB</p></div>
                    </div>
                    <div class="step-item flex gap-4 p-4 rounded-xl hover:bg-green-50 transition">
                        <div class="step-circle bg-green-500 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl flex-shrink-0">4</div>
                        <div><h3 class="font-bold text-xl text-gray-800">Daftar Ulang</h3><p class="text-gray-600">Bagi siswa yang dinyatakan diterima wajib melakukan daftar ulang</p></div>
                    </div>
                </div>
                <div class="mt-8 text-center md:text-left">
                    <a href="<?= base_url();?>home/formulir" class="inline-block bg-orange-500 text-white px-8 py-3 rounded-full hover:bg-orange-600 transition font-semibold shadow-md">
                        Daftar Sekarang <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="order-1 md:order-2 flex justify-center">
                <img alt="Ilustrasi pendaftaran PPDB online" class="w-full max-w-md rounded-2xl shadow-xl" 
                     src="https://storage.googleapis.com/a1aa/image/yn5Ex6OlThcNRmskpnBO0lxNIFJVoVmK4iGYu7QITTc.jpg" 
                     width="400" height="400">
            </div>
        </div>
    </main>

    <!-- ==================== CARA DAFTAR ==================== -->
    <main id="cara-daftar" class="container mx-auto py-16 px-4">
        <div class="bg-gradient-to-r from-green-600 to-green-700 rounded-2xl shadow-xl overflow-hidden">
            <div class="p-8 md:p-10">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-6 flex items-center gap-3">
                    <i class="fas fa-question-circle"></i> Cara Daftar
                </h2>
                <div class="space-y-6 text-white">
                    <div class="flex flex-col md:flex-row gap-4 items-start">
                        <div class="bg-white text-green-700 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">1</div>
                        <div>
                            <p class="text-white/90">Calon siswa mengisi formulir pendaftaran yang tersedia. Isi selengkap mungkin, kemudian unduh formulir dalam bentuk PDF.</p>
                            <a href="<?= base_url();?>home/formulir" class="inline-block bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition mt-3 text-sm">
                                <i class="fas fa-edit mr-1"></i> Isi Formulir
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-4 items-start">
                        <div class="bg-white text-green-700 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">2</div>
                        <div>
                            <p>Jika selesai mengisi formulir, silakan kirim formulir pendaftaran yang telah diisi melalui WhatsApp aktif MI Hidayatul Ulum.</p>
                            <div class="flex flex-wrap gap-3 mt-3">
                                <a href="https://wa.me/6282245601782" target="_blank" class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-full flex items-center gap-2 transition text-sm">
                                    <i class="fab fa-whatsapp"></i> WhatsApp MI Induk
                                </a>
                                <a href="https://wa.me/6285735117441" target="_blank" class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-full flex items-center gap-2 transition text-sm">
                                    <i class="fab fa-whatsapp"></i> WhatsApp MI Cabang
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-4 items-start">
                        <div class="bg-white text-green-700 rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0">3</div>
                        <div>
                            <h3 class="font-bold text-white">Pemberkasan & Daftar Ulang</h3>
                            <p>Kirimkan berkas-berkas pendaftaran yang diminta ke kantor MI Hidayatul Ulum pada jam kerja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ==================== STATISTIK PENDAFTAR ==================== -->
    <main id="statistik" class="container mx-auto py-16 px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Data Pendaftar</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4">Peserta Didik Baru Tahun Ajaran 2025/2026</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="stat-card bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-gray-500 font-medium">Total Pendaftar</h3>
                <p class="text-4xl font-bold text-blue-600">70</p>
            </div>
            <div class="stat-card bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="bg-gray-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check-circle text-gray-600 text-2xl"></i>
                </div>
                <h3 class="text-gray-500 font-medium">Diterima</h3>
                <p class="text-4xl font-bold text-gray-600">0</p>
            </div>
            <div class="stat-card bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-ticket-alt text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-gray-500 font-medium">Kuota Penerimaan</h3>
                <p class="text-4xl font-bold text-green-600">100</p>
            </div>
        </div>
    </main>

    <!-- ==================== INFO / PENGUMUMAN ==================== -->
    <main id="info" class="container mx-auto py-16 px-4 pb-24">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="bg-gray-700 text-white px-6 py-4">
                <h2 class="text-xl font-semibold flex items-center gap-2"><i class="fas fa-bullhorn"></i> Pengumuman PPDB</h2>
            </div>
            <div class="p-6">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-bullhorn text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-2">📅 31 Januari 2025 | <i class="far fa-eye"></i> 124 views</p>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Info PPDB Online 2025</h3>
                        <p class="text-gray-700 mb-3">Assalamualaikum wr wb..</p>
                        <p class="text-gray-700 mb-3">Berkas yang harus dibawa ke Madrasah diantaranya :</p>
                        <ol class="list-decimal ml-5 space-y-1 text-gray-700 mb-3">
                            <li>Formulir Pendaftaran</li>
                            <li>Photocopy KTP Orang Tua</li>
                            <li>Photocopy Kartu Keluarga</li>
                            <li>Photocopy Akta Kelahiran</li>
                            <li>Foto Copy Ijazah TK/RA 1 Lembar</li>
                            <li>Foto Copy Kartu KIP/PKH (Jika Ada)</li>
                        </ol>
                        <p class="text-gray-700 mb-2">📁 Berkas dimasukkan map warna merah untuk putra, warna hijau untuk putri.</p>
                        <p class="text-gray-700">💬 Hal-hal yang kurang jelas bisa ditanyakan di tempat pendaftaran.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ==================== JAVASCRIPT FOR MOBILE MENU ==================== -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (menuToggle) {
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
</body>
</html>
