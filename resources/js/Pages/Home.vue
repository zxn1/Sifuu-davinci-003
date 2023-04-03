<template>
    <Head>
        <meta type=”description” content="HOME PART" head-key=”description”>
    </Head>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
          <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
            Apa yang kami sediakan? <Link :href="route('app.more')" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true" />Baca Lagi <span aria-hidden="true">&rarr;</span></Link>
          </div>
        </div>
        <div class="text-center">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Unlock the Power of Natural Language Generation with Sifuu</h1>
          <p class="mt-6 text-lg leading-8 text-gray-600">Sifuu is a system that uses OpenAI to help solve problems and provide solutions in written form.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <Link :href="route('app.davichi')" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</Link>
            <Link :href="route('shares.API')" class="text-sm font-semibold leading-6 text-gray-900">Share API Key <span aria-hidden="true">→</span></Link>
          </div>
        </div>
      </div>
</template>

<script>
import AppLayout from "../Layout/Layout.vue";
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
        Link,
    },
    layout : AppLayout,
}
</script>