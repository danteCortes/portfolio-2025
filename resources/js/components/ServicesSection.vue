<template>
    <section class="py-16 bg-bg-main text-text-main font-pixel px-2">
        <h2 class="text-3xl font-bold text-accent mb-8 text-center">Servicios</h2>
        <div class="flex flex-col md:flex-row justify-center gap-8 max-w-4xl mx-auto">
            <div 
                v-for="service in services" 
                :key="service.title" 
                class="flex-1 bg-[#181818] rounded-lg shadow-lg p-8 flex flex-col 
                    items-center hover:scale-105 transition-transform duration-300 
                    animate-fade-in"
            >
                <div class="text-5xl mb-4">{{ service.icon }}</div>
                <h3 class="text-xl text-accent font-bold mb-2">{{ service.title }}</h3>
                <p class="text-detail text-center">{{ service.description }}</p>
            </div>
        </div>
    </section>
</template>
  
<script lang="ts" setup>
    const services = [
        {
            title: 'Desarrollo a Medida',
            icon: '💻',
            description: 'Soluciones de software personalizadas para tu negocio, desde la idea hasta el despliegue.',
        },
        {
            title: 'Consultoría',
            icon: '🧑‍💼',
            description: 'Asesoría en arquitectura, buenas prácticas, optimización y escalabilidad de sistemas.',
        },
        {
            title: 'Tutoría y Enseñanza',
            icon: '🎓',
            description: 'Capacitación y mentoría en desarrollo de software, frameworks y metodologías ágiles.',
        },
    ];
</script>
  
<style scoped>
    .font-pixel {
        font-family: 'VT323', monospace;
    }
</style>
  