<template>
	<Head title="Dante Cortés | Desarrollador Web, Backend y Fullstack" />
	<div class="bg-bg-main min-h-screen">
		<NavBar />
		<LandingAboutSection />
		<div id="skills"><SkillsSection /></div>
		<div id="projects"><ProjectsSection /></div>
		<div id="services"><ServicesSection /></div>
		<div id="social"><SocialSection /></div>
		<div id="cv"><CVSection /></div>
		<div id="contact"><ContactSection /></div>
		<FooterSection />
	</div>
</template>

<script lang="ts" setup>
	import NavBar from '@/components/NavBar.vue';
	import LandingAboutSection from '@/components/LandingAboutSection.vue';
	import SkillsSection from '@/components/SkillsSection.vue';
	import ProjectsSection from '@/components/ProjectsSection.vue';
	import ServicesSection from '@/components/ServicesSection.vue';
	import SocialSection from '@/components/SocialSection.vue';
	import CVSection from '@/components/CVSection.vue';
	import ContactSection from '@/components/ContactSection.vue';
	import FooterSection from '@/components/FooterSection.vue';
import { Head } from '@inertiajs/vue3';
</script>

<style scoped>
	.bg-bg-main {
		background-color: #0F0F0F;
	}
</style>
