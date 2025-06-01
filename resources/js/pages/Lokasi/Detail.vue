<template>
  <AppLayout>
    <Head :title="`Detail Lokasi - ${currentLocation.name}`" />
    
    <div class="relative bg-[#ffffff]">
      <!-- Hero Section dengan Background Image -->
      <section class="relative w-full">
        <div class="w-full px-24 pt-40 relative bg-Background-Body inline-flex flex-col justify-start items-center gap-14">
          <img class="w-full h-[994px] left-0 top-0 absolute" src="/images/image5.png" />
          <div class="w-full h-[994px] left-0 top-0 absolute bg-gradient-to-b from-black/30 to-white"></div>

          <!-- Judul Halaman -->
          <h1 class="absolute top-40 left-1/2 -translate-x-1/2 text-white text-4xl md:text-7xl font-bold leading-tight text-center z-10">
            {{ currentLocation.name }}
          </h1>
          
          <!-- Breadcrumb -->
          <div class="absolute top-28 left-1/2 -translate-x-1/2 text-white z-10 flex items-center gap-2">
            <Link href="/lokasi" class="text-white hover:text-gray-200">Lokasi Tanam</Link>
            <span>/</span>
            <span>{{ currentLocation.name }}</span>
          </div>
        </div>
        
        <!-- Konten Utama -->
        <div class="relative max-w-screen-xl mx-auto bg-white rounded-[60px] mt-60 p-6 md:p-12 shadow-xl">
          <!-- Peta Lokasi -->
          <div class="mb-6">
            <div class="bg-[#F1F8DF] rounded-3xl overflow-hidden">
              <div class="relative pt-3 px-4 pb-2">
                <span class="text-sm text-gray-600 font-medium">Lihat peta lebih besar</span>
              </div>
              <iframe 
                :src="`https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2282572535394!2d${currentLocation.coordinates.split(',')[1]}!3d${currentLocation.coordinates.split(',')[0]}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDU1JzE1LjgiTiA5NcKwMzAnNDcuMSJF!5e0!3m2!1sen!2sid!4v1686600000000!5m2!1sen!2sid`" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full"
              ></iframe>
            </div>
          </div>
          
          <!-- Informasi Dana -->
          <div class="mb-2">
            <h3 class="text-sm font-medium text-gray-600">Dana Terkumpul</h3>
          </div>

          <!-- Progress Bar dan Informasi -->
          <div class="flex flex-col mb-6">
            <div class="flex justify-between items-center mb-2">
              <div class="w-2/3 pr-4">
                <div class="text-[#65A30D] text-xl font-bold mb-1">IDR {{ formatCurrency(currentLocation.fundedAmount) }}</div>
                <div class="w-full h-4 bg-gray-200 rounded-full overflow-hidden">
                  <div class="h-full bg-[#65A30D]" :style="{ width: `${currentLocation.fundingPercentage}%` }"></div>
                </div>
                <p class="text-sm text-gray-600 font-medium mt-1">
                  {{ currentLocation.fundingPercentage }}% dari IDR {{ formatCurrency(currentLocation.fundingGoal) }} Goals
                </p>
              </div>
              
              <div class="flex items-center space-x-4">
                <div class="flex items-center gap-2 px-4 py-2 bg-[#F0FDF4] rounded-full text-[#65A30D] font-medium">
                  <img src="/images/profile-2.svg" alt="Donatur" class="w-5 h-5" />
                  <span>{{ currentLocation.donators }} Donatur</span>
                </div>
                
                <a :href="`https://www.google.com/maps/dir/?api=1&destination=${encodeURIComponent(currentLocation.coordinates)}`" target="_blank" class="px-6 py-2 bg-[#84CC16] hover:bg-[#65A30D] text-white font-semibold text-base rounded-full transition duration-300 inline-flex items-center justify-center">
                  Lihat Peta
                </a>
              </div>
            </div>
          </div>
          
          <!-- Deskripsi Lokasi -->
          <div class="prose max-w-none mb-8">
            <p class="text-[#4B5563]">{{ currentLocation.description }}</p>
            <p class="text-[#4B5563] mt-4">{{ currentLocation.description }}</p>
          </div>
        </div>
      </section>
      
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
              <div class="inline-flex justify-center items-center gap-2.5">
                <div class="w-7 h-7 flex items-center justify-center bg-[#84CC16] rounded-full">
                  <img src="/images/instagram.svg" alt="Instagram" class="w-4 h-4" />
                </div>
                <div class="w-7 h-7 flex items-center justify-center bg-[#84CC16] rounded-full">
                  <img src="/images/youtube.svg" alt="YouTube" class="w-4 h-4" />
                </div>
                <div class="w-7 h-7 flex items-center justify-center bg-[#84CC16] rounded-full">
                  <img src="/images/facebook.svg" alt="Facebook" class="w-4 h-4" />
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
                    <div class="w-4 h-4 relative rounded-[200px]"><img src="/images/location.svg" alt="Address" class="w-4 h-4" /></div>
                    <div class="flex-1 justify-start text-white text-sm font-reguler leading-tight">Universitas Brawijaya<br> Jl. Veteran No.25, Kota Malang, Jawa Timur</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="self-stretch h-0 outline outline-1 outline-offset-[-0.50px] outline-white/30"></div>
          <div class="self-stretch flex flex-col justify-start items-center gap-2.5">
            <div class="justify-start text-white text-lg font-medium leading-7">© 2025 Tetenger Bumi - Kelompok 5 Capstone Project</div>
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
import { ref, computed } from 'vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';

