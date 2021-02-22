<template>
    <li class="nav-item">
        <form>
            <div class="form-group">
                <input required type="text" placeholder="Page Name" v-model="page.name" class="form-control input-lg">
            </div>
            <button @click.prevent="save" class="btn btn-primary">Salvar</button>
            <button @click.prevent="cancel" class="btn btn-danger">Cancelar</button>
        </form>
    </li>
</template>

<script>
    export default {
        name: "NewPageComponent",
        data() {
            return {
                page: {
                    name: "",
                    title: ""
                }
            }
        },
        methods: {
            cancel() {
                this.$emit("cancel", true)
            },
            save() {
                this.page.title = this.page.name
                this.$emit("save", this.page)
            }
        }
    }
</script>