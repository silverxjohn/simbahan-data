<template>
<modal id="view-announcement-modal" title="View Announcement" :has-process="true">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" v-model="announcement.TitleContent" disabled />
    </div>

    <div class="form-group">
        <label>Venue</label>
        <input type="text" class="form-control" v-model="announcement.Address" disabled />
    </div>

    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" v-model="announcement.AnnouncementDesc" disabled />
    </div>

    <div class="form-group">
        <label>Start At</label>
        <input type="text" class="form-control" v-model="start" disabled />
    </div>

    <div class="form-group">
        <label>End At</label>
        <input type="text" class="form-control" v-model="end" disabled />
    </div>
</modal>
</template>

<script>
export default {
    props: ['announcement'],
    computed: {
        start() {
            return this.announcement.StartDate + ' - ' + this.announcement.StartTime;
        },
        end() {
            return this.announcement.EndDate + ' - ' + this.announcement.EndTime;
        }
    }
}
</script>