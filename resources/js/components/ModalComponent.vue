<template>
<div class="modal" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Section</h5>
        <button type="button" class="close" @click="closeModal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete {{section.title}}?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" @click="deleteSection" >Delete</button>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import $ from 'jquery'

export default {
        name: "ModalComponent",
        props: ["section"],
        data() {
            return {

            }
        },
        methods: {
            closeModal() {
                $('#deleteModal').modal('hide')
            },
            deleteSection() {
                console.log(this.section.id)
            }
        }
    }

</script>