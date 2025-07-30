<template>
    <section id="contact" class="py-16 bg-bg-main text-text-main font-pixel flex flex-col items-center">
        <h2 class="text-3xl font-bold text-accent mb-4">¿Tienes un proyecto? ¡Hablemos de eso!</h2>
        <form 
            class="w-full max-w-md bg-[#181818] p-8 rounded-lg shadow-lg flex flex-col gap-4 animate-fade-in" 
            @submit.prevent="submitForm"
        >
            <input 
                v-model="form.name" 
                type="text" 
                placeholder="Nombre" 
                required 
                class="bg-bg-main text-text-main border border-accent rounded px-4 
                    py-2 focus:outline-none focus:ring-2 focus:ring-accent font-pixel" 
            />
            <input 
                v-model="form.email" 
                type="email" 
                placeholder="Correo electrónico" 
                required 
                class="bg-bg-main text-text-main border border-accent rounded px-4 py-2 
                    focus:outline-none focus:ring-2 focus:ring-accent font-pixel" 
            />
            <textarea 
                v-model="form.message" 
                placeholder="Cuéntame sobre tu proyecto..." 
                required 
                rows="4" 
                class="bg-bg-main text-text-main border border-accent rounded px-4 py-2 
                    focus:outline-none focus:ring-2 focus:ring-accent font-pixel"
            ></textarea>
            <div class="flex items-center gap-2">
                <span class="text-detail">¿Cuánto es {{ captcha.a }} + {{ captcha.b }}?</span>
                <input 
                    v-model.number="captchaInput" 
                    type="number" 
                    required 
                    class="w-20 bg-bg-main text-text-main border border-accent rounded px-2 py-1 font-pixel" 
                />
            </div>
            <button 
                type="submit" 
                class="bg-accent text-bg-main font-bold py-2 rounded hover:scale-105 transition-transform duration-300"
            >Enviar</button>
            <p v-if="sent" class="text-accent mt-2">¡Mensaje enviado! Te responderé pronto.</p>
            <p v-if="captchaError" class="text-red-500 mt-2">Captcha incorrecto, intenta de nuevo.</p>
        </form>
    </section>
</template>
  
<script lang="ts" setup>
    import { ref } from 'vue';
    
    const form = ref({ name: '', email: '', message: '' });
    const sent = ref(false);
    const captcha = ref({ a: Math.floor(Math.random() * 10), b: Math.floor(Math.random() * 10) });
    const captchaInput = ref<number | null>(null);
    const captchaError = ref(false);
    
    function resetCaptcha() {
        captcha.value = { a: Math.floor(Math.random() * 10), b: Math.floor(Math.random() * 10) };
        captchaInput.value = null;
    }
    
    function submitForm() {
        if (captchaInput.value !== captcha.value.a + captcha.value.b) {
            captchaError.value = true;
            resetCaptcha();
            return;
        }
        captchaError.value = false;
        sent.value = true;
        setTimeout(() => {
            sent.value = false;
            form.value = { name: '', email: '', message: '' };
            resetCaptcha();
        }, 3000);
    }
</script>
  
<style scoped>
    .font-pixel {
        font-family: 'VT323', monospace;
    }
</style>  