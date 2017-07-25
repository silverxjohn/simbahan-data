<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfessionDetail extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ConfessionDetails';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'ConfessionID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ConfessionID', 'SimbahanID', 'ScheduleID',
        'Time', 'DateCreated', 'Text', 'TimeStandardID'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['DateCreated'];
}
