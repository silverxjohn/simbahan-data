<?php

namespace App\Http\Controllers;

use App\Models\OrgBibleSchedule;
use App\Models\TimeStandard;
use Illuminate\Http\Request;

class OrgBibleDetailController extends Controller
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
            $bible = [];
            $bible['Time'] = TimeStandard::where('TimeStandardID', $timeStandardId)->first()->Time;
            $bible['Schedule'] = [];

            $bibleDetails = OrgBibleSchedule::where('OrganizationID', $id)->where('TimeStandardID', $timeStandardId)->get();

            foreach (range(1, 7) as $scheduleId) {
                $bibles = $bibleDetails->filter(function ($bibleDetail) use ($scheduleId) {
                    return $bibleDetail->ScheduleID == $scheduleId;
                });

                if (count($bibles) > 0) {
                    $bible['Schedule'][$scheduleId] = $bibles->first();
                } else {
                    $bibleDetail = new OrgBibleSchedule();
                    $bibleDetail->TimeStandardID = $timeStandardId;
                    $bibleDetail->ScheduleID = $scheduleId;
                    $bibleDetail->Time = '';
                    $bibleDetail->OrganizationID = $id;
                    $bible['Schedule'][$scheduleId] = $bibleDetail;
                }
            }

            $schedules[$timeStandardId] = $bible;
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
        $bible = OrgBibleSchedule::create([
            'Time' => $request->input('time'),
            'ScheduleID' => $request->input('schedule_id'),
            'OrganizationID' => $request->input('organization_id'),
            'TimeStandardID' => $request->input('time_standard_id')
        ]);

        return \Response::json($bible->save());
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
        $bible = OrgBibleSchedule::find($id);
        $bible->Time = $request->input('time');

        return \Response::json($bible->save());
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
        return \Response::json(OrgBibleSchedule::destroy($id));
    }
}
