<template>
    <section class="py-16 bg-bg-main text-text-main font-pixel flex flex-col items-center">
      <h2 class="text-3xl font-bold text-accent mb-4">Descarga mi Currículum</h2>
      <a href="/cv.pdf" download 
        class="px-8 py-3 bg-accent text-bg-main rounded-lg shadow-lg hover:scale-105 
            transition-transform duration-300 font-bold animate-bounce"
    >Descargar CV</a>
      <p class="text-detail mt-4">Siempre es bueno tenerlo a mano. ¡No dudes en revisarlo!</p>
    </section>
</template>
  
<script lang="ts" setup>
    // No logic needed for now
</script>
  
<style scoped>
    .font-pixel {
        font-family: 'VT323', monospace;
    }
</style>