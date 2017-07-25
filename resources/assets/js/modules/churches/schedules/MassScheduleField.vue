<template>
<schedule-field :schedule="massSchedule.Time" @schedule-updated="OnScheduleUpdated"></schedule-field>
</template>

<script>
import ScheduleField from './../../../components/ScheduleField.vue'

export default {
    props: ['mass-schedule'],
    methods: {
        CreateMassSchedule(time) {
            axios.post(base_url + '/churches/' + this.massSchedule.SimbahanID + '/mass-details', {
                time: time,
                schedule_id: this.massSchedule.ScheduleID,
                language: this.massSchedule.Language,
                simbahan_id: this.massSchedule.SimbahanID,
                time_standard_id: this.massSchedule.TimeStandardID
            }).then(response => {
                this.$emit('mass-details-updated');
                alert('Mass Schedule has been created successfully!');
                //swal('Success!', 'Mass Schedule has been created successfully!', 'success');
            });
        },
        UpdateMassSchedule(time) {
            axios.patch(base_url + '/churches/' + this.massSchedule.SimbahanID + '/mass-details/' + this.massSchedule.MassDetailID, {
                time: time,
                language: this.massSchedule.Language
            }).then(response => {
                this.$emit('mass-details-updated');
                alert('Mass Schedule has been updated successfully!');
                //swal('Success!', 'Mass Schedule has been updated successfully!', 'success');
            });
        },
        DeleteMassSchedule() {
            axios.delete(base_url + '/churches/' + this.massSchedule.SimbahanID + '/mass-details/' + this.massSchedule.MassDetailID)
                    .then(response => {
                        this.$emit('mass-details-updated');
                        alert('Mass Details deleted');
                    });
        },
        OnScheduleUpdated(time) {
            if (time == '') {
                var deleteConfirmed = confirm('Would you like to delete this schedule instead?');
                if (deleteConfirmed)
                    this.DeleteMassSchedule();
                else
                    this.UpdateMassSchedule();
            } else if (this.massSchedule.MassDetailID != undefined || this.massSchedule.MassDetailID != null)
                this.UpdateMassSchedule(time);
            else
                this.CreateMassSchedule(time);
        }
    },
    components: {
        ScheduleField
    }
}
</script>