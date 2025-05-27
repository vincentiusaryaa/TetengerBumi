<template>
  <AdminLayout>
    <div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="bg-white rounded-xl shadow p-4">
        <h2 class="text-gray-500 text-sm">Program Kerja</h2>
        <p class="text-3xl font-bold text-blue-600">{{ statistik.program_kerja }}</p>
      </div>
      <div class="bg-white rounded-xl shadow p-4">
        <h2 class="text-gray-500 text-sm">Lokasi Tanam</h2>
        <p class="text-3xl font-bold text-green-600">{{ statistik.lokasi_tanam }}</p>
      </div>
      <div class="bg-white rounded-xl shadow p-4">
        <h2 class="text-gray-500 text-sm">Relawan</h2>
        <p class="text-3xl font-bold text-indigo-600">{{ statistik.relawan }}</p>
      </div>
      <div class="bg-white rounded-xl shadow p-4">
        <h2 class="text-gray-500 text-sm">Total Pohon</h2>
        <p class="text-3xl font-bold text-emerald-600">{{ statistik.pohon }}</p>
      </div>
    </div>
    </div>
  </AdminLayout>
</template>

<script setup>
import AdminLayout from '@/layouts/AdminLayout.vue';
defineProps({
  statistik: Object
})
</script>
