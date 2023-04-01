<template>
    <div class="mx-auto max-w-2xl py-20 sm:py-48 lg:py-20">
        <Link :href="route('app')">
            <button type="button" class="btn btn-dark mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
              </svg>
            </button>
        </Link>
        <div class="lg:max-w-lg">
            <p class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">A better workflow</h1>
            <p class="mt-6 text-xl leading-8 text-gray-700">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas.</p>
        </div>
    </div>
</template>

<script>
import AppLayout from "../Layout/Layout.vue";
import { Link } from '@inertiajs/inertia-vue3';

export default {
    layout : AppLayout,
    components:  {
        Link
    }
}
</script>