<?php

namespace App\Http\Controllers;

use App\Models\OrgMass;
use App\Models\TimeStandard;
use Illuminate\Http\Request;

class OrgMassDetailController extends Controller
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
            $mass = [];
            $mass['Time'] = TimeStandard::where('TimeStandardID', $timeStandardId)->first()->Time;
            $mass['Schedule'] = [];

            $massDetails = OrgMass::where('OrganizationID', $id)->where('TimeStandardID', $timeStandardId)->get();

            foreach (range(1, 7) as $scheduleId) {
                $masses = $massDetails->filter(function ($massDetail) use ($scheduleId) {
                    return $massDetail->ScheduleID == $scheduleId;
                });

                if (count($masses) > 0) {
                    $mass['Schedule'][$scheduleId] = $masses->first();
                } else {
                    $massDetail = new OrgMass();
                    $massDetail->TimeStandardID = $timeStandardId;
                    $massDetail->ScheduleID = $scheduleId;
                    $massDetail->Time = '';
                    $massDetail->OrganizationID = $id;
                    $massDetail->Language = '';
                    $mass['Schedule'][$scheduleId] = $massDetail;
                }
            }

            $schedules[$timeStandardId] = $mass;
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
        $mass = OrgMass::create([
            'Time' => $request->input('time'),
            'ScheduleID' => $request->input('schedule_id'),
            'OrganizationID' => $request->input('organization_id'),
            'TimeStandardID' => $request->input('time_standard_id')
        ]);

        return \Response::json($mass->save());
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
        $mass = OrgMass::find($id);
        $mass->Time = $request->input('time');

        return \Response::json($mass->save());
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
        return \Response::json(OrgMass::destroy($id));
    }
}
