<template>
<tr>
    <td>{{ announcement.AnnouncementID }}</td>
    <td>{{ announcement.TitleContent }}</td>
    <td>{{ announcement.Address }}</td>
    <td>{{ duration }}</td>
    <td class="action">
        <action-button icon="search" :id="announcement.AnnouncementID" @action-clicked="OnViewButtonClicked"></action-button>
        <action-button icon="edit" :id="announcement.AnnouncementID" @action-clicked="OnEditButtonClicked"></action-button>
        <action-button icon="remove" :id="announcement.AnnouncementID" @action-clicked="OnRemoveButtonClicked"></action-button>
    </td>
</tr>
</template>

<script>
export default {
    props: ['announcement'],
    computed: {
        duration() {
            var from = this.announcement.StartDate + ' ' + this.announcement.StartTime;
            var to = this.announcement.EndDate + ' ' + this.announcement.EndTime;

            return from + ' - ' + to;
        }
    },
    methods: {
        OnViewButtonClicked(id) {
            this.$emit('view-action-clicked', id);
        },
        OnEditButtonClicked(id) {
            this.$emit('edit-action-clicked', id);
        },
        OnRemoveButtonClicked(id) {
            this.$emit('remove-action-clicked', id);
        }
    }
}
</script>