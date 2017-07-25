<template>
<schedule-field :schedule="massSchedule.Time" @schedule-updated="OnScheduleUpdated"></schedule-field>
</template>

<script>
import ScheduleField from './../../../components/ScheduleField.vue'

export default {
    props: ['mass-schedule'],
    methods: {
        CreateMassSchedule(time) {
            axios.post(base_url + '/organizations/' + this.massSchedule.OrganizationID + '/mass-details', {
                time,
                schedule_id: this.massSchedule.ScheduleID,
                organization_id: this.massSchedule.OrganizationID,
                time_standard_id: this.massSchedule.TimeStandardID
            }).then(response => {
                this.$emit('mass-details-updated');
                alert('Mass Schedule has been created successfully!');
                //swal('Success!', 'Mass Schedule has been created successfully!', 'success');
            });
        },
        UpdateMassSchedule(time) {
            axios.patch(base_url + '/organizations/' + this.massSchedule.OrganizationID + '/mass-details/' + this.massSchedule.OrgMassID, {
                time
            }).then(response => {
                this.$emit('mass-details-updated');
                alert('Mass Schedule has been updated successfully!');
                //swal('Success!', 'Mass Schedule has been updated successfully!', 'success');
            });
        },
        DeleteMassSchedule() {
            axios.delete(base_url + '/organizations/' + this.massSchedule.OrganizationID + '/mass-details/' + this.massSchedule.OrgMassID)
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
            } else if (this.massSchedule.OrgMassID != undefined || this.massSchedule.OrgMassID != null)
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