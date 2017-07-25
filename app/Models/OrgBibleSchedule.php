<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgBibleSchedule extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblBibleSchedules';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'OrgBibleScheduleID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'OrgBibleScheduleID', 'OrganizationID', 'TimeStandardID',
        'ScheduleID', 'Time'
    ];
}
