<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgLocation extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblOrgLocation';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'OrganizationID', 'OrgLocationID'];

    const CHURCH = 1;
    const SCHOOL = 2;
    const MALL = 3;
    const PUBLIC_PLACE = 4;
    const PRIVATE_BUILDING = 5;
}
