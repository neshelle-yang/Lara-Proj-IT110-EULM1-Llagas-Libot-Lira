<script setup lang="ts">
defineProps<{ title: string; description: string }>()
</script>

<template>
  <article class="rounded-b-[14px] rounded-t border border-t-4 border-line border-t-olive bg-card px-6 py-5">
    <h3 class="mb-2 text-xl">{{ title }}</h3>
    <p class="text-muted">{{ description }}</p>
    <slot />
  </article>
</template>