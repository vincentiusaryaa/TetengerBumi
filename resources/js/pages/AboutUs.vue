<template>
  <AppLayout>
<div class="relative bg-[#ffffff]">

    <section class="relative w-full">
        <!-- Background Image -->
    <div class="w-full px-24 pt-40 relative bg-Background-Body inline-flex flex-col justify-start items-center gap-14">
    <img class="w-full h-[994px] left-0 top-0 absolute" src="/images/image5.png" />
    <div class="w-full h-[994px] left-0 top-0 absolute bg-gradient-to-b from-black/30 to-white"></div>

        <!-- Judul Halaman -->
        <h1 class="absolute top-40 left-1/2 -translate-x-1/2 text-white text-4xl md:text-7xl font-bold leading-tight text-center z-10">
            Tentang Kami
        </h1>
    </div>

        <!-- Konten Card -->
        <div class="relative max-w-screen-xl mx-auto bg-white rounded-[60px] shadow-xl p-10 md:p-20 mb-4 mt-60">
            <!-- Cerita Kami -->
            <div class="flex flex-col lg:flex-row gap-10 mb-24">
                <div class="flex-1 space-y-6">
                    <div>
                    <p class="text-[#84CC16] text-md font-bold">TENTANG</p>
                    <h2 class="text-[#1F2937] text-2xl md:text-3xl font-bold">Cerita Kami</h2>
                    </div>
                    <p class="text-[#6B7280] text-sm font-semibold leading-relaxed">Di tengah tantangan krisis iklim dan kerusakan lingkungan, kami hadir sebagai pengingat—tetenger—bahwa Bumi bukan hanya tempat tinggal, tapi warisan yang harus dijaga.
                    Tetenger Bumi lahir dari keyakinan bahwa perubahan dimulai dari langkah kecil yang konsisten, berbasis sains, dan melibatkan semua pihak: komunitas, individu, dan alam itu sendiri.</p>
                    <p class="text-[#6B7280] text-sm font-semibold leading-relaxed">Kami bekerja lintas sektor untuk merancang solusi berbasis riset, mendorong konservasi berkelanjutan, serta membangun kolaborasi akar rumput hingga global. Kami percaya, pelestarian bukan hanya tugas aktivis, tapi tanggung jawab bersama.</p>
                </div>
                <div class="flex-1 relative rounded-[40px] overflow-hidden">
                    <img src="/images/image7.png" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-l from-black/10 via-white/5 to-black/10"></div>
                </div>
            </div>
            <!-- Visi Misi -->
            <div class="self-stretch inline-flex justify-start items-center gap-5 mb-8">
                <div class="w-[528px] inline-flex flex-col justify-start items-start gap-5">
                    <div class="self-stretch text-center justify-start text-[#1F2937] text-2xl md:text-3xl font-bold leading-[60px]">Visi</div>
                    <div class="self-stretch flex flex-col justify-start items-start gap-2.5">
                        <div class="self-stretch justify-start text-[#6B7280] text-3xl font-bold leading-loose">Menjadi penggerak perubahan ekologi yang inklusif dan berkelanjutan, dengan menjadikan pengetahuan, aksi kolektif, dan kearifan lokal sebagai fondasi pelestarian bumi.</div>
                    </div>
                </div>
                <div class="inline-flex flex-col justify-start items-start gap-5">
                    <div class="self-stretch text-center justify-start text-[#1F2937] text-2xl md:text-3xl font-bold leading-[60px]">Misi</div>
                    <div class="self-stretch flex flex-col justify-start items-start gap-2.5">
                        <div class="w-[528px] justify-start text-[#6B7280] text-[19px] font-semibold leading-loose">Menghubungkan individu, komunitas, dan lembaga dalam gerakan pelestarian lingkungan berbasis kolaborasi.</div>
                        <div class="w-[528px] justify-start text-[#6B7280] text-[19px] font-semibold leading-loose">Mengintegrasikan hasil riset, sains, dan pengetahuan lokal sebagai dasar pengambilan keputusan.</div>
                        <div class="w-[528px] justify-start text-[#6B7280] text-[19px] font-semibold leading-loose">Menyuarakan hak-hak alam dan komunitas terdampak melalui edukasi dan kampanye berbasis empati.</div>
                        <div class="w-[528px] justify-start text-[#6B7280] text-[19px] font-semibold leading-loose">Menjadi penanda harapan bahwa perubahan masih mungkin—selama kita bergerak bersama.</div>
                    </div>
                </div>
            </div>
            <!-- Nilai -->
            <div class="self-stretch flex flex-col justify-start items-center gap-5 mt-8">
                <div class="self-stretch text-center justify-start text-[#1F2937] text-2xl md:text-3xl font-bold leading-[60px]">Nilai-Nilai</div>
                    <div class="self-stretch flex flex-col justify-start items-start gap-7">
                        <div class="self-stretch h-96 inline-flex justify-start items-center gap-7">
                            <div class="flex-1 self-stretch px-4 py-8 bg-Background-Body rounded-3xl outline outline-1 outline-offset-[-1px] outline-[#E5E7EB] inline-flex flex-col justify-start items-center gap-6">
                                <div class="w-24 h-24 relative bg-lime-500 rounded-[999px] overflow-hidden">
                                    <img class="w-20 h-20 left-[9.67px] top-[10px] absolute" src="/images/misi1.png" />
                                </div>
                                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-md font-bold leading-loose">Science-Based Solutions</div>
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-sm font-medium leading-7">Our initiatives are grounded in rigorous scientific research and data analysis.</div>
                                </div>
                            </div>
                            <div class="flex-1 self-stretch px-4 py-8 bg-Background-Body rounded-3xl outline outline-1 outline-offset-[-1px] outline-[#E5E7EB] inline-flex flex-col justify-start items-center gap-6">
                                <div class="w-24 h-24 relative bg-lime-500 rounded-[999px] overflow-hidden">
                                    <img class="w-20 h-20 left-[10px] top-[10px] absolute" src="/images/misi2.png" />
                                </div>
                                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-md font-bold leading-loose">Transparent Impact</div>
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-sm font-medium leading-7">90% of donations go directly to conservation programs with measurable results.</div>
                                </div>
                            </div>
                            <div class="flex-1 self-stretch px-4 py-8 bg-Background-Body rounded-3xl outline outline-1 outline-offset-[-1px] outline-[#E5E7EB] inline-flex flex-col justify-start items-center gap-6">
                                <div class="w-24 h-24 relative bg-lime-500 rounded-[999px] overflow-hidden">
                                    <img class="w-20 h-20 left-[10.33px] top-[10px] absolute" src="/images/misi3.png" />
                                </div>
                                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-md font-bold leading-loose">Community Partnership</div>
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-sm font-medium leading-7">We work hand-in-hand with local communities to develop sustainable livelihoods.</div>
                                </div>
                            </div>
                        </div>
                        <div class="self-stretch h-96 inline-flex justify-start items-center gap-7">
                            <div class="flex-1 self-stretch px-4 py-8 bg-Background-Body rounded-3xl outline outline-1 outline-offset-[-1px] outline-[#E5E7EB] inline-flex flex-col justify-start items-center gap-6">
                                <div class="w-24 h-24 relative bg-lime-500 rounded-[999px] overflow-hidden">
                                    <img class="w-20 h-20 left-[9.67px] top-[10px] absolute" src="/images/misi4.png" />
                                </div>
                                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-md font-bold leading-loose">Sustainable Investment</div>
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-sm font-medium leading-7">We create long-term funding solutions that ensure continuous support for conservation efforts.</div>
                                </div>
                            </div>
                            <div class="flex-1 self-stretch px-4 py-8 bg-Background-Body rounded-3xl outline outline-1 outline-offset-[-1px] outline-[#E5E7EB] inline-flex flex-col justify-start items-center gap-6">
                                <div class="w-24 h-24 relative bg-lime-500 rounded-[999px] overflow-hidden">
                                    <img class="w-20 h-20 left-[10px] top-[10px] absolute" src="/images/misi5.png" />
                                </div>
                                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-md font-bold leading-loose">Protected Areas</div>
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-sm font-medium leading-7">Strategic protection of critical habitats and ecosystems through dedicated funding mechanisms.</div>
                                </div>
                            </div>
                            <div class="flex-1 self-stretch px-4 py-8 bg-Background-Body rounded-3xl outline outline-1 outline-offset-[-1px] outline-[#E5E7EB] inline-flex flex-col justify-start items-center gap-6">
                                <div class="w-24 h-24 relative bg-lime-500 rounded-[999px] overflow-hidden">
                                    <img class="w-20 h-20 left-[10.33px] top-[10px] absolute" src="/images/misi6.png" />
                                </div>
                                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-md font-bold leading-loose">Global Impacts</div>
                                    <div class="self-stretch text-center justify-start text-[#1F2937] text-sm font-medium leading-7">Working with partners worldwide to create lasting positive change for our planet.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CEO -->

                <div class="w-full h-96 flex justify-center items-center gap-8">
                    <!-- Kiri: Gambar dan info -->
                    <div class="w-[400px] h-[230px] relative rounded-[32px] overflow-hidden">
                        <!-- Gambar -->
                        <img src="/images/image8.png" class="w-full h-full object-cover" alt="Tibyani" />
                        
                        <!-- Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50"></div>
                        
                        <!-- Teks di atas gambar -->
                        <div class="absolute bottom-6 left-6 text-white">
                        <div class="text-xl font-bold">Tibyani</div>
                        <div class="text-sm text-white/70 font-semibold">CEO Tetenger Bumi</div>
                        </div>
                    </div>

                    <!-- Kanan: Teks kutipan -->
                    <div class="flex-1 flex flex-col justify-center items-start gap-2 max-w-xl">
                        <div class="text-4xl font-bold text-[#1F2937]">
                        Tetenger Bumi Universitas Brawijaya
                        </div>
                        <div class="text-lg font-medium text-[#6B7280] leading-relaxed">
                        Tumbuh-tumbuhan, jin dan hewan adalah “kakak kandung” manusia. Maka dari itu seyogyanya kita <em>kulanuwun</em> (sebagai bentuk menghormati yang lebih tua) kepada mereka saat hendak lewat atau “memakai jasa” mereka.
                        </div>
                        <div class="text-lg font-medium text-[#6B7280] leading-relaxed">
                        – Cak Nun –
                        </div>
                    </div>
                </div>

            <!-- Lanjutkan section Visi Misi, Nilai-Nilai, dll di sini -->
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
                                <div class="justify-start text-white text-sm font-reguler leading-tight">tetengerbumi@gmail.com</div>
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
  </AppLayout>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>