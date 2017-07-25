<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimbahanParking extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'SimbahanParking';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'SimbahanParkingID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['SimbahanParkingID', 'ParkingID', 'SimbahanID'];
}
