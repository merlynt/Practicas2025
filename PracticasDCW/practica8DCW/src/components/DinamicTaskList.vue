<script setup>
    const props = defineProps({
        tarea: Object,
        index: Number
    });

    const emit = defineEmits(['toggle-tarea'])

    function Toggle() {
        emit('toggle-tarea', props.index)
    }
</script>

<template>
    <div class="contenedor-tarea">
        <li :class="{completado: tarea.estado}">
            {{ tarea.texto }}
            <button @click="Toggle">
                {{ tarea.estado ? 'Desmarcar' : 'Completar' }}
            </button>
        </li>
    </div>
</template>

<style scoped>
    li{
        list-style: none;
        background-color: #1e1e1e;
        padding: 0.8rem 1rem;
        margin-top: 1rem;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: 1px solid #2c2c2c;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    }

    button{
        background-color: #42b983;
        border: none;
        color: white;
        padding: 1.2rem 2rem;
        border-radius: 6px;
        cursor: pointer;
        font-size: 0.85rem;
    }

    button:hover{
        background-color: #36996e;
    }

    .completado{
        text-decoration: line-through;
        color: #888;
    }
</style>