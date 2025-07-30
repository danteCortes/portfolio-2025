<template>
    <footer class="w-full bg-[#181818] text-detail font-pixel py-6 flex flex-col items-center mt-10 border-t border-detail">
        <div class="mb-2">&copy; {{ new Date().getFullYear() }} Dante Cortés. Todos los derechos reservados.</div>
        <div class="flex gap-4 text-sm">
            <a href="#home" class="hover:text-accent transition">Inicio</a>
                <span>|</span>
            <a href="#contact" class="hover:text-accent transition">Contacto</a>
        </div>
    </footer>
</template>
  
<script lang="ts" setup>
    // No logic needed
</script>
  
<style scoped>
    .font-pixel {
        font-family: 'VT323', monospace;
    }
</style>