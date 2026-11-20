<script setup lang="ts">
const { students } = useStudents()
</script>

<template>
  <div>
    <!-- Hero: rolling hills echo the palette's landscape photo -->
    <section class="relative bg-meadow pt-18">
      <div class="wrap pb-36">
        <h1 class="mb-4 max-w-[18ch] text-[clamp(2.2rem,5.5vw,3.8rem)] text-wheat">
          Your record, your classmates, all in one meadow.
        </h1>
        <p class="max-w-[58ch] text-lg text-[#cdd9c0]">
          Browse student profiles, check program and standing, and see what the
          registrar can help with.
        </p>
        <div class="mt-7 flex flex-wrap gap-3">
          <AppButton label="Browse students" to="/students" color="wheat" />
          <AppButton label="About the portal" to="/about" color="wheat" outline />
          <AppButton label="Contact registrar" color="crimson" />
        </div>
      </div>
      <svg
        class="absolute -bottom-px left-0 block h-[150px] w-full"
        viewBox="0 0 1440 160"
        preserveAspectRatio="none"
        aria-hidden="true"
      >
        <path fill="#1d4a22" d="M0 70 C200 10 380 40 560 70 S940 110 1160 50 S1360 20 1440 40 V160 H0Z" />
        <path fill="#5c6828" d="M0 100 C180 60 360 110 600 95 S980 50 1200 90 S1380 110 1440 85 V160 H0Z" />
        <path fill="#737f35" d="M0 125 C240 95 420 140 700 120 S1080 90 1300 125 S1400 130 1440 118 V160 H0Z" />
        <path fill="#f5ead0" d="M0 148 C300 128 520 160 820 146 S1220 130 1440 150 V160 H0Z" />
      </svg>
    </section>

    <div class="wrap">
      <h2 class="mb-5 mt-14 text-[clamp(1.5rem,3vw,2rem)]">What you can do here</h2>
      <div class="card-grid">
        <InfoCard title="Browse profiles" description="See each student's program, year level and GPA in one card." />
        <InfoCard title="Search quickly" description="Filter the list by name, ID or program as you type." />
        <InfoCard title="One consistent layout" description="Header and footer are shared components, so every page looks the same." />
      </div>

      <h2 class="mb-5 mt-14 text-[clamp(1.5rem,3vw,2rem)]">Featured students</h2>
      <div class="card-grid">
        <StudentCard v-for="s in students.slice(0, 3)" :key="s.studentId" v-bind="s" />
      </div>
    </div>
  </div>
</template>