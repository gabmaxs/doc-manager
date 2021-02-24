<template>
  <div>
    
  </div>
</template>
<script>
import $ from 'jquery'

export default {
        name: "ModalComponent",
        props: ["item"],
        data() {
          return {
            modal: null
          }
        },
        methods: {
          closeModal() {
            this.$emit("close", true)
          },
          deleteItem() {
            this.$emit("delete", this.item.id)
          },
          setup() {
            this.modal = document.getElementById('deleteModal')
            const modal = $(this.modal)
            modal.modal('show')
            modal.find('#modalCloseButton').bind("click",  this.closeModal)
            modal.find('#modalCloseHeaderButton').bind("click",  this.closeModal)
            modal.find('#modalDeleteButton').bind("click",  this.deleteItem)
            modal.find('#modalContent').text(`Are you sure you want to delete ${this.item.name}?`)
          }
        },
        mounted() {
          this.setup()
        },
        beforeDestroy() {
          $(this.modal).modal('hide')
        }
    }

</script>