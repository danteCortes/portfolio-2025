<template>
    <section id="home" class="min-h-screen flex flex-col md:flex-row items-center justify-center bg-bg-main text-text-main font-pixel pt-20">
        <div class="order-1 md:order-2 flex justify-center items-center mb-8 md:mb-0 md:ml-8">
            <img src="/fotoperfil.jpg" alt="Dante Cortés" class="w-60 h-60 rounded-full border-4 border-accent shadow-lg animate-fade-in-delay" />
        </div>
        <div class="order-2 md:order-1 flex flex-col items-center md:items-start text-center md:text-left animate-fade-in">
            <h1 class="text-5xl md:text-7xl font-bold mb-4">Hola, soy <span class="text-accent">Dante Cortés</span></h1>
            <h2 class="text-2xl md:text-3xl mb-8">Fullstack Developer</h2>
            <p class="text-lg text-detail mb-6 max-w-lg">
                Soy un apasionado desarrollador fullstack con experiencia en múltiples tecnologías y frameworks modernos.
                Me encanta crear soluciones elegantes, eficientes y escalables, siempre buscando aprender y mejorar cada día.
                Disfruto trabajar en equipo, compartir conocimientos y enfrentar nuevos retos tecnológicos.
            </p>
            <a href="#contact" class="mt-4 px-8 py-3 bg-accent text-bg-main rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 font-bold animate-bounce">¡Hablemos!</a>
        </div>
    </section>
</template>
    
<script lang="ts" setup>
    // No logic needed
</script>
    
<style scoped>
    .font-pixel {
        font-family: 'VT323', monospace;
    }
</style>