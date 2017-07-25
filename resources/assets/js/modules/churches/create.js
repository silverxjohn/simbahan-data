import CreateMassScheduleModal from './modals/CreateMassScheduleModal.vue';
import ViewMassScheduleModal from './modals/ViewMassScheduleModal.vue';
import EditMassScheduleModal from './modals/EditMassScheduleModal.vue';
import RemoveMassScheduleModal from './modals/RemoveMassScheduleModal.vue';
import MassScheduleRow from './rows/MassScheduleRow.vue';

const app = new Vue({
    el: '#app',
    data: {
        parish: '',
        streetNumber: '',
        streetName: '',
        city: '',
        state: '',
        location: '',
        diocese: '',
        priest: '',
        vicariate: '',
        dateEstablished: '',
        feastDay: '',
        contact: '',
        website: '',
        email: '',
        devotion: '',
        officeHours: '',
        latitude: '',
        longitude: '',
        churchHistory: '',
        massSchedules: [],
        massScheduleModal: {
            view: {
                id: 0,
                day: 'Sunday',
                time_start: '',
                time_end: '',
                language: 'English'
            },
            edit: {
                id: 0,
                day: 'Sunday',
                time_start: '',
                time_end: '',
                language: 'English'
            },
            remove: {
                id: 0,
                day: 'Sunday',
                time_start: '',
                time_end: '',
                language: 'English'
            }
        }
    },
    methods: {
        FindMassSchedule(id) {
            return this.massSchedules.find((schedule, massId) => {
                return id == massId;
            });
        },
        OnAddMassScheduleClicked() {
            $("#create-mass-schedule-modal").modal('show');
        },
        OnMassScheduleCreated(massSchedule) {
            massSchedule.id = this.massSchedules.length;

            this.massSchedules.push(massSchedule);
        },
        OnMassScheduleUpdated(massSchedule) {

        },
        OnMassScheduleDeleted(massSchedule) {
            this.massSchedules.splice(massSchedule.id, 1);
        },
        OnViewActionClicked(id) {
            this.massScheduleModal.view = Object.assign({}, this.FindMassSchedule(id));

            $("#view-mass-schedule-modal").modal('show');
        },
        OnEditActionClicked(id) {
            this.massScheduleModal.edit = this.FindMassSchedule(id);

            $("#edit-mass-schedule-modal").modal('show');
        },
        OnRemoveActionClicked(id) {
            this.massScheduleModal.remove = Object.assign({}, this.FindMassSchedule(id));

            $("#remove-mass-schedule-modal").modal('show');
        }
    },
    components: {
        CreateMassScheduleModal,
        ViewMassScheduleModal,
        EditMassScheduleModal,
        RemoveMassScheduleModal,
        MassScheduleRow
    }
});