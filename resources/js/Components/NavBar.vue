<script setup>
    import { Link } from '@inertiajs/vue3';

</script>

<template>

    <section id="main-nav" class="bg-blue-600 flex items-center text-white">
        <div id="brand" class="text-xl font-bold flex-1 p-3">
            Midterm Removal
        </div>
        <nav>
            <Link href="/">Home</Link>
            <Link href="/products">Products</Link>
            <Link href="/about">About</Link>
        </nav>
    </section>

</template>

<style scoped>

a {
    @apply p-4 hover:bg-blue-500;
}

</style>
