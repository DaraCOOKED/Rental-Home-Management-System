<script setup>
defineProps({
    title: String,
    price: String,
    location: String,
    total: Number
})
</script>

<template>
    <div class="p-4 bg-white rounded-xl shadow-sm border">
        <h3 class="font-bold text-gray-800 text-lg">{{ title }}</h3>
        <p class="text-blue-600 font-medium">{{ price }}</p>
        <p class="text-gray-400 text-sm">{{ location }}</p>
        <p class="text-gray-300">{{ total }}</p>
    </div>
</template>