<template>
  <header class="bg-orange-500 w-full px-4">
    <div class="max-w-[1800px] flex flex-col md:flex-row items-center justify-between m-auto py-2">
      <div>
        <img :src="logo" alt="logo de arci" width="150">
      </div>
      <!-- input y cart -->
      <div class="flex justify-between w-full gap-5 mt-2 sm:mt-0">
        <Bars3Icon class="size-10 text-white"/>
        <!-- input de busqueda -->
        <Search/>
        <!-- Carrito -->
        <Cart/>
      </div>
    </div>
    <!-- <router-link :to="{name:'home'}">Inicio</router-link>
    <router-link :to="{name:'about'}">Sobre nosotros</router-link> -->
  </header>
</template>


<script setup>
import logo from '@/img/logo.png'
import Cart from '@/components/header/Cart.vue'
import Search from '@/components/header/Search.vue';
import { Bars3Icon } from '@heroicons/vue/24/solid';
</script>
