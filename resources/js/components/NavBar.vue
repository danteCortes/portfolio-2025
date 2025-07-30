<template>
    <nav class="w-full fixed top-0 left-0 z-50 bg-[#181818]/80 backdrop-blur-md shadow-lg font-pixel">
        <div class="max-w-4xl mx-auto flex items-center justify-between px-6 py-3">
            <img src="/logo.jpg" alt="Logo" class="h-10 w-10 object-contain rounded-md shadow-md bg-[#222]" />
            <button @click="toggleMenu" class="md:hidden text-accent focus:outline-none ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <ul class="hidden md:flex gap-7 text-lg">
                <li><a href="#home" class="hover:text-accent transition">Inicio</a></li>
                <li><a href="#skills" class="hover:text-accent transition">Habilidades</a></li>
                <li><a href="#projects" class="hover:text-accent transition">Proyectos</a></li>
                <li><a href="#services" class="hover:text-accent transition">Servicios</a></li>
                <li><a href="#contact" class="hover:text-accent transition">Contacto</a></li>
            </ul>
        </div>
        <transition name="fade">
            <ul
                v-if="menuOpen"
                class="md:hidden flex flex-col gap-4 text-lg bg-[#181818] px-8 py-6 shadow-lg absolute
                    top-full left-0 w-full border-t border-detail animate-fade-in"
            >
                <li><a @click="closeMenu" href="#home" class="hover:text-accent transition">Inicio</a></li>
                <li><a @click="closeMenu" href="#skills" class="hover:text-accent transition">Habilidades</a></li>
                <li><a @click="closeMenu" href="#projects" class="hover:text-accent transition">Proyectos</a></li>
                <li><a @click="closeMenu" href="#services" class="hover:text-accent transition">Servicios</a></li>
                <li><a @click="closeMenu" href="#contact" class="hover:text-accent transition">Contacto</a></li>
            </ul>
        </transition>
    </nav>
</template>
  
<script lang="ts" setup>
    import { ref } from 'vue';

    const menuOpen = ref(false);

    function toggleMenu() {
        menuOpen.value = !menuOpen.value;
    }

    function closeMenu() {
        menuOpen.value = false;
    }
</script>
    
<style scoped>
    .font-pixel {
        font-family: 'VT323', monospace;
    }
    .fade-enter-active, .fade-leave-active {
        transition: opacity 0.3s;
    }
    .fade-enter-from, .fade-leave-to {
        opacity: 0;
    }
    .font-pixel {
        font-family: 'VT323', monospace;
    }
</style>
  