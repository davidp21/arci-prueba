<template>
  <div class="bg-orange-500 w-full px-4 shadow-lg">
    <div class="max-w-[1740px] flex flex-col lg:flex-row items-center lg:justify-between m-auto py-2">
      <div>
        <img :src="logo" alt="logo de arci" width="180" class="lg:w-[150px]">
      </div>
      <!-- input y cart -->
      <div class="flex justify-between items-center w-full gap-5 mt-2 md:mt-0 ">
        <Bars3Icon class="size-10 text-white block lg:hidden"/>
        <!-- input de busqueda -->
        <Search/>
        <!-- Carrito -->
        <User/> 
        <Cart/>
      </div>
    </div>
    
    <!-- <router-link :to="{name:'home'}">Inicio</router-link>
    <router-link :to="{name:'about'}">Sobre nosotros</router-link> -->
  </div>
</template>


<script setup>
import logo from '@/img/logo.png'
import Cart from '@/components/header/Cart.vue'
import Search from '@/components/header/Search.vue';
import { Bars3Icon } from '@heroicons/vue/24/solid';
import User from '@/components/header/User.vue';
</script>
