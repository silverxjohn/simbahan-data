<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Parking';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'ParkingID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ParkingID', 'ParkingType'
    ];

    const CHURCH_PARKING = 1;
    const MALL_PARKING = 2;
    const STREET_PARKING = 3;
    const OTHER_PARKING = 4;

    public function simbahans()
    {
        return $this->belongsToMany('App\Models\Simbahan', 'SimbahanMassTable', 'ParkingID', 'ParkingID');
    }
}
