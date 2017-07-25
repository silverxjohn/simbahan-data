@extends('layouts.master')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Organization</a></li>
    <li class="active">Worship Schedules</li>
@endsection

@section('content')
    <box title="Worship Schedule">
        <organization-finder @organization-found="OnOrganizationFound"></organization-finder>
        <hr/>
        <div v-if="organization.OrganizationName != ''">
            <h3>@{{ organization.OrganizationName }}</h3>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr>
                        <td style="width: 12.5%;">Time</td>
                        <td style="width: 12.5%;">Sunday</td>
                        <td style="width: 12.5%;">Monday</td>
                        <td style="width: 12.5%;">Tuesday</td>
                        <td style="width: 12.5%;">Wednesday</td>
                        <td style="width: 12.5%;">Thursday</td>
                        <td style="width: 12.5%;">Friday</td>
                        <td style="width: 12.5%;">Saturday</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="worship in worshipDetails">
                        <td>@{{ worship.Time }}</td>
                        <td v-for="schedule in worship.Schedule">
                            <worship-schedule-field :worship-schedule="schedule" @worship-details-updated="OnWorshipDetailsUpdated"></worship-schedule-field>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </box>
@endsection

@section('scripts')
    <script src="{{ asset('js/organization_worship_schedule.js') }}"></script>
@endsection