<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgActivity extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblOrganizationActivities';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'OrganizationActivityID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['OrganizationActivityID', 'OrganizationID', 'ActivityID'];

    const WORSHIP = 2;
    const BIBLE_STUDY = 3;
    const MASS = 4;
    const RETREATS = 5;
    const RECOLLECTION = 6;
    const VOLUNTEER_WORKS = 7;
    const TALKS = 8;
    const CAMPS = 9;
}
