<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Simbahan extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'Simbahan';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'SimbahanID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
	    'SimbahanID', 'StreetNo', 'Barangay',
	    'StreetName', 'City', 'StateOrProvince',
	    'ZipCode', 'Parish', 'Diocese',
	    'ParishPriest', 'Vicariate', 'DateEstablished',
	    'DateCreated', 'LastUpdate', 'HasAdorationChapel',
	    'FeastDay', 'ContactNo', 'ChurchHistory',
	    'Latitude', 'Longitude', 'DevotionSchedule',
	    'OfficeHours', 'EmailAddress', 'ChurchCode',
        'ChurchTypeID', 'Website', 'CompleteAddress',
        'LocationID'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
//	protected $dates = [
//        'DateEstablished', 'DateCreated', 'LastUpdate',
//	    'FeastDay'
//	];

	protected $appends = ['churchType'];

    public function getChurchTypeAttribute()
    {
        return $this->churchType()->first();
	}

    public function churchType()
    {
        return $this->belongsTo('App\Models\ChurchType', 'ChurchTypeID', 'ChurchTypeID');
	}

    public function location()
    {
        return $this->belongsTo('App\Models\Location', 'LocationID', 'LocationID');
	}

    public function confessions()
    {
        return $this->hasMany('App\Models\ConfessionDetail', 'SimbahanID', 'SimbahanID');
	}

    public function adorations()
    {
        return $this->hasMany('App\Models\AdorationChapel', 'SimbahanID', 'SimbahanID');
	}

    public function ventilations()
    {
        return $this->hasMany('App\Models\SimbahanVentilation', 'SimbahanID', 'SimbahanID');
	}

    public function parkings()
    {
        return $this->hasMany('App\Models\SimbahanParking', 'SimbahanID', 'SimbahanID');
	}

    public function masses()
    {
        return $this->hasMany('App\Models\MassDetail', 'SimbahanID', 'SimbahanID');
	}
}
