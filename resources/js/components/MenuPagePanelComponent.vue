<template>
    <ul class="collapse list-unstyled" :id="collapseId">
        <draggable v-model="pages" @start="drag=true" @end="drag=false" @change="handleChange">
            <MenuPageComponent v-for="page in pages" :key="page.id" :page="page"></MenuPageComponent>
        </draggable>
        <li class="nav-item">
            <a href="#" class="btn btn-light btn-sm"><i class="fas fa-plus"></i> New Page</a>
        </li>
        <!-- <NewSectionComponent v-if="wantAddCategory" @save="addSection" @cancel="wantAddCategory = false"></NewSectionComponent> -->
        <!-- <ModalComponent @close="closeModal" @delete="deleteSection" :section="selectedCategory" v-if="isModalVisible"></ModalComponent> -->
    </ul>
</template>

<script>
import draggable from 'vuedraggable'
import MenuPageComponent from "./MenuPageComponent"
import axios from 'axios'

export default {
    name: "MenuPagePanelComponent",
    props: ["categoryId", "collapseId"],
    component: {
        MenuPageComponent, draggable
    },
    data() {
        return {
            pages: [],
            wantAddPage: false,
            isModalVisible: false,
            selectedPage: {}
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
        async getPages(categoryId) {
            try {
                const response = await axios.get(`/category/${categoryId}/page`,
                    {
                        headers: {
                            "Content-Type": "application/json"
                        }
                    }
                )
                this.pages = response.data
            }
            catch(e)
            {
                console.log(e.response)
            }
        }
    },
    created() {
        this.getPages(this.categoryId)
    }
}
</script>

<style>

</style>