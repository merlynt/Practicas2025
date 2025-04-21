<script setup>
import ProductCard from './components/ProductCard.vue';
import DinamicTaskList from './components/DinamicTaskList.vue';
import ComponentParent from './components/ComponentParent.vue';
import {ref} from 'vue';

const productos =[
  {
    nombre: 'Laptop Gamer Asus',
    descripcion: 'Porcesador Ryzen 7, 16gb Ram, RTX 3060'
  },
  {
  nombre: 'Teclado Mecanico',
    descripcion: 'Swicthes rojos, iluminacion psersonalizada'
  },
]

const tareas = ref([
  {texto: 'Estudiar VueJs', estado: false},
  {texto: 'Preparar la presentacion', estado: false},
  {texto: 'Subir al repo de github', estado: false}
]);

function toggleTarea(index){
  tareas.value[index].estado = !tareas.value[index].estado
}

</script>

<template>
  <div>
    <h1>Catalogo de productos</h1>
    <ProductCard
      v-for="(item, index) in productos"
      :key="index"
      :nombre="item.nombre"
      :descripcion="item.descripcion"
    />
  </div>

  <hr>

  <div>
    <h1>Lista de Tareas</h1>
    <ul>
      <DinamicTaskList
      v-for="(item, index) in tareas"
      :key="index"
      :tarea="item"
      :index="index"
      @toggle-tarea="toggleTarea"
      />
    </ul>
  </div>

  <div>
    <ComponentParent/>
  </div>
</template>


<style scoped>

  h1{
    color: lightskyblue;
    text-align: center;
    margin: 2rem;
  }

  ul{
    padding: 0;
    list-style: none;
  }

</style>