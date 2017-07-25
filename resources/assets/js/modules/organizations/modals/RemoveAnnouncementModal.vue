<template>
<modal id="remove-announcement-modal" title="Delete Announcement" @on-save-button-clicked="OnSaveButtonClicked">
    <p class="lead">Do you want to delete this announcement?</p>
</modal>
</template>

<script>
export default {
    props: ['announcement'],
    methods: {
        OnSaveButtonClicked() {
            axios.delete(base_url + '/organizations/' + this.announcement.OrganizationID + '/announcements/' + this.announcement.AnnouncementID)
                .then(response => {
                    this.$emit('announcement-updated');

                    $("#remove-announcement-modal").modal('hide');
                })
        }
    }
}
</script>