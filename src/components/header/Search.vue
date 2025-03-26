<template>
    
    <form class="w-[250px] sm:w-[600px] m-auto gap-2 bg-white px-4 flex items-center justify-between rounded-lg ">
        <input class="w-full outline-none py-1.5 text-base bg-transparent" type="text" placeholder="Buscar">
        <MagnifyingGlassIcon class="size-6 hover:cursor-pointer text-orange-500" />
    </form>
</template>


<script setup>
import { MagnifyingGlassIcon } from '@heroicons/vue/24/solid';
</script>
