<template>
  <div>
    <section class="border-b-[6px] border-olive bg-meadow pb-13 pt-12">
      <div class="wrap">
        <h1 class="mb-4 text-[clamp(2.2rem,5.5vw,3.8rem)] text-wheat">About this portal</h1>
        <p class="text-lg text-[#cdd9c0]">A small demo of reusable Vue components and props in Nuxt, styled with Tailwind CSS.</p>
      </div>
    </section>

    <div class="wrap">
      <h2 class="mb-5 mt-14 text-[clamp(1.5rem,3vw,2rem)]">How it's built</h2>
      <div class="card-grid">
        <InfoCard title="Props" description="StudentCard receives name, ID, program, year, GPA and status as props." />
        <InfoCard title="Reuse" description="AppHeader and AppFooter live in the default layout and appear on every page." />
        <InfoCard title="Customizable button" description="AppButton takes label, color, to and outline.">
          <div class="mt-5 flex flex-wrap gap-3">
            <AppButton label="Meadow" color="meadow" />
            <AppButton label="Olive" color="olive" />
            <AppButton label="Crimson" color="crimson" />
            <AppButton label="Space" color="space" />
            <AppButton label="Wheat" color="wheat" outline />
          </div>
        </InfoCard>
      </div>
    </div>
  </div>
</template>