<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title inertia>Dante Cortés | Desarrollador Web, Backend y Fullstack</title>
        <meta name="description" content="Portafolio de Dante Cortés, desarrollador web, backend y fullstack especializado en PHP, Laravel, Vue y tecnologías modernas.">
        <meta name="keywords" content="Dante Cortés, desarrollador web, programador backend, programador PHP, Laravel Developer, fullstack developer, Vue, Inertia, Vite, TypeScript, dantecortes.dev">
        <meta name="author" content="Dante Cortés">

        <!-- Open Graph -->
        <meta property="og:title" content="Dante Cortés | Desarrollador Web, Backend y Fullstack">
        <meta property="og:description" content="Portafolio de Dante Cortés, desarrollador web, backend y fullstack especializado en PHP, Laravel, Vue y tecnologías modernas.">
        <meta property="og:image" content="/logo.jpg">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://dantecortes.dev">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Dante Cortés | Desarrollador Web, Backend y Fullstack">
        <meta name="twitter:description" content="Portafolio de Dante Cortés, desarrollador web, backend y fullstack especializado en PHP, Laravel, Vue y tecnologías modernas.">
        <meta name="twitter:image" content="/logo.jpg">

        <!-- Favicon y Apple Touch Icon -->
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="apple-touch-icon" href="/logo.jpg">
        <!-- <link rel="icon" href="/favicon.svg" type="image/svg+xml"> -->

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @routes
        @vite(['resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
        <script src="https://www.google.com/recaptcha/api.js?render={{ env('VITE_RECAPTCHA_SITE_KEY') }}"></script>
    </body>
</html>
