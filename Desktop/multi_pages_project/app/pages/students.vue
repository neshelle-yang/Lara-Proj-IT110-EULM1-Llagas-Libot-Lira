<script setup lang="ts">
const { students } = useStudents()
const query = ref('')

const results = computed(() => {
  const q = query.value.trim().toLowerCase()
  if (!q) return students
  return students.filter(s =>
    [s.name, s.studentId, s.program].some(f => f.toLowerCase().includes(q)),
  )
})
</script>

<template>
  <div>
    <section class="border-b-[6px] border-olive bg-meadow pb-13 pt-12">
      <div class="wrap">
        <h1 class="mb-5 text-[clamp(2.2rem,5.5vw,3.8rem)] text-wheat">Students</h1>
        <label>
          <span class="sr-only">Search students</span>
          <input
            v-model="query"
            type="search"
            placeholder="Search by name, ID or program"
            class="w-[min(420px,100%)] rounded-[10px] border-2 border-line bg-card px-4 py-3 text-space placeholder:text-[#7a8a8f] focus-visible:border-olive-dark focus-visible:outline-3 focus-visible:outline-offset-2 focus-visible:outline-olive"
          />
        </label>
      </div>
    </section>

    <div class="wrap">
      <p class="mb-4 mt-7 text-muted">{{ results.length }} of {{ students.length }} students</p>
      <div v-if="results.length" class="card-grid">
        <StudentCard v-for="s in results" :key="s.studentId" v-bind="s" />
      </div>
      <p v-else class="max-w-[58ch] text-lg text-muted">
        No student matches “{{ query }}”. Try a different name or ID.
      </p>
      <div class="mt-7 flex flex-wrap gap-3">
        <AppButton label="Clear search" color="space" outline @click="query = ''" />
      </div>
    </div>
  </div>
</template>