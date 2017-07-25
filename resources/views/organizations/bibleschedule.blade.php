@extends('layouts.master')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Organization</a></li>
    <li class="active">Bible Schedules</li>
@endsection

@section('content')
    <box title="Bible Schedule">
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
                    <tr v-for="bible in bibleDetails">
                        <td>@{{ bible.Time }}</td>
                        <td v-for="schedule in bible.Schedule">
                            <bible-schedule-field :bible-schedule="schedule" @bible-details-updated="OnBibleDetailsUpdated"></bible-schedule-field>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </box>
@endsection

@section('scripts')
    <script src="{{ asset('js/organization_bible_schedule.js') }}"></script>
@endsection