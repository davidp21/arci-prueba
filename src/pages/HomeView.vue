<template>
  <div>
    <Header/>
    <Navbar/>
    <Hero/>
    <Categories/>
    <button @click="crearUsuario" class="bg-blue-500 text-white font-medium cursor-pointer p-2 rounded-lg">
      crear usuarui
    </button>
  </div>
</template>


<script setup>
import Hero from '@/components/Hero.vue';
import Header from '@/components/header/Header.vue';
import Navbar from '@/components/header/Navbar.vue';
import Categories from '@/components/Products/Categories.vue';

const crearUsuario = async () => {
  try {
    const response = await fetch("http://arci.com.ve/api-rest/create_user.php",{
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      },
      body: JSON.stringify({
        // nombre: nombre.value,//
        // apellido: apellido.value,//
        email: "david@gmail.com",
        // cedula: cedula.value,
        // contrasena: contrasena.value,
        // direccion: direccion.value
      })
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.log(error);
  }
}
</script>


<style scoped>
  
</style>