<template>
    <section class="docs-section">
        <form>
            <h2 class="section-heading">New Section</h2>
            <div class="form-group">
                <input required type="text" placeholder="Section Name" v-model="section.name" class="form-control input-lg">
            </div>
            <div class="form-group">
                <textarea required rows="15" placeholder="Section Content" class="form-control" v-model="section.content"></textarea>
            </div>
            <button @click.prevent="save" class="btn btn-primary">Salvar</button>
            <button @click.prevent="cancel" class="btn btn-danger">Cancelar</button>
        </form>
    </section><!--//section-->
</template>

<script>
    import axios from "axios"
    export default {
        name: "NewSectionComponent",
        data() {
            return {
                section: {
                    name: "",
                    content: "",
                    title: ""
                }
            }
        },
        methods: {
            cancel() {
                this.$emit("cancel", true)
            },
            save() {
                this.section.title = this.section.name
                this.$emit("save", this.section)
            }
        }
    }
</script>
