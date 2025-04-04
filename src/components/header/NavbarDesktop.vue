<template>
  <div class="lg:flex justify-between w-full hidden bg-white shadow-md py-4 font-medium px-24">
    <!-- Categorías al principio con lista desplegable -->
    <ul class="flex items-center gap-4 relative">
      <li class="flex items-center gap-2 relative group">
        <Bars3Icon class="size-5" />
        <router-link to="#">Categorías</router-link>
        <!-- Lista desplegable -->
        <ul
          class="absolute left-0 top-full mt-2 bg-white shadow-lg rounded-md opacity-0 invisible h-72 overflow-hidden overflow-y-scroll hover:cursor-pointer group-hover:opacity-100 group-hover:visible group-hover:flex flex-col transition-all ease-in-out z-10 w-48 py-2">
          <li v-for="categoria, in categorias" :key="categoria.nombre"
            class="px-4 py-2 hover:bg-gray-200 transition-all ease-out">
            <router-link to="#">{{ categoria.nombre }}</router-link>
          </li>


        </ul>
      </li>
    </ul>

    <!-- Elementos en el centro -->
    <ul class="flex items-center gap-14 mr-28">
      <li><router-link to="#">Inicio</router-link></li>
      <li><router-link to="#">Sobre nosotros</router-link></li>
      <li class="flex items-center gap-1">
        <router-link to="#">Más Vendidos</router-link>
        <ChevronDownIcon class="size-4" />
      </li>
      <li><router-link to="#">Contacto</router-link></li>
    </ul>

    <!-- Promociones al final -->
    <ul class="flex items-center gap-4">
      <li class="flex items-center gap-2">
        <BanknotesIcon class="size-5" />
        <router-link to="#">Promociones</router-link>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from "vue";
// import icono from "@/img/icono.png";
import { Bars3Icon, ChevronDownIcon } from "@heroicons/vue/24/solid";
import { BanknotesIcon } from "@heroicons/vue/24/outline";
import { fetchCategorias } from "../../services/services";

// const categorias = ref([
//   { nombre: "Herramientas", imagen: `${icono}` },
//   { nombre: "Pinturas", imagen: `${icono}` },
//   { nombre: "Fontanería", imagen: `${icono}` },
//   { nombre: "Electricidad", imagen: `${icono}` },
//   { nombre: "Cerrajería", imagen: `${icono}` },
//   { nombre: "abrasivos", imagen: `${icono}` },
//   { nombre: "Automotriz", imagen: `${icono}` },
//   { nombre: "plomeria", imagen: `${icono}` },
//   { nombre: "viveres", imagen: `${icono}` },
//   { nombre: "ganaderia", imagen: `${icono}` },
//   { nombre: "impermeabilizacion", imagen: `${icono}` },
//   { nombre: "pegamentos", imagen: `${icono}` },
//   { nombre: "iluminacion", imagen: `${icono}` },
//   { nombre: "herreria", imagen: `${icono}` },
//   { nombre: "baño y accesorios", imagen: `${icono}` },
//   { nombre: "Carga", imagen: `${icono}` },
//   { nombre: "agricola", imagen: `${icono}` },
//   { nombre: "seguridad", imagen: `${icono}` },
//   { nombre: "soldadura", imagen: `${icono}` },
//   { nombre: "miscelaneos", imagen: `${icono}` },

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
