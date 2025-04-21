<script setup>
  import TarjetaUsuario from './ComponentChild.vue'
  
  const usuarios = [
    { id: 1, nombre: 'Carlos Pérez', email: 'carlos@example.com', edad: 29 },
    { id: 2, nombre: 'Ana Martínez', email: 'ana@example.com', edad: 34 },
    { id: 3, nombre: 'Luis García', email: 'luis@example.com', edad: 25 }
  ]
  </script>
<template>
    <div>
      <h1>Lista de Usuarios</h1>
      <div class="contenedor">
        <TarjetaUsuario
          v-for="usuario in usuarios"
          :key="usuario.id"
          :nombre="usuario.nombre"
          :email="usuario.email"
          :edad="usuario.edad"
        />
      </div>
    </div>
  </template>
  
  
  <style scoped>
  .contenedor {
    display: inline-block;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }
  </style>
  