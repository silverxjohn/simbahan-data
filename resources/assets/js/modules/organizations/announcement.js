import AnnouncementRow from './rows/AnnouncementRow.vue'
import CreateAnnouncementModal from './modals/CreateAnnouncementModal.vue'
import ViewAnnouncementModal from './modals/ViewAnnouncementModal.vue'
import EditAnnouncementModal from './modals/EditAnnouncementModal.vue'
import RemoveAnnouncementModal from './modals/RemoveAnnouncementModal.vue'
import OrganizationFinder from './../../components/OrganizationFinder.vue'

const app = new Vue({
    el: '#app',
    data: {
        organization: {
            OrganizationName: ''
        },
        announcements: [],
        modals: {
            view: {},
            edit: {},
            remove: {}
        }
    },
    computed: {
        IsAnnouncementEmpty() {
            return this.announcements.length == 0;
        }
    },
    methods: {
        OnOrganizationFound(organization) {
            this.organization = organization;
            this.GetAnnouncements(organization.OrganizationID);
        },
        GetAnnouncements(organizationId) {
            axios.get(base_url + '/organizations/' + organizationId + '/announcements')
                .then(response => {
                    this.announcements = response.data;
                });
        },
        FindAnnouncement(id) {
            return this.announcements.find(announcement => {
                return announcement.AnnouncementID == id;
            });
        },
        OnAnnouncementUpdated() {
            this.GetAnnouncements(this.organization.OrganizationID);
        },
        OnBtnCreateNewAnnouncementClicked() {
            $("#create-announcement-modal").modal('show');
        },
        OnViewActionClicked(id) {
            this.modals.view = Object.assign({}, this.FindAnnouncement(id));

            $("#view-announcement-modal").modal('show');
        },
        OnEditActionClicked(id) {
            this.modals.edit = Object.assign({}, this.FindAnnouncement(id));

            $("#edit-announcement-modal").modal('show');
        },
        OnRemoveActionClicked(id) {
            this.modals.remove = Object.assign({}, this.FindAnnouncement(id));

            $("#remove-announcement-modal").modal('show');
        }
    },
    components: {
        AnnouncementRow,
        CreateAnnouncementModal,
        ViewAnnouncementModal,
        EditAnnouncementModal,
        RemoveAnnouncementModal,
        OrganizationFinder
    }
});