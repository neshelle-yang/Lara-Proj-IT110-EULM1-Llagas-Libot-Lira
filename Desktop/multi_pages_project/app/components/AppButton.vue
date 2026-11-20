<script setup lang="ts">
// Customize with props: <AppButton label="Save" color="crimson" outline />
type Color = 'meadow' | 'olive' | 'crimson' | 'space' | 'wheat'

const props = withDefaults(
  defineProps<{
    label: string
    color?: Color
    to?: string // if set, renders as a link
    outline?: boolean
  }>(),
  { color: 'meadow', outline: false },
)
const emit = defineEmits<{ (e: 'click', ev: MouseEvent): void }>()

// Full class strings so Tailwind can see them at build time.
const solid: Record<Color, string> = {
  meadow: 'bg-meadow border-meadow text-wheat',
  olive: 'bg-olive-dark border-olive-dark text-white',
  crimson: 'bg-crimson border-crimson text-wheat',
  space: 'bg-space border-space text-wheat',
  wheat: 'bg-wheat border-wheat text-meadow',
}
const outlined: Record<Color, string> = {
  meadow: 'bg-transparent border-meadow text-meadow',
  olive: 'bg-transparent border-olive-dark text-olive-dark',
  crimson: 'bg-transparent border-crimson text-crimson',
  space: 'bg-transparent border-space text-space',
  wheat: 'bg-transparent border-wheat text-wheat',
}

const classes = computed(() => [
  'inline-block cursor-pointer rounded-[10px] border-2 px-5 py-2.5 font-semibold no-underline transition',
  'hover:-translate-y-px hover:shadow-[0_3px_0_rgb(13_59_22/0.25)]',
  'focus-visible:outline-3 focus-visible:outline-offset-[3px] focus-visible:outline-olive',
  'motion-reduce:transition-none motion-reduce:hover:translate-y-0',
  props.outline ? outlined[props.color] : solid[props.color],
])
</script>

<template>
  <NuxtLink v-if="props.to" :to="props.to" :class="classes">{{ props.label }}</NuxtLink>
  <button v-else type="button" :class="classes" @click="emit('click', $event)">{{ props.label }}</button>
</template>