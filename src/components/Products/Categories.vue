<script setup>
import { ref, onMounted } from "vue";
import icono from "@/img/icono.png";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import SwiperCore from "swiper";
import { Navigation, Pagination } from "swiper/modules";

// Configurar módulos de Swiper
SwiperCore.use([Navigation, Pagination]);

const categorias = ref([
    { nombre: "Herramientas", imagen: `${icono}` },
    { nombre: "Pinturas", imagen: `${icono}` },
    { nombre: "Fontanería", imagen: `${icono}` },
    { nombre: "Electricidad", imagen: `${icono}` },
    { nombre: "Cerrajería", imagen: `${icono}` },
    { nombre: "abrasivos", imagen: `${icono}` },
    { nombre: "Automotriz", imagen: `${icono}` },
    { nombre: "plomeria", imagen: `${icono}` },
    { nombre: "viveres", imagen: `${icono}` },
    { nombre: "ganaderia", imagen: `${icono}` },
    { nombre: "impermeabilizacion", imagen: `${icono}` },
    { nombre: "pegamentos", imagen: `${icono}` },
    { nombre: "iluminacion", imagen: `${icono}` },
    { nombre: "herreria", imagen: `${icono}` },
    { nombre: "baño y accesorios", imagen: `${icono}` },
    { nombre: "Carga", imagen: `${icono}` },
    { nombre: "agricola", imagen: `${icono}` },
    { nombre: "seguridad", imagen: `${icono}` },
    { nombre: "soldadura", imagen: `${icono}` },
    { nombre: "miscelaneos", imagen: `${icono}` },
    
]);

// const fetchCategorias = async () => {
//   try {
//     const response = await fetch("http://192.168.1.100/bd/getcategories.php");
//     if (!response.ok) {
//       throw new Error("Error al obtener categorías");
//     }
//     categorias.value = await response.json();
//   } catch (error) {
//     console.error("Error en la carga de categorías:", error);
//   }
// };
</script>

<template>
    <div class="max-w-[1740px] mx-auto mt-8">
        <h1 class="text-2xl font-semibold pl-4 mb-2 text-orange-600">Categorias Populares</h1>
        <div class="px-6 flex justify-center w-full h-[280px]">
          <Swiper
            :slides-per-view="'8'"
            :space-between="15"
            :navigation="false"
            :pagination="{ clickable: false }"
            class="mySwiper"
          >
            <SwiperSlide v-for="categoria in categorias" :key="categoria.nombre">
              <div class="flex flex-col items-center justify-center text-center gap-3 pt-4 cursor-pointer">
                  <div class="w-[160px] h-[160px] bg-gray-100 rounded-full flex flex-col items-center justify-center shadow-md hover:scale-110 transition-transform ease-in-out ">
                    <img :src="categoria.imagen" alt="Imagen Categoría" class="w-24 h-24 rounded-full object-cover">
                    <!-- <h3 class="mt-2 text-base  text-center font-semibold">{{ categoria.nombre }}</h3> -->
                  </div>
                  <h3 class="font-medium text-lg text-orange-600">{{ categoria.nombre }}</h3>
              </div>
            </SwiperSlide>
          </Swiper>
        </div>

    </div>
</template>

<style>
/* Ajustes opcionales */
.mySwiper .swiper-button-next, 
.mySwiper .swiper-button-prev {
  color: #333;
}
</style>

<!-- <template>

    <div class="w-full">
        <div
            class="flex gap-6 mt-10 flex-col sm:flex-row justify-center items-center max-w-[1740px] m-auto overflow-x-auto p-4">
            <div v-for="categoria in categorias" :key="categoria.nombre"
                class="w-[160px] h-[160px] bg-gray-100 shadow-lg rounded-full flex flex-col items-center justify-center text-center shrink-0">
                <img :src="categoria.imagen" :alt="categoria.nombre" class="w-24 h-24 object-cover rounded-full">
                <h3 class="mt-1 text-base font-semibold">{{ categoria.nombre }}</h3>
            </div>
        </div>
    </div>

</template>

<script setup>
import { onMounted, ref } from "vue";
import icono from "@/img/icono.png";


const data = async () => {
    try {
        const response = await fetch("../../../bd/api-rest/get_all_categories.php");
        const data = await response.json();
    } catch (error) {
        console.error( error);
    }
};

// onMounted(() => {
//     data();
// });


data()

const categorias = ref([
    { nombre: "Herramientas", imagen: `${icono}` },
    { nombre: "Pinturas", imagen: `${icono}` },
    { nombre: "Fontanería", imagen: `${icono}` },
    { nombre: "Electricidad", imagen: `${icono}` },
    { nombre: "Cerrajería", imagen: `${icono}` },
    { nombre: "Construcción", imagen: `${icono}` },
    { nombre: "Construcción", imagen: `${icono}` },
    { nombre: "Construcción", imagen: `${icono}` },
    { nombre: "Construcción", imagen: `${icono}` },
    { nombre: "Construcción", imagen: `${icono}` },
    { nombre: "Construcción", imagen: `${icono}` },
]);
</script>

<style scoped>
/* Ocultar barra de desplazamiento en navegadores modernos */
/* ::-webkit-scrollbar {
    display: none;
} */
</style> -->