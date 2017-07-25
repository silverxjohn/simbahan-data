<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgWorshipSchedule extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblWorshipSchedules';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'OrgWorshipScheduleID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'OrgWorshipScheduleID', 'OrganizationID', 'TimeStandardID',
        'ScheduleID', 'Time'
    ];
}
