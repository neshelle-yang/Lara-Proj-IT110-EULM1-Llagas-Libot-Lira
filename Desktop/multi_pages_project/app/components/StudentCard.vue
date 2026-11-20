<script setup lang="ts">
// All data arrives through props, so one component renders any student.
type Status = 'Active' | 'On leave' | 'Graduating'

const props = defineProps<{
  name: string
  studentId: string
  program: string
  year: number
  gpa: number
  status?: Status
}>()

const initials = computed(() =>
  props.name.split(' ').map(w => w[0]).slice(0, 2).join(''),
)

const statusClass: Record<Status, string> = {
  'Active': 'bg-olive-dark text-white',
  'On leave': 'bg-crimson text-wheat',
  'Graduating': 'bg-wheat text-meadow ring-[1.5px] ring-inset ring-olive',
}
</script>

<template>
  <article class="flex gap-4 rounded-[14px] border border-line bg-card p-5">
    <div
      class="grid size-[58px] flex-none place-items-center rounded-full bg-meadow font-display text-xl text-wheat"
      aria-hidden="true"
    >
      {{ initials }}
    </div>
    <div>
      <h3 class="text-xl">{{ name }}</h3>
      <p class="mb-3 mt-0.5 text-muted">{{ program }}</p>
      <dl class="mb-3.5 flex gap-6">
        <div>
          <dt class="text-[0.8rem] text-muted">ID</dt>
          <dd class="font-semibold">{{ studentId }}</dd>
        </div>
        <div>
          <dt class="text-[0.8rem] text-muted">Year</dt>
          <dd class="font-semibold">{{ year }}</dd>
        </div>
        <div>
          <dt class="text-[0.8rem] text-muted">GPA</dt>
          <dd class="font-semibold">{{ gpa.toFixed(2) }}</dd>
        </div>
      </dl>
      <span
        v-if="status"
        :class="['inline-block rounded-full px-3 py-0.5 text-[0.82rem] font-semibold', statusClass[status]]"
      >
        {{ status }}
      </span>
    </div>
  </article>
</template>