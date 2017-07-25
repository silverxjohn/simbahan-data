<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgParking extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblOrganizationParking';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'OrganizationParkingID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['OrganizationParkingID', 'OrganizationID', 'ParkingID'];

    const STREET_PARKING = 1;
    const MALL_PARKING = 2;
    const PRIVATE_PARKING = 3;
    const OTHER_PARKING = 4;
}
