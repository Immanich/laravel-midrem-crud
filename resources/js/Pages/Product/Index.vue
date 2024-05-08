<script setup>
import { Head } from '@inertiajs/vue3';
import NavBar from '@/Components/NavBar.vue'
import { defineProps } from 'vue';


const props = defineProps({
    product: Object
})

// const form = useForm({
//     name: props.product.name,
//     description: props.product.description,
//     price: props.product.price,
//     category: props.product.category,
// }); 

</script>


<template>

    <Head title="Landing Page" />

    <NavBar />
    <div class="p-4 align-center">
        <div class="w-full flex p-6">
            <h1 class="flex-1 text-2xl flex">Products</h1>
            <a href="/products/pdf" class="bg-green-400 py-4 px-8 mr-4">Export</a>
            <a href="/products/create" class="bg-blue-400 py-4 px-8">Create</a>
        </div>
        <div class="container block w-full">
            <div class=" grid grid-cols-4 gap-4 w-full ">
                <a class="product-box p-4 b shadow-lg my-8 text-black border border-solid border-black" v-for="p in product" :key="product.id">
                    <div class="card-body w-60">
                        <div>
                            <h3 class="card-title">Name: {{p.name}}</h3>
                        </div>
                        <div>
                            <p class="card-description">Description: {{ p.description }}</p>
                        </div>  
                        <div class="card-footer">Price:
                            <b>{{ p.price }}</b>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>
