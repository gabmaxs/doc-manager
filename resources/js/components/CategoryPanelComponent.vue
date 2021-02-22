<template>
    <div>
        <draggable v-model="categories" @start="drag=true" @end="drag=false" @change="handleChange">
            <CategoryComponent v-for="category in categories" :key="category.id" :category="category"></CategoryComponent>
        </draggable>
        <slot></slot>
        <!-- <NewSectionComponent v-if="wantAddCategory" @save="addSection" @cancel="wantAddCategory = false"></NewSectionComponent> -->
        <!-- <ModalComponent @close="closeModal" @delete="deleteSection" :section="selectedCategory" v-if="isModalVisible"></ModalComponent> -->
    </div>
</template>

<script>
import draggable from 'vuedraggable'
import CategoryComponent from "./CategoryComponent"
import ModalComponent from './ModalComponent'
import axios from 'axios'

export default {
    name: "CategoryPanelComponent",
    components: {
        draggable, CategoryComponent, ModalComponent
    },
    props: ["categoryList"],
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
    },
    created() {
        const categoriesObj = JSON.parse(this.categoryList)
        this.categories = categoriesObj
    }
}
</script>

<style>

</style>