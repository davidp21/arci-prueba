<template>
  <div class="bg-white shadow-md w-full py-4 hidden lg:block">
    <ul class="flex flex-row items-center justify-center max-w-[1740px] m-auto gap-6 font-medium">
      <!-- Categorías con menú desplegable -->
      <li class="relative group">
        <router-link class="flex items-center gap-2 hover:cursor-pointer">
          <Bars3Icon class="size-5" /> Categorías
        </router-link>
        <!-- Lista desplegable hacia abajo -->
        <ul
          class="absolute top-full left-0 bg-white shadow-lg border rounded-lg p-10 z-50 hidden group-hover:block transition-all duration-300 ease-in-out overflow-y-scroll h-[300px]">
          <li class="hover:bg-gray-100 p-2"><router-link to="/abrasivos">Abrasivos</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/automotriz">Automotriz</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Cerrajerias</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Cintas adhesivas</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Construcción</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Domestico</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Electricidad</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Herramientas</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Impermeabilización</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Pegamentos</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Pinturas y accesorios</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Plomeria</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Seguridad</router-link></li>
          <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Soldadura</router-link></li>
        </ul>
      </li>
      <li><router-link to="#">Inicio</router-link></li>
      <li><router-link to="#">Sobre nosotros</router-link></li>
      <li class="flex items-center gap-1">
        <router-link to="#">Más Vendidos</router-link>
        <ChevronDownIcon class="size-4" />
      </li>
      <li><router-link to="#">Contacto</router-link></li>
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

<style scoped>
/* Estilo opcional para el menú desplegable */
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
</style>