<template>
    <article class="docs-article" :id="page.title">
        <header class="docs-header">
            <h1 v-if="!wantEditName" @click="wantEditName = true" class="docs-heading">{{ page.name }}</h1>
            <form v-if="wantEditName">
                <div class="form-group">
                    <input type="text" :value="page.name" @change="(e)=> newName = e.target.value" class="form-control input-lg">
                </div>
                <button @click.prevent="saveName" class="btn btn-primary">Salvar</button>
                <button @click.prevent="wantEditName = false" class="btn btn-danger">Cancelar</button>
            </form>
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
            page: {},
            wantEditName: false,
            newName: ""
        }
    },
    methods: {
        saveName() {
            this.page.name = this.newName
            this.sendRequest()
        },
        async sendRequest() {
            try {
                const response = await axios.put(`/page/${this.page.id}`,
                    JSON.stringify(this.page),
                    {
                        headers: {
                            "Content-Type": "application/json"
                        }
                    }
                )
                this.wantEditName = false
                this.page = response.data
            }
            catch(e) {
                console.log("Error")
                console.log(e)
            }
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