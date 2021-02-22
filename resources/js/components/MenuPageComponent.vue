<template>
    <li v-if="page" class="nav-item">
        <a class="nav-link active" :href="pageLink">
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
    computed: {
        pageLink() {
            const arrayUrl = window.location.href.split("/")
            arrayUrl[5] = this.page.title
            const url = arrayUrl.join("/")
            return url
        }
    }
}
</script>

<style>

</style>