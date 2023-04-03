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
            <p class="text-base font-semibold leading-7 text-indigo-600">Sharing API Key</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Don't worry, it's safe!</h1>
            <p class="mt-6 text-xl leading-8 text-gray-700">Sifuu is working based on text-davinci-300 model powered by Open AI. Therefore, it is require an <a href="https://platform.openai.com/account/api-keys" target="_blank">API Key</a> from Open AI. Hence, this is the feature to share your key to our system incase the generator is not working.</p>
            <p class="mt-6 text-l leading-8 text-gray-400">Your key was protected! We do some fetching stuff inside our server, and provide only necessary to the client.</p>
        </div>
        <div>
    <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
    <div class="relative mt-2 rounded-md shadow-sm">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
        <span class="text-gray-500 sm:text-sm">$</span>
        </div>
        <input v-model="key" type="text" name="price" id="price" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="your APIs Key">
        <div class="absolute inset-y-0 right-0 flex items-center">
            <Link :href="route('KeyShares')" method="post" type="button" :data="{'key': key}" class="btn btn-primary">
                <table>
                    <tr>
                        <td>
                            Share
                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill ml-2" viewBox="0 0 16 16">
                                <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                            </svg>
                        </td>
                    </tr>
                </table>
            </Link>
        </div>
    </div>
    </div>
</div>
</template>

<script>
import Layout from '../Layout/Layout.vue';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    layout : Layout,
    components: {
        Link,
    },
    data(){
        return {
            key : '',
        }
    }
}

</script>