<template>
    <div>
        <ul class="section-items list-unstyled nav flex-column pb-3">
            <li>
                <draggable v-model="categories" @start="drag=true" @end="drag=false" @change="handleChange">
                    <CategoryComponent @delete="wantDelete" :version="version" v-for="category in categories" :key="category.id" :category="category"></CategoryComponent>
                </draggable>
            </li>
            <li v-if="!wantAddCategory" class="nav-item section-title mt-3">
                <a @click="wantAddCategory = true" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> New Category</a>
            </li>
            <NewCategoryComponent v-if="wantAddCategory" @save="addCategory" @cancel="wantAddCategory = false"></NewCategoryComponent>
        </ul>
        <ModalComponent @close="closeModal" @delete="deleteCategory" :item="selectedCategory" v-if="isModalVisible"></ModalComponent>
    </div>
</template>

<script>
import draggable from 'vuedraggable'
import CategoryComponent from "./CategoryComponent"
import NewCategoryComponent from "./NewCategoryComponent"
import ModalComponent from './ModalComponent'
import axios from 'axios'

export default {
    name: "CategoryPanelComponent",
    components: {
        draggable, CategoryComponent, ModalComponent, NewCategoryComponent
    },
    props: ["categoryList", "version"],
    data() {
        return {
            categories: [],
            wantAddCategory: false,
            isModalVisible: false,
            selectedCategory: {}
        }
    },
    methods: {
        handleChange() {
            this.updateSequence()
        },
        async updateSequence() {
            console.log("atualizando sequencia")
            // try {
            //     await axios.put(`/page/${this.page}/sections`,
            //         JSON.stringify({sections: this.sections}),
            //         {
            //             headers: {
            //                 "Content-Type": "application/json"
            //             }
            //         }
            //     )
            // }
            // catch(e)
            // {
            //     console.log(e.response)
            // }
        },
        async addCategory(category) {
            console.log("add category")
            console.log(category)
            try {
                const response = await axios.post(`/version/${this.version}/category`,
                    JSON.stringify({category, position: this.categories.length+1}),
                    {
                        headers: {
                            "Content-Type": "application/json"
                        }
                    }
                )
                console.log(response)
                this.categories.push(response.data)
                this.wantAddCategory = false
            }
            catch(e)
            {
                console.log(e.response)
            }
        },
        async closeModal() {
            this.isModalVisible = false
            this.selectedCategory = {}
        },
        async deleteCategory(category_id) {
            try {
                await this.closeModal()
                const response = await axios.delete(`/category/${category_id}`)
                this.categories = this.categories.filter(category => category.id != category_id)
                this.updateSequence()
            }
            catch(e)
            {
                console.log(e.response)
            }
        },
        async wantDelete(selectedCategory) {
            this.selectedCategory = selectedCategory
            this.isModalVisible = true
        },
    },
    created() {
        const categoriesObj = JSON.parse(this.categoryList)
        this.categories = categoriesObj
    }
}
</script>

<style>

</style>