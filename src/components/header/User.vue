<template>
    <router-link to="/login" class="flex items-center gap-2 bg-white p-2 rounded-lg hover:cursor-pointer">

        <UserIcon class="size-5 sm:size-8 text-orange-500" />
        <div class="hidden sm:flex flex-col items-center ">
            <span class="hidden lg:block font-normal text-sm "></span>
            <span class="hidden lg:block font-normal">Iniciar Sesión</span>
        </div>
    </router-link> 
    
</template>


<script setup>
import { UserIcon } from '@heroicons/vue/24/outline';
</script>

