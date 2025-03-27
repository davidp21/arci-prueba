<template>
    <div class="flex items-center gap-3 bg-white p-2 rounded-lg hover:cursor-pointer">
        <UserIcon class="size-6 sm:size-8 text-orange-500" />
        <div class="hidden sm:flex flex-col items-center">
            <span class="hidden lg:block font-normal text-sm "></span>
            <span class="font-medium ">Iniciar Sesión</span>
        </div>
    </div>
</template>


<script setup>
import { UserIcon } from '@heroicons/vue/24/outline';
</script>

