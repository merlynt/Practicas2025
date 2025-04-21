<script setup>
    import { ref } from "vue";

    const props = defineProps({
        nombre: String,
        descripcion: String
    })

    const mostrar = ref(false)
</script>

<template>
    <div class="producto-card">
        <div class="producto-header">
            <h2>{{ nombre }}</h2>
            <button @click="mostrar = !mostrar">
                {{ mostrar ? 'ocultar detalle' : 'Mostrar detalle' }}
            </button>
        </div>

        <transition name="fade">
            <p v-if="mostrar" class="description">{{ descripcion }}</p>
        </transition>
    </div>
</template>

<style scoped>
    .producto-card{
        width: 35rem;
        background-color: #2c2c2c;
        border: 1px #2c2c2c;
        padding: 1.2rem;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0);
        margin-bottom: 1.5rem;
        transition: transform 0,2s;
    }

    .producto-card:hover{
        transform: scale(1.01);
    }

    .producto-healer{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .producto-healer h2{
        margin: 0;
        font-size: 1.2rem;
        color: white;
    }

    button{
        background-color: #42b983;
        border: none;
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 8px;
        cursor: pointer;
        font-size: 0.9rem;
        transition: background-color 0.3s;
    }

    button:hover{
        background-color: cadetblue;
    }

    .descripcion{
        margin-top: 0.8rem;
        color: white;
        line-height: 1.5s;
    }

</style>