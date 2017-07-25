<?php

namespace App\Http\Controllers;

use App\Models\MassDetail;
use App\Models\Simbahan;
use App\Models\TimeStandard;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MassDetailController extends Controller
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

            $massDetails = MassDetail::where('SimbahanID', $id)->where('TimeStandardID', $timeStandardId)->get();

            foreach (range(1, 7) as $scheduleId) {
                $masses = $massDetails->filter(function ($massDetail) use ($scheduleId) {
                    return $massDetail->ScheduleID == $scheduleId;
                });

                if (count($masses) > 0) {
                    $mass['Schedule'][$scheduleId] = $masses->first();
                } else {
                    $massDetail = new MassDetail();
                    $massDetail->TimeStandardID = $timeStandardId;
                    $massDetail->ScheduleID = $scheduleId;
                    $massDetail->Time = '';
                    $massDetail->SimbahanID = $id;
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
        $mass = MassDetail::create([
            'Time' => $request->input('time'),
            'ScheduleID' => $request->input('schedule_id'),
            'Language' => $request->input('language'),
            'SimbahanID' => $request->input('simbahan_id'),
            'TimeStandardID' => $request->input('time_standard_id'),
            'DateCreated' => Carbon::now()
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
     * @param  int  $simbahanId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $simbahanId, $id)
    {
        $mass = MassDetail::find($id);
        $mass->Time = $request->input('time');
        $mass->Language = $request->input('language');

        return \Response::json($mass->save());
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
        return \Response::json(MassDetail::destroy($id));
    }
}
