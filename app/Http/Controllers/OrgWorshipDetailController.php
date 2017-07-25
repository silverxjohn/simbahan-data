<?php

namespace App\Http\Controllers;

use App\Models\OrgWorshipSchedule;
use App\Models\TimeStandard;
use Illuminate\Http\Request;

class OrgWorshipDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $schedules = [];

        foreach (range(1, 24) as $timeStandardId) {
            $worship = [];
            $worship['Time'] = TimeStandard::where('TimeStandardID', $timeStandardId)->first()->Time;
            $worship['Schedule'] = [];

            $worshipDetails = OrgWorshipSchedule::where('OrganizationID', $id)->where('TimeStandardID', $timeStandardId)->get();

            foreach (range(1, 7) as $scheduleId) {
                $worships = $worshipDetails->filter(function ($worshipDetail) use ($scheduleId) {
                    return $worshipDetail->ScheduleID == $scheduleId;
                });

                if (count($worships) > 0) {
                    $worship['Schedule'][$scheduleId] = $worships->first();
                } else {
                    $worshipDetail = new OrgWorshipSchedule();
                    $worshipDetail->TimeStandardID = $timeStandardId;
                    $worshipDetail->ScheduleID = $scheduleId;
                    $worshipDetail->Time = '';
                    $worshipDetail->OrganizationID = $id;
                    $worship['Schedule'][$scheduleId] = $worshipDetail;
                }
            }

            $schedules[$timeStandardId] = $worship;
        }

        return \Response::json($schedules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $worship = OrgWorshipSchedule::create([
            'Time' => $request->input('time'),
            'ScheduleID' => $request->input('schedule_id'),
            'OrganizationID' => $request->input('organization_id'),
            'TimeStandardID' => $request->input('time_standard_id')
        ]);

        return \Response::json($worship->save());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $organizationId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $organizationId, $id)
    {
        $worship = OrgWorshipSchedule::find($id);
        $worship->Time = $request->input('time');

        return \Response::json($worship->save());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $organizationId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($organizationId, $id)
    {
        return \Response::json(OrgWorshipSchedule::destroy($id));
    }
}
