@extends('layouts.master')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Organization</a></li>
    <li class="active">Announcements</li>
@endsection

@section('modals')
    <create-announcement-modal :organization-id="organization.OrganizationID" @announcement-updated="OnAnnouncementUpdated"></create-announcement-modal>
    <view-announcement-modal :announcement="modals.view"></view-announcement-modal>
    <edit-announcement-modal :announcement="modals.edit" @announcement-updated="OnAnnouncementUpdated"></edit-announcement-modal>
    <remove-announcement-modal :announcement="modals.remove" @announcement-updated="OnAnnouncementUpdated"></remove-announcement-modal>
@endsection

@section('content')
    <box title="Organization Announcements">
        <organization-finder @organization-found="OnOrganizationFound"></organization-finder>
        <hr/>
        <div v-if="organization.OrganizationName != ''">
            <h3>@{{ organization.OrganizationName }}</h3>
            <br/>
            <br/>
            <button class="btn btn-primary" @click.prevent="OnBtnCreateNewAnnouncementClicked">Create New Announcement</button>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Announcement</td>
                        <td>Venue</td>
                        <td>Duration</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-if="IsAnnouncementEmpty">
                        <td colspan="5" class="text-danger"><center>No Records Found</center></td>
                    </tr>
                    <tr is="announcement-row"
                        v-else
                        v-for="announcement in announcements"
                        :announcement="announcement"
                        @view-action-clicked="OnViewActionClicked"
                        @edit-action-clicked="OnEditActionClicked"
                        @remove-action-clicked="OnRemoveActionClicked">
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </box>
@endsection

@section('scripts')
    <script src="{{ asset('js/organization_announcement.js') }}"></script>
@endsection