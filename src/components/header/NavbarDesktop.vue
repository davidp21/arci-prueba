<template>
    <div class="bg-white shadow-md w-full py-4 hidden lg:block">
      <ul class="flex flex-row items-center justify-center max-w-[1740px] m-auto gap-6 font-medium">
        <li><router-link class="flex items-center gap-2"><Bars3Icon class="size-5" /> Categorías</router-link></li>
        <li><router-link to="#">Inicio</router-link></li>
        <li><router-link to="#">Sobre nosotros</router-link></li>
        <li class="flex items-center gap-1"><router-link to="#">Más Vendidos</router-link><ChevronDownIcon class="size-4" /></li>
        <li><router-link to="#">Contacto</router-link></li>
        <li class="flex items-center gap-2"><BanknotesIcon class="size-5" /><router-link to="#">Promociones</router-link></li>
      </ul>
    </div>
  </template>
  
<script setup>
import { Bars3Icon, ChevronDownIcon } from "@heroicons/vue/24/solid";
import { BanknotesIcon } from "@heroicons/vue/24/outline";
</script>