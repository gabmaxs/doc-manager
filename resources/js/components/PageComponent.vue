<template>
    <article class="docs-article" :id="page.htmlId">
        <header class="docs-header">
            <h1 class="docs-heading">{{ page.name }}</h1>
            <section class="docs-intro">
                <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
            </section><!--//docs-intro-->
        </header>
        <slot></slot>
    </article>
</template>

<script>
export default {
    name: "PageComponent",
    props: ["pageValue"],
    data() {
        return {
            page: {}
        }
    },
    created() {
        const pageObj = JSON.parse(this.pageValue)
        this.page = pageObj
    }
}
</script>

<style>

</style>