<template>
<modal id="edit-announcement-modal" title="Edit Announcement" @on-save-button-clicked="OnSaveButtonClicked">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" v-model="announcement.TitleContent" />
    </div>

    <div class="form-group">
        <label>Venue</label>
        <input type="text" class="form-control" v-model="announcement.Address" />
    </div>

    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" v-model="announcement.AnnouncementDesc" />
    </div>

    <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" @change="OnFileChanged" />
    </div>

    <div class="row">
        <div class="col-md-6">
            <label>Start Date</label>
            <input type="date" class="form-control" v-model="announcement.StartDate" />
        </div>
        <div class="col-md-6">
            <label>Start Time</label>
            <input type="text" class="form-control" v-model="announcement.StartTime" />
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label>End Date</label>
            <input type="date" class="form-control" v-model="announcement.EndDate" />
        </div>
        <div class="col-md-6">
            <label>End Time</label>
            <input type="text" class="form-control" v-model="announcement.EndTime" />
        </div>
    </div>
</modal>
</template>

<script>
export default {
    props: ['announcement'],
    methods: {
        OnSaveButtonClicked() {
            axios.patch(base_url + '/organizations/' + this.announcement.OrganizationID + '/announcements/' + this.announcement.AnnouncementID, {
                title: this.announcement.TitleContent,
                description: this.announcement.AnnouncementDesc,
                address: this.announcement.Address,
                image: this.announcement.ImagePath,
                start_date: this.announcement.StartDate,
                start_time: this.announcement.StartTime,
                end_date: this.announcement.EndDate,
                end_time: this.announcement.EndTime
            }).then(response => {
                this.$emit('announcement-updated');

                $("#edit-announcement-modal").modal('hide');
            });
        },
        OnFileChanged(e) {
            var files = e.target.files || e.dataTransfer.files;
            this.announcement.ImagePath = files[0]['name'];
        }
    }
}
</script>