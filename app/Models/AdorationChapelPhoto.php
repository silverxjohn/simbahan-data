<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdorationChapelPhoto extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AdorationChapelPhotos';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'AdoChapelPhotoID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['AdoChapelPhotoID', 'AdorationID', 'ImagePath'];
}
