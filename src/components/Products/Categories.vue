<script setup>
import { ref, onMounted } from "vue";
import icono from "@/img/icono.png";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import SwiperCore from "swiper";
import { Navigation, Pagination } from "swiper/modules";
import { fetchCategorias } from "../../services/services";


SwiperCore.use([Navigation, Pagination]);

// const categorias = ref([
//     { nombre: "Herramientas", imagen: `${icono}` },
//     { nombre: "Pinturas", imagen: `${icono}` },
//     { nombre: "Fontanería", imagen: `${icono}` },
//     { nombre: "Electricidad", imagen: `${icono}` },
//     { nombre: "Cerrajería", imagen: `${icono}` },
//     { nombre: "abrasivos", imagen: `${icono}` },
//     { nombre: "Automotriz", imagen: `${icono}` },
//     { nombre: "plomeria", imagen: `${icono}` },
//     { nombre: "viveres", imagen: `${icono}` },
//     { nombre: "ganaderia", imagen: `${icono}` },
//     { nombre: "impermeabilizacion", imagen: `${icono}` },
//     { nombre: "pegamentos", imagen: `${icono}` },
//     { nombre: "iluminacion", imagen: `${icono}` },
//     { nombre: "herreria", imagen: `${icono}` },
//     { nombre: "baño y accesorios", imagen: `${icono}` },
//     { nombre: "Carga", imagen: `${icono}` },
//     { nombre: "agricola", imagen: `${icono}` },
//     { nombre: "seguridad", imagen: `${icono}` },
//     { nombre: "soldadura", imagen: `${icono}` },
//     { nombre: "miscelaneos", imagen: `${icono}` },
  
// ]);



const categorias = ref([]);

const obtenerCategorias = async () => {
  try {
    const { data } = await fetchCategorias(); 
    categorias.value = data; 
    console.log(categorias.value); 
  } catch (error) {
    console.error("Error al obtener las categorías:", error);
  }
};


onMounted(() => {
  obtenerCategorias();
});

</script>

<template>
    <div class="max-w-[1740px] mx-auto mt-8">
        <h1 class="text-2xl font-semibold pl-4 mb-2 text-orange-600">Categorias Populares</h1>
        <div class="px-6 flex justify-center w-full h-[260px]">
          <Swiper
            :slides-per-view="'8'"
            :space-between="14"
            :navigation="false"
            :pagination="{ clickable: false }"
            class="mySwiper"
          >
            <SwiperSlide v-for="categoria in categorias" :key="categoria.nombre">
              <div class="flex flex-col items-center justify-center text-center gap-3 pt-4 cursor-pointer">
                  <div class="w-[160px] h-[160px] bg-gray-100 rounded-full flex flex-col items-center justify-center shadow-md hover:scale-110 transition-transform ease-in-out ">
                    <img :src='`src/${categoria.cImagen}`' alt="Imagen Categoría" class="w-24 h-24 rounded-full object-cover">
                    <!-- <h3 class="mt-2 text-base  text-center font-semibold">{{ categoria.nombre }}</h3> -->
                  </div>
                  <h3 class="font-medium text-lg text-orange-600">{{ categoria.cNombre_cat.toLowerCase() }}</h3>
              </div>
            </SwiperSlide>
          </Swiper>
        </div>
    </div>
</template>

<style>

.mySwiper .swiper-button-next, 
.mySwiper .swiper-button-prev {
  color: #333;
}
</style>

