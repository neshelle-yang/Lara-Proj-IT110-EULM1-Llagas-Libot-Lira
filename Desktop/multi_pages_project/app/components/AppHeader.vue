<script setup lang="ts">
const route = useRoute()
const links = [
  { label: 'Home', to: '/' },
  { label: 'Students', to: '/students' },
  { label: 'About', to: '/about' },
]
const active = 'bg-wheat text-meadow font-semibold'
const idle = 'text-[#d9c690] hover:bg-wheat/15 hover:text-wheat'
</script>

<template>
  <header class="bg-meadow">
    <div class="wrap flex flex-wrap items-center justify-between gap-4 py-4">
      <NuxtLink
        to="/"
        class="font-display text-[1.35rem] text-wheat no-underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-wheat"
      >
        Northbridge College
      </NuxtLink>
      <nav aria-label="Main" class="flex gap-1">
        <NuxtLink
          v-for="l in links"
          :key="l.to"
          :to="l.to"
          :class="[
            'rounded-full px-3.5 py-1.5 font-medium no-underline transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-wheat motion-reduce:transition-none',
            route.path === l.to ? active : idle,
          ]"
        >
          {{ l.label }}
        </NuxtLink>
      </nav>
    </div>
  </header>
</template>