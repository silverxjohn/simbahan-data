<template>
<schedule-field :schedule="worshipSchedule.Time" @schedule-updated="OnScheduleUpdated"></schedule-field>
</template>

<script>
import ScheduleField from './../../../components/ScheduleField.vue'

export default {
    props: ['worship-schedule'],
    methods: {
        CreateWorshipSchedule(time) {
            axios.post(base_url + '/organizations/' + this.worshipSchedule.OrganizationID + '/worship-details', {
                time,
                schedule_id: this.worshipSchedule.ScheduleID,
                organization_id: this.worshipSchedule.OrganizationID,
                time_standard_id: this.worshipSchedule.TimeStandardID
            }).then(response => {
                this.$emit('worship-details-updated');
                alert('Worship Schedule has been created successfully!');
                //swal('Success!', 'Worship Schedule has been created successfully!', 'success');
            });
        },
        UpdateWorshipSchedule(time) {
            axios.patch(base_url + '/organizations/' + this.worshipSchedule.OrganizationID + '/worship-details/' + this.worshipSchedule.OrgWorshipScheduleID, {
                time
            }).then(response => {
                this.$emit('worship-details-updated');
                alert('Worship Schedule has been updated successfully!');
                //swal('Success!', 'Worship Schedule has been updated successfully!', 'success');
            });
        },
        DeleteWorshipSchedule() {
            axios.delete(base_url + '/organizations/' + this.worshipSchedule.OrganizationID + '/worship-details/' + this.worshipSchedule.OrgWorshipScheduleID)
                    .then(response => {
                        this.$emit('worship-details-updated');
                        alert('Worship Details deleted');
                    });
        },
        OnScheduleUpdated(time) {
            if (time == '') {
                var deleteConfirmed = confirm('Would you like to delete this schedule instead?');
                if (deleteConfirmed)
                    this.DeleteWorshipSchedule();
                else
                    this.UpdateWorshipSchedule();
            } else if (this.worshipSchedule.OrgWorshipScheduleID != undefined || this.worshipSchedule.OrgWorshipScheduleID != null)
                this.UpdateWorshipSchedule(time);
            else
                this.CreateWorshipSchedule(time);
        }
    },
    components: {
        ScheduleField
    }
}
</script>