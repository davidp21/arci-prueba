<template>
  <div class="md:px-10 py-4 bg-white shadow-md w-full ">
    <ul class="flex flex-col md:flex-row max-w-[1740px] items-center m-auto gap-4">
        <div class="w-[10%] flex items-center gap-2 border-r h-10">
            <Bars3Icon class="size-5"/>
            <li><router-link>Categorias</router-link></li>
        </div>
        <li><router-link>Inicio</router-link></li>
        <li><router-link>Sobre nosotros</router-link></li>
        <li><router-link>Ofertas especiales</router-link></li>
        <li><router-link>Contacto</router-link></li>
    </ul>
  </div>
</template>


<script setup>
import { Bars3Icon } from '@heroicons/vue/24/solid';
</script>


<style scoped>
  
</style>