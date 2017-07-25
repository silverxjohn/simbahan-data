<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgVentilation extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblOrganizationVentilation';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'OrganizationVentilationID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['OrganizationVentilationID', 'OrganizationID', 'VentilationID'];

    const AIRCONDITION = 1;
    const CEILING_FAN = 2;
    const WALL_FAN = 3;
    const STAND_FAN = 4;
}
