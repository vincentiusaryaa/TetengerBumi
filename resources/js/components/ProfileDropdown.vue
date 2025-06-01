<script setup lang="ts">
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import { Button } from '@/components/ui/button';
import { usePage } from '@inertiajs/vue3';

const showMenu = ref(false);
const page = usePage();
interface AuthProps {
  user?: {
    name: string;
    email: string;
    profile_photo_url?: string;
  };
}
const auth = page.props.auth as AuthProps;
const user = auth.user;

// Cek apakah ada foto profil terbaru di localStorage
const latestProfilePhoto = ref('');

// Fungsi untuk mendapatkan URL foto profil
function getProfilePhotoUrl() {
  // Ambil URL foto dari server di localStorage
  const fromStorage = localStorage.getItem('latest_profile_photo_url');
  if (fromStorage) {
    latestProfilePhoto.value = fromStorage;
    return fromStorage;
  }
  // Fallback ke data user dari server
  if (user && user.profile_photo_url) {
    return user.profile_photo_url;
  }
  // Default avatar
  return '/images/default-avatar.png';
}

function logout() {
    router.post(route('logout'));
}

function goToProfile() {
    router.visit('/profile');
}
</script>

<template>
    <div class="relative" v-if="user">
        <button @click="showMenu = !showMenu" class="w-10 h-10 rounded-full overflow-hidden border-2 border-gray-300 bg-white flex items-center justify-center">
            <img :src="getProfilePhotoUrl()" alt="Profile" class="w-full h-full object-cover object-center" style="aspect-ratio: 1/1;" />
        </button>
        <div v-if="showMenu" class="absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg z-50 p-4">
            <div class="flex flex-col items-center mb-3">
                <img :src="getProfilePhotoUrl()" alt="Profile" class="w-16 h-16 rounded-full object-cover object-center mb-2" style="aspect-ratio: 1/1;" />
                <span class="font-semibold">{{ user ? user.name : '' }}</span>
                <span class="text-xs text-gray-500">{{ user ? user.email : '' }}</span>
            </div>
            <Button class="w-full mb-2" @click="goToProfile">Edit Profil</Button>
            <Button class="w-full" variant="outline" @click="logout">Logout</Button>
        </div>
    </div>
</template>
