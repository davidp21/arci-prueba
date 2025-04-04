<template>
  <div class="w-full flex justify-center h-screen items-center bg-gray-200">
    <form @submit.prevent="onSubmit" action="#" method="post" class="flex flex-col gap-4 w-[300px] bg-white p-10">
      <input v-model="nombre" type="text" placeholder="nombre" class="border-2 border-black p-2">
      <input v-model="apellido" type="text" placeholder="apellido" class="border-2 border-black p-2">
      <input v-model="correo" type="text" placeholder="correo" class="border-2 border-black p-2">
      <input v-model="cedula" type="email" placeholder="direccion" class="border-2 border-black p-2">
      <input v-model="contrasena" type="text" placeholder="cedula" class="border-2 border-black p-2">
      <input v-model="direccion" type="password" placeholder="contraseña" class="border-2 border-black p-2">
      <input @click="crearUsuario" type="submit" value="crear Usuario" class="bg-blue-500 text-white font-medium cursor-pointer p-2 rounded-lg">
    </form>
    <p>{{ nombre }}</p>
  </div>
</template>


<script setup>
// import Header from '@/components/header/Header.vue';
import { ref } from 'vue';

let nombre = ref('');
let apellido = ref('');
let correo = ref('');
let cedula = ref('');
let contrasena = ref('');
let direccion = ref('');

const crearUsuario = async () => {
  const response = await fetch('http://localhost:3000/usuarios', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json' 
    },
    body: JSON.stringify({
      nombre: nombre.value,
      apellido: apellido.value,
      correo: correo.value,
      cedula: cedula.value,
      contrasena: contrasena.value,
      direccion: direccion.value
    })
  });
  if (response.ok) {
    const data = await response.json();
    console.log('Usuario creado:', data);
  } else {
    console.error('Error al crear el usuario:', response.statusText);
  }
}

</script>


<style scoped>
  
</style>