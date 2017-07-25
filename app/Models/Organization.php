<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblCatholicOrganization';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'OrganizationID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'OrganizationID', 'OrganizationName', 'LastUpdate',
        'CompleteAddress', 'StreetNo', 'StreetName',
        'Barangay', 'CityOrMunicipality', 'StateOrProvince',
        'Country', 'DateEstablished', 'ParentOrganization',
        'FeastBuilderOrPreacher', 'BranchOrLocation', 'ContactNo',
        'EmailAddress', 'Website', 'RetreatSchedule',
        'RecollectionSchedule', 'TalkSchedule', 'CampSchedule',
        'VolunteerSchedule', 'Longitude', 'Latitude',
        'About'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
	protected $dates = ['LastUpdate'];

    public function activities()
    {
        return $this->hasMany('App\Models\OrgActivity', 'OrganizationID', 'OrganizationID');
	}

    public function attendees()
    {
        return $this->hasMany('App\Models\OrgAttendee', 'OrganizationID', 'OrganizationID');
	}

    public function parkings()
    {
        return $this->hasMany('App\Models\OrgParking', 'OrganizationID', 'OrganizationID');
	}

    public function photos()
    {
        return $this->hasMany('App\Models\OrgPhoto', 'OrganizationID', 'OrganizationID');
	}

    public function ventilations()
    {
        return $this->hasMany('App\Models\OrgVentilation', 'OrganizationID', 'OrganizationID');
	}

    public function location()
    {
        return $this->hasMany('App\Models\OrgLocation', 'OrganizationID', 'OrganizationID');
	}
}
