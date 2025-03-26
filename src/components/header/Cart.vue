<template>
    <div class="flex items-center gap-3 bg-white p-2 rounded-lg hover:cursor-pointer">
        <ShoppingCartIcon class="size-6 sm:size-8 text-orange-500" />
        <div class="hidden sm:flex flex-col items-center">
            <span class="hidden lg:block font-medium text-sm">Mi carrito</span>
            <span class="font-bold">$0.00</span>
        </div>
    </div>
</template>


<script setup>
import { ShoppingCartIcon } from '@heroicons/vue/24/solid';
</script>
