<template>
    <form class="w-[500px] m-auto gap-2 bg-white px-4 flex items-center justify-between rounded-lg ">
        <input class="w-full outline-none py-1.5 text-base bg-transparent" type="text" placeholder="Buscar">
        <MagnifyingGlassIcon class="size-5 hover:cursor-pointer" />
    </form>
</template>


<script setup>
import { MagnifyingGlassIcon } from '@heroicons/vue/24/solid';
</script>
