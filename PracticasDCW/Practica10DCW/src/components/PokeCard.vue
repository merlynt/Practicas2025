<template>
    <div class="pokemon-container">
        <div v-if="loading" class="loading">
            cargando pokemon...
        </div>
        <div v-else class="pokemon-grid">
            <div v-for="pokemon in pokemonList" :key="pokemon.id" class="pokemon-card">
                <div class="pokemon-image">
                    <img :src="pokemon.image" alt="pokemon.name" />
                </div>
                <div class="pokemon-info">
                    <h3 class="pokemon-name">{{ pokemon.name }}</h3>
                    <p class="pokemon-id">{{ pokemon.id.toString().padStart(3, '0') }}</p>
                    <div class="pokemon-types">
                        <span v-for="type in pokemon.types" :key="type" class="type-badge"
                            :class="type.toLowerCase()">{{ type }}</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

//variables reactivas
const pokemonList = ref([]);
const loading = ref(true);
const limit = ref(20);

const capitalizeFirstLetter = (string) => {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

const fetchpokemon = async () => {
    try {
        const response = await axios.get(`https://pokeapi.co/api/v2/pokemon?limit=${limit.value}`);
        const pokemonPromises = response.data.results.map(pokemon => {
            return axios.get(pokemon.url)
        })

        const pokemonResponses = await Promise.all(pokemonPromises);
        
        pokemonList.value = pokemonResponses.map(res => {
            const pokemon = res.data
            return {
                id: pokemon.id,
                name: capitalizeFirstLetter(pokemon.name),
                image: pokemon.sprites.other["official-artwork"].front_default,
                types: pokemon.types.map(type => capitalizeFirstLetter(type.type.name))
            }
        })
        console.log(pokemonList.value)
        
        loading.value = false;
    }
    catch (error) {
        console.error("error al obtener el pokemon", error);
        loading.value = false;
    }
}

onMounted(() => {
    fetchpokemon();
});


</script>


<style scoped>
.pokemon-container {
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.loading {
    text-align: center;
    font-size: 1.5rem;
    padding: 2rem;
}

.pokemon-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
}

.pokemon-card {
    background-color: #f5f5f5;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.pokemon-card:hover {
    transform: translateY(-5px);
}

.pokemon-image {
    background-color: #f0f0f0;
    padding: 20px;
    text-align: center;
}

.pokemon-image img {
    max-width: 120px;
    height: auto;
}

.pokemon-info {
    padding: 15px;
}

.pokemon-name {
    margin: 0;
    font-size: 1.2rem;
    color: #333;
}

.pokemon-id {
    margin: 5px 0;
    color: #666;
    font-size: 0.9rem;
}

.pokemon-types {
    display: flex;
    gap: 8px;
    margin-top: 10px;
}

.type-badge {
    padding: 3px 8px;
    border-radius: 4px;
    font-size: 0.8rem;
    color: white;
    background-color: #999;
}

/* Colores para los diferentes tipos de pokémon */
.grass {
    background-color: #78c850;
}

.fire {
    background-color: #f08030;
}

.water {
    background-color: #6890f0;
}

.electric {
    background-color: #f8d030;
}

.bug {
    background-color: #a8b820;
}

.normal {
    background-color: #a8a878;
}

.flying {
    background-color: #a890f0;
}

.poison {
    background-color: #a040a0;
}

.ground {
    background-color: #e0c068;
}

.rock {
    background-color: #b8a038;
}

.fighting {
    background-color: #c03028;
}

.psychic {
    background-color: #f85888;
}

.ghost {
    background-color: #705898;
}

.ice {
    background-color: #98d8d8;
}

.dragon {
    background-color: #7038f8;
}

.dark {
    background-color: #705848;
}

.steel {
    background-color: #b8b8d0;
}

.fairy {
    background-color: #ee99ac;
}
</style>