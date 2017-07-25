@extends('layouts.master')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Church</a></li>
    <li class="active">Create new Church</li>
@endsection

@section('modals')
    <create-mass-schedule-modal
        @mass-schedule-created="OnMassScheduleCreated"></create-mass-schedule-modal>

    <view-mass-schedule-modal
        :mass-schedule="massScheduleModal.view"></view-mass-schedule-modal>

    <edit-mass-schedule-modal
        :mass-schedule="massScheduleModal.edit"
        @mass-schedule-updated="OnMassScheduleUpdated"></edit-mass-schedule-modal>

    <remove-mass-schedule-modal
        :mass-schedule="massScheduleModal.remove"
        @mass-schedule-deleted="OnMassScheduleDeleted"></remove-mass-schedule-modal>
@endsection

@section('content')
    <box title="Create Church">
        <h3>Simbahan Details</h3>

        <div class="form-group">
            <label>Parish Name</label>
            <input type="text" class="form-control" v-model="parish" placeholder="Enter Parish Name">
        </div>

        <div class="row">
            <div class="col-md-3">
                <label>Street Number</label>
                <input type="text" class="form-control" v-model="streetNumber" placeholder="Enter Street Number">
            </div>
            <div class="col-md-3">
                <label>Street Name</label>
                <input type="text" class="form-control" v-model="streetName" placeholder="Enter Street Name">
            </div>
            <div class="col-md-3">
                <label>City</label>
                <input type="text" class="form-control" v-model="city" placeholder="Enter City">
            </div>
            <div class="col-md-3">
                <label>State</label>
                <input type="text" class="form-control" v-model="state" placeholder="Enter State">
            </div>
        </div>

        <div class="form-group">
            <label>Location Type</label>
            <select name="location" v-model="location" class="form-control">
                <option value="">- SELECT LOCATION TYPE -</option>
                <option value="1">Standalone</option>
                <option value="2">Convent</option>
                <option value="3">Mall</option>
                <option value="4">School</option>
                <option value="5">Hospital</option>
            </select>
        </div>

        <div class="form-group">
            <label>Diocese</label>
            <input type="text" class="form-control" v-model="diocese" placeholder="Enter Diocese">
        </div>

        <div class="form-group">
            <label>Priest</label>
            <input type="text" class="form-control" v-model="priest" placeholder="Enter Priest">
        </div>

        <div class="form-group">
            <label>Vicariate</label>
            <input type="text" class="form-control" v-model="vicariate" placeholder="Enter Vicariate">
        </div>

        <div class="form-group">
            <label>Date Established</label>
            <input type="text" class="form-control" v-model="dateEstablished" placeholder="Enter Date Established">
        </div>

        <div class="form-group">
            <label>Feast Day</label>
            <input type="text" class="form-control" v-model="feastDay" placeholder="Enter Feast Day">
        </div>

        <div class="form-group">
            <label>Contact</label>
            <input type="text" class="form-control" v-model="contact" placeholder="Enter Contact Number">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" v-model="email" placeholder="Enter Email Address">
        </div>

        <div class="form-group">
            <label>Website</label>
            <input type="text" class="form-control" v-model="website" placeholder="Enter Website">
        </div>

        <div class="form-group">
            <label>Devotion Schedule</label>
            <input type="text" class="form-control" v-model="devotion" placeholder="Enter Devotion Schedule">
        </div>

        <div class="form-group">
            <label>Office Hours</label>
            <input type="text" class="form-control" v-model="officeHours" placeholder="Enter Office Hours">
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Latitude</label>
                <input type="text" class="form-control" v-model="latitude" placeholder="Enter Latitude">
            </div>
            <div class="col-md-6">
                <label>Longitude</label>
                <input type="text" class="form-control" v-model="longitude" placeholder="Enter Longitude">
            </div>
        </div>

        <div class="form-group">
            <label>Church History</label>
            <textarea class="form-control" v-model="churchHistory" placeholder="Enter Church History"></textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h3>Mass Schedules</h3>
            </div>
            <div class="col-md-3 col-md-offset-3">
                <button class="btn btn-primary btn-block" @click="OnAddMassScheduleClicked">Add Mass Schedule</button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <td>Day</td>
                    <td>Time Start</td>
                    <td>Time End</td>
                    <td>Language</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                <tr is="mass-schedule-row"
                    v-for="massSchedule in massSchedules"
                    :mass-schedule="massSchedule"
                    @view-action-clicked="OnViewActionClicked"
                    @edit-action-clicked="OnEditActionClicked"
                    @remove-action-clicked="OnRemoveActionClicked"></tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-8">
                <button class="btn btn-primary btn-block">Create</button>
            </div>
        </div>
    </box>
@endsection

@section('scripts')
    <script src="{{ asset('js/church_create.js') }}"></script>
@endsection