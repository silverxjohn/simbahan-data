<template>
<modal id="create-announcement-modal" title="Create Announcement" @on-save-button-clicked="OnSaveButtonClicked">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" v-model="TitleContent" />
    </div>

    <div class="form-group">
        <label>Venue</label>
        <input type="text" class="form-control" v-model="Address" />
    </div>

    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" v-model="AnnouncementDesc" />
    </div>

    <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" @change="OnFileChanged" />
    </div>

    <div class="row">
        <div class="col-md-6">
            <label>Start Date</label>
            <input type="date" class="form-control" v-model="StartDate" />
        </div>
        <div class="col-md-6">
            <label>Start Time</label>
            <input type="text" class="form-control" v-model="StartTime" />
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label>End Date</label>
            <input type="date" class="form-control" v-model="EndDate" />
        </div>
        <div class="col-md-6">
            <label>End Time</label>
            <input type="text" class="form-control" v-model="EndTime" />
        </div>
    </div>
</modal>
</template>

<script>
export default {
    props: ['organization-id'],
    data() {
        return {
            TitleContent: '',
            Address: '',
            AnnouncementDesc: '',
            ImagePath: '',
            StartDate: '',
            StartTime: '',
            EndDate: '',
            EndTime: ''
        }
    },
    methods: {
        OnSaveButtonClicked() {
            axios.post(base_url + '/organizations/' + this.organizationId + '/announcements', {
                organization_id: this.organizationId,
                title: this.TitleContent,
                address: this.Address,
                description: this.AnnouncementDesc,
                start_date: this.StartDate,
                start_time: this.StartTime,
                end_date: this.EndDate,
                end_time: this.EndTime,
                image: this.ImagePath
            }).then(response => {
                this.$emit('announcement-updated');

                $("#create-announcement-modal").modal('hide');

                this.TitleContent = '';
                this.Address = '';
                this.AnnouncementDesc = '';
                this.StartDate = '';
                this.StartTime = '';
                this.EndDate = '';
                this.EndTime = '';
            });
        },
        OnFileChanged(e) {
            var files = e.target.files || e.dataTransfer.files;
            this.ImagePath = files[0]['name'];
        }
    }
}
</script>