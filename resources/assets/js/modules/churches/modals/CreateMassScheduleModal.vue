<template>
<modal id="create-mass-schedule-modal" title="Create Mass Schedule" @on-save-button-clicked="OnSaveButtonClicked">
    <div class="form-group">
        <label>Day</label>
        <select v-model="day" class="form-control">
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
            <input type="time" class="form-control" v-model="time_start" />
        </div>
        <div class="col-md-6">
            <label>Time End</label>
            <input type="time" class="form-control" v-model="time_end" />
        </div>
    </div>

    <div class="form-group">
        <label>Language</label>
        <select v-model="language" class="form-control">
            <option value="English">English</option>
            <option value="Filipino">Filipino</option>
            <option value="Kapampangan">Kapampangan</option>
        </select>
    </div>
</modal>
</template>

<script>
export default {
    props: [],
    data() {
        return {
            day: '0',
            time_start: '',
            time_end: '',
            language: 'Filipino'
        }
    },
    methods: {
        OnSaveButtonClicked() {
            $("#create-mass-schedule-modal").modal('hide');

            this.$emit('mass-schedule-created', {
                day: this.day,
                time_start: this.time_start,
                time_end: this.time_end,
                language: this.language
            });

            this.day = '';
            this.time_start = '';
            this.time_end = '';
            this.language = '';
        }
    }
}
</script>