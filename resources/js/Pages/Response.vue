<template>
    <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3">{{response}}</textarea>
</template>

<script>
import Layout from '../Pages/Davinci.vue';

export default { 
    layout : Layout,
    props : {
        response : Object,
    },
}
</script>