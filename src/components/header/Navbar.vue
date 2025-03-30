<template>
  <div class="hidden lg:block md:px-10 py-4 bg-white shadow-md w-full font-medium">
    <ul class="flex flex-col md:flex-row max-w-[1740px] items-center m-auto gap-4 justify-between">
        <div class="w-[13%] flex items-center gap-2 border-r h-10">
            <Bars3Icon class="size-5"/>
            <li><router-link>Categorias</router-link></li>
        </div>
        <div class="flex w-full justify-center gap-20">
          <li><router-link>Inicio</router-link></li>
          <li><router-link>Sobre nosotros</router-link></li>
          <div class="flex items-center gap-1">
            <li><router-link>Mas Vendidos</router-link></li>
            <ChevronDownIcon class="size-4"/>
          </div>
          <li><router-link>Contacto</router-link></li>
        </div>
        <div class="flex items-center gap-2 justify-center">
          <BanknotesIcon class="size-5"/>
          <li><router-link>Promociones</router-link></li>
        </div>
    </ul>
  </div>
</template>


<script setup>
import { Bars3Icon} from '@heroicons/vue/24/solid';
import { BanknotesIcon,ChevronDownIcon } from '@heroicons/vue/24/outline';
</script>


<style scoped>
  
</style>