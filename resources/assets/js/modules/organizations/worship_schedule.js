import OrganizationFinder from './../../components/OrganizationFinder.vue'
import WorshipScheduleField from './schedules/WorshipScheduleField.vue'

const app = new Vue({
    el: '#app',
    data: {
        organization: {
            OrganizationName: ''
        },
        worshipDetails: []
    },
    methods: {
        OnOrganizationFound(organization) {
            this.organization = organization;
            this.GetWorshipDetails(organization.OrganizationID);
        },
        GetWorshipDetails(organizationId) {
            this.worshipDetails = [];
            axios.get(base_url + '/organizations/' + organizationId + '/worship-details')
                .then(response => {
                    this.worshipDetails = response.data;
                });
        },
        OnWorshipDetailsUpdated() {
            this.GetWorshipDetails(this.organization.OrganizationID);
        }
    },
    components: {
        OrganizationFinder,
        WorshipScheduleField
    }
});