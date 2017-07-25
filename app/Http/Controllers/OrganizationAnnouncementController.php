<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\OrgAnnouncement;
use Illuminate\Http\Request;

class OrganizationAnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $announcements = OrgAnnouncement::where('OrganizationID', $id)->get();

        return \Response::json($announcements);
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
        $announcement = OrgAnnouncement::create([
            'OrganizationID' => $request->input('organization_id'),
            'AnnouncementDesc' => $request->input('description'),
            'TitleContent' => $request->input('title'),
            'Address' => $request->input('address'),
            'ImagePath' => $request->input('image'),
            'StartDate' => $request->input('start_date'),
            'StartTime' => $request->input('start_time'),
            'EndDate' => $request->input('end_date'),
            'EndTime' => $request->input('end_time'),
        ]);

        return \Response::json($announcement->save());
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
        $announcement = OrgAnnouncement::find($id);

        $announcement->AnnouncementDesc = $request->input('description');
        $announcement->TitleContent = $request->input('title');
        $announcement->Address = $request->input('address');
        $announcement->ImagePath = $request->input('image');
        $announcement->StartDate = $request->input('start_date');
        $announcement->StartTime =  $request->input('start_time');
        $announcement->EndDate = $request->input('end_date');
        $announcement->EndTime = $request->input('end_time');
        $announcement->save();

        return \Response::json($announcement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($organizationId, $id)
    {
        return \Response::json(OrgAnnouncement::destroy($id));
    }
}
