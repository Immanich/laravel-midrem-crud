<script setup>
import { defineProps } from 'vue';
import { useForm }  from '@inertiajs/vue3'

const form = useForm({
    name: '',
    description: '',
    category: '',
    price: 0,
})

const submit = () => {
    form.post('/products', {
        onSuccess : () => {
            form.reset()
        }
    })
}
</script>

<template>

    <div class="container w-full bg-white p-24">
        <div class="title">
            <h1 class="text-3xl">Create Product</h1>
        </div>
        <div class="entry">
            <form @submit.prevent="submit">
                <div class="data">
                    <label for="name" class="mb-2">Product Name<br>
                        <input type="text" id="name" class="mt-1 w-4/12" name="name"  v-model="form.name" required>
                    </label>
                </div>
                <div class="data">
                    <label for="description" class="mb-2">Description<br>
                        <input type="text" id="description" class="mt-1 w-4/12" name="description" v-model="form.description" required>
                    </label>
                </div>
                <div class="data">
                    <label for="category" class="mb-2 " >Category<br>
                        <select name="category" class=" w-4/12" id="category" v-model="form.category">
                            <option>Grocery</option>
                            <option>Appliances</option>
                            <option>Decoration</option>
                        </select>
                    </label>
                </div>
                <div class="data">
                    <label for="price" class="mb-2">Price<br>
                        <input type="text" id="price" class="mt-1  w-4/12" price="price" v-model="form.price" required>
                    </label>
                </div>
                <div class="data">
                    <button type="submit" class="bg-blue-400 p-4 mt-8 w-32">Submit</button>
                </div>
            </form>
        </div>
    </div>
</template>
