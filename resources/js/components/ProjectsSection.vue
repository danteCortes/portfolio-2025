<template>
    <section class="py-16 bg-bg-main text-text-main font-pixel">
        <h2 class="text-3xl font-bold text-accent mb-8 text-center">Proyectos Destacados</h2>
        <div 
            class="flex gap-8 max-w-6xl mx-auto overflow-x-auto py-4 px-2 scrollbar-thin 
                scrollbar-thumb-detail scrollbar-track-[#181818] custom-scrollbar"
        >
            <div 
                v-for="project in projects" 
                :key="project.title" 
                class="flex-shrink-0 w-72 h-104 bg-[#181818] rounded-2xl shadow-lg p-4 flex 
                    flex-col hover:scale-105 transition-transform duration-300 animate-fade-in" 
                style="aspect-ratio:3/4; min-width:18rem;"
            >
                <img :src="project.image" :alt="project.title" class="w-full h-40 object-cover rounded mb-4" />
                <h3 class="text-2xl text-accent font-bold mb-2">{{ project.title }}</h3>
                <p class="text-detail mb-2 flex-1">{{ project.description }}</p>
                <div class="flex flex-wrap gap-2 mt-2">
                    <span 
                        v-for="tech in project.technologies" 
                        :key="tech" 
                        class="px-2 py-1 bg-accent text-bg-main rounded text-xs font-bold"
                    >{{ tech }}</span>
                </div>
            </div>
        </div>
    </section>
</template>
  
<script lang="ts" setup>
    const projects = [
        {
            title: 'Gestor de Tareas',
            image: 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=400&q=80',
            description: 'Aplicación web para gestionar tareas y proyectos en equipo, con notificaciones y panel Kanban.',
            technologies: ['Vue.js', 'TypeScript', 'Tailwind', 'Node.js', 'MongoDB'],
        },
        {
            title: 'E-commerce Moderno',
            image: 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80',
            description: 'Tienda online con pasarela de pagos, panel de administración y catálogo dinámico.',
            technologies: ['React', 'Laravel', 'MySQL', 'Bootstrap'],
        },
        {
            title: 'API de Reservas',
            image: 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80',
            description: 'API RESTful para reservas de hoteles, con autenticación y despliegue en AWS.',
            technologies: ['Java', 'Spring', 'AWS', 'PostgreSQL'],
        },
        {
            title: 'Dashboard Analítico',
            image: 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80',
            description: 'Panel de visualización de datos en tiempo real, gráficos interactivos y exportación de reportes.',
            technologies: ['Vue.js', 'D3.js', 'Docker', 'CI/CD'],
        },
    ];
</script>
  
<style scoped>
    .font-pixel {
        font-family: 'VT323', monospace;
    }
    /* Scrollbar personalizado */
    .custom-scrollbar::-webkit-scrollbar {
        height: 8px;
        background: #181818;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #B2B2B2;
        border-radius: 8px;
    }
    .custom-scrollbar {
        scrollbar-width: thin;
        scrollbar-color: #B2B2B2 #181818;
    }
</style>
  