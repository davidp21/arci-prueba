<template>
    <div class="flex items-center gap-3 ">
        <ShoppingCartIcon class="size-7 sm:size-8 text-white hover:cursor-pointer" />
        <div class="hidden sm:flex flex-col items-center">
            <span class="hidden lg:block font-medium" >Mi carrito</span>
            <span class="font-bold">$0.00</span>
        </div>
    </div>
</template>


<script setup>
import { ShoppingCartIcon } from '@heroicons/vue/24/solid';
</script>
