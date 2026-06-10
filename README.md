<!DOCTYPE html>
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
</head>
</head>
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
</body>
</html>
