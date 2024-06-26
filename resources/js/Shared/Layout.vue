<script setup>
    import Header from './Header.vue';
    import Footer from './Footer.vue';

</script>

<template>
    <main class="p-0 m-0">
        <Header />
            <slot />
        <Footer />
    </main>
</template>