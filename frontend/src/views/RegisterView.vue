<script setup>
import { reactive, ref } from 'vue';
import { useToast } from "vue-toastification";
const hovered = ref(false);
const dogInfo = reactive({
  img: '/src/assets/background.png',
  age: 0,
  race: '',
  size: '',
  color: '',
  castrated: false
})
async function onSubmit(event){
  event.preventDefault();
  const response = await fetch('http://localhost:8000/api/dog', {
  method: 'POST', // or 'PUT'
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(dogInfo),
  })
  const json = response.json();
  console.log(json);
}
function createBase64Image(e) {
    const file = e.target.files[0];
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => {
      dogInfo.img = reader.result;
    }
}
</script>

<template>
  <main>
    <h1>¡Formulario de registro!</h1>
    <form  @submit.prevent="onSubmit">
      <input class="hidden" @change="createBase64Image" type="file" id="dogImg">
      <label for="dogImg">
        Foto del perro
        <div @mouseenter="hovered=true" @mouseleave="hovered=false"  class="imgWrapper">
          <img  :src="dogInfo.img" alt="Preview de la imagen del perro">
          <font-awesome-icon style="position: absolute;" v-if="hovered" icon="fa-solid fa-pen" />
        </div>
      </label>
      <label>
        Raza del perro
        <input type="text" v-model="dogInfo.race" placeholder="Ejemplo: Pastor Alemán">
      </label>
      <label>
        Tamaño
        <select v-model="dogInfo.size">
          <option disabled value="">Selección del tamaño</option>
          <option>Muy pequeño</option>
          <option>Pequeño</option>
          <option>Mediano</option>
          <option>Grande</option>
          <option>Muy grande</option>
        </select>
      </label>
      <label>
        Color de pelo
        <input v-model="dogInfo.color" type="color">
      </label>
      <label>
        Edad
        <span>
          0
          <input v-model="dogInfo.age" min="0" max="21" type="range">
          21
        </span>
        {{dogInfo.age}}
      </label>
      <label>
        Castrado
        <input v-model="dogInfo.castrated" type="checkbox">
      </label>
      <button type="submit">Terminar registro</button>
    </form>

  </main>
</template>

<style scoped>
h1{
  text-align: center;
  border-bottom: 0.5 px solid #f3f3f3;
}
form { 
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  width: 25rem;
  height: 40em;
  border-radius: 10px;
  background-color: #292929;
  padding: 1rem;
}
label{
 display: flex;
 justify-content: space-between;
 align-items: center; 
 color: #ec7525;
}
.imgWrapper{
  width: 7rem;
  height: 7rem;
  position: relative;
  cursor: pointer;
}
img {
 width: 100%;
 height: 100%;
 border-radius: 50%;
}
.imgWrapper:hover{
  opacity: 0.5;
}
.fa-pen{
  left: 0; 
  right: 0; 
  top: 0;
  bottom: 0;
  margin: auto;
  position: absolute;
  color: #292929;
  font-size: 1.5rem;
} 
.hidden{
  position: absolute;
  width: 1px;
  top: -100vh;
}

input[type=text], 
select{
  width: 10rem;
  border: 0;
  border-radius: 3px;
  height: 2rem;
  cursor: pointer;
}
span{
  display: flex;
  align-items: center;
  gap: 3px;
}
input[type=checkbox] {
  transform: scale(1.5);
}
button{
  background-color: rgb(93, 250, 93);
  border: 0;
  border-radius: 3px;
  height: 2rem;
  width: 7rem;
  align-self: flex-end;
  cursor: pointer;
}
</style>
