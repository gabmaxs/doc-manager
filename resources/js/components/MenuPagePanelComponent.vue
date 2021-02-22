<template>
    <ul class="collapse list-unstyled" :id="collapseId">
        <draggable v-model="pages" @start="drag=true" @end="drag=false" @change="handleChange">
            <MenuPageComponent v-for="page in pages" @delete="wantDelete" :key="page.id" :page="page"></MenuPageComponent>
        </draggable>
        <li v-if="!wantAddPage" class="nav-item">
            <a @click="wantAddPage = true" class="btn btn-light btn-sm"><i class="fas fa-plus"></i> New Page</a>
        </li>
        <NewPageComponent v-if="wantAddPage" @save="addPage" @cancel="wantAddPage = false" ></NewPageComponent>
        <ModalComponent @close="closeModal" @delete="deletePage" :item="selectedPage" v-if="isModalVisible"></ModalComponent>
    </ul>
</template>

<script>
import draggable from 'vuedraggable'
import MenuPageComponent from "./MenuPageComponent"
import NewPageComponent from "./NewPageComponent"
import axios from 'axios'

export default {
    name: "MenuPagePanelComponent",
    props: ["categoryId", "collapseId","version"],
    component: {
        MenuPageComponent, draggable, NewPageComponent
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
            try {
                const resp = await axios.put(`/category/${this.categoryId}/pages`,
                    JSON.stringify({pages: this.pages}),
                    {
                        headers: {
                            "Content-Type": "application/json"
                        }
                    }
                )
                console.log(resp)
            }
            catch(e)
            {
                console.log(e.response)
            }
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
        },
        async addPage(page) {
            try {
                const response = await axios.post(`/version/${this.version}/category/${this.categoryId}/page/`,
                    JSON.stringify({page, position: this.pages.length+1}),
                    {
                        headers: {
                            "Content-Type": "application/json",
                        }
                    }
                )
                this.pages.push(response.data)
                this.wantAddPage = false
            }
            catch(e)
            {
                console.log(e.response)
            }
        },
        async wantDelete(selectedPage) {
            this.selectedPage = selectedPage
            this.isModalVisible = true
        },
        async deletePage(page_id) {
            try {
                await this.closeModal()
                const response = await axios.delete(`/page/${page_id}`)
                this.pages = this.pages.filter(page => page.id != page_id)
                this.updateSequence()
            }
            catch(e)
            {
                console.log(e.response)
            }
        },
        async closeModal() {
            this.isModalVisible = false
            this.selectedPage = {}
        }
    },
    created() {
        this.getPages(this.categoryId)
    }
}
</script>

<style>

</style>