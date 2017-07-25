<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherPrayer extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'OtherCatholicPrayer';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'OtherCatholicPrayerID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'OtherCatholicPrayerID', 'ImagePath', 'Prayer',
        'Title', 'Categories'
    ];
}
