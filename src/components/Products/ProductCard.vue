<template>
  <div class="w-60 h-96 border-2 p-4 m-10">
    <div class="w-full h-1/2 bg-gray-200 flex justify-center items-center">
      <img src="../../img/Icono.png" alt="" class="w-40 object-cover">
    </div>
    <div class="flex flex-col pt-3">
      <h3 class="font-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
      <div class="flex justify-between items-center mt-3">
        <span class="font-semibold text-lg">$2.00</span>
        <button class="w-8 h-8 bg-gray-300 rounded-full flex justify-center items-center hover:bg-orange-600 transition-colors ease-in-out hover:text-white duration-300">
          <EyeIcon class="size-6" />
        </button>
      </div>
      <button class="">Añadir al carrito</button>
    </div>
  </div>
</template>


<script setup>

import { EyeIcon } from '@heroicons/vue/24/outline';

const articulos = async () => {
  const response = await fetch("http://arci.com.ve/api-rest/get_all_articles.php");
  const data = await response.json();
  console.log(data);
}

 

articulos();
</script>


<style scoped>
  
</style>