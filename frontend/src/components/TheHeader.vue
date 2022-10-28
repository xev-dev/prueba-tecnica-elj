<script setup>
import { RouterLink } from 'vue-router';
</script>

<template>
  <header>
      <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/register">Registrar un perro</RouterLink>
        <RouterLink to="/index">Perros registrados</RouterLink>
      </nav>
  </header>
</template>

<style scoped>
nav {
  font-size: 12px;
  display: flex;
  padding-left: 1rem;
  gap: 2rem;
}
header {
    display: flex;
    justify-content: center;
    border-bottom: 0.5px solid #f5f5f5;
    height: 10%;
    align-items: center;
}
@media (max-width:420px) {
  a{
    font-size: 14px;
  }
}

</style>