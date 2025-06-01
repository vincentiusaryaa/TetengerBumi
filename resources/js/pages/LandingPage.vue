<template>
    <div class="bg-white">
        <!-- Navbar -->
        <nav class="fixed top-6 left-1/2 transform -translate-x-1/2 w-[1220px] h-[80px] rounded-[57px] bg-white flex items-center justify-between px-6 shadow-md z-50">
        <!-- Kiri: Logo  -->
            <div class="flex items-center space-x-4">
                <img src="/images/tb2.png" alt="Logo" class="h-[42px] w-[134px]" />
            </div>
            <div class="flex items-center space-x-6">
                <Link href="/landingpage" class="text-sm font-medium text-gray-700 hover:text-black">Beranda</Link>
                <Link href="/proker" class="text-sm font-medium text-gray-700 hover:text-black">Program Kerja</Link>
                <Link href="/lokasi" class="text-sm font-medium text-gray-700 hover:text-black">Lokasi Tanam</Link>
                <Link href="/donasi" class="text-sm font-medium text-gray-700 hover:text-black">Donasi</Link>
                <Link href="/aboutus" class="text-sm font-medium text-gray-700 hover:text-black">Tentang Kami</Link>
            </div>

            <!-- Kanan -->
            <div class="flex">
                <Link href="/login" class="text-white bg-[#84CC16] hover:bg-[#5D8736] rounded-[30px] text-sm px-5 py-2 text-center font-semibold transition-all duration-300">
                    Masuk / Daftar
                </Link>
            </div>
        </nav>

        <section class="relative w-full max-w-[1248px] h-[860px] mx-auto rounded-[60px] overflow-hidden">
            <!-- Hero Image -->
            <div class="relative w-full max-w-[1248px] h-[860px] mx-auto rounded-[60px] overflow-hidden">
                <!-- Gambar background -->
                <img src="images/home1.jpg" alt="Hero Background" class="absolute inset-0 w-full h-full object-cover blur-[2px]" />

                <!-- Gradient gelap ke terang -->
                <div class="absolute inset-0 bg-gradient-to-b from-black/80 to-white/0"></div>

                <!-- Konten utama -->
                <div class="absolute inset-0 flex flex-col justify-center items-center gap-44 px-6">
                    
                    <!-- Teks dan tombol -->
                    <div class="flex flex-col justify-center items-center gap-12">
                    <div class="flex flex-col justify-center items-center gap-7">
                        <h1 class="text-center text-white text-7xl font-bold leading-[90px] max-w-[654px]">
                        Preserve Nature<br />Protect Future
                        </h1>
                        <p class="text-white/80 text-lg font-medium leading-7 text-center max-w-[828px]">
                        Tetenger Bumi merupakan kegiatan pengabdian kepada masyarakat yang dilaksanakan Universitas Brawijaya sebagai bentuk kepedulian terhadap kelestarian alam dan lingkungan.
                        </p>
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-center items-center gap-4">
                        <Link href="/register" class="px-5 py-3.5 rounded-3xl border border-white text-white text-sm font-bold hover:bg-white hover:text-lime-600 transition">
                            Bergabung Sekarang
                        </Link>
                        <Link href="/donasi" class="pl-6 pr-5 py-3.5 bg-white border border-lime-100 text-lime-600 text-sm font-bold rounded-3xl hover:bg-lime-600 hover:text-white transition">
                            Donasi Sekarang
                        </Link>
                    </div>
                    </div>

                    <!-- Bar logo -->
                    <div class="flex justify-center items-center gap-5 px-12 py-2.5 bg-white/50 backdrop-blur-sm rounded-2xl">
                    <img src="/images/image 1.png" alt="Logo 1" class="w-12 h-12" />
                    <img src="/images/image 2.png" alt="Logo 2" class="w-12 h-12" />
                    </div>
                    
                </div>
                </div>
        </section>
    
        <!-- Tentang Kami -->
        <div class="py-16 mb-20 flex flex-col items-center gap-14 px-6">
        <!-- Judul Section -->
        <div class="text-center max-w-3xl">
            <p class="text-lime-600 text-md font-bold mb-1">TENTANG</p>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Misi Kami</h2>
            <p class="text-gray-500 text-md font-medium">
            Kegiatan ini bertujuan untuk mendukung program "Penanaman Satu Milyar Pohon" serta sebagai bentuk kepedulian terhadap kelestarian alam dan lingkungan.
            </p>
        </div>

        <!-- Grid Misi -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-center">
            <!-- Kolom Kiri -->
            <div class="flex flex-col gap-12">
            <div class="flex gap-4 items-start">
                <div class="w-24 h-24 flex items-center justify-center bg-lime-500 rounded-full">
                <img src="/images/misi1.png" class="w-20 h-20" />
                </div>
                <div class="w-56">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Science-Based Solutions</h4>
                <p class="text-base text-gray-700">Our initiatives are grounded in rigorous scientific research and data analysis.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="w-24 h-24 flex items-center justify-center bg-lime-500 rounded-full">
                <img src="/images/misi2.png" class="w-20 h-20" />
                </div>
                <div class="w-56">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Transparent Impact</h4>
                <p class="text-base text-gray-700">90% of donations go directly to conservation programs with measurable results.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="w-24 h-24 flex items-center justify-center bg-lime-500 rounded-full">
                <img src="/images/misi3.png" class="w-20 h-20" />
                </div>
                <div class="w-56">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Community Partnership</h4>
                <p class="text-base text-gray-700">We work hand-in-hand with local communities to develop sustainable livelihoods.</p>
                </div>
            </div>
            </div>

            <!-- Gambar Tengah -->
            <div class="flex justify-center">
            <img src="/images/misi7.png" class="w-[400px] h-[400px] object-contain" />
            </div>

            <!-- Kolom Kanan -->
            <div class="flex flex-col gap-12">
            <div class="flex gap-4 items-start">
                <div class="w-24 h-24 flex items-center justify-center bg-lime-500 rounded-full">
                <img src="/images/misi4.png" class="w-20 h-20" />
                </div>
                <div class="w-56">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Sustainable Investment</h4>
                <p class="text-base text-gray-700">We create long-term funding solutions that ensure continuous support for conservation efforts.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="w-24 h-24 flex items-center justify-center bg-lime-500 rounded-full">
                <img src="/images/misi5.png" class="w-20 h-20" />
                </div>
                <div class="w-56">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Protected Areas</h4>
                <p class="text-base text-gray-700">Strategic protection of critical habitats and ecosystems through dedicated funding mechanisms.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="w-24 h-24 flex items-center justify-center bg-lime-500 rounded-full">
                <img src="/images/misi6.png" class="w-20 h-20" />
                </div>
                <div class="w-56">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Global Impacts</h4>
                <p class="text-base text-gray-700">Working with partners worldwide to create lasting positive change for our planet.</p>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Galeri -->
        <div class="w-full px-6 py-16 bg-gray-900">
        <p class="text-center text-[#65A30D] text-md font-medium">GALERI</p>
        <h2 class="text-center text-white text-3xl font-bold mb-10">Kegiatan Tetenger Bumi</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Gambar besar -->
            <div class="md:col-span-2 row-span-2">
            <img src="/images/image 3.png" class="w-full h-full object-cover rounded-2xl" />
            </div>
            <!-- Gambar kecil -->
            <img src="/images/image 3.png" class="w-full h-72 object-cover rounded-2xl" />
            <img src="/images/image 3.png" class="w-full h-72 object-cover rounded-2xl" />
            <img src="/images/image 3.png" class="w-full h-72 object-cover rounded-2xl md:col-span-2" />
        </div>
        </div>


        <!-- Lokasi Tanam -->
        <div class="py-16 mb-20 flex flex-col items-center gap-14 px-6">
        <!-- Judul Section -->
        <div class="text-center max-w-3xl">
            <p class="text-lime-600 text-md font-bold mb-1">TANAM</p>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Lokasi Terbaru</h2>
            <p class="text-gray-500 text-md font-medium">
            Kegiatan ini bertujuan untuk mendukung program "Penanaman Satu Milyar Pohon" serta sebagai bentuk kepedulian terhadap kelestarian alam dan lingkungan.
            </p>
        </div>

        <!-- Section Card Lokasi Tanam -->
        <section class="flex justify-center gap-6 flex-wrap">
            <!-- Card 1 -->
            <div class="w-80 rounded-[20px] border border-gray-200 bg-white hover:shadow-[0px_10px_70px_0px_rgba(0,0,0,0.08)] hover:outline hover:outline-2 hover:outline-[#65A30D] transition-all duration-300">
            <img src="/images/image4.png" alt="Lokasi Tanam" class="w-full h-52 object-cover rounded-t-[20px]" />
            <div class="p-5 flex flex-col items-center gap-5 text-center">
                <h3 class="text-[#1F2937] text-lg font-bold">Amazon Reforestation Project</h3>
                <div class="flex flex-col gap-2 items-center">
                <div class="px-5 py-1 bg-[#ECFCCB] rounded-3xl">
                    <p class="text-[#65A30D] text-sm font-semibold">59 Donatur</p>
                </div>
                <div class="flex items-center gap-2">
                    <div class="p-[5px] bg-[#DCFCE7] rounded-full">
                    <div class="w-2 h-2.5 bg-[#65A30D] rounded-sm"></div>
                    </div>
                    <p class="text-[#6B7280] text-sm font-semibold">Malang, Jawa Timur</p>
                </div>
                </div>
                <button class="group w-full py-3 rounded-xl border-2 border-[#65A30D] hover:bg-[#65A30D] transition-colors">
                <span class="text-[#65A30D] group-hover:text-white font-bold text-sm">Donasi</span>
                </button>
            </div>
            </div>

            <!-- Card 2 -->
            <div class="w-80 rounded-[20px] border border-gray-200 bg-white hover:shadow-[0px_10px_70px_0px_rgba(0,0,0,0.08)] hover:outline hover:outline-2 hover:outline-[#65A30D] transition-all duration-300">
            <img src="/images/image4.png" alt="Lokasi Tanam" class="w-full h-52 object-cover rounded-t-[20px]" />
            <div class="p-5 flex flex-col items-center gap-5 text-center">
                <h3 class="text-[#1F2937] text-lg font-bold">Amazon Reforestation Project</h3>
                <div class="flex flex-col gap-2 items-center">
                <div class="px-5 py-1 bg-[#ECFCCB] rounded-3xl">
                    <p class="text-[#65A30D] text-sm font-semibold">59 Donatur</p>
                </div>
                <div class="flex items-center gap-2">
                    <div class="p-[5px] bg-[#DCFCE7] rounded-full">
                    <div class="w-2 h-2.5 bg-[#65A30D] rounded-sm"></div>
                    </div>
                    <p class="text-[#6B7280] text-sm font-semibold">Malang, Jawa Timur</p>
                </div>
                </div>
                <button class="group w-full py-3 rounded-xl border-2 border-[#65A30D] hover:bg-[#65A30D] transition-colors">
                <span class="text-[#65A30D] group-hover:text-white font-bold text-sm">Donasi</span>
                </button>
            </div>
            </div>

            <!-- Card 3 -->
            <div class="w-80 rounded-[20px] border border-gray-200 bg-white hover:shadow-[0px_10px_70px_0px_rgba(0,0,0,0.08)] hover:outline hover:outline-2 hover:outline-[#65A30D] transition-all duration-300">
            <img src="/images/image4.png" alt="Lokasi Tanam" class="w-full h-52 object-cover rounded-t-[20px]" />
            <div class="p-5 flex flex-col items-center gap-5 text-center">
                <h3 class="text-[#1F2937] text-lg font-bold">Amazon Reforestation Project</h3>
                <div class="flex flex-col gap-2 items-center">
                <div class="px-5 py-1 bg-[#ECFCCB] rounded-3xl">
                    <p class="text-[#65A30D] text-sm font-semibold">59 Donatur</p>
                </div>
                <div class="flex items-center gap-2">
                    <div class="p-[5px] bg-[#DCFCE7] rounded-full">
                    <div class="w-2 h-2.5 bg-[#65A30D] rounded-sm"></div>
                    </div>
                    <p class="text-[#6B7280] text-sm font-semibold">Malang, Jawa Timur</p>
                </div>
                </div>
                <button class="group w-full py-3 rounded-xl border-2 border-[#65A30D] hover:bg-[#65A30D] transition-colors">
                <span class="text-[#65A30D] group-hover:text-white font-bold text-sm">Donasi</span>
                </button>
            </div>
            </div>
        </section>
        </div>


        <!-- Footer Section -->
        <div class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-20">
        <div class="bg-cover bg-center bg-no-repeat rounded-t-[60px] overflow-hidden" style="background-image: url('images/footer1.png');">
        <div class="bg-black/60 py-24 px-6 backdrop-blur-sm">
            <div class="max-w-6xl mx-auto flex flex-col items-center gap-16 text-white text-center">
            <h2 class="text-5xl font-bold leading-tight">Join Our Conservation Efforts</h2>
            <p class="text-xl font-semibold max-w-2xl">
                Your support makes a critical difference in our ability to protect endangered ecosystems and wildlife. Together, we can ensure a sustainable future for our planet.
            </p>

            <div class="flex flex-col md:flex-row items-center justify-center gap-10 w-full">
                <!-- Card 1 -->
                <div class="bg-white/20 p-8 rounded-2xl outline outline-1 outline-offset-[-1px] outline-Border-Border-Color outline-white backdrop-blur-blur inline-flex flex-col justify-start items-center text-white flex-1 max-w-md text-center">
                <h3 class="text-2xl font-bold mb-4">Support Our Cause</h3>
                <p class="mb-6 font-medium">
                    Make a donation today to fund critical conservation projects that protect vulnerable ecosystems and endangered species.
                </p>
                <a href="/donasi"
                    class="inline-block bg-lime-500 hover:bg-lime-700 text-white font-semibold text-sm py-2 px-5 rounded-lg transition-all duration-300">
                    Donasi Sekarang
                </a>
                </div>

                <!-- Card 2 -->
                <div class="bg-white/20 p-8 rounded-2xl outline outline-1 outline-offset-[-1px] outline-Border-Border-Color outline-white backdrop-blur-blur inline-flex flex-col justify-start items-center text-white flex-1 max-w-md text-center">
                <h3 class="text-2xl font-bold mb-4">Support Our Cause</h3>
                <p class="mb-6 font-medium">
                    Make a donation today to fund critical conservation projects that protect vulnerable ecosystems and endangered species.
                </p>
                <a href="#"
                    class="inline-block bg-lime-500 hover:bg-lime-700 text-white font-semibold text-sm py-2 px-5 rounded-lg transition-all duration-300">
                    Gabung Partner
                </a>
                </div>
            </div>
            </div>
        </div>

        <!-- Footer Info -->
        <div class="bg-gray-800 text-white py-10 px-6">
            <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-10">
            <!-- Logo & Desc -->
            <div class="flex flex-col gap-3">
                <div class="flex items-center gap-2">
                <img src="images/tb1.png" class="w-10 h-10" alt="Logo" />
                <div>
                    <p class="font-bold text-sm leading-tight">TETENGER</p>
                    <p class="font-bold text-sm leading-tight">BUMI</p>
                </div>
                </div>
                <p class="text-xs font-semibold max-w-xs">
                Preserving nature for future generations through innovative conservation finance.
                </p>
                <div class="flex gap-2">
                <div class="w-7 h-7 relative bg-[#84CC16] rounded-[200px] overflow-hidden flex items-center justify-center">
                  <img src="/images/instagram.svg" alt="Instagram" class="w-4 h-4" />
                </div>                
                <div class="w-7 h-7 relative bg-[#84CC16] rounded-[200px] overflow-hidden flex items-center justify-center">
                  <img src="/images/youtube.svg" alt="Instagram" class="w-4 h-4" />
                </div>                 
                <div class="w-7 h-7 relative bg-[#84CC16] rounded-[200px] overflow-hidden flex items-center justify-center">
                  <img src="/images/facebook.svg" alt="Instagram" class="w-4 h-4" />
                </div> 
                </div>
            </div>

            <!-- Navigation -->
            <div class="flex flex-col sm:flex-row gap-10">
                <div>
                <h4 class="text-lg font-semibold mb-3">Explore</h4>
                <ul class="space-y-2 text-sm font-reguler">
                    <li>Donatur</li>
                    <li>Tentang Kami</li>
                    <li>Partnership</li>
                    <li>Relawan</li>
                </ul>
                </div>
                <div>
                <h4 class="text-lg font-semibold mb-3">Contact</h4>
                <ul class="space-y-2 text-sm font-reguler">
                    <li class="flex items-center gap-2"><div class="w-5 h-5 rounded-full">
                      <img src="/images/call.svg" alt="Contact" class="w-4 h-4" />
                    </div>+62 822-4555-3609</li>
                    <li class="flex items-center gap-2"><div class="w-5 h-5 rounded-full">
                       <img src="/images/sms.svg" alt="Email" class="w-4 h-4" />
                    </div>tetengerbumi@ub.ac.id</li>
                    <li class="flex items-start gap-2"><div class="w-5 h-5 rounded-full">
                       <img src="/images/location.svg" alt="Adress" class="w-4 h-4" />
                    </div><span>Universitas Brawijaya</span></li>
                    <li class="flex items-start gap-2"><div class="w-5 h-5 rounded-full">
                    </div><span>Jl. Veteran No.25, Kota Malang, Jawa Timur</span></li>
                </ul>
                </div>
            </div>
            </div>

            <!-- Footer Bottom -->
            <div class="mt-10 border-t border-white/30 pt-5 text-center text-sm font-reguler">
            <p>© 2025 Tetenger Bumi - Kelompok 5 Capstone Project</p>
            <div class="flex justify-center gap-5 mt-2">
                <a href="#" class="font-reguler">Kebijakan Privasi</a>
                <a href="#" class="font-reguler">Syarat dan Ketentuan</a>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
        
</template>

<script setup>
import Container from '@/components/Container.vue';
import FooterComponent from '@/components/Footer.vue';
import Card from '@/components/ui/card/Card.vue';
import Button from '@/components/ui/button/Button.vue';
import { Link } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';
</script>
