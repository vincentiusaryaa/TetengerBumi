<template>
    <Head title="Sign In" />

    <div class="w-full min-h-screen p-10 bg-white inline-flex justify-center items-start gap-10">
        <!-- Form -->
        <div data-property-1="Sign In" class="w-[600px] self-stretch p-16 bg-white rounded-[60px] shadow-xl flex flex-col justify-start items-center gap-10">
            <div class="inline-flex justify-start items-center gap-1.5">
                <img class="w-10 h-10" src="/images/tb1.png" alt="TETENGER BUMI Logo"></img> <div class="w-24 inline-flex flex-col justify-start items-start">
                    <div class="self-stretch justify-start text-[#65A30D] text-sm font-bold">TETENGER</div>
                    <div class="self-stretch justify-start text-[#65A30D] text-sm font-bold">BUMI</div>
                </div>
            </div>

            <div data-property-1="Sign In Button Select" class="w-96 px-1.5 py-1 rounded-[999px] outline outline-1 outline-offset-[-1px] outline-[#E5E7EB] inline-flex justify-center items-start gap-2.5">
                <div data-color="Green" data-size="Default" data-state="Default" data-style="Solid" class="flex-1 flex justify-center items-center">
                    <div data-badge="false" class="flex-1 px-4 py-3.5 bg-[#84CC16] rounded-[999px] flex justify-center items-center gap-2.5 overflow-hidden">
                        <div class="text-center justify-start text-white text-base font-semibold tracking-tight">Sign In</div>
                    </div>
                </div>
                <Link :href="route('register')" data-color="Light" data-size="Default" data-state="Default" data-style="Solid" class="flex-1 flex justify-center items-center">
                    <div data-badge="false" class="flex-1 px-4 py-3.5 bg-Components-Button-Solid-Light-Bg-Color rounded-[999px] flex justify-center items-center gap-2.5 overflow-hidden">
                        <div class="text-center justify-start text-[#84CC16] text-base font-semibold tracking-tight">Register</div>
                    </div>
                </Link>
            </div>

            <div class="self-stretch flex flex-col justify-start items-start gap-3">
                <div class="justify-start text-[#1F2937] text-5xl font-bold leading-[60px]">Sign In</div>
                <div class="justify-start text-[#6B7280] text-lg font-medium leading-7">Welcome Back! Please Sign In to Continue.</div>
            </div>

            <div v-if="status" class="mb-4 text-sm font-medium text-green-600 self-stretch">
                {{ status }}
            </div>

            <form @submit.prevent="submit" class="self-stretch flex flex-col justify-start items-start gap-5 w-full">
                <div class="self-stretch flex flex-col justify-start items-start gap-2.5">
                    <label for="email" class="self-stretch justify-start text-[#374151] text-sm font-semibold tracking-tight">Email</label>
                    <div class="self-stretch bg-Basic-Forms-Input-Background-Bg-Color rounded-[999px] shadow-[0px_1px_2px_0px_rgba(0,0,0,0.05)] outline outline-1 outline-offset-[-1px] outline-[#D1D5DB] inline-flex justify-start items-center overflow-hidden">
                        <input
                            id="email"
                            type="email"
                            v-model="form.email"
                            required
                            autofocus
                            autocomplete="email"
                            placeholder="Masukan email anda"
                            class="flex-1 px-5 py-5 text-[#9CA3BA] text-base font-medium tracking-tight bg-transparent focus:ring-0 border-0 w-full"
                        />
                    </div>
                    <InputError class="mt-1 text-xs text-red-500" :message="form.errors.email" />
                </div>

                <div class="self-stretch flex flex-col justify-start items-start gap-2.5">
                    <label for="password" class="self-stretch justify-start text-[#374151] text-sm font-semibold tracking-tight">Password</label>
                    <div class="self-stretch bg-Basic-Forms-Input-Background-Bg-Color rounded-[999px] shadow-[0px_1px_2px_0px_rgba(0,0,0,0.05)] outline outline-1 outline-offset-[-1px] outline-[#D1D5DB]  flex items-center overflow-hidden relative">
                        <input
                            id="password"
                            :type="showPassword ? 'text' : 'password'"
                            v-model="form.password"
                            required
                            autocomplete="current-password"
                            placeholder="Masukan password anda"
                            class="flex-1 ps-5 pe-12 py-5 text-[#9CA3BA] text-base font-medium tracking-tight bg-transparent focus:ring-0 border-0 w-full"
                            />
                        <button
                            type="button"
                            @click="togglePasswordVisibility"
                            class="absolute inset-y-0 end-0 flex items-center z-10 px-4 text-[#6B7280] hover:text-[#374151] cursor-pointer"
                            aria-label="Toggle password visibility"
                        >
                            <svg
                                class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <template v-if="!showPassword">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L12 12" />
                                </template>
                                <template v-if="showPassword">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </template>
                            </svg>
                        </button>
                    </div>
                    <InputError class="mt-1 text-xs text-red-500" :message="form.errors.password" />
                </div>

                <div class="self-stretch inline-flex justify-between items-center">
                    <label for="remember" class="inline-flex items-center gap-2 cursor-pointer">
                        <div class="pt-1 flex justify-start items-start">
                             <input
                                id="remember"
                                type="checkbox"
                                v-model="form.remember"
                                class="w-4 h-4 bg-[#ffffff] rounded outline outline-1 outline-offset-[-1px] outline-[#D1D5DB] focus:ring-[#84CC16] text-[#84CC16]"
                            />
                        </div>
                        <span class="text-[#374151] text-base font-medium leading-normal tracking-tight">Ingat Saya</span>
                    </label>
                    <Link v-if="canResetPassword" :href="route('password.request')" class="text-center justify-start text-[#84CC16] text-base font-semibold tracking-tight hover:underline">
                        Lupa Password?
                    </Link>
                </div>

                <button type="submit" :disabled="form.processing" class="self-stretch px-5 py-5 bg-[#84CC16] rounded-[999px] flex justify-center items-center gap-2.5 overflow-hidden mt-3 text-Components-Button-Solid-Green-Placeholder-Color text-base font-semibold tracking-tight disabled:opacity-75">
                    <svg v-if="form.processing" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Sign In
                </button>

                <div v-if="form.errors && Object.keys(form.errors).length > 0 && !form.errors.email && !form.errors.password" class="mt-2 p-3 border border-red-300 bg-red-50 text-red-700 rounded-md text-sm self-stretch">
                    <ul class="list-disc pl-5">
                        <li v-for="(error, key) in form.errors" :key="key">
                             {{ error }}
                        </li>
                    </ul>
                </div>
            </form>
        </div>

        <!-- Gambar -->
        <div class="flex-1 self-stretch py-16 relative rounded-3xl inline-flex flex-col justify-between items-center overflow-hidden">
            <img class="absolute inset-0 w-full h-full blur-[1px] object-cover" src="/images/image5.png" alt="Background" />
            <div class="w-full h-full absolute inset-0 bg-gradient-to-b from-black/40 to-black/10"></div>
            
            <div class="relative z-10 flex flex-col justify-center items-center gap-2 mb-auto px-4 max-w-xl"> <!-- {/* Ganti dengan max-w-lg atau max-w-xl sesuai keinginan */} -->
                <div class="text-center justify-start text-white text-5xl md:text-7xl font-bold leading-tight md:leading-[90px]">Selamat Datang</div>
                <div class="w-full max-w-[588px] text-center justify-start text-white/80 text-md md:text-xl font-semibold leading-relaxed md:leading-loose">Welcome to our platform! We're excited to have you here and can't wait for you to explore all the amazing features we offer. Dive in and discover a world of possibilities!</div>
            </div>
            
            <a
                href="/landingpage"
                data-left-icon="false"
                data-right-icon="false"
                data-selected="false"
                data-state="Active"
                data-text="true"
                class="relative z-10 inline-flex justify-center items-center px-6 py-4 bg-white rounded-3xl shadow-[0px_2px_2px_0px_rgba(0,0,0,0.06)] shadow-[0px_4px_3px_0px_rgba(0,0,0,0.07)] outline outline-1 outline-offset-[-1px] outline-[#E5E7EB] gap-0.5 mt-8 group hover:bg-[#EBEBEB] active:bg-[#EBEBEB] transition-colors duration-150"
            >
                <div class="justify-start text-[#65A30D] text-sm font-bold leading-tight group-hover:text-[#5a920b]">
                    Kembali ke Beranda
                </div>
            </a>
        </div>
    </div>
</template>

<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import InputError from '@/components/InputError.vue'; // Path diubah ke lowercase

const props = defineProps({
    canResetPassword: {
        type: Boolean,
        default: false,
    },
    status: {
        type: String,
        default: '',
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const showPassword = ref(false);

const togglePasswordVisibility = () => {
    showPassword.value = !showPassword.value;
};

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
