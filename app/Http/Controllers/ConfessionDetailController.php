<?php

namespace App\Http\Controllers;

use App\Models\ConfessionDetail;
use App\Models\TimeStandard;
use Illuminate\Http\Request;

class ConfessionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $schedules = [];

        foreach (range(1, 24) as $timeStandardId) {
            $confession = [];
            $confession['Time'] = TimeStandard::where('TimeStandardID', $timeStandardId)->first()->Time;
            $confession['Schedule'] = [];

            $confessionDetails = ConfessionDetail::where('SimbahanID', $id)->where('TimeStandardID', $timeStandardId)->get();

            foreach (range(1, 7) as $scheduleId) {
                $confessions = $confessionDetails->filter(function ($confessionDetail) use ($scheduleId) {
                    return $confessionDetail->ScheduleID == $scheduleId;
                });

                if (count($confessions) > 0) {
                    $confession['Schedule'][$scheduleId] = $confessions->first();
                } else {
                    $confessionDetail = new ConfessionDetail();
                    $confessionDetail->TimeStandardID = $timeStandardId;
                    $confessionDetail->ScheduleID = $scheduleId;
                    $confessionDetail->Time = '';
                    $confessionDetail->SimbahanID = $id;
                    $confession['Schedule'][$scheduleId] = $confessionDetail;
                }
            }

            $schedules[$timeStandardId] = $confession;
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
        $confession = ConfessionDetail::create([
            'Time' => $request->input('time'),
            'ScheduleID' => $request->input('schedule_id'),
            'SimbahanID' => $request->input('simbahan_id'),
            'TimeStandardID' => $request->input('time_standard_id')
        ]);

        return \Response::json($confession->save());
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
     * @param  int  $simbahanId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $simbahanId, $id)
    {
        $confession = ConfessionDetail::find($id);
        $confession->Time = $request->input('time');

        return \Response::json($confession->save());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $simbahanId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($simbahanId, $id)
    {
        return \Response::json(ConfessionDetail::destroy($id));
    }
}
