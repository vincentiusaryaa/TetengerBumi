<template>
  <AppLayout>
    <!-- Navbar/Atas bisa diletakkan di AppLayout, tidak perlu di sini kecuali memang custom -->
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
                        <button class="px-5 py-3.5 rounded-3xl border border-white text-white text-sm font-bold">
                        Daftar Wali Pohon
                        </button>
                        <button class="pl-6 pr-5 py-3.5 bg-white border border-lime-100 text-lime-600 text-sm font-bold rounded-3xl">
    Donasi Sekarang
</button>
        </div>
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
            <div class="self-stretch h-[760px] relative overflow-hidden">
                <div class="w-[1248px] h-[500px] left-0 top-[198px] absolute inline-flex justify-center items-center gap-5">
                    <div class="w-96 h-[480px] relative bg-Background-Body rounded-[30px] shadow-[0px_6px_12px_0px_rgba(0,0,0,0.03)] outline outline-1 outline-offset-[-1px] outline-Border-Border-Color overflow-hidden">
                        <div class="w-80 left-[21.67px] top-[25px] absolute inline-flex flex-col justify-start items-center gap-7">
                            <div class="w-80 h-52 relative rounded-[20px] outline outline-1 outline-offset-[-1px] outline-Border-Border-Color overflow-hidden">
                                <img class="w-80 h-52 left-0 top-0 absolute" src="/images/image4.png" />
                            </div>
                            <div class="w-72 flex flex-col justify-start items-center gap-11">
                                <div class="self-stretch flex flex-col justify-start items-center gap-3.5">
                                    <div class="self-stretch justify-start text-Text-Title-Color text-md font-bold leading-loose">Amazon Reforestation Project</div>
                                    <div class="w-40 flex flex-col justify-start items-center gap-2">
                                        <div class="px-5 py-0.5 bg-[#ECFCCB] rounded-3xl inline-flex justify-center items-center gap-2.5">
                                            <div class="justify-start text-[#65A30D] text-sm font-semibold leading-tight">59 Donatur</div>
                                        </div>
                                        <div class="self-stretch inline-flex justify-start items-center gap-2">
                                            <div class="p-[5px] bg-Colors-Lime-100 rounded-[20px] flex justify-start items-center gap-2.5">
                                                <div class="w-3 h-3 relative">
                                                    <div class="w-2 h-2.5 left-[1.56px] top-[0.88px] absolute bg-Text-Brand-Color"></div>
                                                    <div class="w-3 h-3 left-0 top-0 absolute opacity-0"></div>
                                                    <div class="w-3 h-3 left-[12px] top-[12px] absolute origin-top-left -rotate-180 opacity-0">
                                                        <img src="/images/location.png" alt="location"></img>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="justify-start text-[#6B7280] text-sm font-semibold leading-tight">Malang, Jawa Timur</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="group px-16 py-4 bg-white hover:bg-[#65A30D] rounded-2xl outline outline-2 outline-[#65A30D] flex flex-col justify-center items-center gap-0.5 transition-all duration-200 cursor-pointer">
                                    <div class="inline-flex justify-center items-end gap-1.5">
                                        <div class="text-[#65A30D] group-hover:text-white text-sm font-bold leading-tight transition-all duration-200">Donasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-96 self-stretch relative bg-Background-Body rounded-[30px] shadow-[0px_10px_70px_0px_rgba(0,0,0,0.08)] outline outline-2 outline-offset-[-2px] outline-Text-Brand-Color overflow-hidden">
                        <div class="w-80 left-[29.33px] top-[30px] absolute inline-flex flex-col justify-start items-center gap-7">
                            <div class="self-stretch h-52 relative rounded-[20px] outline outline-1 outline-offset-[-1px] outline-Border-Border-Color overflow-hidden">
                                <img class="w-80 h-52 left-0 top-0 absolute" src="/images/image4.png" />
                            </div>
                            <div class="w-72 flex flex-col justify-start items-center gap-11">
                                <div class="self-stretch flex flex-col justify-start items-center gap-3.5">
                                    <div class="self-stretch justify-start text-Text-Title-Color text-md font-bold leading-loose">Amazon Reforestation Project</div>
                                    <div class="w-40 flex flex-col justify-start items-center gap-2">
                                        <div class="px-5 py-0.5 bg-[#ECFCCB] rounded-3xl inline-flex justify-center items-center gap-2.5">
                                            <div class="justify-start text-[#65A30D] text-sm font-semibold leading-tight">59 Donatur</div>
                                        </div>
                                        <div class="self-stretch inline-flex justify-start items-center gap-2">
                                            <div class="p-[5px] bg-Colors-Lime-100 rounded-[20px] flex justify-start items-center gap-2.5">
                                                <div class="w-3 h-3 relative">
                                                    <div class="w-2 h-2.5 left-[1.56px] top-[0.88px] absolute bg-Text-Brand-Color"></div>
                                                    <div class="w-3 h-3 left-0 top-0 absolute opacity-0"></div>
                                                    <div class="w-3 h-3 left-[12px] top-[12px] absolute origin-top-left -rotate-180 opacity-0">
                                                        <img src="/images/location.png" alt="location"></img>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="justify-start text-[#6B7280] text-sm font-semibold leading-tight">Malang, Jawa Timur</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="group px-16 py-4 bg-white hover:bg-[#65A30D] rounded-2xl outline outline-2 outline-[#65A30D] flex flex-col justify-center items-center gap-0.5 transition-all duration-200 cursor-pointer">
                                    <div class="inline-flex justify-center items-end gap-1.5">
                                        <div class="text-[#65A30D] group-hover:text-white text-sm font-bold leading-tight transition-all duration-200">Donasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-96 h-[480px] relative bg-Background-Body rounded-[30px] shadow-[0px_6px_12px_0px_rgba(0,0,0,0.03)] outline outline-1 outline-offset-[-1px] outline-Border-Border-Color overflow-hidden">
                        <div class="w-80 left-[21.67px] top-[25px] absolute inline-flex flex-col justify-start items-center gap-7">
                            <div class="w-80 h-52 relative rounded-[20px] outline outline-1 outline-offset-[-1px] outline-Border-Border-Color overflow-hidden">
                                <img class="w-80 h-52 left-0 top-0 absolute" src="/images/image4.png" />
                            </div>
                            <div class="w-72 flex flex-col justify-start items-center gap-11">
                                <div class="self-stretch flex flex-col justify-start items-center gap-3.5">
                                    <div class="self-stretch justify-start text-Text-Title-Color text-md font-bold leading-loose">Amazon Reforestation Project</div>
                                    <div class="w-40 flex flex-col justify-start items-center gap-2">
                                        <div class="px-5 py-0.5 bg-[#ECFCCB] rounded-3xl inline-flex justify-center items-center gap-2.5">
                                            <div class="justify-start text-[#65A30D] text-sm font-semibold leading-tight">59 Donatur</div>
                                        </div>
                                        <div class="self-stretch inline-flex justify-start items-center gap-2">
                                            <div class="p-[5px] bg-Colors-Lime-100 rounded-[20px] flex justify-start items-center gap-2.5">
                                                <div class="w-3 h-3 relative">
                                                    <div class="w-2 h-2.5 left-[1.56px] top-[0.88px] absolute bg-Text-Brand-Color"></div>
                                                    <div class="w-3 h-3 left-0 top-0 absolute opacity-0"></div>
                                                    <div class="w-3 h-3 left-[12px] top-[12px] absolute origin-top-left -rotate-180 opacity-0">
                                                        <img src="/images/location.png" alt="location"></img>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="justify-start text-[#6B7280] text-sm font-semibold leading-tight">Malang, Jawa Timur</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="group px-16 py-4 bg-white hover:bg-[#65A30D] rounded-2xl outline outline-2 outline-[#65A30D] flex flex-col justify-center items-center gap-0.5 transition-all duration-200 cursor-pointer">
                                    <div class="inline-flex justify-center items-end gap-1.5">
                                        <div class="text-[#65A30D] group-hover:text-white text-sm font-bold leading-tight transition-all duration-200">Donasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[1248px] left-0 top-[30px] absolute inline-flex flex-col justify-start items-center gap-2.5">
                    <div class="self-stretch flex flex-col justify-start items-start">
                        <div class="self-stretch h-7 text-center justify-start text-[#65A30D] text-md font-bold leading-7">TANAM</div>
                        <div class="self-stretch text-center justify-start text-[#1F2937] text-4xl font-bold leading-10">Lokasi Terbaru</div>
                    </div>
                    <div class="w-[750px] text-center justify-start text-[#6B7280] text-md font-medium leading-7">Kegiatan ini bertujuan untuk mendukung program "Penanaman Satu Milyar Pohon" serta sebagai bentuk kepedulian terhadap kelestarian alam dan lingkungan.</div>
                </div>
            </div>

        <!-- Footer -->
        <section class="px-6 lg:px-24 pt-2">
        <div class="max-w-full py-5 px-6 bg-[#1F2937] rounded-tl-[60px] rounded-tr-[60px] flex flex-col justify-center items-center gap-5 overflow-hidden">
            <div class="self-stretch px-16 py-5 inline-flex justify-center items-center gap-28">
                <div class="w-72 inline-flex flex-col justify-start items-start gap-3.5">
                    <div class="inline-flex justify-start items-center gap-1.5">
                        <img class="w-10 h-10 bg-Colors-Lime-500" src="/images/tb1.png"></img>
                        <div class="w-24 inline-flex flex-col justify-start items-start">
                            <div class="self-stretch justify-start text-white text-sm font-bold">TETENGER</div>
                            <div class="self-stretch justify-start text-white text-sm font-bold">BUMI</div>
                        </div>
                    </div>
                    <div class="self-stretch justify-start text-white text-xs font-semibold leading-normal tracking-tight">Preserving nature for future generations through innovative conservation finance.</div>
                    <div class="inline-flex justify-start items-center gap-2.5">
                        <div class="w-7 h-7 relative bg-zinc-500 rounded-[200px]"></div>
                        <div class="w-7 h-7 relative bg-zinc-500 rounded-[200px]"></div>
                        <div class="w-7 h-7 relative bg-zinc-500 rounded-[200px]"></div>
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
                            <div class="inline-flex justify-start items-center gap-2.5">
                                <div class="w-7 h-7 relative bg-zinc-500 rounded-[200px]"></div>
                                <div class="justify-start text-white text-sm font-reguler leading-tight">+62 821 1101</div>
                            </div>
                            <div class="inline-flex justify-start items-center gap-2.5">
                                <div class="w-7 h-7 relative bg-zinc-500 rounded-[200px]"></div>
                                <div class="justify-start text-white text-sm font-reguler leading-tight">bumi@tetenger.com</div>
                            </div>
                            <div class="self-stretch inline-flex justify-start items-start gap-2.5">
                                <div class="w-7 h-7 relative bg-zinc-500 rounded-[200px]"></div>
                                <div class="flex-1 justify-start text-white text-sm font-reguler leading-tight">Universitas Brawijaya, Jl. Veteran No.25, Kota Malang, Jawa Timur</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="self-stretch h-0 outline outline-1 outline-offset-[-0.50px] outline-white/30"></div>
            <div class="self-stretch flex flex-col justify-start items-center gap-2.5">
                <div class="justify-start text-white text-lg font-medium leading-7">© 2025 Tetenger Bumi. All rights reserved.</div>
                <div class="inline-flex justify-start items-start">
                    <div data-left-icon="false" data-right-icon="false" data-selected="false" data-state="Selected" data-text="true" class="px-4 py-3 rounded-3xl inline-flex flex-col justify-center items-center gap-0.5">
                        <div class="inline-flex justify-center items-end gap-1.5">
                            <div class="justify-start text-white text-sm font-bold leading-tight">Kebijakan Privasi</div>
                        </div>
                    </div>
                    <div data-left-icon="false" data-right-icon="false" data-selected="false" data-state="Selected" data-text="true" class="px-4 py-3 rounded-3xl inline-flex flex-col justify-center items-center gap-0.5">
                        <div class="inline-flex justify-center items-end gap-1.5">
                            <div class="justify-start text-white text-sm font-bold leading-tight">Syarat dan Ketentuan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import Container from '@/components/Container.vue';
import FooterComponent from '@/components/Footer.vue';
import Card from '@/components/ui/card/Card.vue';
import Button from '@/components/ui/button/Button.vue';
</script>
