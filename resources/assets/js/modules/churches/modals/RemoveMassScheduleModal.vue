<template>
<modal id="remove-mass-schedule-modal" title="Delete Mass Schedule" @on-save-button-clicked="OnRemoveButtonClicked">
    <p class="lead">Are you sure you want to delete this mass schedule?</p>
</modal>
</template>

<script>
export default {
    props: ['mass-schedule'],
    methods: {
        OnRemoveButtonClicked() {
            $("#remove-mass-schedule-modal").modal('hide');

            this.$emit('mass-schedule-deleted', this.massSchedule);
        }
    }
}
</script>