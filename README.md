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

    <!-- Navbar -->
 
<body class="bg-gray-100">
  <nav class="bg-green-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center space-x-3"><img border="0" data-original-height="50" data-original-width="720" height="317" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" width="50">
      
        <span class="text-white font-bold text-lg">MI HIDAYATUL ULUM</span>
      </div>

      <!-- Menu -->
      <ul class="hidden md:flex space-x-6">
        <li>
          <a class="text-white hover:text-gray-300 flex items-center" href="<?= base_url();?>home/index">
            <i class="fas fa-home mr-1"></i> Home
          </a>
        </li>

        <!-- Profil Dropdown -->
       <div class="relative group">
        <a class="text-white hover:text-gray-300 flex items-center cursor-pointer " href="<?= base_url();?>home/profil">
            <i class="fas fa-user mr-1"></i> Profil
          </a>
          <ul class="absolute left-0 hidden bg-green-500 text-white group-hover:block rounded-lg shadow-md">
            <li><a class="flex items-center p-2 text-sm font-medium hover:bg-green-700" href="<?= base_url();?>home/profil_visi_misi"><i class="fas fa-bullseye mr-2"></i> Visi & Misi</a></li>
            <li><a class="flex items-center p-2 text-sm font-medium hover:bg-green-700" href="<?= base_url();?>home/profil_sejarah"><i class="fas fa-school mr-2"></i> Sejarah</a></li>
            <li><a class="flex items-center p-2 text-sm font-medium hover:bg-green-700" href="<?= base_url();?>home/profil_sambutan"><i class="fas fa-microphone mr-2"></i> Sambutan Kepsek</a></li>
          </ul>
        </div>
        

        <!-- Program Madrasah Dropdown -->
     <div class="relative group">
          <a class="text-white hover:text-gray-300 flex items-center cursor-pointer" href="<?= base_url();?>home/program_madrasah">
            <i class="fas fa-book mr-1"></i> Program Madrasah
           </a>
          <ul class="absolute left-0 hidden bg-green-500 text-white group-hover:block rounded-lg shadow-md">
            <li class="relative group">
              <a class="flex items-center p-2 text-sm font-medium hover:bg-green-700" href="#">
                <i class="fas fa-users mr-2"></i> Ekstrakurikuler
              </a>
              <ul class="absolute left-full top-0 hidden bg-green-600 text-white rounded-lg shadow-md">
                <li><a class="block px-4 py-2 hover:bg-green-700" href="<?= base_url();?>home/pramuka"><i class="fas fa-campground mr-2"></i> Pramuka</a></li>
                <li><a class="block px-4 py-2 hover:bg-green-700" href="<?= base_url();?>home/tik_komputer"><i class="fas fa-desktop mr-2"></i> TIK Komputer</a></li>
                <li><a class="block px-4 py-2 hover:bg-green-700" href="<?= base_url();?>home/qiraat"><i class="fas fa-quran mr-2"></i> Qiraat</a></li>
                <li><a class="block px-4 py-2 hover:bg-green-700" href="<?= base_url();?>home/hadroh"><i class="fas fa-drum mr-2"></i> Hadroh</a></li>
              </ul>
            </li>
            <li class="relative group">
              <a class="flex items-center p-2 text-sm font-medium hover:bg-green-700" href="#">
                <i class="fas fa-home mr-2"></i> Program Rumah Unggulan
              </a>
              <ul class="absolute left-full top-0 hidden bg-green-600 text-white rounded-lg shadow-md w-48">
                <li><a class="block px-4 py-2 hover:bg-green-700" href="<?= base_url();?>home/rumah_digital"><i class="fas fa-laptop mr-2"></i> Rumah Digital</a></li>
                <li><a class="block px-4 py-2 hover:bg-green-700" href="<?= base_url();?>home/rumah_sosialbudaya"><i class="fas fa-users mr-2"></i> Rumah Sosial Budaya</a></li>
              </ul>
            </li>
          </ul>
        </div>

         <!-- JavaScript for Dropdown Hover -->
  <script>
    document.querySelectorAll(".relative.group").forEach(group => {
      group.addEventListener("mouseenter", () => {
        group.querySelector("ul").classList.remove("hidden");
      });
      group.addEventListener("mouseleave", () => {
        group.querySelector("ul").classList.add("hidden");
      });
    });
  </script>


         <!-- Links -->
        <li>
          <a class="text-white hover:text-gray-300 flex items-center"href="<?= base_url();?>home/ppdb">
             <i class="fas fa-book-reader mr-1"></i> PPDB
          </a>
        </li>
        </li>


        <!-- Login -->
        <li>
          <a class="text-white hover:text-gray-300 flex items-center" href="<?= base_url();?>home/login">
            <i class="fas fa-sign-in-alt mr-1"></i> Login
          </a>
        </li>
      </ul>

      <!-- Hamburger Menu -->
      <div class="md:hidden">
        <button id="menu-toggle" class="text-white text-2xl focus:outline-none">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>

  </nav>

  <!-- JavaScript for Mobile Menu -->
  <script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
      document.getElementById("mobile-menu").classList.toggle("hidden");
    });
  </script>
</body>

                    </button>
                </div>
            </div>
