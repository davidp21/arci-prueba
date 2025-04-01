<template>
  <div class="lg:flex justify-between w-full hidden bg-white shadow-md py-4 font-medium px-24">
    <!-- Categorías al principio con lista desplegable -->
    <ul class="flex items-center gap-4 relative">
      <li class="flex items-center gap-2 relative group">
        <Bars3Icon class="size-5" />
        <router-link to="#">Categorías</router-link>
        <!-- Lista desplegable -->
        <ul
          class="absolute left-0 top-full mt-2 bg-white shadow-lg rounded-md opacity-0 invisible hover:cursor-pointer group-hover:opacity-100 group-hover:visible group-hover:flex flex-col transition-all ease-in-out z-10 w-48 py-2"
        >
          <li class="px-4 py-2 hover:bg-gray-100">
            <router-link to="#">Categoría 1</router-link>
          </li>
          <li class="px-4 py-2 hover:bg-gray-100">
            <router-link to="#">Categoría 2</router-link>
          </li>
          <li class="px-4 py-2 hover:bg-gray-100">
            <router-link to="#">Categoría 3</router-link>
          </li>
        </ul>
      </li>
    </ul>

    <!-- Elementos en el centro -->
    <ul class="flex items-center gap-14 mr-28">
      <li><router-link to="#">Inicio</router-link></li>
      <li><router-link to="#">Sobre nosotros</router-link></li>
      <li class="flex items-center gap-1">
        <router-link to="#">Más Vendidos</router-link>
        <ChevronDownIcon class="size-4" />
      </li>
      <li><router-link to="#">Contacto</router-link></li>
    </ul>

    <!-- Promociones al final -->
    <ul class="flex items-center gap-4">
      <li class="flex items-center gap-2">
        <BanknotesIcon class="size-5" />
        <router-link to="#">Promociones</router-link>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { Bars3Icon, ChevronDownIcon } from "@heroicons/vue/24/solid";
import { BanknotesIcon } from "@heroicons/vue/24/outline";
</script>

