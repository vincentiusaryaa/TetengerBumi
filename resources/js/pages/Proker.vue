<script setup>
import { useRouter } from 'vue-router'
import { usePage } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';

const router = useRouter()

function goToWaliPohon() {
  router.push('/walipohon')
}
</script>

<template>
  <AppLayout>
    <div class="relative bg-[#f3f3f3]">
      <section class="relative w-full">
        <!-- Background Image -->
    <div class="w-full px-24 pt-40 relative bg-Background-Body inline-flex flex-col justify-start items-center gap-14">
    <img class="w-full h-[994px] left-0 top-0 absolute" src="/images/image5.png" />
    <div class="w-full h-[994px] left-0 top-0 absolute bg-gradient-to-b from-black/30 to-[#f3f3f3]"></div>

        <!-- Judul Halaman -->
        <h1 class="absolute top-40 left-1/2 -translate-x-1/2 text-white text-4xl md:text-7xl font-bold leading-tight text-center z-10">
            Program Kerja
        </h1>
    </div>

        <!-- Wali Pohon -->
        <div class="relative max-w-screen-xl mx-auto bg-white rounded-[60px] shadow-xl p-10 md:p-20 mb-4 mt-60">
            <!-- Cerita Kami -->
            <div class="flex flex-col lg:flex-row gap-10 mb-2">
                <div class="flex-1 relative rounded-[40px] overflow-hidden">
                    <img src="/images/pohon1.png" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-l from-black/10 via-white/5 to-black/10"></div>
                </div>

                <!-- Card -->
                <div class="flex-1 space-y-6">
                    <div>
                        <h2 class="text-[#1F2937] text-3xl md:text-3xl font-bold">Wali Pohon</h2>
                    </div>
                    <div class="flex flex-wrap gap-4">
                    <!-- Tanggal -->
                        <div class="flex-1 px-6 py-2 bg-[#F7FEE7] rounded-xl flex justify-center items-center gap-3 min-w-fit">
                            <div class="p-[5px] bg-[#ECFCCB] rounded-full flex justify-center items-center">
                            <img src="/images/calendar-2.svg" alt="calendar" class="w-4 h-4" />
                            </div>
                            <div class="text-[#65A30D] text-base font-semibold leading-normal">6 Juni 2025 - 7 Juni 2025</div>
                        </div>

                        <!-- Jumlah relawan -->
                        <div class="flex-1 px-6 py-2 bg-[#F7FEE7] rounded-xl flex justify-center items-center gap-3 min-w-fit">
                            <div class="p-[5px] bg-[#ECFCCB] rounded-full flex justify-center items-center">
                            <img src="/images/profile-2.svg" alt="profile" class="w-4 h-4" />
                            </div>
                            <div class="text-[#65A30D] text-base font-semibold leading-normal">5 Relawan terdaftar</div>
                        </div>
                    </div>

                    <p class="text-[#6B7280] text-lg font-semibold leading-relaxed">Our flagship reforestation initiative in the Amazon basin has successfully restored over 5,000 hectares of degraded rainforest. Working with indigenous communities, we've planted more than 2 million native trees, creating wildlife corridors and carbon sinks while providing sustainable income sources for local people.</p>

                    <a href="/walipohon" class="w-[206px] h-[52px] bg-[#84CC16] hover:bg-[#65A30D] text-white font-semibold text-sm px-6 py-2 rounded-lg transition duration-300"
                    >
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div> 

        <!-- Wakaf Pohon -->
        <div class="relative max-w-screen-xl mx-auto bg-white rounded-[60px] shadow-xl p-10 md:p-20 mb-4 mt-4">
            <!-- Cerita Kami -->
            <div class="flex flex-col lg:flex-row gap-10 mb-2">
                <div class="flex-1 relative rounded-[40px] overflow-hidden">
                    <img src="/images/pohon1.png" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-l from-black/10 via-white/5 to-black/10"></div>
                </div>

                <!-- Card -->
                <div class="flex-1 space-y-6">
                    <div>
                        <h2 class="text-[#1F2937] text-3xl md:text-3xl font-bold">Wakaf Pohon</h2>
                    </div>
                    <div class="flex flex-wrap gap-4">
                    <!-- Tanggal -->
                        <div class="flex-1 px-6 py-2 bg-[#F7FEE7] rounded-xl flex justify-center items-center gap-3 min-w-fit">
                            <div class="p-[5px] bg-[#ECFCCB] rounded-full flex justify-center items-center">
                            <img src="/images/calendar-2.svg" alt="calendar" class="w-4 h-4" />
                            </div>
                            <div class="text-[#65A30D] text-base font-semibold leading-normal">6 Juni 2025 - 7 Juni 2025</div>
                        </div>

                        <!-- Jumlah relawan -->
                        <div class="flex-1 px-6 py-2 bg-[#F7FEE7] rounded-xl flex justify-center items-center gap-3 min-w-fit">
                            <div class="p-[5px] bg-[#ECFCCB] rounded-full flex justify-center items-center">
                            <img src="/images/profile-2.svg" alt="profile" class="w-4 h-4" />
                            </div>
                            <div class="text-[#65A30D] text-base font-semibold leading-normal">5 Relawan terdaftar</div>
                        </div>
                    </div>

                    <p class="text-[#6B7280] text-lg font-semibold leading-relaxed">Our flagship reforestation initiative in the Amazon basin has successfully restored over 5,000 hectares of degraded rainforest. Working with indigenous communities, we've planted more than 2 million native trees, creating wildlife corridors and carbon sinks while providing sustainable income sources for local people.</p>

                    <a href="/wakafpohon" class="w-[206px] h-[52px] bg-[#84CC16] hover:bg-[#65A30D] text-white font-semibold text-sm px-6 py-2 rounded-lg transition duration-300"
                    >
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div> 

        <!-- Charity Tress Planting -->
        <div class="relative max-w-screen-xl mx-auto bg-white rounded-[60px] shadow-xl p-10 md:p-20 mb-4 mt-4">
            <!-- Cerita Kami -->
            <div class="flex flex-col lg:flex-row gap-10 mb-2">
                <div class="flex-1 relative rounded-[40px] overflow-hidden">
                    <img src="/images/pohon1.png" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-l from-black/10 via-white/5 to-black/10"></div>
                </div>

                <!-- Card -->
                <div class="flex-1 space-y-6">
                    <div>
                        <h2 class="text-[#1F2937] text-3xl md:text-3xl font-bold">Charity Tress Planting</h2>
                    </div>
                    <div class="flex flex-wrap gap-4">
                    <!-- Tanggal -->
                        <div class="flex-1 px-6 py-2 bg-[#F7FEE7] rounded-xl flex justify-center items-center gap-3 min-w-fit">
                            <div class="p-[5px] bg-[#ECFCCB] rounded-full flex justify-center items-center">
                            <img src="/images/calendar-2.svg" alt="calendar" class="w-4 h-4" />
                            </div>
                            <div class="text-[#65A30D] text-base font-semibold leading-normal">6 Juni 2025 - 7 Juni 2025</div>
                        </div>

                        <!-- Jumlah relawan -->
                        <div class="flex-1 px-6 py-2 bg-[#F7FEE7] rounded-xl flex justify-center items-center gap-3 min-w-fit">
                            <div class="p-[5px] bg-[#ECFCCB] rounded-full flex justify-center items-center">
                            <img src="/images/profile-2.svg" alt="profile" class="w-4 h-4" />
                            </div>
                            <div class="text-[#65A30D] text-base font-semibold leading-normal">5 Relawan terdaftar</div>
                        </div>
                    </div>

                    <p class="text-[#6B7280] text-lg font-semibold leading-relaxed">Our flagship reforestation initiative in the Amazon basin has successfully restored over 5,000 hectares of degraded rainforest. Working with indigenous communities, we've planted more than 2 million native trees, creating wildlife corridors and carbon sinks while providing sustainable income sources for local people.</p>
                    
                    <a href="/charity" class="w-[206px] h-[52px] bg-[#84CC16] hover:bg-[#65A30D] text-white font-semibold text-sm px-6 py-2 rounded-lg transition duration-300"
                    >
                        Lihat Detail
                    </a>
                </div>
            </div>
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
  </AppLayout>
</template>
