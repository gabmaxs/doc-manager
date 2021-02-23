<template>
<div>
    <section class="docs-section drag-cursor" :id="section.title">
        <h2 v-if="!wantEditName" @click="wantEditName = true" class="section-heading">{{ section.name }}</h2>
        <form v-if="wantEditName">
            <div class="form-group">
                <input type="text" :value="section.name" @change="(e)=> newName = e.target.value" class="form-control input-lg">
            </div>
            <button @click.prevent="saveName" class="btn btn-primary">Salvar</button>
            <button @click.prevent="wantEditName = false" class="btn btn-danger">Cancelar</button>
        </form>
        <p v-if="!wantEditContent" @click="wantEditContent = true">{{ section.content }}</p>
        <form v-if="wantEditContent">
            <div class="form-group">
                <textarea rows="20" class="form-control" @change="(e)=> newContent = e.target.value" :value="section.content"></textarea>
            </div>
            <button @click.prevent="saveContent" class="btn btn-primary">Salvar</button>
            <button @click.prevent="wantEditContent = false" class="btn btn-danger">Cancelar</button>
        </form>
        <div class="d-flex justify-content-lg-end">
            <button @click="wantDelete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete {{section.name}}</button>
        </div>
    </section><!--//section-->
</div>
</template>

<script>
    import axios from "axios"

    export default {
        name: "SectionComponent",
        props: ["section"],
        data() {
            return {
                wantEditContent: false,
                newContent: "",
                wantEditName: false,
                newName: ""
            }
        },
        methods: {
            wantDelete() {
                this.$emit("delete", this.section)
            },
            saveContent() {
                this.section.content = this.newContent
                this.sendRequest()
            },
            saveName() {
                this.section.name = this.newName
                this.section.title = this.newName
                this.sendRequest()
            },
            async sendRequest() {
                try {
                    const response = await axios.put(`/section/${this.section.id}`,
                        JSON.stringify(this.section),
                        {
                            headers: {
                                "Content-Type": "application/json"
                            }
                        }
                    )
                    this.wantEditName = false
                    this.wantEditContent = false
                    this.section = response.data
                }
                catch(e) {
                    console.log("Error")
                    console.log(e)
                }
            }
        },
        created() {
            if(this.section.isNew){
                this.wantEditContent = true
                this.wantEditName = true
            }
        }
    }
</script>
