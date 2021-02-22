<template>
    <li class="nav-item section-title">
        <div v-if="!wantEdit">
            <a class="nav-link" :href="`#${category.title}`" data-toggle="collapse" aria-expanded="false">
                <span class="theme-icon-holder mr-2">
                    <i :class="category.icon"></i>
                </span>
                {{category.name}} 
            </a> 
            <span class="btn btn-sm" @click="wantEdit = true"><i class="fas fa-edit"></i></span>
            <span class="btn btn-sm"><i class="fas fa-trash"></i></span>
        </div>

        <form v-if="wantEdit">
            <div class="form-group">
                <input type="text" :value="category.name" @change="(e)=> newName = e.target.value" class="form-control input-lg">
            </div>
            <button @click.prevent="save" class="btn btn-primary">Salvar</button>
            <button @click.prevent="wantEdit = false" class="btn btn-danger">Cancelar</button>
        </form>

        <!-- PAGE -->
        <MenuPagePanelComponent :category-id="category.id" :collapse-id="category.title"></MenuPagePanelComponent>
    </li>
</template>

<script>
import MenuPagePanelComponent from "./MenuPagePanelComponent"

export default {
    name: "CategoryComponent",
    props: ["category"],
    components: {
        MenuPagePanelComponent
    },
    data() {
        return {
            wantEdit: false,
            newName: false
        }
    },
    methods: {
        save() {
            this.category.name = this.newName
            this.category.title = this.newName
            this.newName = ""
            this.sendRequest()
        },
        async sendRequest() {
            try {
                const response = await axios.put(`/category/${this.category.id}`,
                    JSON.stringify(this.category),
                    {
                        headers: {
                            "Content-Type": "application/json"
                        }
                    }
                )
                this.wantEdit= false
                this.category = response.data
            }
            catch(e) {
                console.log("Error")
                console.log(e)
            }
        }
    }
}
</script>

<style>

</style>