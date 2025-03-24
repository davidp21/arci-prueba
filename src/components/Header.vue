<template>
  <header class="bg-orange-400 w-full px-2">
    <div class="max-w-[1600px] flex flex-col sm:flex-row items-center justify-between m-auto py-2">
      <div>
        <img :src="logo" alt="logo de arci" width="150">
      </div>

      <!-- input y cart -->
      <div class="flex justify-between w-full gap-5 mt-2 sm:mt-0">
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
import Cart from '@/components/Cart.vue'
import Search from './Search.vue';
</script>
