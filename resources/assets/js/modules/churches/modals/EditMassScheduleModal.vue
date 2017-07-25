<template>
<modal id="edit-mass-schedule-modal" title="Edit Mass Schedule" @on-save-button-clicked="OnSaveButtonClicked">
    <div class="form-group">
        <label>Day</label>
        <select v-model="massSchedule.day" class="form-control">
            <option value="0">- SELECT DAY -</option>
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
        </select>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label>Time Start</label>
            <input type="time" class="form-control" v-model="massSchedule.time_start" />
        </div>
        <div class="col-md-6">
            <label>Time End</label>
            <input type="time" class="form-control" v-model="massSchedule.time_end" />
        </div>
    </div>

    <div class="form-group">
        <label>Language</label>
        <select v-model="massSchedule.language" class="form-control">
            <option value="English">English</option>
            <option value="Filipino">Filipino</option>
            <option value="Kapampangan">Kapampangan</option>
        </select>
    </div>
</modal>
</template>

<script>
export default {
    props: ['mass-schedule'],
    methods: {
        OnSaveButtonClicked() {
            $("#edit-mass-schedule-modal").modal('hide');

            this.$emit('mass-schedule-updated', {
                day: this.massSchedule.day,
                time_start: this.massSchedule.time_start,
                time_end: this.massSchedule.time_end,
                language: this.massSchedule.language
            });

            this.massSchedule.day = '';
            this.massSchedule.time_start = '';
            this.massSchedule.time_end = '';
            this.massSchedule.language = '';
        }
    }
}
</script>