<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeStandard extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TimeStandard';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'TimeStandardID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'TimeStandardID', 'Time'
    ];

    const AM_12_1 = 1;
    const AM_1_2 = 2;
    const AM_2_3 = 3;
    const AM_3_4 = 4;
    const AM_4_5 = 5;
    const AM_5_6 = 6;
    const AM_6_7 = 7;
    const AM_7_8 = 8;
    const AM_8_9 = 9;
    const AM_9_10 = 10;
    const AM_10_11 = 11;
    const AM_11_12 = 12;
    const PM_12_1 = 13;
    const PM_1_2 = 14;
    const PM_2_3 = 15;
    const PM_3_4 = 16;
    const PM_4_5 = 17;
    const PM_5_6 = 18;
    const PM_6_7 = 19;
    const PM_7_8 = 20;
    const PM_8_9 = 21;
    const PM_9_10 = 22;
    const PM_10_11 = 23;
    const PM_11_12 = 24;
}
