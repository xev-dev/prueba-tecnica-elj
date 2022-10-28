<script setup>
import { ref } from 'vue';
const imageIndex = ref(0);
setInterval(function () {
  imageIndex.value++;
  if(imageIndex.value>3){
    imageIndex.value = 0;
  }
}, 2000);
</script>

<template>
  <main>
    <h1>¡Bienvenid@ a DOGS <font-awesome-icon icon="fa-solid fa-dog" /> !</h1>
    <div class="imgWrapper">
      <img :src="`/src/assets/dog${imageIndex}.jpg`" alt="Diversas fotos de perros">
    </div>
  </main>
</template>

<style scoped>
  div{
    width: 20rem;
    height: 20rem;  
  }
  img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
  }
</style>
