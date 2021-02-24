<template>
    <li v-if="page" class="nav-item">
        <a class="nav-link active" :href="pageLink">
            {{page.name}}
        </a> 
        <button :disabled="deleteDisabled" @click="wantDelete" class="btn btn-sm">
            <i class="fa fa-trash trash-red"></i>
        </button>
    </li>  
</template>

<script>
export default {
    name: "MenuPageComponent",
    props: ["page", "deleteDisabled"],
    methods: {
        wantDelete() {
            this.$emit("delete", this.page)
        },
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