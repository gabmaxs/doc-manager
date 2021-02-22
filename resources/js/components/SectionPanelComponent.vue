<template>
    <div>
        <draggable v-model="sections" @start="drag=true" @end="drag=false" @change="handleChange">
            <SectionComponent @delete="wantDelete" v-for="section in sections" :key="section.id" :section="section"></SectionComponent>
            <button slot="footer" v-if="!wantAddSection" @click="wantAddSection = true" class="btn-block d-flex justify-content-center align-items-center add-section">New Section<i class="fas fa-plus ml-3"></i></button>
        </draggable>
        <NewSectionComponent v-if="wantAddSection" @save="addSection" @cancel="wantAddSection = false"></NewSectionComponent>
        <ModalComponent @close="closeModal" @delete="deleteSection" :section="selectedSection" v-if="isModalVisible"></ModalComponent>
    </div>
</template>

<script>
import draggable from 'vuedraggable'
import SectionComponent from "./SectionComponent"
import NewSectionComponent from "./NewSectionComponent"
import ModalComponent from './ModalComponent'
import axios from 'axios'

export default {
    name: "sectionPanelComponent",
    components: {
        draggable, SectionComponent, NewSectionComponent, ModalComponent
    },
    props: ["sectionList", "page", "version"],
    data() {
        return {
            sections: [],
            wantAddSection: false,
            isModalVisible: false,
            selectedSection: {}
        }
    },
    methods: {
        handleChange() {
            this.updateSequence()
        },
        async updateSequence() {
            try {
                await axios.put(`/page/${this.page}/sections`,
                    JSON.stringify({sections: this.sections}),
                    {
                        headers: {
                            "Content-Type": "application/json"
                        }
                    }
                )
            }
            catch(e)
            {
                console.log(e.response)
            }
        },
        async addSection(section) {
            try {
                const response = await axios.post(`/version/${this.version}/page/${this.page}/section`,
                    JSON.stringify({section, position: this.sections.length+1}),
                    {
                        headers: {
                            "Content-Type": "application/json",
                        }
                    }
                )
                this.sections.push(response.data)
                this.wantAddSection = false
            }
            catch(e)
            {
                console.log(e.response)
            }
        },
        async wantDelete(selectedSection) {
            this.selectedSection = selectedSection
            this.isModalVisible = true
        },
        async deleteSection(section_id) {
            try {
                await this.closeModal()
                const response = await axios.delete(`/section/${section_id}`)
                this.sections = this.sections.filter(section => section.id != section_id)
                this.updateSequence()
            }
            catch(e)
            {
                console.log(e.response)
            }
        },
        async closeModal() {
            this.isModalVisible = false
            this.selectedSection = {}
        }
    },
    created() {
        const sectionsObj = JSON.parse(this.sectionList)
        this.sections = sectionsObj
    }
}
</script>

<style>

</style>