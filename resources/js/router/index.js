import LandingPage from '@/pages/LandingPage.vue';
import Home from '@/pages/Home.vue';
import WaliPohon from '@/pages/WaliPohon.vue';
import { createRouter, createWebHistory } from 'vue-router';

const routes = [{ path: '/', name: 'Landing', component: LandingPage },
      { path: '/walipohon', name: 'WaliPohon', component: WaliPohon }

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
