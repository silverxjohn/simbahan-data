<template>
<tr>
    <td>{{ massSchedule.day }}</td>
    <td>{{ massSchedule.time_start }}</td>
    <td>{{ massSchedule.time_end }}</td>
    <td>{{ massSchedule.language }}</td>
    <td class="action">
        <action-button icon="search" :id="massSchedule.id" @action-clicked="OnViewActionClicked"></action-button>
        <action-button icon="edit" :id="massSchedule.id" @action-clicked="OnEditActionClicked"></action-button>
        <action-button icon="remove" :id="massSchedule.id" @action-clicked="OnRemoveActionClicked"></action-button>
    </td>
</tr>
</template>

<script>
export default {
    props: ['mass-schedule'],
    methods: {
        OnViewActionClicked(id) {
            this.$emit('view-action-clicked', id);
        },
        OnEditActionClicked(id) {
            this.$emit('edit-action-clicked', id);
        },
        OnRemoveActionClicked(id) {
            this.$emit('remove-action-clicked', id);
        }
    }
}
</script>