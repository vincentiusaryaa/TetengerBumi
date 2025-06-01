<template>
  <AppLayout>
    <!-- Hero Section -->
    <div class="relative w-full h-[400px] md:h-[500px] overflow-hidden">
      <img 
        :src="locationData.image" 
        :alt="locationData.name" 
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
        <div class="text-center text-white max-w-4xl px-4">
          <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4">{{ locationData.name }}</h1>
          <p class="text-lg md:text-xl">{{ locationData.address }}</p>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column -->
        <div class="lg:col-span-2">
          <!-- About Location -->
          <section class="bg-white rounded-xl shadow-md p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Tentang Lokasi</h2>
            <div class="prose max-w-none">
              <p class="text-gray-700 mb-4">{{ locationData.description }}</p>
              
              <div class="grid grid-cols-2 gap-4 mt-6">
                <div class="bg-gray-50 p-4 rounded-lg">
                  <h3 class="font-semibold text-gray-900">Luas Area</h3>
                  <p class="text-gray-600">{{ locationData.area }} ha</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                  <h3 class="font-semibold text-gray-900">Jumlah Pohon</h3>
                  <p class="text-gray-600">{{ locationData.tree_count }} pohon</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                  <h3 class="font-semibold text-gray-900">Jenis Tanah</h3>
                  <p class="text-gray-600">{{ locationData.soil_type }}</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                  <h3 class="font-semibold text-gray-900">Tanggal Mulai</h3>
                  <p class="text-gray-600">{{ formatDate(locationData.start_date) }}</p>
                </div>
              </div>
            </div>
          </section>

          <!-- Progress Section -->
          <section class="bg-white rounded-xl shadow-md p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Progress Penanaman</h2>
            
            <!-- Funding Progress -->
            <div class="mb-8">
              <div class="flex justify-between mb-2">
                <h3 class="font-medium text-gray-700">Pendanaan</h3>
                <span class="font-medium text-green-600">{{ (locationData.funded_amount / locationData.funding_goal * 100).toFixed(1) }}%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-3">
                <div 
                  class="bg-green-600 h-3 rounded-full" 
                  :style="{ width: `${(locationData.funded_amount / locationData.funding_goal * 100)}%` }"
                ></div>
              </div>
              <div class="flex justify-between mt-2 text-sm text-gray-500">
                <span>IDR {{ formatCurrency(locationData.funded_amount) }}</span>
                <span>Target: IDR {{ formatCurrency(locationData.funding_goal) }}</span>
              </div>
            </div>

            <!-- Planting Progress -->
            <div>
              <div class="flex justify-between mb-2">
                <h3 class="font-medium text-gray-700">Penanaman</h3>
                <span class="font-medium text-green-600">{{ (locationData.planted_trees / locationData.tree_goal * 100).toFixed(1) }}%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-3">
                <div 
                  class="bg-green-600 h-3 rounded-full" 
                  :style="{ width: `${(locationData.planted_trees / locationData.tree_goal * 100)}%` }"
                ></div>
              </div>
              <div class="flex justify-between mt-2 text-sm text-gray-500">
                <span>{{ locationData.planted_trees }} pohon</span>
                <span>Target: {{ locationData.tree_goal }} pohon</span>
              </div>
            </div>
          </section>

          <!-- Gallery Section -->
          <section class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Galeri</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
              <div 
                v-for="(image, index) in locationData.gallery" 
                :key="index"
                class="aspect-square overflow-hidden rounded-lg"
              >
                <img 
                  :src="image" 
                  :alt="`Galeri ${index + 1}`" 
                  class="w-full h-full object-cover hover:scale-105 transition-transform duration-300 cursor-pointer"
                  @click="openLightbox(image)"
                />
              </div>
            </div>
          </section>
        </div>

        <!-- Right Column -->
        <div class="lg:col-span-1">
          <!-- Donation Card -->
          <div class="bg-white rounded-xl shadow-md p-6 sticky top-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Dukung Penanaman</h2>
            <p class="text-gray-600 mb-6">Bantu kami mewujudkan lokasi tanam yang lebih hijau dengan berdonasi</p>
            
            <div class="space-y-4">
              <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                <p class="text-sm text-gray-600 mb-2">Donasi per pohon</p>
                <div class="flex items-center">
                  <span class="text-2xl font-bold text-green-700">IDR 50.000</span>
                  <span class="ml-2 text-sm text-gray-500">/pohon</span>
                </div>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Jumlah Pohon</label>
                <div class="flex">
                  <button 
                    @click="treeCount > 1 ? treeCount-- : null"
                    class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-l-lg focus:outline-none"
                  >
                    -
                  </button>
                  <input 
                    type="number" 
                    v-model.number="treeCount"
                    min="1"
                    class="w-full text-center border-t border-b border-gray-300 py-2 focus:ring-2 focus:ring-green-500 focus:border-transparent"
                  >
                  <button 
                    @click="treeCount++"
                    class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-r-lg focus:outline-none"
                  >
                    +
                  </button>
                </div>
              </div>

              <div class="pt-2">
                <div class="flex justify-between text-lg font-semibold mb-4">
                  <span>Total Donasi</span>
                  <span>IDR {{ formatCurrency(treeCount * 50000) }}</span>
                </div>
                <button 
                  @click="handleDonate"
                  class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-300"
                >
                  Donasi Sekarang
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Lightbox -->
    <div 
      v-if="showLightbox" 
      class="fixed inset-0 bg-black/90 z-50 flex items-center justify-center p-4"
      @click.self="showLightbox = false"
    >
      <button 
        @click="showLightbox = false"
        class="absolute top-4 right-4 text-white hover:text-gray-300"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <img 
        :src="currentImage" 
        class="max-w-full max-h-[90vh] object-contain"
        alt="Galeri"
      />
    </div>
  </AppLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import AppLayout from '@/Layouts/AppLayout.vue';

