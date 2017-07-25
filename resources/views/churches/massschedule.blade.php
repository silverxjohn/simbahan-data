@extends('layouts.master')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Church</a></li>
    <li class="active">Mass Schedules</li>
@endsection

@section('content')
    <box title="Mass Schedule">
        <church-finder @church-found="OnChurchFound"></church-finder>
        <hr/>
        <div v-if="simbahan.Parish != ''">
            <h3>@{{ simbahan.Parish }}</h3>
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
                <tr v-for="mass in massDetails">
                    <td>@{{ mass.Time }}</td>
                    <td v-for="schedule in mass.Schedule">
                        <mass-schedule-field :mass-schedule="schedule" @mass-details-updated="OnMassDetailsUpdated"></mass-schedule-field>
                    </td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </box>
@endsection

@section('scripts')
    <script src="{{ asset('js/church_mass_schedule.js') }}"></script>
@endsection