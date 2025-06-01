<template>
<div class="relative bg-[#f3f3f3]">
    <!-- Navbar -->
        <nav class="fixed top-6 left-1/2 transform -translate-x-1/2 w-[1220px] h-[80px] rounded-[57px] bg-white flex items-center justify-between px-6 shadow-md z-50">
        <!-- Kiri: Logo  -->
            <div class="flex items-center space-x-4">
                <img src="images/tb2.png" alt="Logo" class="h-[42px] w-[134px]" />
            </div>
            <div class="flex items-center space-x-6">
                <Link :href="user ? '/home' : '/landingpage'" class="text-sm font-medium text-gray-700 hover:text-black">Beranda</Link>
                <Link href="/proker" class="text-sm font-medium text-gray-700 hover:text-black">Program Kerja</Link>
                <Link href="/lokasi" class="text-sm font-medium text-gray-700 hover:text-black">Lokasi Tanam</Link>
                <Link href="/donasi" class="text-sm font-medium text-gray-700 hover:text-black">Donasi</Link>
                <Link href="/aboutus" class="text-sm font-medium text-gray-700 hover:text-black">Tentang Kami</Link>
            </div>

            <!-- Kanan: Login/Profile -->
            <div class="flex">
                <template v-if="user">
                    <ProfileDropdown :user="user" />
                </template>
                <template v-else>
                    <Link href="/login" class="text-white bg-[#84CC16] hover:bg-[#5D8736] rounded-[30px] text-sm px-5 py-2 text-center font-semibold transition-all duration-300">
                        Masuk / Daftar
                    </Link>
                </template>
            </div>
        </nav>

    <section class="relative w-full">
        <!-- Background Image -->
    <div class="w-full px-24 pt-40 relative bg-Background-Body inline-flex flex-col justify-start items-center gap-14">
    <img class="w-full h-[994px] left-0 top-0 absolute" src="/images/image5.png" />
    <div class="w-full h-[994px] left-0 top-0 absolute bg-gradient-to-b from-black/30 to-[#f3f3f3]"></div>

        <!-- Judul Halaman -->
        <h1 class="absolute top-40 left-1/2 -translate-x-1/2 text-white text-4xl md:text-7xl font-bold leading-tight text-center z-10">
            Charity Tress Planting
        </h1>
    </div>

        <!-- Wali Pohon -->
        <div class="relative max-w-screen-xl mx-auto bg-white rounded-[60px] shadow-xl p-10 md:p-20 mb-4 mt-60">
            <section class="flex justify-center gap-6 flex-wrap">
                
                <!-- Lokai -->
                <div class="self-stretch flex flex-col justify-start items-start gap-4">
                    <img class="self-stretch h-[550px] relative rounded-[30px]" src="images/pohon1.png" />
                    <!-- Wrapper utama (gabungkan lokasi dan info) -->
                    <div class="flex gap-3 items-stretch">
                    
                    <!-- Lokasi + Tombol (2/3) -->
                    <div class="w-2/3 flex flex-col justify-between bg-[#F7FEE7] rounded-3xl p-4 gap-4">
                        <div class="flex items-center gap-3 flex-1">
                        <!-- Icon Lokasi -->
                        <div class="p-[5px] bg-[#ECFCCB] rounded-3xl flex items-center justify-center">
                            <img src="/images/location-2.svg" class="w-4 h-4" alt="Lokasi Tanam" />
                        </div>
                        <!-- Teks Lokasi -->
                        <div class="text-[#65A30D] text-base font-semibold leading-normal flex-1">
                            Lapangan Take off Paralayang Pantai Modangan Desa Sumberroto Kecamatan Donomulyo Kabupaten Malang
                        </div>
                        <!-- Tombol -->
                        <div class="px-7 py-3.5 bg-[#65A30D] rounded-full flex items-center">
                            <span class="text-white text-sm font-bold leading-tight">Lihat Peta</span>
                        </div>
                        </div>
                    </div>

                    <!-- Info Tanggal dan Relawan (1/3) -->
                    <div class="w-1/3 flex flex-col gap-2 justify-between">
                        <!-- Tanggal -->
                        <div class="flex items-center gap-2 bg-[#F7FEE7] rounded-2xl px-4 py-2 w-full h-full">
                        <div class="p-[5px] bg-[#ECFCCB] rounded-full flex items-center justify-center">
                            <img src="/images/calendar-2.svg" class="w-4 h-4" alt="Tanggal" />
                        </div>
                        <span class="text-[#65A30D] text-base font-semibold leading-normal">
                            6 Juni 2025 - 7 Juni 2025
                        </span>
                        </div>

                        <!-- Relawan -->
                        <div class="flex items-center gap-2 bg-[#F7FEE7] rounded-2xl px-4 py-2 w-full min-h-[48px]">
                        <div class="p-[5px] bg-[#ECFCCB] rounded-full flex items-center justify-center">
                            <img src="/images/profile-2.svg" class="w-4 h-4" alt="Relawan" />
                        </div>
                        <span class="text-[#65A30D] text-base font-semibold leading-normal">5 Relawan</span>
                        </div>
                    </div>
                    </div>
                </div>


                    <!-- Text -->
                    <div class="self-stretch inline-flex flex-col justify-start items-start gap-2">
                        <div class="self-stretch justify-start text-black text-lg font-bold leading-loose">Lorem ipsum dolor sit amet</div>
                        <div class="self-stretch justify-start text-justify text-black text-md font-reguler leading-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat, felis ac maximus iaculis, neque odio accumsan libero, vitae malesuada nisl urna in mauris. Suspendisse sodales vulputate tellus id scelerisque. Phasellus fringilla ante vitae bibendum mattis. Fusce magna est, tempus et lacinia tincidunt, maximus in risus. Pellentesque quis cursus sapien. Curabitur pellentesque facilisis quam vitae mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In mollis nibh in felis mollis venenatis. Mauris pellentesque eros vel tellus dignissim faucibus. Maecenas at felis maximus, pulvinar ipsum ac, fermentum ante.</div>
                        <div class="self-stretch justify-start text-black text-lg font-bold leading-loose">Lorem ipsum dolor sit amet</div>
                        <div class="self-stretch justify-start text-justify text-black text-md font-reguler leading-7">Integer congue eget enim in sollicitudin. Cras porttitor malesuada erat eu tempor. Sed cursus ipsum quis ante imperdiet, et volutpat risus pulvinar. Donec lobortis viverra imperdiet. Integer eu purus suscipit, tincidunt augue non, feugiat diam. Mauris tortor dolor, varius eget nibh et, elementum placerat felis. In luctus urna vel neque aliquet semper. Nunc non leo lacinia, dictum metus eu, vestibulum enim. Nam luctus arcu erat, ac ultricies mauris efficitur non. Vivamus nec sapien nec enim consequat sollicitudin vel non mauris. Aenean nec faucibus ipsum, in tristique massa. Phasellus eu ipsum vitae erat dignissim suscipit. Aenean ac interdum turpis, eget semper nunc. Praesent finibus dolor ex, non porttitor neque elementum at.</div>
                        <!-- Tombol -->
                        <template v-if="user">
                            <a href="https://forms.gle/vWBb24wftTZguxdo8" target="_blank" class="self-stretch px-121 py-4 bg-[#65A30D] mt-8 rounded-2xl flex items-center justify-center cursor-pointer hover:bg-[#5D8736] transition-colors duration-300">
                                <span class="text-white text-sm font-bold leading-tight">Gabung Program Kerja</span>
                            </a>
                        </template>
                        <template v-else>
                            <Link href="/login" class="self-stretch px-121 py-4 bg-[#65A30D] mt-8 rounded-2xl flex items-center justify-center cursor-pointer hover:bg-[#5D8736] transition-colors duration-300">
                                <span class="text-white text-sm font-bold leading-tight">Gabung Program Kerja</span>
                            </Link>
                        </template>
                    </div>
            </section>
        </div> 
    </section>


    <section class="px-6 lg:px-24 pt-2">
        <!-- Footer -->
        <div class="max-w-full py-5 px-6 bg-[#1F2937] rounded-tl-[60px] rounded-tr-[60px] flex flex-col justify-center items-center gap-5 overflow-hidden">
            <div class="self-stretch px-16 py-5 inline-flex justify-center items-center gap-28">
                <div class="w-72 inline-flex flex-col justify-start items-start gap-3.5">
                    <div class="inline-flex justify-start items-center gap-1.5">
                        <img class="w-10 h-10 bg-Colors-Lime-500" src="images/tb1.png"></img>
                        <div class="w-24 inline-flex flex-col justify-start items-start">
                            <div class="self-stretch justify-start text-white text-sm font-bold">TETENGER</div>
                            <div class="self-stretch justify-start text-white text-sm font-bold">BUMI</div>
                        </div>
                    </div>
                    <div class="self-stretch justify-start text-white text-xs font-semibold leading-normal tracking-tight">Preserving nature for future generations through innovative conservation finance.</div>
                    <div class="inline-flex justify-center items-center gap-2.5">
                        <div class="w-7 h-7 flex items-center justify-center bg-[#84CC16] rounded-full">
                            <img src="/images/instagram.svg" alt="Instagram" class="w-4 h-4" />
                        </div>
                        <div class="w-7 h-7 flex items-center justify-center bg-[#84CC16] rounded-full">
                            <img src="/images/youtube.svg" alt="Instagram" class="w-4 h-4" />
                        </div>
                        <div class="w-7 h-7 flex items-center justify-center bg-[#84CC16] rounded-full">
                            <img src="/images/facebook.svg" alt="Instagram" class="w-4 h-4" />
                        </div>
                    </div>
                </div>
                <div class="w-[3px] h-40 bg-Colors-White-50%/50 rounded-[20px]"></div>
                <div class="flex justify-center items-start gap-10">
                    <div class="w-60 inline-flex flex-col justify-start items-start gap-2.5">
                        <div class="self-stretch justify-start text-white text-lg font-semibold leading-7">Explore</div>
                        <div class="self-stretch flex flex-col justify-start items-start gap-2.5">
                            <div class="justify-start text-white text-sm font-reguler leading-tight">Donatur</div>
                            <div class="justify-start text-white text-sm font-reguler leading-tight">Tentang Kami</div>
                            <div class="justify-start text-white text-sm font-reguler leading-tight">Partnership</div>
                            <div class="justify-start text-white text-sm font-reguler leading-tight">Relawan</div>
                        </div>
                    </div>
                    <div class="w-72 inline-flex flex-col justify-start items-start gap-2.5">
                        <div class="self-stretch justify-start text-white text-lg font-reguler leading-7">Contact</div>
                        <div class="self-stretch flex flex-col justify-start items-start gap-2.5">
                            <div class="inline-flex justify-start items-center gap-2">
                                <div class="w-4 h-4 relative rounded-[200px]"><img src="/images/call.svg" alt="Contact" class="w-4 h-4" /></div>
                                <div class="justify-start text-white text-sm font-reguler leading-tight">+62 822-4555-3609</div>
                            </div>
                            <div class="inline-flex justify-start items-center gap-2">
                                <div class="w-4 h-4 relative rounded-[200px]"><img src="/images/sms.svg" alt="Email" class="w-4 h-4" /></div>
                                <div class="justify-start text-white text-sm font-reguler leading-tight">tetengerbumi@ub.ac.id</div>
                            </div>
                            <div class="self-stretch inline-flex justify-start items-start gap-2">
                                <div class="w-4 h-4 relative rounded-[200px]"><img src="/images/location.svg" alt="Adress" class="w-4 h-4" /></div>
                                <div class="flex-1 justify-start text-white text-sm font-reguler leading-tight">Universitas Brawijaya<br> Jl. Veteran No.25, Kota Malang, Jawa Timur</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="self-stretch h-0 outline outline-1 outline-offset-[-0.50px] outline-white/30"></div>
            <div class="self-stretch flex flex-col justify-start items-center gap-2.5">
                <div class="justify-start text-white text-lg font-medium leading-7">© 2025 Tetenger Bumi - Kelompok 5 Capstone Project</div>
                <div class="inline-flex justify-start items-start">
                    <div data-left-icon="false" data-right-icon="false" data-selected="false" data-state="Selected" data-text="true" class="px-4 py-3 rounded-3xl inline-flex flex-col justify-center items-center gap-0.5">
                        <div class="inline-flex justify-center items-end gap-1.5">
                            <div class="justify-start text-white text-sm font-reguler leading-tight">Kebijakan Privasi</div>
                        </div>
                    </div>
                    <div data-left-icon="false" data-right-icon="false" data-selected="false" data-state="Selected" data-text="true" class="px-4 py-3 rounded-3xl inline-flex flex-col justify-center items-center gap-0.5">
                        <div class="inline-flex justify-center items-end gap-1.5">
                            <div class="justify-start text-white text-sm font-reguler leading-tight">Syarat dan Ketentuan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import ProfileDropdown from '@/components/ProfileDropdown.vue';

const page = usePage();
const auth = page.props.auth || {};
const user = auth.user || null;
</script>