<template>
<div class="modal" ref="modal" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete item</h5>
        <button type="button" class="close" @click="closeModal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete {{item.title}}?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" @click="deleteItem" >Delete</button>
      </div>
    </div>
  </div>
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
            }
        },
        mounted() {
          this.modal = this.$refs.modal
          $(this.modal).modal('show')
        },
        beforeDestroy() {
          $(this.modal).modal('hide')
        }
    }

</script>