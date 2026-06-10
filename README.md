<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Wanda Putri Prasetio | CV Profesional</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts - Inter & Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', 'Poppins', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        .bg-pink-professional {
            background: linear-gradient(135deg, #fff5f8 0%, #ffe4ed 100%);
        }
        .navbar-pink {
            background: #ffffffdd;
            backdrop-filter: blur(12px);
            border-bottom: 1px solid #fbc4d6;
        }
        .nav-link {
            transition: all 0.2s ease;
            position: relative;
        }
        .nav-link:hover {
            color: #e91e63;
        }
        .nav-link.active {
            color: #e91e63;
            font-weight: 600;
        }
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            right: 0;
            height: 2px;
            background: #e91e63;
            border-radius: 4px;
        }
        .btn-pink {
            transition: all 0.3s ease;
        }
        .btn-pink:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(233, 30, 99, 0.2);
        }
        .cert-card {
            transition: all 0.2s ease;
            cursor: pointer;
        }
        .cert-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(233, 30, 99, 0.12);
            border-color: #f06292;
        }
        .project-card, .blog-card {
            transition: all 0.25s ease;
        }
        .project-card:hover, .blog-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -12px rgba(0, 0, 0, 0.1);
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
        /* custom scroll */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #ffe0ea;
        }
        ::-webkit-scrollbar-thumb {
            background: #e91e63;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-pink-professional text-gray-800">

    <!-- Navbar Pink Profesional -->
    <nav class="navbar-pink fixed top-0 left-0 right-0 z-50 shadow-sm">
        <div class="container mx-auto px-5 py-3 flex flex-wrap justify-between items-center">
            <div class="flex items-center gap-2">
                <i class="fas fa-heart text-pink-500 text-xl"></i>
                <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-rose-400 text-xl">WandaCV</span>
            </div>
            <div class="hidden md:flex space-x-6 lg:space-x-8">
                <a href="#home" class="nav-link text-gray-700 hover:text-pink-600 font-medium">Home</a>
                <a href="#aboutme" class="nav-link text-gray-700 hover:text-pink-600 font-medium">About Me</a>
                <a href="#skills" class="nav-link text-gray-700 hover:text-pink-600 font-medium">Skill</a>
                <a href="#sertifikat" class="nav-link text-gray-700 hover:text-pink-600 font-medium">Sertifikat</a>
                <a href="#pendidikan" class="nav-link text-gray-700 hover:text-pink-600 font-medium">Pendidikan</a>
                <a href="#experience" class="nav-link text-gray-700 hover:text-pink-600 font-medium">Experience</a>
                <a href="#project" class="nav-link text-gray-700 hover:text-pink-600 font-medium">Project</a>
                <a href="#blog" class="nav-link text-gray-700 hover:text-pink-600 font-medium">Blog</a>
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-pink-600 text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileNav" class="hidden md:hidden bg-white/95 backdrop-blur-md border-t border-pink-100 px-5 py-3 flex flex-col gap-2">
            <a href="#home" class="mobile-link py-2 text-gray-700 hover:text-pink-600">Home</a>
            <a href="#aboutme" class="mobile-link py-2 text-gray-700 hover:text-pink-600">About Me</a>
            <a href="#skills" class="mobile-link py-2 text-gray-700 hover:text-pink-600">Skill</a>
            <a href="#sertifikat" class="mobile-link py-2 text-gray-700 hover:text-pink-600">Sertifikat</a>
            <a href="#pendidikan" class="mobile-link py-2 text-gray-700 hover:text-pink-600">Pendidikan</a>
            <a href="#experience" class="mobile-link py-2 text-gray-700 hover:text-pink-600">Experience</a>
            <a href="#project" class="mobile-link py-2 text-gray-700 hover:text-pink-600">Project</a>
            <a href="#blog" class="mobile-link py-2 text-gray-700 hover:text-pink-600">Blog</a>
        </div>
    </nav>

    <div class="pt-20"></div>

    <div class="container mx-auto px-5 max-w-6xl pb-12">
        
        <!-- HOME Section -->
        <section id="home" class="py-8 fade-in-up">
            <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8 flex flex-col md:flex-row gap-8 items-center border border-pink-100">
                <div class="flex-1 text-center md:text-left">
                    <div class="inline-block bg-pink-100 text-pink-700 px-4 py-1 rounded-full text-sm font-semibold mb-3"><i class="fas fa-graduation-cap mr-1"></i> S1 Sistem Informasi · IPK 3.75</div>
                    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800">Wanda Putri Prasetio Wulandari</h1>
                    <p class="text-pink-500 font-medium mt-2">Fresh Graduate | Analis Sistem | Data Enthusiast</p>
                    <div class="flex flex-wrap gap-3 mt-4 text-sm text-gray-600 justify-center md:justify-start">
                        <span><i class="fas fa-envelope text-pink-500 mr-1"></i> wandawesome@gmail.com</span>
                        <span><i class="fab fa-whatsapp text-pink-500 mr-1"></i> +62 812-4932-7710</span>
                        <span><i class="fas fa-calendar-alt text-pink-500 mr-1"></i> 21 Juni 2003</span>
                        <span><i class="fas fa-map-pin text-pink-500 mr-1"></i> Kab. Nganjuk</span>
                    </div>
                    <div class="mt-5 bg-pink-50 p-4 rounded-xl text-gray-700 text-sm leading-relaxed">
                        <i class="fas fa-quote-left text-pink-400 mr-2"></i> Lulusan S1 Sistem Informasi dengan IPK 3,75, memiliki minat di bidang teknologi informasi, analisis sistem, analisis data, dan pengembangan solusi digital. Pengalaman lebih dari 4 tahun sebagai tenaga pengajar yang membentuk komunikasi, kepemimpinan, dan problem solving. Terbiasa belajar mandiri & kolaboratif.
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <div class="bg-gradient-to-br from-pink-200 to-pink-100 w-36 h-36 md:w-44 md:h-44 rounded-full flex items-center justify-center shadow-lg">
                        <i class="fas fa-user-circle text-pink-600 text-7xl md:text-8xl"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT ME -->
        <section id="aboutme" class="py-6">
            <div class="bg-white rounded-3xl shadow-md p-6 md:p-8 border-l-8 border-pink-400">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2"><i class="fas fa-user-astronaut text-pink-500"></i> About Me</h2>
                <p class="mt-3 text-gray-700 leading-relaxed">Saya adalah pribadi yang antusias dalam dunia teknologi & data. Dengan latar belakang Sistem Informasi, saya memiliki pemahaman mendalam tentang analisis sistem, pengembangan web, serta kecerdasan buatan (SVM, klasifikasi email spam). Pengalaman mengajar lebih dari 4 tahun memperkuat softskill komunikasi dan manajemen tim. Saya adaptif terhadap teknologi baru, suka tantangan, dan berkomitmen memberikan solusi digital inovatif. Target saya: berkontribusi dalam transformasi digital perusahaan serta membangun karir profesional berkelanjutan.</p>
            </div>
        </section>

        <!-- SKILL Section -->
        <section id="skills" class="py-6">
            <div class="bg-white rounded-3xl shadow-md p-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2"><i class="fas fa-code-branch text-pink-500"></i> Kompetensi & Skill</h2>
                <div class="flex flex-wrap gap-3 mt-5">
                    <span class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-medium"><i class="fab fa-python mr-1"></i> Python (Data)</span>
                    <span class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-medium"><i class="fas fa-database mr-1"></i> SQL Dasar</span>
                    <span class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-medium"><i class="fas fa-globe mr-1"></i> Pengembangan Web</span>
                    <span class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-medium"><i class="fas fa-chart-line mr-1"></i> Analisis Data</span>
                    <span class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-medium"><i class="fas fa-brain mr-1"></i> AI & SVM</span>
                    <span class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-medium"><i class="fas fa-pen-fancy mr-1"></i> UI/UX Dasar</span>
                    <span class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-medium"><i class="fas fa-chalkboard-user mr-1"></i> Komunikasi & Leadership</span>
                    <span class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-medium"><i class="fas fa-lightbulb mr-1"></i> Problem Solving</span>
                </div>
            </div>
        </section>

        <!-- SERTIFIKAT (klik untuk buka PDF) -->
        <section id="sertifikat" class="py-6">
            <div class="bg-white rounded-3xl shadow-md p-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2"><i class="fas fa-certificate text-pink-500"></i> Sertifikat & Pelatihan</h2>
                <p class="text-sm text-gray-500 mb-4">*Klik pada kartu sertifikat untuk membuka file PDF (simulasi/demo)</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- setiap sertifikat punya onclick buka pdf (simulasi pdf) -->
                    <div class="cert-card border border-pink-200 rounded-xl p-3 bg-pink-50 hover:shadow-lg" onclick="window.open('https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf', '_blank')">
                        <div class="font-bold text-pink-700">Data Science Fundamentals</div>
                        <div class="text-xs text-gray-500">DQLab - Freeclass</div>
                        <div class="text-xs mt-1"><i class="far fa-calendar-alt"></i> 2024</div>
                    </div>
                    <div class="cert-card border border-pink-200 rounded-xl p-3 bg-pink-50 hover:shadow-lg" onclick="window.open('https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf', '_blank')">
                        <div class="font-bold text-pink-700">Fundamental SQL SELECT</div>
                        <div class="text-xs text-gray-500">DQLab · 25 Maret 2024</div>
                    </div>
                    <div class="cert-card border border-pink-200 rounded-xl p-3 bg-pink-50 hover:shadow-lg" onclick="window.open('https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf', '_blank')">
                        <div class="font-bold text-pink-700">Python for Data Science</div>
                        <div class="text-xs text-gray-500">DQLab · 26 Maret 2024</div>
                    </div>
                    <div class="cert-card border border-pink-200 rounded-xl p-3 bg-pink-50 hover:shadow-lg" onclick="window.open('https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf', '_blank')">
                        <div class="font-bold text-pink-700">AI untuk Tenaga Pendidik (Microsoft)</div>
                        <div class="text-xs text-gray-500">8 Juni 2026</div>
                    </div>
                    <div class="cert-card border border-pink-200 rounded-xl p-3 bg-pink-50 hover:shadow-lg" onclick="window.open('https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf', '_blank')">
                        <div class="font-bold text-pink-700">ISO 27001 & Cyber Security</div>
                        <div class="text-xs text-gray-500">PT Aghnia · 27 Juni 2024</div>
                    </div>
                    <div class="cert-card border border-pink-200 rounded-xl p-3 bg-pink-50 hover:shadow-lg" onclick="window.open('https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf', '_blank')">
                        <div class="font-bold text-pink-700">Belajar Dasar AI (Dicoding)</div>
                        <div class="text-xs text-gray-500">13 September 2024</div>
                    </div>
                    <div class="cert-card border border-pink-200 rounded-xl p-3 bg-pink-50 hover:shadow-lg" onclick="window.open('https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf', '_blank')">
                        <div class="font-bold text-pink-700">Tentor Olimpiade Hari Tani</div>
                        <div class="text-xs text-gray-500">20 Oktober 2024</div>
                    </div>
                    <div class="cert-card border border-pink-200 rounded-xl p-3 bg-pink-50 hover:shadow-lg" onclick="window.open('https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf', '_blank')">
                        <div class="font-bold text-pink-700">Microsoft Certified Educator Prep</div>
                        <div class="text-xs text-gray-500">8 Juni 2026</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PENDIDIKAN (SD, MTS, SMA, KULIAH) -->
        <section id="pendidikan" class="py-6">
            <div class="bg-white rounded-3xl shadow-md p-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2"><i class="fas fa-school text-pink-500"></i> Riwayat Pendidikan</h2>
                <div class="mt-4 space-y-5">
                    <div class="border-l-4 border-pink-300 pl-4">
                        <div class="font-bold text-lg">Sek Ren & Men Islam At-Tahfidz ,Johor Bahru Malaysia</div>
                        <div class="text-gray-500 text-sm">Sekolah Dasar · Lulus 2015</div>
                    </div>
                    <div class="border-l-4 border-pink-300 pl-4">
                        <div class="font-bold text-lg">MTs Hidayatul Islamiyah Parit Benut,Karimun Kepualuan Riau</div>
                        <div class="text-gray-500 text-sm">Madrasah Tsanawiyah · Lulus 2018</div>
                    </div>
                    <div class="border-l-4 border-pink-300 pl-4">
                        <div class="font-bold text-lg">SMAN 4 Karimun, Kepulauan Riau</div>
                        <div class="text-gray-500 text-sm">IPA · Nilai Rata-rata 80 · Lulus Mei 2022</div>
                    </div>
                    <div class="border-l-4 border-pink-500 pl-4 bg-pink-50 p-3 rounded-r-xl">
                        <div class="font-bold text-pink-700 text-lg">Institut Teknologi Mojosari</div>
                        <div class="text-gray-700 text-sm">S1 Sistem Informasi · IPK 3.75 (Cumlaude) · Lulus 2026</div>
                        <div class="text-xs text-gray-500 mt-1">Skripsi: Klasifikasi Email Spam Bahasa Indonesia dengan Support Vector Machine </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EXPERIENCE (pengalaman kerja) seperti gambar yang rapi -->
        <section id="experience" class="py-6">
            <div class="bg-white rounded-3xl shadow-md p-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2"><i class="fas fa-briefcase text-pink-500"></i> Pengalaman Kerja</h2>
                <div class="mt-4 space-y-6">
                    <div class="bg-gray-50 rounded-xl p-4 shadow-sm">
                        <div class="flex flex-wrap justify-between items-start">
                            <div><span class="font-extrabold text-pink-600">Guru MI Hidayatul Ulum</span><span class="ml-2 text-sm text-gray-500"> (Part Time)</span></div>
                            <span class="text-xs bg-pink-100 px-3 py-1 rounded-full">Agustus 2023 – Juli 2026</span>
                        </div>
                        <p class="text-gray-600 text-sm mt-1">Mengajar Matematika, PKN, Bahasa Inggris, IPAS, coding dasar. Menyusun kurikulum kreatif, membuat kuis digital, mengelola data akademik & tabungan siswa. Meningkatkan numerasi & literasi siswa.</p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4 shadow-sm">
                        <div class="flex flex-wrap justify-between">
                            <div><span class="font-extrabold text-pink-600">KPPS 2 - Pemilu 2024</span><span class="ml-2 text-sm text-gray-500"> (KPU)</span></div>
                            <span class="text-xs bg-pink-100 px-3 py-1 rounded-full">Februari 2024</span>
                        </div>
                        <p class="text-gray-600 text-sm mt-1">Scan & pencatatan data hasil pemungutan suara, koordinasi tim rekapitulasi, akurasi data 100%, administrasi dokumen pemilu.</p>
                    </div>
                    <div class="bg-pink-50 border border-pink-200 rounded-xl p-4">
                        <i class="fas fa-chalkboard-user text-pink-500 mr-1"></i> <strong class="text-pink-800">Total pengalaman mengajar >4 tahun</strong> (termasuk privat, les, dan bimbingan olimpiade) yang membentuk komunikasi, kepemimpinan, dan manajemen kelas.
                    </div>
                </div>
            </div>
        </section>

        <!-- PROJECT (Portofolio Project) -->
        <section id="project" class="py-6">
            <div class="bg-white rounded-3xl shadow-md p-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2"><i class="fas fa-laptop-code text-pink-500"></i> Project Unggulan</h2>
                <div class="grid md:grid-cols-2 gap-5 mt-5">
                    <div class="project-card bg-gradient-to-r from-pink-50 to-white rounded-xl p-4 border border-pink-100">
                        <i class="fas fa-chalkboard-user text-pink-500 text-2xl mb-2"></i>
                        <h3 class="font-bold text-lg">Sistem Informasi Akademik</h3>
                        <p class="text-sm text-gray-600">Membangun modul pengelolaan nilai & jadwal berbasis web (magang). Menggunakan MySQL & PHP dasar.</p>
                    </div>
                    <div class="project-card bg-gradient-to-r from-pink-50 to-white rounded-xl p-4 border border-pink-100">
                        <i class="fas fa-envelope-open-text text-pink-500 text-2xl mb-2"></i>
                        <h3 class="font-bold text-lg">Klasifikasi Email Spam - SVM</h3>
                        <p class="text-sm text-gray-600">Penelitian menggunakan Python, TF-IDF, SVM. Akurasi 88% untuk deteksi spam bahasa Indonesia.</p>
                    </div>
                    <div class="project-card bg-gradient-to-r from-pink-50 to-white rounded-xl p-4 border border-pink-100">
                        <i class="fas fa-chart-simple text-pink-500 text-2xl mb-2"></i>
                        <h3 class="font-bold text-lg">Dashboard Analisis Penjualan</h3>
                        <p class="text-sm text-gray-600">Visualisasi data dengan Python (Pandas, Matplotlib) untuk memberikan insight bisnis.</p>
                    </div>
                    <div class="project-card bg-gradient-to-r from-pink-50 to-white rounded-xl p-4 border border-pink-100">
                        <i class="fas fa-mobile-alt text-pink-500 text-2xl mb-2"></i>
                        <h3 class="font-bold text-lg">UI/UX Aplikasi Manajemen Tugas</h3>
                        <p class="text-sm text-gray-600">Wireframe & mockup menggunakan Figma, pendekatan user-centered design.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- BLOG Section : Berisi Skripsi & Harian (Catatan) -->
        <section id="blog" class="py-6">
            <div class="bg-white rounded-3xl shadow-md p-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2"><i class="fab fa-blogger text-pink-500"></i> Blog & Catatan</h2>
                <div class="grid md:grid-cols-2 gap-6 mt-5">
                    <div class="blog-card bg-pink-50 rounded-2xl p-5 border border-pink-200">
                        <div class="flex items-center gap-2 text-pink-600"><i class="fas fa-graduation-cap text-xl"></i> <span class="font-bold">Skripsi & Riset</span></div>
                        <h3 class="font-bold text-gray-800 mt-2">"Klasifikasi Email Spam Bahasa Indonesia menggunakan SVM"</h3>
                        <p class="text-sm text-gray-600 mt-2">Penelitian ini berhasil mengimplementasikan algoritma Support Vector Machine untuk mendeteksi email spam dengan akurasi 88%. Saya melakukan preprocessing teks (tokenisasi, stopword removal) dan ekstraksi fitur TF-IDF. Proyek ini menjadi fondasi minat saya di bidang AI dan Natural Language Processing.</p>
                        <div class="text-xs text-pink-500 mt-2">📅 Publikasi: 2025</div>
                    </div>
                    <div class="blog-card bg-white rounded-2xl p-5 border border-pink-200 shadow-sm">
                        <div class="flex items-center gap-2 text-pink-500"><i class="fas fa-pen-fancy"></i> <span class="font-bold">Harian Saya</span></div>
                        <div class="mt-2 space-y-3">
                            <div class="border-b border-pink-100 pb-2">
                                <p class="text-sm font-semibold">✨ Perjalanan Belajar AI</p>
                                <p class="text-xs text-gray-500">12 Juni 2026 — Hari ini menyelesaikan course "Belajar Dasar AI" dari Dicoding dan langsung mencoba implementasi neural network sederhana. Semangat!</p>
                            </div>
                            <div class="border-b border-pink-100 pb-2">
                                <p class="text-sm font-semibold">📊 Workshop Data Analyst</p>
                                <p class="text-xs text-gray-500">5 Mei 2026 — Mengikuti workshop SQL & Tableau, mendapat wawasan baru tentang visualisasi data untuk bisnis.</p>
                            </div>
                            <div>
                                <p class="text-sm font-semibold">💡 Refleksi Mengajar</p>
                                <p class="text-xs text-gray-500">2 April 2026 — Sesi mengajar coding dasar untuk anak MI sangat seru, mereka antusias membuat game sederhana dengan scratch.</p>
                            </div>
                        </div>
                        <div class="mt-3 text-right text-xs text-pink-400"><i class="fas fa-heart"></i> Terus belajar dan berbagi</div>
                    </div>
                </div>
                <div class="mt-5 text-center text-gray-500 text-sm bg-pink-50 p-3 rounded-full">
                    <i class="fas fa-newspaper"></i> Blog pribadi: cerita skripsi, riset AI, dan daily journal perjalanan karier.
                </div>
            </div>
        </section>

        <!-- footer -->
        <footer class="mt-10 text-center py-6 border-t border-pink-200 text-gray-500 text-sm">
            <p><i class="fas fa-crown text-pink-400"></i> Wanda Putri Prasetio — CV Profesional Pink | Tersedia untuk kolaborasi & peluang kerja</p>
            <p class="text-xs mt-1">© 2026 | Terinspirasi dari semangat digital & inovasi</p>
        </footer>
    </div>

    <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileNav = document.getElementById('mobileNav');
        if(menuBtn){
            menuBtn.addEventListener('click', () => {
                mobileNav.classList.toggle('hidden');
                const icon = menuBtn.querySelector('i');
                if(icon.classList.contains('fa-bars')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        }
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.add('hidden');
                const icon = menuBtn?.querySelector('i');
                if(icon) { icon.classList.remove('fa-times'); icon.classList.add('fa-bars');}
            });
        });
        // Active link highlight on scroll
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll(".nav-link");
        function updateActive(){
            let current = "";
            const scrollPos = window.scrollY + 130;
            sections.forEach(section => {
                const top = section.offsetTop;
                const height = section.offsetHeight;
                if(scrollPos >= top && scrollPos < top + height){
                    current = section.getAttribute("id");
                }
            });
            navLinks.forEach(link => {
                link.classList.remove("active");
                const href = link.getAttribute("href").substring(1);
                if(href === current) link.classList.add("active");
            });
        }
        window.addEventListener("scroll", updateActive);
        window.addEventListener("load", updateActive);
    </script>
</body>
</html>
