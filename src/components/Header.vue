<template>
  <header class="bg-orange-400 w-full px-2">
    <div class="max-w-[1600px] flex flex-col sm:flex-row items-center justify-between m-auto py-2">
      <div>
        <img :src="logo" alt="logo de arci" width="150">
      </div>
      
      <!-- input y shooping -->
      <div class="flex justify-between w-full gap-5 mt-2 sm:mt-0">
        <div class="w-[500px] m-auto gap-2 bg-white px-4 flex items-center justify-between rounded-lg ">
          <input class="w-full outline-none py-1.5 text-base bg-transparent" type="text" placeholder="Buscar">
          <MagnifyingGlassIcon class="size-5 hover:cursor-pointer"/>
        </div>
  
        <div class="flex items-center gap-3">
          <ShoppingCartIcon class="size-7 sm:size-8 text-white hover:cursor-pointer" />
          <div class="hidden sm:flex flex-col items-center">
            <span>Mi carrito</span>
            <span class="font-bold">$0.00</span>
          </div>
        </div>
      </div>
    </div>
    <!-- <router-link :to="{name:'home'}">Inicio</router-link>
    <router-link :to="{name:'about'}">Sobre nosotros</router-link> -->
  </header>
</template>


<script setup>
import logo from '@/img/logo.png'
import { ShoppingCartIcon, MagnifyingGlassIcon} from '@heroicons/vue/24/solid';

</script>


