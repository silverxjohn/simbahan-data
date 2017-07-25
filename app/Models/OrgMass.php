<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgMass extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblMassDetails';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'OrgMassID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'OrgMassID', 'OrganizationID', 'TimeStandardID',
        'ScheduleID', 'Time'
    ];
}
