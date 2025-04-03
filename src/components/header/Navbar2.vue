<template>
  <div 
    class="fixed top-0 left-0 w-64 h-full bg-white shadow-md transition-transform duration-500 ease-in-out z-50 lg:hidden"
    :class="menuOpen ? 'translate-x-0' : '-translate-x-full'"
  >
    <!-- Botón de cierre -->
    <button @click="$emit('close-menu')" class="p-4">✖ Cerrar</button>
    <ul class="flex flex-col p-6 gap-4 font-medium">
      <!-- Categorías con menú desplegable -->
      <li 
        class="relative"
        @mouseenter="showCategories = true"
        @mouseleave="showCategories = false"
      >
        <div class="flex items-center gap-2 hover:cursor-pointer">
          <Bars3Icon class="size-5" />
          <span>Categorías</span>
        </div>
        <!-- Lista desplegable hacia abajo -->
        <ul 
          class="absolute top-full left-0 w-full bg-white shadow-lg border rounded-lg p-2 z-50 transition-all duration-300 ease-in-out transform"
          :class="showCategories ? 'opacity-100 scale-100' : 'opacity-0 scale-95 pointer-events-none'"
        >
          <li class="hover:bg-gray-100 p-2"><router-link to="/abrasivos">Abrasivos</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/automotriz">Automotriz</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Herramientas</router-link></li>
        </ul>
      </li>
      <li><router-link :to="{ name: 'home' }">Inicio</router-link></li>
      <li><router-link :to="{ name: 'about' }">Sobre nosotros</router-link></li>
      <li class="flex items-center gap-1 hover:cursor-pointer">
        <router-link to="#">Más Vendidos</router-link>
        <ChevronDownIcon class="size-4" />
      </li>
      <li><router-link :to="{ name: 'contact' }">Contacto</router-link></li>
      <li class="flex items-center gap-2">
        <BanknotesIcon class="size-5" />
        <router-link to="#">Promociones</router-link>
      </li>
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

// Prop para controlar si el menú está abierto
defineProps(["menuOpen"]);

// Estado local para controlar la visibilidad del menú de categorías
import { ref } from "vue";
const showCategories = ref(false);
</script>

<style scoped>
/* Estilo opcional para el menú desplegable */
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
</style>
