<template>
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white flex flex-col">
      <div class="h-16 flex items-center justify-center font-bold text-lg border-b border-gray-700">
        Laravel Starter Kit
      </div>
      <nav class="flex-1 px-4 py-6">
        <ul class="space-y-2">
          <li>
            <a href="/admin/dashboard" class="block py-2 px-3 rounded hover:bg-gray-800">Dashboard</a>
          </li>
          <!-- Tambahkan menu admin lain di sini -->
        </ul>
      </nav>
      <div class="p-4 border-t border-gray-700 text-sm text-gray-400">
        <a href="https://github.com" target="_blank" class="block hover:text-white mb-1">Github Repo</a>
        <a href="https://laravel.com/docs" target="_blank" class="block hover:text-white">Documentation</a>
      </div>
    </aside>
    <!-- Main Content -->
    <main class="flex-1 bg-gray-100">
      <slot />
    </main>
  </div>
</template>

<script setup>
// Tidak perlu logic khusus di sini
</script>
