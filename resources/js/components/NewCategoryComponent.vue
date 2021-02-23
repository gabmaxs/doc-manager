<template>
    <li class="nav-item section-title mt-3">
        <form>
            <div class="form-group">
                <input required type="text" placeholder="Category Name" v-model="category.name" class="form-control input-lg">
            </div>
            <button @click.prevent="save" class="btn btn-primary">Salvar</button>
            <button @click.prevent="cancel" class="btn btn-danger">Cancelar</button>
        </form>
    </li>
</template>

<script>
    export default {
        name: "NewCategoryComponent",
        data() {
            return {
                category: {
                    name: "",
                    title: "",
                    icon: "fas fa-plus"
                }
            }
        },
        methods: {
            cancel() {
                this.$emit("cancel", true)
            },
            save() {
                this.category.title = this.category.name
                this.$emit("save", this.category)
            }
        }
    }
</script>