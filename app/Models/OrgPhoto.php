<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgPhoto extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblOrganizationPhoto';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'OrgPhotoID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['OrgPhotoID', 'OrganizationID', 'ImagePath'];
}
