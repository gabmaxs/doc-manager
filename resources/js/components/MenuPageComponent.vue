<template>
    <li v-if="page" class="nav-item">
        <a class="nav-link active" :href="page.title">
            {{page.name}}
        </a> 
        <span class="btn btn-sm">
            <i class="fa fa-trash trash-red"></i>
        </span>
    </li>  
</template>

<script>
export default {
    name: "MenuPageComponent",
    props: ["page"],
    data() {
        return {
        }
    },
    methods: {
    }
}
</script>

<style>

</style>