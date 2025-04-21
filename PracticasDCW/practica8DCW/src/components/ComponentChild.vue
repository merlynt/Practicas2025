<script setup>
const props = defineProps({
    nombre: String,
    email: String,
    edad: Number
})
</script>

<template>
    <div class="tarjeta-usuario">
        <h3>{{ nombre }}</h3>
        <p><strong>Email:</strong> {{ email }}</p>
        <p><strong>Edad:</strong> {{ edad }} años</p>
    </div>
</template>

<style scoped>
.tarjeta-usuario {
    width: 35rem;
    background-color: #2c2c2c;
    border: 1px #2c2c2c;
    padding: 1.2rem;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0);
    margin-bottom: 1.5rem;
    transition: transform 0, 2s;
}
</style>