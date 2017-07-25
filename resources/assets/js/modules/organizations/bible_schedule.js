import OrganizationFinder from './../../components/OrganizationFinder.vue'
import BibleScheduleField from './schedules/BibleScheduleField.vue'

const app = new Vue({
    el: '#app',
    data: {
        organization: {
            OrganizationName: ''
        },
        bibleDetails: []
    },
    methods: {
        OnOrganizationFound(organization) {
            this.organization = organization;
            this.GetBibleDetails(organization.OrganizationID);
        },
        GetBibleDetails(organizationId) {
            this.bibleDetails = [];
            axios.get(base_url + '/organizations/' + organizationId + '/bible-details')
                .then(response => {
                    this.bibleDetails = response.data;
                });
        },
        OnBibleDetailsUpdated() {
            this.GetBibleDetails(this.organization.OrganizationID);
        }
    },
    components: {
        OrganizationFinder,
        BibleScheduleField
    }
});