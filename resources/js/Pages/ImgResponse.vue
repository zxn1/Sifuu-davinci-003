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
        <div>
            <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Ask Sifuu</label>
            <div class="relative mt-2 rounded-md shadow-sm">
              <div class="pointer-events-none absolute left-0 py-2 flex items-center pl-3">
                <span class="text-gray-500 sm:text-sm">$</span>
              </div>
              <textarea v-model="prompt" type="text" name="price" id="price" style="height : 100px;" class="ps-8 block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Your prompt" />
            </div>

            <div class="row mt-2">
                <div class="col-3">
                    <div class="form-check ml-2">
                        <input :checked="checked" @click="checked = !checked" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Generate Image
                        </label>
                      </div>
                </div>
                <div class="col-9">
                    <table class="flex justify-end">
                        <tr>
                            <td>
                                <button type="button" style="height : 40px;" class="btn btn-danger mr-1" @click="clearAsk">Clear <strong>X</strong></button>
                            </td>
                            <td>
                                <Link :href="checked==false? route('app.ask') : route('app.img.ask')" type="button" class="btn btn-primary" method="post" :data="{'prompt': prompt}">
                                    <table>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                                </svg>
                                            </td>
                                            <td>
                                                &nbsp;Submit
                                            </td>
                                        </tr>
                                    </table>
                                </Link>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <p class="mt-6 text-xl leading-8 text-gray-700">Your requested image..</p>
            <img :src="response" class="mt-3 img-fluid rounded-lg"/>
          </div>
    </div>
</template>

<script>
import Layout from "../Layout/Layout.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default { 
    layout : Layout,
    props : {
        response : Object,
    },
    components: {
        Link,
    },
    data() {
        return {
            prompt : "",
            checked : false,
        }
    },
    methods : {
        clearAsk ()
        {
            this.prompt = "";
        }
    }
}
</script>