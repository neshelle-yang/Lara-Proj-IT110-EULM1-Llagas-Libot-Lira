<script setup lang="ts">
const year = new Date().getFullYear()
</script>

<template>
  <footer class="mt-20 border-t-[5px] border-crimson bg-space text-[0.92rem] text-[#c9d6d6]">
    <div class="wrap flex flex-wrap items-baseline justify-between gap-x-8 gap-y-3 py-7">
      <p class="font-display text-lg text-wheat">Northbridge College</p>
      <p>© {{ year }} Registrar's Office. Questions about your record? registrar@northbridge.example</p>
    </div>
  </footer>
</template>