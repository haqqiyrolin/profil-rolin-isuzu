<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sales Isuzu</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body class="bg-gray-100 text-gray-800 antialiased">

    <!-- Header -->
    <header class="p-4 md:p-6 bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl md:text-2xl font-bold text-gray-900">RoLiN</h1>
            <nav class="hidden md:flex space-x-6">
                <a href="#home" class="text-gray-600 hover:text-emerald-600 transition-colors duration-300">Beranda</a>
                <a href="#tentang" class="text-gray-600 hover:text-emerald-600 transition-colors duration-300">Tentang Saya</a>
                <a href="#produk" class="text-gray-600 hover:text-emerald-600 transition-colors duration-300">Produk</a>
                <a href="#kontak" class="text-gray-600 hover:text-emerald-600 transition-colors duration-300">Kontak</a>
            </nav>
            <a href="#kontak" class="md:hidden py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">Hubungi</a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8 md:py-16 space-y-20">

        <!-- Home Section -->
        <section id="home" class="min-h-[70vh] flex items-center justify-center bg-gradient-to-br from-emerald-50 via-white to-gray-100 rounded-2xl shadow-xl mb-12">
            <div class="flex flex-col md:flex-row items-center gap-10 w-full max-w-5xl px-4 py-12">
                <div class="flex justify-center md:justify-end w-full md:w-1/2">
                    <div id="profile-anim"
                        class="profile-frame group opacity-0 -translate-y-32 scale-75 transition-all duration-700 ease-out hover:scale-105">
                        <div class="profile-circle bg-gradient-to-br from-emerald-200 via-white to-emerald-100 shadow-2xl"></div>
                        <img src="Profil.png" alt="Foto Profil Markering Isuzu Rolin"
                            class="profile-img shadow-lg group-hover:shadow-emerald-300 transition-all duration-500">
                        <!-- Efek animasi glow -->
                        <div class="absolute inset-0 rounded-full pointer-events-none animate-pulse bg-emerald-200 opacity-20"></div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 text-center md:text-left space-y-6">
                    <h2 class="text-4xl md:text-6xl font-extrabold text-emerald-700 leading-tight drop-shadow-lg animate-fade-in">
                        Rolin,<br>
                        <span class="text-gray-900">Marketing Isuzu Terpercaya</span>
                    </h2>
                    <p class="text-gray-600 text-lg md:text-xl font-medium animate-fade-in delay-200">
                        Dapatkan penawaran terbaik untuk kendaraan niaga dan komersial Isuzu.<br>
                        Saya siap membantu Anda menemukan solusi transportasi yang tepat untuk bisnis Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4 mt-6 animate-fade-in delay-300">
                        <a href="https://wa.me/6281256719509"
                            class="py-3 px-8 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-full shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12c0 1.5.385 2.923 1.127 4.205L2.01 22.01l5.805-1.117A10.02 10.02 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm3.627 12.597l-1.397-.84a.433.433 0 00-.518.04l-.872.96a.434.434 0 01-.65-.04l-1.12-1.353a.433.433 0 01-.04-.65l.96-.872a.433.433 0 00.04-.518l-.84-1.397a.433.433 0 00-.52-.162l-1.284.456a.433.433 0 00-.256.574l.98 2.08a4.94 4.94 0 001.385 1.543 4.94 4.94 0 001.543 1.385l2.08.98a.433.433 0 00.574-.256l.456-1.284a.433.433 0 00-.162-.52z"/></svg>
                            Hubungi via WhatsApp
                        </a>
                        <a href="#produk"
                            class="py-3 px-8 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                            Lihat Produk
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tentang Saya Section -->
        <section id="tentang" class="bg-white p-8 md:p-12 rounded-2xl shadow-xl">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-6 text-emerald-600">Tentang Saya & Tim</h2>
            <div class="space-y-4 text-gray-700 text-lg text-center md:text-left mb-10">
                <p>
                    Sebagai Sales Isuzu profesional, saya telah berdedikasi lebih dari 5 tahun melayani kebutuhan pelanggan di bidang kendaraan niaga. Pengalaman ini memperkaya pemahaman saya tentang setiap detail produk Isuzu, mulai dari Isuzu Traga yang tangguh hingga Isuzu Elf yang efisien.
                </p>
                <p>
                    Saya berkomitmen memberikan layanan terbaik, mulai dari konsultasi produk, proses pengajuan kredit, hingga layanan purna jual. Bersama tim sales yang solid dan berpengalaman, kami siap membantu Anda menemukan solusi transportasi terbaik untuk bisnis Anda.
                </p>
            </div>
            <!-- Foto Tim Sales (Slider) -->
            <div class="swiper swiper-team w-full max-w-3xl mx-auto mb-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex flex-col items-center">
                        <div class="overflow-hidden rounded-xl shadow-2xl border-4 border-emerald-400 bg-white hover:scale-105 hover:border-emerald-600 transition-all duration-300 cursor-pointer w-64 h-80 flex items-center justify-center">
                            <img src="img/team1.jpg" alt="Sales 1"
                                class="max-w-full max-h-full object-contain transition-transform duration-300 hover:scale-110">
                        </div>
                        <div class="mt-4 text-center">
                            <span class="block font-bold text-emerald-700 text-lg">Andi</span>
                            <span class="block text-gray-500 text-sm">Sales Executive</span>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col items-center">
                        <div class="overflow-hidden rounded-xl shadow-2xl border-4 border-emerald-400 bg-white hover:scale-105 hover:border-emerald-600 transition-all duration-300 cursor-pointer w-64 h-80 flex items-center justify-center">
                            <img src="img/team2.jpg" alt="Sales 2"
                                class="max-w-full max-h-full object-contain transition-transform duration-300 hover:scale-110">
                        </div>
                        <div class="mt-4 text-center">
                            <span class="block font-bold text-emerald-700 text-lg">Budi</span>
                            <span class="block text-gray-500 text-sm">Sales Support</span>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col items-center">
                        <div class="overflow-hidden rounded-xl shadow-2xl border-4 border-emerald-400 bg-white hover:scale-105 hover:border-emerald-600 transition-all duration-300 cursor-pointer w-64 h-80 flex items-center justify-center">
                            <img src="img/team3.jpg" alt="Sales 3"
                                class="max-w-full max-h-full object-contain transition-transform duration-300 hover:scale-110">
                        </div>
                        <div class="mt-4 text-center">
                            <span class="block font-bold text-emerald-700 text-lg">Citra</span>
                            <span class="block text-gray-500 text-sm">Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- Produk Section -->
        <section id="produk">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-emerald-600">Katalog Produk Isuzu</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Product Card 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl transform transition-transform duration-300 hover:scale-105">
                    <img src="img/Traga 1.jpg" alt="Isuzu Traga" class="rounded-xl mb-4 w-full h-auto">
                    <h3 class="text-2xl font-bold mb-2 text-gray-900">Isuzu Traga</h3>
                    <p class="text-gray-600 mb-4">
                        Truk ringan yang andal dan efisien, pilihan tepat untuk angkutan barang dalam kota.
                    </p>
                    <ul class="text-gray-700 text-sm list-disc list-inside space-y-1 mb-4">
                        <li>Mesin Diesel 2.5L bertenaga</li>
                        <li>Kapasitas angkut besar</li>
                        <li>Desain kabin modern</li>
                    </ul>
                    <a href="https://wa.me/6281256719509" class="block w-full text-center py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg transition-colors duration-300">
                        Ajukan Penawaran
                    </a>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl transform transition-transform duration-300 hover:scale-105">
                    <img src="img/Dump Truck.jpg" alt="Isuzu Elf" class="rounded-xl mb-4 w-full h-auto">
                    <h3 class="text-2xl font-bold mb-2 text-gray-900">Isuzu Elf</h3>
                    <p class="text-gray-600 mb-4">
                        Mini bus dan microbus terlaris, ideal untuk transportasi penumpang dengan kenyamanan maksimal.
                    </p>
                    <ul class="text-gray-700 text-sm list-disc list-inside space-y-1 mb-4">
                        <li>Hemat bahan bakar</li>
                        <li>Suspensi nyaman</li>
                        <li>Berbagai pilihan varian</li>
                    </ul>
                    <a href="https://wa.me/6281256719509" class="block w-full text-center py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg transition-colors duration-300">
                        Ajukan Penawaran
                    </a>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl transform transition-transform duration-300 hover:scale-105">
                    <img src="img/Giga.avif" alt="Isuzu Giga" class="rounded-xl mb-4 w-full h-auto">
                    <h3 class="text-2xl font-bold mb-2 text-gray-900">Isuzu Giga</h3>
                    <p class="text-gray-600 mb-4">
                        Truk besar yang dirancang untuk pekerjaan berat dengan performa dan keandalan terbaik.
                    </p>
                    <ul class="text-gray-700 text-sm list-disc list-inside space-y-1 mb-4">
                        <li>Mesin bertenaga dan efisien</li>
                        <li>Kapasitas muatan ekstra</li>
                        <li>Fitur keselamatan lengkap</li>
                    </ul>
                    <a href="https://wa.me/6281256719509" class="block w-full text-center py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg transition-colors duration-300">
                        Ajukan Penawaran
                    </a>
                </div>

            </div>
        </section>

        <!-- Kontak Section -->
        <section id="kontak" class="bg-white p-8 md:p-12 rounded-2xl shadow-xl text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-6">Hubungi Saya</h2>
            <p class="text-gray-700 mb-8">
                Saya siap membantu Anda. Silakan hubungi saya melalui salah satu cara di bawah ini untuk konsultasi lebih lanjut atau untuk mendapatkan penawaran.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <!-- Contact Card 1 -->
                <div class="bg-gray-100 p-6 rounded-xl shadow-lg transition-transform duration-300 hover:scale-105">
                    <a href="https://wa.me/6281256719509" class="text-gray-800">
                        <svg class="h-10 w-10 mx-auto text-emerald-600 mb-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 1.5.385 2.923 1.127 4.205L2.01 22.01l5.805-1.117A10.02 10.02 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm3.627 12.597l-1.397-.84a.433.433 0 00-.518.04l-.872.96a.434.434 0 01-.65-.04l-1.12-1.353a.433.433 0 01-.04-.65l.96-.872a.433.433 0 00.04-.518l-.84-1.397a.433.433 0 00-.52-.162l-1.284.456a.433.433 0 00-.256.574l.98 2.08a4.94 4.94 0 001.385 1.543 4.94 4.94 0 001.543 1.385l2.08.98a.433.433 0 00.574-.256l.456-1.284a.433.433 0 00-.162-.52z"/>
                        </svg>
                        <p class="text-gray-800 font-semibold">WhatsApp</p>
                    </a>
                </div>

                <!-- Contact Card 2 -->
                <div class="bg-gray-100 p-6 rounded-xl shadow-lg transition-transform duration-300 hover:scale-105">
                    <a href="mailto:haqqiyrolin@gmail.com" class="text-gray-800">
                        <svg class="h-10 w-10 mx-auto text-emerald-600 mb-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        <p class="text-gray-800 font-semibold">Email</p>
                    </a>
                </div>

                <!-- Contact Card 3 -->
                <div class="bg-gray-100 p-6 rounded-xl shadow-lg transition-transform duration-300 hover:scale-105">
                    <a href="tel:+6281256719509" class="text-gray-800">
                        <svg class="h-10 w-10 mx-auto text-emerald-600 mb-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM4 6h16v12H4V6zm3 13h10v1H7v-1zm1-3.5h8v1H8v-1z"/>
                        </svg>
                        <p class="text-gray-800 font-semibold">Telepon</p>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-white text-gray-600 text-center p-6 mt-12">
        <p>&copy; 2024 Rolin, Sales Isuzu. Semua Hak Cipta Dilindungi.</p>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-team', {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loop: true
    });
</script>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            const el = document.getElementById('profile-anim');
            el.classList.remove('opacity-0', 'translate-y-[-200px]');
            el.classList.add('opacity-100', 'translate-y-0', 'transition-all', 'duration-700');
        }, 300); // jeda sedikit agar lebih smooth
    });
</script>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            const el = document.getElementById('profile-anim');
            el.classList.remove('opacity-0', '-translate-y-32', 'scale-75');
            el.classList.add('opacity-100', 'translate-y-0', 'scale-100');
        }, 300);
    });
</script>
</body>
</html>