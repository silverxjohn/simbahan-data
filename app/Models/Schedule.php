<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Schedule';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'ScheduleID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ScheduleID', 'Days'];

    const SUNDAY = 1;
    const MONDAY = 2;
    const TUESDAY = 3;
    const WEDNESDAY = 4;
    const THURSDAY = 5;
    const FRIDAY = 6;
    const SATURDAY = 7;

    public function masses()
    {
        return $this->hasMany('App\Models\MassDetail', 'ScheduleID', 'ScheduleID');
    }
}
