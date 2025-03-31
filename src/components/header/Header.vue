<template>
  <div class="bg-orange-500 w-full px-4 shadow-lg">
    <div class="max-w-[1740px] flex flex-col lg:flex-row items-center lg:justify-between m-auto py-2">
      <div>
        <img :src="logo" alt="logo de arci" width="180" class="lg:w-[180px]">
      </div>
      <!-- input y cart -->
      <div class="flex justify-between items-center w-full gap-3 mt-2 md:mt-0">
        <!-- Botón hamburguesa que solo se ve en dispositivos móviles -->
        <Bars3Icon 
          class="size-8 text-white block lg:hidden cursor-pointer"
          @click="menuOpen = !menuOpen"
        />
        <Search/>
        <User/> 
        <Cart/>
      </div>
    </div>

    <!-- Navbar solo se muestra en dispositivos móviles -->
    <Navbar v-if="menuOpen" @close-menu="menuOpen = false" :menuOpen="menuOpen"/>
  </div>

  <!-- Navbar fijo para escritorio -->
  <NavbarDesktop />
</template>

<script setup>
import { ref } from "vue";
import { Bars3Icon } from "@heroicons/vue/24/solid";
import Search from "@/components/header/Search.vue";
import User from "@/components/header/User.vue";
import Cart from "@/components/header/Cart.vue";
import Navbar from "@/components/header/Navbar.vue";
import NavbarDesktop from "@/components/header/NavbarDesktop.vue"; // Nuevo componente
import logo from "@/img/logo.png";

const menuOpen = ref(false);
</script>


