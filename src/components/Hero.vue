<template>
  <section class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
    <!-- Slider de la imagen principal con transición suave -->
    <div class="relative rounded-xl shadow-lg h-[250px] md:col-span-2 md:h-[400px] overflow-hidden">
      <div
        class="absolute inset-0 flex transition-transform duration-700 ease-in-out"
        :style="{ transform: `translateX(-${currentSlide * 100}%)` }"
      >
        <div
          v-for="(promo, index) in promociones"
          :key="index"
          class="min-w-full bg-cover bg-center flex items-center justify-center text-white text-3xl font-bold"
          :style="{ backgroundImage: `url(${promo.image})` }"
        >
          <div class="bg-black bg-opacity-50 w-full h-full flex items-center justify-center">
            <h2>{{ promo.title }}</h2>
          </div>
        </div>
      </div>

      <!-- Botones de navegación -->
      <button
        class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 p-2 rounded-full text-white"
        @click="prevSlide"
      >
        ◀
      </button>
      <button
        class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 p-2 rounded-full text-white"
        @click="nextSlide"
      >
        ▶
      </button>
    </div>

    <!-- Contenedor de imágenes pequeñas -->
    <div class="grid grid-cols-2 md:grid-rows-2 md:grid-cols-1 gap-4 h-auto md:h-full">
      <div
        v-for="(promo, index) in promocionesPequenas"
        :key="index"
        class="bg-cover bg-center relative rounded-xl shadow-lg h-[150px] md:h-auto"
        :style="{ backgroundImage: `url(${promo.image})` }"
      >
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
          <h2 class="text-white text-lg font-bold">{{ promo.title }}</h2>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";

// Datos de promociones (dinámico)
const promociones = ref([
  { image: "https://via.placeholder.com/600x400/FF5733/FFFFFF?text=Promo+1", title: "🔥 Promoción Especial 1" },
  { image: "https://via.placeholder.com/600x400/33B5FF/FFFFFF?text=Promo+2", title: "💥 Promoción Especial 2" },
]);

const promocionesPequenas = ref([
  { image: "https://via.placeholder.com/300x190", title: "Descuento 20%" },
  { image: "https://via.placeholder.com/300x190", title: "Oferta Limitada" },
]);

const currentSlide = ref(0);
let intervalId = null;

// Funciones para cambiar las imágenes con animación de desplazamiento
const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % promociones.value.length;
};

const prevSlide = () => {
  currentSlide.value = (currentSlide.value - 1 + promociones.value.length) % promociones.value.length;
};

// Auto-slide cada 5 segundos
const autoSlide = () => {
  intervalId = setInterval(nextSlide, 5000);
};

onMounted(autoSlide);
onUnmounted(() => clearInterval(intervalId));
</script>
