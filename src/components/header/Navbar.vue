<template>
  <div 
    class="fixed top-0 left-0 w-64 h-full bg-white shadow-md transition-transform duration-500 ease-in-out z-50 lg:hidden"
    :class="menuOpen ? 'translate-x-0' : '-translate-x-full'"
  >
    <!-- Botón de cierre -->
    <button @click="$emit('close-menu')" class="p-4">✖ Cerrar</button>
    <ul class="flex flex-col p-6 gap-4 font-medium">
      <li><router-link class="flex items-center gap-2"><Bars3Icon class="size-5" />Categorías</router-link></li>
      <li><router-link to="#">Inicio</router-link></li>
      <li><router-link to="#">Sobre nosotros</router-link></li>
      <li class="flex items-center gap-1 hover:cursor-pointer"><router-link to="#">Más Vendidos</router-link><ChevronDownIcon class="size-4" /></li>
      <li><router-link :to="{name:'contact'}">Contacto</router-link></li>
      <li class="flex items-center gap-2"><BanknotesIcon class="size-5" /><router-link to="#">Promociones</router-link></li>
    </ul>
  </div>

  <!-- Fondo oscuro para cerrar el menú -->
  <div 
    v-if="menuOpen" 
    class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 lg:hidden transition-opacity duration-500"
    @click="$emit('close-menu')"
  ></div>
</template>

<script setup>
import { Bars3Icon, ChevronDownIcon } from "@heroicons/vue/24/solid";
import { BanknotesIcon } from "@heroicons/vue/24/outline";

defineProps(["menuOpen"]);
</script>

