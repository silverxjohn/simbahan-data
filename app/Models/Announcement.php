<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Announcements';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'AnnouncementID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'AnnouncementID', 'SimbahanID', 'AnnouncementDesc',
        'TitleContent', 'Address', 'ImagePath',
        'StartDate', 'StartTime', 'EndDate', 'EndTime'
    ];

    /**
     * Simbahan this announcement is applicable to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function simbahan()
    {
        return $this->belongsTo('App\Models\Simbahan', 'SimbahanID', 'SimbahanID');
    }
}
