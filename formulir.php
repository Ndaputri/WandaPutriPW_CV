<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Peserta Didik Baru - MI Hidayatul Ulum</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <style>
        /* Tambahkan animasi untuk transisi halaman */
        .page-transition {
            transition: all 0.3s ease-in-out;
        }
        
        .hidden-page {
            display: none;
        }
    </style>
</head>
<body class="bg-green-100">
    <!-- Navigasi Sederhana -->
    <nav class="bg-green-700 text-white shadow-lg">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">
                    <a href="#" onclick="navigateTo('home')" class="hover:text-green-200">MI Hidayatul Ulum</a>
                </div>
                <div class="space-x-4">
                    <a href="#" onclick="navigateTo('home')" class="hover:text-green-200">Beranda</a>
                    <a href="#" onclick="navigateTo('info')" class="hover:text-green-200">Info Pendaftaran</a>
                    <a href="#" onclick="navigateTo('formulir')" class="hover:text-green-200">Formulir</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten Beranda -->
    <div id="homePage" class="container mx-auto mt-10 page-transition">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-green-500 text-white px-6 py-4 text-center">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                     alt="Logo MI Hidayatul Ulum" class="mx-auto w-24 mb-2">
                <h2 class="text-2xl font-bold">SELAMAT DATANG</h2>
                <p class="text-lg">MI Hidayatul Ulum - Membangun Generasi Berakhlak Mulia</p>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-green-700">Visi Madrasah</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Terwujudnya peserta didik yang beriman, bertaqwa, berilmu amaliah, beramal ilmiah, 
                            berakhlakul karimah, dan berwawasan lingkungan.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-green-700">Misi Madrasah</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Melaksanakan pembelajaran yang aktif, inovatif, kreatif, efektif, dan menyenangkan</li>
                            <li>Mengembangkan potensi peserta didik secara optimal</li>
                            <li>Menanamkan nilai-nilai keislaman dalam kehidupan sehari-hari</li>
                            <li>Menciptakan lingkungan madrasah yang bersih, sehat, dan berwawasan lingkungan</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <button onclick="navigateTo('info')" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
                        Lihat Info Pendaftaran
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Konten Info Pendaftaran -->
    <div id="infoPage" class="container mx-auto mt-10 page-transition hidden-page">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-green-500 text-white px-6 py-4">
                <h2 class="text-xl font-semibold">Informasi Pendaftaran Peserta Didik Baru</h2>
                <p>Tahun Ajaran 2024/2025</p>
            </div>
            <div class="p-6">
                <!-- Timeline Pendaftaran -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-green-700 mb-4">📅 Timeline Pendaftaran</h3>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <div class="bg-green-100 rounded-full p-2 mr-3">
                                <span class="text-green-700 font-bold">1</span>
                            </div>
                            <div>
                                <p class="font-semibold">Pendaftaran Online Dibuka</p>
                                <p class="text-gray-600">1 Juni - 30 Juni 2024</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 rounded-full p-2 mr-3">
                                <span class="text-green-700 font-bold">2</span>
                            </div>
                            <div>
                                <p class="font-semibold">Verifikasi Berkas</p>
                                <p class="text-gray-600">1 Juli - 10 Juli 2024</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 rounded-full p-2 mr-3">
                                <span class="text-green-700 font-bold">3</span>
                            </div>
                            <div>
                                <p class="font-semibold">Pengumuman Hasil Seleksi</p>
                                <p class="text-gray-600">15 Juli 2024</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 rounded-full p-2 mr-3">
                                <span class="text-green-700 font-bold">4</span>
                            </div>
                            <div>
                                <p class="font-semibold">Daftar Ulang</p>
                                <p class="text-gray-600">16 Juli - 20 Juli 2024</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Persyaratan -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-green-700 mb-4">📋 Persyaratan Pendaftaran</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Fotocopy Akta Kelahiran (2 lembar)</li>
                        <li>Fotocopy Kartu Keluarga (2 lembar)</li>
                        <li>Pas foto 3x4 (2 lembar)</li>
                        <li>Fotocopy Ijazah/SKL (2 lembar) untuk kelas 2-6</li>
                        <li>Fotocopy KTP Orang Tua/Wali (2 lembar)</li>
                    </ul>
                </div>

                <!-- Biaya -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-green-700 mb-4">💰 Biaya Pendaftaran</h3>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700"><strong>Formulir Pendaftaran:</strong> Rp 100.000</p>
                        <p class="text-gray-700 mt-2"><strong>SPP Bulanan:</strong> Rp 50.000</p>
                        <p class="text-gray-500 text-sm mt-3">*Biaya dapat berubah sewaktu-waktu sesuai kebijakan madrasah</p>
                    </div>
                </div>

                <!-- Kontak -->
                <div>
                    <h3 class="text-lg font-semibold text-green-700 mb-4">📞 Kontak Panitia PPDB</h3>
                    <div class="space-y-2">
                        <p class="text-gray-700">📱 Bpk. Ahmad - 0812 3456 7890</p>
                        <p class="text-gray-700">📱 Ibu Siti - 0812 3456 7891</p>
                        <p class="text-gray-700">📧 Email: ppdb@hidayatululum.sch.id</p>
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <button onclick="navigateTo('formulir')" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
                        Isi Formulir Pendaftaran
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Konten Formulir (Halaman Utama Form) -->
    <div id="formulirPage" class="container mx-auto mt-10 page-transition hidden-page">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-green-500 text-white px-6 py-4 text-center">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                     alt="Logo MI Hidayatul Ulum" class="mx-auto w-24 mb-2">
                <h2 class="text-lg font-semibold">FORMULIR PESERTA DIDIK BARU</h2>
                <p class="text-sm">Isi data dengan lengkap dan benar</p>
            </div>
            <div class="p-6">
                <form id="registrationForm">
                    <h3 class="text-lg font-semibold mb-4">Data Pribadi Peserta Didik</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700">Nama Lengkap</label>
                            <input type="text" id="nama" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                         <div>
                            <label class="block text-gray-700">Nik</label>
                            <input type="text" id="nik" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700">Agama</label>
                            <input type="text" id="agama" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Kewarganegaraan</label>
                            <input type="text" id="kewarganegaraan" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Moda Transportasi ke Sekolah</label>
                            <input type="text" id="transportasi" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Anak ke Berapa dalam Keluarga</label>
                            <input type="number" id="anak_ke" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Jumlah Saudara Kandung</label>
                            <input type="number" id="jumlah_saudara" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                    </div>

                    <h3 class="text-lg font-semibold mt-6 mb-4">Data Sekolah Asal</h3>
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama Sekolah Sebelumnya</label>
                        <input type="text" id="sekolah_asal" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">NISN (Jika ada, jika belum isi 0)</label>
                        <input type="text" id="nisn" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    </div>

                    <h3 class="text-lg font-semibold mt-6 mb-4">Data Orang Tua/Wali</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700">Nama Orang Tua/Wali</label>
                            <input type="text" id="nama_ortu" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Pendidikan Terakhir</label>
                            <input type="text" id="pendidikan_ortu" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Pekerjaan</label>
                            <input type="text" id="pekerjaan_ortu" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Penghasilan Bulanan</label>
                            <input type="text" id="penghasilan" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Alamat Ortu</label>
                            <textarea id="alamat_ortu" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required rows="3"></textarea>
                        </div>
                        <div>
                            <label class="block text-gray-700">Nomor Telepon</label>
                            <input type="text" id="nomor_telepon" class="w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="block text-gray-700">Alamat Lengkap</label>
                        <textarea id="alamat" name="alamat" class="mt-1 block w-full bg-green-50 border border-green-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required rows="3"></textarea>
                    </div>
                    
                    <div class="flex gap-4">
                        <button type="button" onclick="generatePDF()" class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition">Download PDF</button>
                        <button type="reset" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition">Reset Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- WhatsApp Button -->
    <div class="fixed bottom-4 right-4">
        <button class="bg-green-500 text-white px-4 py-2 rounded-full shadow-lg flex items-center hover:bg-green-600 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp mr-2" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
            </svg>
            <a href="https://wa.me/6281249327710?text=Assalaamu'alaikum.%20Saya%20ingin%20mengirimkan%20formulir%20pendaftaran." class="text-white" target="_blank">
                KIRIM PDF KE SINI
            </a>
        </button>
    </div>

    <script>
    // Fungsi navigasi dengan hash URL
    function navigateTo(page) {
        // Sembunyikan semua halaman
        document.getElementById('homePage').classList.add('hidden-page');
        document.getElementById('infoPage').classList.add('hidden-page');
        document.getElementById('formulirPage').classList.add('hidden-page');
        
        // Tampilkan halaman yang dipilih
        if (page === 'home') {
            document.getElementById('homePage').classList.remove('hidden-page');
            window.location.hash = 'home';
        } else if (page === 'info') {
            document.getElementById('infoPage').classList.remove('hidden-page');
            window.location.hash = 'info/formulir';
        } else if (page === 'formulir') {
            document.getElementById('formulirPage').classList.remove('hidden-page');
            window.location.hash = 'formulir';
        }
    }

    // Cek hash URL saat halaman dimuat
    function checkHash() {
        const hash = window.location.hash.substring(1); // Hapus karakter #
        if (hash === 'home' || hash === '') {
            navigateTo('home');
        } else if (hash === 'info/formulir') {
            navigateTo('info');
        } else if (hash === 'formulir') {
            navigateTo('formulir');
        } else {
            navigateTo('home');
        }
    }

    // Jalankan saat halaman dimuat
    window.addEventListener('load', checkHash);
    
    // Jalankan saat hash berubah
    window.addEventListener('hashchange', checkHash);

    function generatePDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        
        // Header Sekolah
        doc.setFont("helvetica", "bold");
        doc.setFontSize(14);
        doc.text("MADRASAH IBTIDAIYAH 'HIDAYATUL ULUM'", 50, 15);
        doc.setFontSize(10);
        doc.text("NSM: 111235180087 - NPSN: 60717631 - NPWP: 31.223.698.7-655.000", 50, 22);
        doc.text("Dsn. Tengger, Ds. Blongko, Kec. Ngetos, Kab. Nganjuk (64474)", 50, 27);
        doc.text("Telp/HP: 081357251463 - Email: hidayatululumtengger87@gmail.com", 50, 32);
        doc.line(15, 35, 195, 35);

        // Judul formulir
        doc.setFont("times", "bold");
        doc.setFontSize(14);
        doc.text("FORMULIR PENDAFTARAN PESERTA DIDIK BARU", 50, 45);

        // Ambil data dari form
        let nama = document.getElementById("nama").value;
        let nik = document.getElementById("nik").value;
        let tempatLahir = document.getElementById("tempat_lahir").value;
        let tanggalLahir = document.getElementById("tanggal_lahir").value;
        let jenisKelamin = document.getElementById("jenis_kelamin").value;
        let agama = document.getElementById("agama").value;
        let kewarganegaraan = document.getElementById("kewarganegaraan").value;
        let transportasi = document.getElementById("transportasi").value;
        let anakKe = document.getElementById("anak_ke").value;
        let jumlahSaudara = document.getElementById("jumlah_saudara").value;
        let sekolahAsal = document.getElementById("sekolah_asal").value;
        let nisn = document.getElementById("nisn").value;
        let namaOrtu = document.getElementById("nama_ortu").value;
        let pendidikanOrtu = document.getElementById("pendidikan_ortu").value;
        let pekerjaanOrtu = document.getElementById("pekerjaan_ortu").value;
        let penghasilan = document.getElementById("penghasilan").value;
        let alamatOrtu = document.getElementById("alamat_ortu").value;
        let nomorTelepon = document.getElementById("nomor_telepon").value;
        let alamat = document.getElementById("alamat").value;

        let content = `
        A. DATA PRIBADI PESERTA DIDIK
        ========================================
        Nama Lengkap            : ${nama}
        NIK                     : ${nik}
        Tempat, Tgl Lahir       : ${tempatLahir}, ${tanggalLahir}
        Jenis Kelamin           : ${jenisKelamin}
        Agama                   : ${agama}
        Kewarganegaraan         : ${kewarganegaraan}
        Transportasi ke Sekolah : ${transportasi}
        Anak ke-                : ${anakKe}
        Jumlah Saudara Kandung  : ${jumlahSaudara}
        
        B. DATA SEKOLAH ASAL
        ========================================
        Sekolah Sebelumnya      : ${sekolahAsal}
        NISN                    : ${nisn}

        C. DATA ORANG TUA/WALI
        ========================================
        Nama Orang Tua/Wali     : ${namaOrtu}
        Pendidikan Terakhir     : ${pendidikanOrtu}
        Pekerjaan               : ${pekerjaanOrtu}
        Penghasilan Bulanan     : ${penghasilan}
        Alamat Orang Tua        : ${alamatOrtu}
        Nomor Telepon           : ${nomorTelepon}

        D. ALAMAT LENGKAP
        ========================================
        ${alamat}
        `;

        // Format isi agar lebih rapi dalam PDF
        doc.setFont("times", "normal");
        doc.setFontSize(11);
        let lines = doc.splitTextToSize(content, 180);
        doc.text(lines, 20, 55);

        // Tambahkan footer
        doc.setFontSize(8);
        doc.text("© 2024 MI Hidayatul Ulum - Sistem PPDB Online", 70, 280);

        // Simpan PDF
        doc.save("formulir_pendaftaran_" + nama + ".pdf");
        
        // Tampilkan notifikasi
        alert("PDF berhasil diunduh! Silakan kirimkan ke nomor WhatsApp yang tersedia.");
    }
    </script>
</body>
</html>
