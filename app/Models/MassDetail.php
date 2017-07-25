<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MassDetail extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'MassDetails';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'MassDetailID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'MassDetailID', 'DateCreated', 'Time',
        'ScheduleID', 'Language', 'SimbahanID',
        'TimeStandardID'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['DateCreated'];

    /**
     * Day of this mass.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schedule()
    {
        return $this->belongsTo('App\Models\Schedule', 'ScheduleID', 'ScheduleID');
    }

    /**
     * Simbahan this mass is applicable.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function simbahan()
    {
        return $this->belongsTo('App\Models\Simbahan', 'SimbahanID', 'SimbahanID');
    }
}
