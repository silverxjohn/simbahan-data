<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChurchPhoto extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ChurchPhotos';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'ChurchPhotoID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ChurchPhotoID', 'SimbahanID', 'ImagePath'];

    /**
     * Simbahan this photo is for.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function simbahan()
    {
        return $this->belongsTo('App\Models\Simbahan', 'SimbahanID', 'SimbahanID');
    }
}
