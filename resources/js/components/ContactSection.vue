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
            <button 
                type="submit" 
                class="bg-accent text-bg-main font-bold py-2 rounded hover:scale-105 transition-transform duration-300"
                :disabled="spin"
            >Enviar</button>
            <p v-if="sent" class="text-accent mt-2">¡Mensaje enviado! Te responderé pronto.</p>
            <p v-if="captchaError" class="text-red-500 mt-2">Captcha incorrecto, intenta de nuevo.</p>
        </form>
    </section>
</template>
  
<script lang="ts" setup>
    import { ref } from 'vue';

    interface IVerifyResponse {
        action: string;
        challenge_ts: string;
        hostname: string;
        score: number;
        success: boolean;
        errorCodes?: string[];
    };
    
    const form = ref({ name: '', email: '', message: '' });
    const sent = ref(false);
    const captchaError = ref(false);
    const spin = ref<boolean>(false);

    const verify = async (token: string): Promise<IVerifyResponse> => {
        try {
            const response = await fetch('/api/verify', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ token }),
            });
            const data = await response.json();

            return data;
        } catch (error) {
            console.error('Error al verificar el token de reCAPTCHA:', error);
            throw error;
        }
    }

    const sendMail = async () => {
        try {
            const response = await fetch('/api/contact/shipped', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(form.value),
            });
            const data = await response.json();

            return data;
        } catch (error) {
            console.error('Error al enviar el correo:', error);
            throw error;
        }
    }
    
    const submitForm = async () => {
        spin.value = true;
        window.grecaptcha.ready(async function(){
            try {
                const token = await window.grecaptcha.execute(import.meta.env.VITE_RECAPTCHA_SITE_KEY, {action: 'submit'});

                const response =await verify(token);
                
                if(response.success && response.score >= 0.5) {
                    captchaError.value = false;

                    await sendMail();
                    form.value = { name: '', email: '', message: '' };
                    sent.value = true;
                    spin.value = false;

                } else {
                    captchaError.value = true;
                    return;
                }
                
            } catch (error) {
                console.error(error);
                captchaError.value = true;
            }
        })
    }
</script>
  
<style scoped>
    .font-pixel {
        font-family: 'VT323', monospace;
    }
</style>  