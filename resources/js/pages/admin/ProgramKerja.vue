<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Kelola Program Kerja</h1>

    <!-- Form Tambah Program Kerja -->
    <form @submit.prevent="submitForm" class="mb-6 space-y-4">
      <input v-model="form.nama_program" type="text" placeholder="Nama Program" class="w-full border rounded p-2" />
      <textarea v-model="form.deskripsi" placeholder="Deskripsi" class="w-full border rounded p-2"></textarea>
      <input v-model="form.jadwal" type="date" class="w-full border rounded p-2" />
      <select v-model="form.status" class="w-full border rounded p-2">
        <option value="aktif">Aktif</option>
        <option value="selesai">Selesai</option>
      </select>
      <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>

    <!-- Tabel Daftar Program Kerja -->
    <table class="w-full table-auto border">
      <thead>
        <tr class="bg-gray-200">
          <th class="p-2 border">Nama</th>
          <th class="p-2 border">Deskripsi</th>
          <th class="p-2 border">Jadwal</th>
          <th class="p-2 border">Status</th>
          <th class="p-2 border">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in programKerja" :key="item.id">
          <td class="p-2 border">{{ item.nama_program }}</td>
          <td class="p-2 border">{{ item.deskripsi }}</td>
          <td class="p-2 border">{{ item.jadwal }}</td>
          <td class="p-2 border">{{ item.status }}</td>
          <td class="p-2 border space-x-2">
            <button @click="edit(item)" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</button>
            <button @click="hapus(item.id)" class="bg-red-600 text-white px-3 py-1 rounded">Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const programKerja = ref([]);
const form = ref({
  id: null,
  nama_program: '',
  deskripsi: '',
  jadwal: '',
  status: 'aktif'
});

const fetchData = async () => {
  const response = await axios.get('/api/program-kerja');
  programKerja.value = response.data;
};

const submitForm = async () => {
  if (form.value.id) {
    await axios.put(`/api/program-kerja/${form.value.id}`, form.value);
  } else {
    await axios.post('/api/program-kerja', form.value);
  }
  form.value = { id: null, nama_program: '', deskripsi: '', jadwal: '', status: 'aktif' };
  fetchData();
};

const edit = (item) => {
  form.value = { ...item };
};

const hapus = async (id) => {
  await axios.delete(`/api/program-kerja/${id}`);
  fetchData();
};

onMounted(fetchData);
</script>
