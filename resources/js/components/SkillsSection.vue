<template>
    <section class="py-16 bg-bg-main text-text-main font-pixel px-2">
        <h2 class="text-3xl font-bold text-accent mb-8 text-center">Habilidades Técnicas</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto overflow-x-auto pb-2">
            <div 
                v-for="skill in skills" 
                :key="skill.name" 
                class="flex flex-col items-center p-6 bg-[#181818] rounded-xl shadow-md 
                    hover:scale-105 transition-transform duration-300 min-w-[160px]"
            >
                <img :src="skill.icon" :alt="skill.name" class="w-14 h-14 mb-3" />
                <span class="text-detail text-lg">{{ skill.name }}</span>
            </div>
        </div>
        <h2 class="text-3xl font-bold text-accent mt-16 mb-8 text-center">Habilidades Blandas</h2>
        <div class="flex flex-wrap justify-center gap-4 max-w-3xl mx-auto">
            <span 
                v-for="soft in softSkills" 
                :key="soft" 
                class="px-4 py-2 bg-[#181818] text-detail rounded-full border border-accent text-lg mb-2 animate-fade-in"
            >{{ soft }}</span>
        </div>
    </section>
</template>
  
<script lang="ts" setup>
    const skills = [
        { name: 'PHP', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg' },
        { name: 'Laravel', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg' },
        { name: 'Java', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg' },
        { name: 'Spring', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/spring/spring-original.svg' },
        { name: 'JavaScript', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg' },
        { name: 'TypeScript', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg' },
        { name: 'Vue.js', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg' },
        { name: 'React', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg' },
        { name: 'CSS3', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg' },
        { name: 'Bootstrap', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg' },
        { name: 'Tailwind', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg' },
        { name: 'MySQL', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg' },
        { name: 'SQL Server', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftsqlserver/microsoftsqlserver-plain.svg' },
        { name: 'PostgreSQL', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg' },
        { name: 'MongoDB', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg' },
        { name: 'Docker', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg' },
        { name: 'Kubernetes', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kubernetes/kubernetes-plain.svg' },
        { name: 'AWS', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-plain-wordmark.svg' },
        { name: 'DigitalOcean', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/digitalocean/digitalocean-original.svg' },
        { name: 'Azure', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/azure/azure-original.svg' },
        { name: 'VPS', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg' },
        { name: 'CI/CD', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/githubactions/githubactions-plain.svg' },
        { name: 'Git', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg' },
    ];
  
    const softSkills = [
        'SCRUM',
        'Clean Code',
        'Patrones de diseño',
        'Arquitectura Hexagonal',
        'TDD',
        'DDD',
        'Comunicación efectiva',
        'Trabajo en equipo',
        'Resolución de problemas',
        'Pensamiento crítico',
        'Gestión del tiempo',
        'Aprendizaje continuo',
    ];
</script>
  
<style scoped>
    .font-pixel {
        font-family: 'VT323', monospace;
    }
</style>
  