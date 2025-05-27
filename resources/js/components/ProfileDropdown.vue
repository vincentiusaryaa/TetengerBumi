<script setup lang="ts">
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import { Button } from '@/components/ui/button';
import { usePage } from '@inertiajs/vue3';

const showMenu = ref(false);
const user = usePage().props.auth.user;

function logout() {
    router.post(route('logout'));
}

function goToProfile() {
    router.visit('/profile');
}
</script>

<template>
    <div class="relative">
        <button @click="showMenu = !showMenu" class="w-10 h-10 rounded-full overflow-hidden border-2 border-gray-300 bg-white flex items-center justify-center">
            <img v-if="user.profile_photo_url" :src="user.profile_photo_url" alt="Profile" class="w-full h-full object-cover" />
            <span v-else class="text-gray-400">👤</span>
        </button>
        <div v-if="showMenu" class="absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg z-50 p-4">
            <div class="flex flex-col items-center mb-3">
                <img v-if="user.profile_photo_url" :src="user.profile_photo_url" alt="Profile" class="w-16 h-16 rounded-full object-cover mb-2" />
                <span class="font-semibold">{{ user.name }}</span>
                <span class="text-xs text-gray-500">{{ user.email }}</span>
            </div>
            <Button class="w-full mb-2" @click="goToProfile">Edit Profil</Button>
            <Button class="w-full" variant="outline" @click="logout">Logout</Button>
        </div>
    </div>
</template>
