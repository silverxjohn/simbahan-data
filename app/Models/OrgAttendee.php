<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgAttendee extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblOrganizationAttendees';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'OrganizationAttendeeID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['OrganizationAttendeeID', 'OrganizationID', 'AttendeeID'];

    const MEN = 1;
    const SINGLE = 2;
    const PROFESSIONALS = 3;
    const STUDENTS = 4;
    const COUPLES = 5;
    const WOMEN = 6;
    const MISSIONARIES = 7;
    const NON_CATHOLIC = 8;
}
