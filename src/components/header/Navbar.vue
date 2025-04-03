<template>
    <transition
        name="slide-menu"
        appear
    >
        <div 
            v-if="menuOpen"
            class="fixed top-0 left-0 w-64 h-full bg-white shadow-md z-50 lg:hidden overflow-hidden"
        >
            <!-- Botón de cierre -->
            <button @click="$emit('close-menu')" class="p-4">✖ Cerrar</button>
            <!-- Lista de navegación -->
            <ul class="flex flex-col p-6 gap-4 font-medium">
                <!-- Categorías con menú desplegable -->
                <li class="relative" @mouseenter="showCategories = true" @mouseleave="showCategories = false">
                    <div class="flex items-center gap-2 hover:cursor-pointer">
                        <Bars3Icon class="size-5" />
                        <span>Categorías</span>
                    </div>
                    <!-- Lista desplegable -->
                    <ul
                        class="absolute top-full left-0 w-full bg-white shadow-lg border rounded-lg p-2 z-50 transition-all duration-300 ease-in-out transform"
                        :class="showCategories ? 'opacity-100 scale-100 translate-y-0' : 'opacity-0 scale-95 translate-y-2 pointer-events-none'"
                    >
                        <li class="hover:bg-gray-100 p-2"><router-link to="/abrasivos">Abrasivos</router-link></li>
                        <li class="hover:bg-gray-100 p-2"><router-link to="/automotriz">Automotriz</router-link></li>
                        <li class="hover:bg-gray-100 p-2"><router-link to="/herramientas">Herramientas</router-link></li>
                    </ul>
                </li>
                <li><router-link :to="{ name: 'home' }">Inicio</router-link></li>
                <li><router-link :to="{ name: 'about' }">Sobre nosotros</router-link></li>
                <li class="flex items-center gap-1 hover:cursor-pointer">
                    <router-link to="#">Más Vendidos</router-link>
                    <ChevronDownIcon class="size-4" />
                </li>
                <li><router-link :to="{ name: 'contact' }">Contacto</router-link></li>
            </ul>
        </div>
    </transition>
</template>

<script setup>
import { ref } from "vue";
import { Bars3Icon, ChevronDownIcon } from "@heroicons/vue/24/solid";

defineProps(["menuOpen"]);

const showCategories = ref(false);
</script>

<style scoped>
/* Animaciones del menú lateral */
.slide-menu-enter-active,
.slide-menu-leave-active {
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
}

.slide-menu-enter-from {
    transform: translateX(-100%);
    opacity: 0;
}

.slide-menu-enter-to {
    transform: translateX(0);
    opacity: 1;
}

.slide-menu-leave-from {
    transform: translateX(0);
    opacity: 1;
}

.slide-menu-leave-to {
    transform: translateX(-100%);
    opacity: 0;
}
</style>
