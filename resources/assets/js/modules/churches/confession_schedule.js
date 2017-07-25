import ChurchFinder from './../../components/ChurchFinder.vue'
import ConfessionScheduleField from './schedules/ConfessionScheduleField.vue'

const app = new Vue({
    el: '#app',
    data: {
        simbahan: {
            Parish: ''
        },
        confessionDetails: []
    },
    methods: {
        OnChurchFound(simbahan) {
            this.simbahan = simbahan;
            this.GetConfessionDetails(simbahan.SimbahanID);
        },
        GetConfessionDetails(simbahanId) {
            this.confessionDetails = [];
            axios.get(base_url + '/churches/' + simbahanId + '/confession-details')
                .then(response => {
                    this.confessionDetails = response.data;
                });
        },
        OnConfessionDetailsUpdated() {
            this.GetConfessionDetails(this.simbahan.SimbahanID);
        }
    },
    components: {
        ChurchFinder,
        ConfessionScheduleField
    }
});