<template>
<schedule-field :schedule="bibleSchedule.Time" @schedule-updated="OnScheduleUpdated"></schedule-field>
</template>

<script>
import ScheduleField from './../../../components/ScheduleField.vue'

export default {
    props: ['bible-schedule'],
    methods: {
        CreateBibleSchedule(time) {
            axios.post(base_url + '/organizations/' + this.bibleSchedule.OrganizationID + '/bible-details', {
                time,
                schedule_id: this.bibleSchedule.ScheduleID,
                organization_id: this.bibleSchedule.OrganizationID,
                time_standard_id: this.bibleSchedule.TimeStandardID
            }).then(response => {
                this.$emit('bible-details-updated');
                alert('Bible Schedule has been created successfully!');
                //swal('Success!', 'Bible Schedule has been created successfully!', 'success');
            });
        },
        UpdateBibleSchedule(time) {
            axios.patch(base_url + '/organizations/' + this.bibleSchedule.OrganizationID + '/bible-details/' + this.bibleSchedule.OrgBibleScheduleID, {
                time
            }).then(response => {
                this.$emit('bible-details-updated');
                alert('Bible Schedule has been updated successfully!');
                //swal('Success!', 'Bible Schedule has been updated successfully!', 'success');
            });
        },
        DeleteBibleSchedule() {
            axios.delete(base_url + '/organizations/' + this.bibleSchedule.OrganizationID + '/bible-details/' + this.bibleSchedule.OrgBibleScheduleID)
                    .then(response => {
                        this.$emit('bible-details-updated');
                        alert('Bible Details deleted');
                    });
        },
        OnScheduleUpdated(time) {
            if (time == '') {
                var deleteConfirmed = confirm('Would you like to delete this schedule instead?');
                if (deleteConfirmed)
                    this.DeleteBibleSchedule();
                else
                    this.UpdateBibleSchedule();
            } else if (this.bibleSchedule.OrgBibleScheduleID != undefined || this.bibleSchedule.OrgBibleScheduleID != null)
                this.UpdateBibleSchedule(time);
            else
                this.CreateBibleSchedule(time);
        }
    },
    components: {
        ScheduleField
    }
}
</script>