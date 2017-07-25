<template>
<modal id="view-mass-schedule-modal" title="View Mass Schedule" :has-process="true">
    <div class="form-group">
        <label>Day</label>
        <select v-model="massSchedule.day" class="form-control" disabled>
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
            <input type="time" class="form-control" v-model="massSchedule.time_start" disabled />
        </div>
        <div class="col-md-6">
            <label>Time End</label>
            <input type="time" class="form-control" v-model="massSchedule.time_end" disabled />
        </div>
    </div>

    <div class="form-group">
        <label>Language</label>
        <select v-model="massSchedule.language" class="form-control" disabled>
            <option value="English">English</option>
            <option value="Filipino">Filipino</option>
            <option value="Kapampangan">Kapampangan</option>
        </select>
    </div>
</modal>
</template>

<script>
export default {
    props: ['mass-schedule']
}
</script>