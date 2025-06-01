<template>
  <AppLayout>
    <div class="relative bg-[#ffffff]">
      <!-- Hero Section dengan Background Image -->
      <section class="relative w-full">
        <div class="w-full px-24 pt-40 relative bg-Background-Body inline-flex flex-col justify-start items-center gap-14">
          <img class="w-full h-[994px] left-0 top-0 absolute" src="/images/image5.png" />
          <div class="w-full h-[994px] left-0 top-0 absolute bg-gradient-to-b from-black/30 to-white"></div>

          <!-- Judul Halaman -->
          <h1 class="absolute top-40 left-1/2 -translate-x-1/2 text-white text-4xl md:text-7xl font-bold leading-tight text-center z-10">
            Daftar Donatur
          </h1>
          
          <!-- Breadcrumb -->
          <div class="absolute top-28 left-1/2 -translate-x-1/2 text-white z-10 flex items-center gap-2">
            <Link href="/donasi" class="text-white hover:text-gray-200">Donasi</Link>
            <span>/</span>
            <span>Daftar Donatur</span>
          </div>
        </div>
        
        <!-- Konten Utama -->
        <div class="relative max-w-screen-xl mx-auto bg-white rounded-[60px] mt-60 p-6 md:p-12 shadow-xl">
          <!-- Search Bar -->
          <div class="flex items-center justify-between mb-10">
            <div class="relative flex-1 max-w-lg">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
              </div>
              <input 
                type="search" 
                v-model="searchQuery"
                class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-[#65A30D] focus:border-[#65A30D] outline-none" 
                placeholder="Cari Nama Donatur" 
              />
            </div>
            <button 
              @click="searchDonatur"
              class="px-8 py-4 ml-4 text-white bg-[#84CC16] hover:bg-[#65A30D] font-semibold rounded-full transition duration-300">
              Cari Donatur
            </button>
          </div>

          <!-- Tabel Donatur -->
          <div class="overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right bg-white rounded-3xl overflow-hidden">
              <thead class="text-xs bg-[#ECFCCB] text-[#65A30D] uppercase">
                <tr>
                  <th scope="col" class="px-6 py-4 font-semibold">No</th>
                  <th scope="col" class="px-6 py-4 font-semibold">Tanggal</th>
                  <th scope="col" class="px-6 py-4 font-semibold">Nama</th>
                  <th scope="col" class="px-6 py-4 font-semibold">Lokasi Donasi</th>
                  <th scope="col" class="px-6 py-4 font-semibold">Nominal Donasi</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(donatur, index) in displayedDonatur" :key="index" class="bg-white border-b hover:bg-gray-50">
                  <td class="px-6 py-4">{{ donatur.no }}</td>
                  <td class="px-6 py-4">{{ donatur.tanggal }}</td>
                  <td class="px-6 py-4">{{ donatur.nama }}</td>
                  <td class="px-6 py-4">{{ donatur.lokasi }}</td>
                  <td class="px-6 py-4">IDR {{ formatCurrency(donatur.nominal) }}</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <div class="flex justify-center items-center mt-8">
            <nav aria-label="Page navigation">
              <ul class="flex items-center -space-x-px h-10 text-base">
                <li>
                  <a @click="previousPage" :class="{ 'cursor-not-allowed opacity-50': currentPage === 1 }" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                    <span class="sr-only">Previous</span>
                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                  </a>
                </li>
                <li v-for="page in totalPages" :key="page">
                  <a @click="goToPage(page)" :class="{ 'bg-[#ECFCCB] text-[#65A30D] border-[#65A30D]': currentPage === page }" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 cursor-pointer">
                    {{ page }}
                  </a>
                </li>
                <li>
                  <a @click="nextPage" :class="{ 'cursor-not-allowed opacity-50': currentPage === totalPages }" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                    <span class="sr-only">Next</span>
                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </section>
    </div>
  </AppLayout>
</template>

<script setup>
import { ref, computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';

// Data donatur (contoh data statis, nantinya bisa diambil dari API)
const donaturList = ref([
  { 
    no: '05', 
    tanggal: '30 April 2025', 
    nama: 'Alice Green', 
    lokasi: 'Gunung Seruni', 
    nominal: 350000 
  },
  { 
    no: '04', 
    tanggal: '22 April 2025', 
    nama: 'John Brown', 
    lokasi: 'Bukit Pudjon', 
    nominal: 200000 
  },
  { 
    no: '03', 
    tanggal: '18 Februari 2025', 
    nama: 'Jim Green', 
    lokasi: 'Bukit Pudjon', 
    nominal: 200000 
  },
  { 
    no: '02', 
    tanggal: '2 Februari 2025', 
    nama: 'Joe Black', 
    lokasi: 'Bukit Pudjon', 
    nominal: 200000 
  },
  { 
    no: '01', 
    tanggal: '27 Januari 2025', 
    nama: 'Edward King', 
    lokasi: 'Bukit Pudjon', 
    nominal: 200000 
  },
]);

// Pencarian
const searchQuery = ref('');
const searchDonatur = () => {
  // Implementasi pencarian - nantinya bisa dihubungkan dengan API
  // Untuk sementara filter data lokal
  if (searchQuery.value.trim() === '') {
    return;
  }
  
  const query = searchQuery.value.toLowerCase();
  filteredDonatur.value = donaturList.value.filter(d => 
    d.nama.toLowerCase().includes(query)
  );
  
  currentPage.value = 1;
};

// Pagination
const currentPage = ref(1);
const itemsPerPage = 5;
const filteredDonatur = ref(donaturList.value);

const totalPages = computed(() => {
  return Math.ceil(filteredDonatur.value.length / itemsPerPage);
});

const displayedDonatur = computed(() => {
  const start = (currentPage.value - 1) * itemsPerPage;
  const end = start + itemsPerPage;
  return filteredDonatur.value.slice(start, end);
});

const nextPage = () => {
  if (currentPage.value < totalPages.value) {
    currentPage.value++;
  }
};

const previousPage = () => {
  if (currentPage.value > 1) {
    currentPage.value--;
  }
};

const goToPage = (page) => {
  currentPage.value = page;
};

// Format currency
const formatCurrency = (value) => {
  return new Intl.NumberFormat('id-ID').format(value);
};
</script>
