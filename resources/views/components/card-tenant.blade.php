<script setup>
defineProps({
  title: String,
  total: Number,
  subtitle: String,
  extra: String,
  svg: String // or Component if you're passing icon component
});
</script>

<template>
  <div class="w-[260px] bg-white rounded-2xl shadow-sm shadow-black-100 hover:shadow-md transition p-5 mt-4">

    <!-- Icon -->
    <div class="flex justify-center mb-4">
      <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
        <!-- SVG SLOT -->
        <div v-html="svg"></div>
      </div>
    </div>

    <!-- Content -->
    <div class="text-center space-y-1">
      <p class="text-gray-500 text-sm">{{ title }}</p>
      <p class="font-bold text-3xl text-gray-800">{{ total }}</p>
      <p class="text-xs text-gray-400">{{ subtitle }}</p>
    </div>

  </div>
</template>