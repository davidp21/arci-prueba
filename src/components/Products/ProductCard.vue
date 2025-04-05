<template>
  <div class="w-60 h-[330px] border-2 p-4 m-10">
    <div class="w-full h-1/2 bg-gray-200 flex justify-center items-center">
      <img src="../../img/Icono.png" alt="imagen catalogo" class="w-40 object-cover">
    </div>
    <div class="flex flex-col pt-3">
      <h3 class="font-medium text-sm">FITCO-CURVA ELECTRICA BLANCA 3/4" x 90"</h3>
      <div class="flex justify-between items-center mt-3">
        <span class="font-semibold text-lg">$2.00</span>
        <div
          class="w-8 h-8 bg-gray-300 rounded-full flex justify-center items-center hover:bg-orange-600 transition-colors ease-in-out hover:text-white duration-300 cursor-pointer">
          <EyeIcon class="size-6" />
        </div>
      </div>
      <button
        class="flex justify-between items-center bg-orange-500 text-white font-medium py-2 px-4 rounded-lg mt-2 hover:bg-orange-600 transition-all ease-in-out duration-300">
        Añadir al carrito
        <ShoppingCartIcon class="size-5" />
      </button>
    </div>
  </div>
</template>


<script setup>

import { EyeIcon, ShoppingCartIcon } from '@heroicons/vue/24/outline';

const articulos = async () => {
  const response = await fetch("http://arci.com.ve/api-rest/get_all_articles.php");
  const data = await response.json();
  console.log(data);
}



articulos();
</script>


<style scoped></style>