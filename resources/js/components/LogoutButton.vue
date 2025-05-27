<script setup lang="ts">
import { router } from '@inertiajs/vue3';
import { Button } from '@/components/ui/button';

function logout() {
    router.post(route('logout'));
}
</script>

<template>
    <form @submit.prevent="logout">
        <Button type="submit" variant="outline">
            Logout
        </Button>
    </form>
</template>
