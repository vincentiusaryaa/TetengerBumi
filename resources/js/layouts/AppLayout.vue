<script setup lang="ts">
import AppLayout from '@/layouts/app/AppSidebarLayout.vue';
import type { BreadcrumbItemType } from '@/types';
import { usePage, router, Link } from '@inertiajs/vue3';
import ProfileDropdown from '@/components/ProfileDropdown.vue';

const page = usePage();
interface AuthProps {
  user?: any; // Replace 'any' with your User type if available
}
const auth = page.props.auth as AuthProps | undefined;
const user = auth && auth.user ? auth.user : null;

function goToLogin() {
  // Gunakan URL absolut untuk memastikan tidak ada masalah relatif path
  console.log('Mencoba login...');
  console.log('Login route:', route('login'));
  try {
    router.visit(route('login'));
  } catch (error) {
    console.error('Login navigation error:', error);
  }
}
function goToRegister() {
    router.visit('/register');
}

interface Props {
    breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});
</script>

<template>
  <div class="bg-white">
    <!-- Navbar ala LandingPage.vue -->
    <nav class="fixed top-6 left-1/2 transform -translate-x-1/2 w-[1220px] h-[80px] rounded-[57px] bg-white flex items-center justify-between px-6 shadow-md z-50">
      <!-- Kiri: Logo -->
      <div class="flex items-center space-x-4">
        <img src="/images/tb2.png" alt="Logo" class="h-[42px] w-[134px]" />
      </div>
      <!-- Menu Tengah -->
      <div class="flex items-center space-x-6">
        <Link :href="user ? '/home' : '/landingpage'" class="text-sm font-medium text-gray-700 hover:text-black">Beranda</Link>
        <Link href="/proker" class="text-sm font-medium text-gray-700 hover:text-black">Program Kerja</Link>
        <Link href="/lokasi" class="text-sm font-medium text-gray-700 hover:text-black">Lokasi Tanam</Link>
        <Link href="/donasi" class="text-sm font-medium text-gray-700 hover:text-black">Donasi</Link>
        <Link href="/aboutus" class="text-sm font-medium text-gray-700 hover:text-black">Tentang Kami</Link>
      </div>
      <!-- Kanan: Login/Profile -->
      <div class="flex">
        <template v-if="user">
          <ProfileDropdown :user="user" />
        </template>
        <template v-else>
          <Link href="/login" class="text-white bg-[#84CC16] hover:bg-[#5D8736] rounded-[30px] text-sm px-5 py-2 text-center font-semibold transition-all duration-300">
            Masuk / Daftar
          </Link>
        </template>
      </div>
    </nav>
    <main>
      <slot />
    </main>
  </div>
</template>