const route = useRoute();
const locationId = route.params.id;

// State
const locationData = ref({
  id: 1,
  name: 'Hutan Konservasi Bukit Pudjon',
  address: 'Desa Tegal Maja, Kecamatan Tegal Waru, Kabupaten Bogor, Jawa Barat',
  description: 'Hutan Konservasi Bukit Pudjon merupakan kawasan hutan lindung yang menjadi habitat bagi berbagai jenis flora dan fauna endemik. Program penanaman di lokasi ini bertujuan untuk memulihkan ekosistem hutan yang sempat mengalami kerusakan akibat aktivitas manusia.',
  area: 5.2,
  tree_count: 1250,
  soil_type: 'Andosol',
  start_date: '2023-01-15',
  funded_amount: 62500000,
  funding_goal: 100000000,
  planted_trees: 1250,
  tree_goal: 2000,
  image: '/images/location-1.jpg',
  gallery: [
    '/images/gallery-1.jpg',
    '/images/gallery-2.jpg',
    '/images/gallery-3.jpg',
    '/images/gallery-4.jpg',
    '/images/gallery-5.jpg',
    '/images/gallery-6.jpg',
  ]
});

const treeCount = ref(1);
const showLightbox = ref(false);
const currentImage = ref('');

// Methods
const formatCurrency = (value) => {
  return new Intl.NumberFormat('id-ID').format(value);
};

const formatDate = (dateString) => {
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  return new Date(dateString).toLocaleDateString('id-ID', options);
};

const openLightbox = (image) => {
  currentImage.value = image;
  showLightbox.value = true;
};

const handleDonate = () => {
  // Handle donation logic here
  alert(`Terima kasih! Anda akan mendonasikan ${treeCount.value} pohon senilai IDR ${formatCurrency(treeCount.value * 50000)}`);
};

// Fetch location data
onMounted(() => {
  // In a real app, you would fetch the location data from an API
  // fetch(`/api/locations/${locationId}`)
  //   .then(response => response.json())
  //   .then(data => {
  //     locationData.value = data;
  //   });
});
</script>

<style scoped>
.prose {
  max-width: 100%;
}

.prose p {
  margin-bottom: 1rem;
  line-height: 1.625;
}

.prose h2 {
  font-size: 1.5rem;
  font-weight: 700;
  margin-top: 2rem;
  margin-bottom: 1rem;
  color: #111827;
}

.prose h3 {
  font-size: 1.25rem;
  font-weight: 600;
  margin-top: 1.5rem;
  margin-bottom: 0.5rem;
  color: #111827;
}
</style>
