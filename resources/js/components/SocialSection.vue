<template>
    <section class="py-10 bg-bg-main text-text-main font-pixel flex flex-col items-center">
        <h2 class="text-2xl font-bold text-accent mb-4">Redes Sociales</h2>
        <div class="flex gap-6">
            <a 
                v-for="social in socials" 
                :key="social.name" 
                :href="social.url" 
                target="_blank" 
                rel="noopener" 
                class="hover:scale-125 transition-transform duration-300 animate-fade-in bg-[#222] 
                    rounded-full shadow-md p-2 flex items-center justify-center" 
                :aria-label="social.name"
            >
                <img :src="social.icon" :alt="social.name" class="w-8 h-8" />
            </a>
        </div>
    </section>
</template>
  
<script lang="ts" setup>
    const socials = [
        { name: 'LinkedIn', url: 'https://www.linkedin.com/in/dantecortes', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-original.svg' },
        { name: 'GitHub', url: 'https://github.com/danteCortes', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg' },
        { name: 'Instagram', url: 'https://www.instagram.com/dantesoftdeveloper', icon: 'https://cdn-icons-png.flaticon.com/512/2111/2111463.png' },
        { name: 'TikTok', url: 'https://www.tiktok.com/@codedante', icon: 'https://cdn-icons-png.flaticon.com/512/3046/3046121.png' },
        { name: 'Facebook', url: 'https://www.facebook.com/developmentdnt', icon: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/facebook/facebook-original.svg' },
        { name: 'X', url: 'https://x.com/corts_e', icon: 'https://cdn-icons-png.flaticon.com/512/5968/5968830.png' },
    ];
</script>
  
<style scoped>
    .font-pixel {
        font-family: 'VT323', monospace;
    }
</style>
  