<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatholicPrayer extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BasicCatholicPrayer';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'BasicCatholicPrayerID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'BasicCatholicPrayerID', 'ImagePath', 'Prayer',
        'Title'
    ];
}
