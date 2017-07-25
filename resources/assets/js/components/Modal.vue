<template>
<div :id="id" class="modal fade in">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">{{ title }}</h4>
            </div>
            <div class="modal-body">
                <slot></slot>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" v-if="!hasProcess" class="btn btn-primary" @click="OnSaveButtonClicked">Save changes</button>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: ['title', 'has-process'],
    data() {
        return {
            id() {
                return this.$el.id;
            }
        }
    },
    methods: {
        OnSaveButtonClicked() {
            this.$emit('on-save-button-clicked');
        }
    }
}
</script>