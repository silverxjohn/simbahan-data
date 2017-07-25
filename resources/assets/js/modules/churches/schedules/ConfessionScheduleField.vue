<template>
<schedule-field :schedule="confessionSchedule.Time" @schedule-updated="OnScheduleUpdated"></schedule-field>
</template>

<script>
import ScheduleField from './../../../components/ScheduleField.vue'

export default {
    props: ['confession-schedule'],
    methods: {
        CreateConfessionSchedule(time) {
            axios.post(base_url + '/churches/' + this.confessionSchedule.SimbahanID + '/confession-details', {
                time,
                schedule_id: this.confessionSchedule.ScheduleID,
                simbahan_id: this.confessionSchedule.SimbahanID,
                time_standard_id: this.confessionSchedule.TimeStandardID
            }).then(response => {
                this.$emit('confession-details-updated');
                alert('Confession Schedule has been created successfully!');
                //swal('Success!', 'Confession Schedule has been created successfully!', 'success');
            });
        },
        UpdateConfessionSchedule(time) {
            axios.patch(base_url + '/churches/' + this.confessionSchedule.SimbahanID + '/confession-details/' + this.confessionSchedule.ConfessionID, {
                time: time,
            }).then(response => {
                this.$emit('confession-details-updated');
                alert('Confession Schedule has been updated successfully!');
                //swal('Success!', 'Confession Schedule has been updated successfully!', 'success');
            });
        },
        DeleteConfessionSchedule() {
            axios.delete(base_url + '/churches/' + this.confessionSchedule.SimbahanID + '/confession-details/' + this.confessionSchedule.ConfessionID)
                    .then(response => {
                        this.$emit('confession-details-updated');
                        alert('Confession Details deleted');
                    });
        },
        OnScheduleUpdated(time) {
            if (time == '') {
                var deleteConfirmed = confirm('Would you like to delete this schedule instead?');
                if (deleteConfirmed)
                    this.DeleteConfessionSchedule();
                else
                    this.UpdateConfessionSchedule();
            } else if (this.confessionSchedule.ConfessionID != undefined || this.confessionSchedule.ConfessionID != null)
                this.UpdateConfessionSchedule(time);
            else
                this.CreateConfessionSchedule(time);
        }
    },
    components: {
        ScheduleField
    }
}
</script>