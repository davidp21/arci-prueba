<script setup>
import Header from '@/components/header/Header.vue'
import Navbar from './components/header/Navbar.vue';
</script>

<template>

  <div class="w-full m-auto">
    <Header/>
    <Navbar/>
    <router-view/>
  </div>
  
</template>


