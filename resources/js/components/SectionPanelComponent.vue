<template>
    <draggable v-model="sections" @start="drag=true" @end="drag=false" @change="handleChange">
        <transition-group>
            <SectionComponent v-for="section in sections" :key="section.id" :section="section"></SectionComponent>
        </transition-group>
    </draggable>
</template>

<script>
import draggable from 'vuedraggable'
import SectionComponent from "./SectionComponent.vue"
import axios from 'axios'

export default {
    name: "sectionPanelComponent",
    components: {
        draggable, SectionComponent
    },
    props: ["sectionList", "page"],
    data() {
        return {
            sections: [],
        }
    },
    methods: {
        handleChange(event) {
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