<template>
    <transition
      enter-active-class="transition-transform duration-500 ease-in-out"
      leave-active-class="transition-transform duration-500 ease-in-out"
      enter-from-class="translate-x-full"
      enter-to-class="translate-x-0"
      leave-from-class="translate-x-0"
      leave-to-class="translate-x-full"
    >
      <div
        v-if="cartOpen"
        class="fixed top-0 right-0 w-80 h-full bg-white shadow-lg z-50 flex flex-col p-4"
      >
        <!-- Botón de cierre -->
        <button @click="closeCart" class="self-end text-gray-500 hover:text-gray-800">
          ✖
        </button>
        <!-- Título del carrito -->
        <h2 class="text-lg font-bold mb-4">Tu carrito</h2>
        <!-- Contenido del carrito -->
        <div class="flex-1 overflow-y-auto">
          <p class="text-gray-500">Tu carrito está vacío.</p>
        </div>
        <!-- Botón de finalizar compra -->
        <button class="bg-orange-500 text-white py-2 px-4 rounded-lg mt-4 hover:bg-orange-600">
          Finalizar compra
        </button>
      </div>
    </transition>
  </template>
  
  <script setup>
  defineProps(['cartOpen']);
//   defineEmits(['close-cart']);
  

  const emit = defineEmits();
  
  const closeCart = () => {
    console.log('Cerrando carrito');
    emit('close-cart'); // Emite el evento para cerrar el carrito
  };
  </script>