const props = defineProps({
  id: {
    type: [Number, String],
    required: true
  }
});

// Data lokasi simulasi (akan diganti dengan data dari API)
const locations = ref([
  {
    id: 1,
    name: 'Hutan Konservasi Bukit Pudjon',
    description: 'Hutan Konservasi Bukit Pudjon adalah kawasan hutan lindung yang terletak di daerah Pudjon, Jawa Timur. Kawasan ini memiliki keanekaragaman hayati yang tinggi dan berperan penting dalam menjaga keseimbangan ekosistem dan sumber air bagi masyarakat sekitar.',
    additionalInfo: 'Kawasan ini telah menjadi fokus konservasi sejak tahun 2018 dan telah berhasil meningkatkan tutupan hutan sebesar 15% dalam 3 tahun terakhir.',
    coordinates: '-7.9071376,112.5742392',
    donators: 68,
    fundedAmount: 86000000,
    fundingGoal: 100000000,
    fundingPercentage: 86,
    image: '/images/image4.png',
    gallery: [
      '/images/image4.png',
      '/images/image4.png',
      '/images/image4.png',
      '/images/image4.png',
      '/images/image4.png',
      '/images/image4.png'
    ]
  },
  {
    id: 2,
    name: 'Kawasan Hutan Gunung Arjuno',
    description: 'Kawasan Hutan Gunung Arjuno merupakan area konservasi yang berada di lereng Gunung Arjuno. Kawasan ini memiliki peran vital dalam menjaga kestabilan tanah dan mencegah longsor, serta menjadi habitat bagi berbagai spesies flora dan fauna langka.',
    additionalInfo: 'Program reforestasi di kawasan ini melibatkan kerja sama dengan masyarakat lokal dan telah menciptakan lapangan kerja hijau bagi 42 keluarga.',
    coordinates: '-7.7359431,112.5789452',
    donators: 42,
    fundedAmount: 45000000,
    fundingGoal: 75000000,
    fundingPercentage: 60,
    image: '/images/image4.png',
    gallery: [
      '/images/image4.png',
      '/images/image4.png',
      '/images/image4.png'
    ]
  },
  {
    id: 3,
    name: 'Area Konservasi Mangrove Ujung Pangkah',
    description: 'Area Konservasi Mangrove Ujung Pangkah adalah kawasan hutan bakau yang terletak di pesisir Ujung Pangkah. Kawasan ini berperan penting dalam melindungi garis pantai dari abrasi, menjadi rumah bagi berbagai biota laut, dan mendukung mata pencaharian masyarakat pesisir.',
    additionalInfo: 'Konservasi mangrove ini telah berhasil meningkatkan pendapatan nelayan lokal hingga 25% berkat peningkatan populasi ikan dan udang di sekitar kawasan.',
    coordinates: '-6.9044759,112.5553387',
    donators: 37,
    fundedAmount: 32000000,
    fundingGoal: 50000000,
    fundingPercentage: 64,
    image: '/images/image4.png',
    gallery: [
      '/images/image4.png',
      '/images/image4.png',
      '/images/image4.png',
      '/images/image4.png'
    ]
  }
]);

const currentLocation = computed(() => {
  return locations.value.find(location => location.id == props.id) || {
    id: null,
    name: 'Lokasi Tidak Ditemukan',
    description: 'Maaf, data lokasi yang Anda cari tidak ditemukan.',
    fundedAmount: 0,
    fundingGoal: 0,
    fundingPercentage: 0,
    donators: 0,
    coordinates: '-7.9071376,112.5742392',
    image: '/images/placeholder.png'
  };
});

// Format mata uang ke format Indonesia
const formatCurrency = (value) => {
  return new Intl.NumberFormat('id-ID').format(value);
};
</script>
