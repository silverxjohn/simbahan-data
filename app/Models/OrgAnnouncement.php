<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgAnnouncement extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblAnnouncement';

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
        'AnnouncementID', 'OrganizationID', 'AnnouncementDesc',
        'TitleContent', 'Address', 'ImagePath',
        'StartDate', 'StartTime', 'EndDate', 'EndTime'
    ];
}
