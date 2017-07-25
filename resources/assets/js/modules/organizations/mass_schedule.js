import OrganizationFinder from './../../components/OrganizationFinder.vue'
import MassScheduleField from './schedules/MassScheduleField.vue'

const app = new Vue({
    el: '#app',
    data: {
        organization: {
            OrganizationName: ''
        },
        massDetails: []
    },
    methods: {
        OnOrganizationFound(organization) {
            this.organization = organization;
            this.GetMassDetails(organization.OrganizationID);
        },
        GetMassDetails(organizationId) {
            this.massDetails = [];
            axios.get(base_url + '/organizations/' + organizationId + '/mass-details')
                .then(response => {
                    this.massDetails = response.data;
                });
        },
        OnMassDetailsUpdated() {
            this.GetMassDetails(this.organization.OrganizationID);
        }
    },
    components: {
        OrganizationFinder,
        MassScheduleField
    }
});