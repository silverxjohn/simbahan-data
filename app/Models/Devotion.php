<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devotion extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Devotions';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'DevotionID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DevotionID', 'ImagePath', 'Prayer',
        'Title'
    ];
}
