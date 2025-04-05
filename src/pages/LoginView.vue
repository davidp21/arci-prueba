<template>
  <div class="w-full flex justify-center h-screen items-center bg-gray-200">
    <form @submit.prevent="onSubmit" method="POST" class="flex flex-col gap-4 w-[300px] bg-white p-10">
      <!-- <input v-model="nombre" type="text" placeholder="nombre" class="border-2 border-black p-2">
      <input v-model="apellido" type="text" placeholder="apellido" class="border-2 border-black p-2"> -->
      <input v-model="email" type="text" placeholder="correo" class="border-2 border-black p-2 outline-none rounded-md">
      <!-- <input v-model="cedula" type="email" placeholder="direccion" class="border-2 border-black p-2">
      <input v-model="contrasena" type="text" placeholder="cedula" class="border-2 border-black p-2">
      <input v-model="direccion" type="password" placeholder="contraseña" class="border-2 border-black p-2"> -->
      <input @click="crearUsuario" type="submit" value="Crear Usuario" class="bg-blue-500 text-white font-medium cursor-pointer p-2 rounded-lg">
    </form>
    
  </div>
</template>


<script setup>
// import Header from '@/components/header/Header.vue';

import { ref } from 'vue';

let nombre = ref('');
let apellido = ref('');
let email = ref('');
let cedula = ref('');
let contrasena = ref('');
let direccion = ref('');

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
        email: email.value,
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