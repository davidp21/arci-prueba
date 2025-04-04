<template>
  <div>
    sfslkdjf
  </div>
</template>


<script setup>
const articulos = async () => {
  const response = await fetch("http://arci.com.ve/api-rest/get_all_articles.php");
  const data = await response.json();
  console.log(data);
}

 

articulos();
</script>


<style scoped>
  
</style>