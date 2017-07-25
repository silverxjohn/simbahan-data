import ChurchFinder from './../../components/ChurchFinder.vue'
import MassScheduleField from './schedules/MassScheduleField.vue'

const app = new Vue({
    el: '#app',
    data: {
        simbahan: {
            Parish: ''
        },
        massDetails: []
    },
    methods: {
        OnChurchFound(simbahan) {
            this.simbahan = simbahan;
            this.GetMassDetails(simbahan.SimbahanID);
        },
        GetMassDetails(simbahanId) {
            this.massDetails = [];
            axios.get(base_url + '/churches/' + simbahanId + '/mass-details')
                .then(response => {
                    this.massDetails = response.data;
                });
        },
        OnMassDetailsUpdated() {
            this.GetMassDetails(this.simbahan.SimbahanID);
        }
    },
    components: {
        ChurchFinder,
        MassScheduleField
    }
});