<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReflection extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'DailyReflection';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'DailyReflectionID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Source', 'DateOfReflection', 'FirstContentTitle',
        'FirstContent', 'SecondContentTitle', 'SecondContent',
        'ThirdContentTitle', 'ThirdContent', 'FourthContentTitle',
        'FourthContent', 'FifthContentTitle', 'FifthContent',
        'SixthContentTitle', 'SixthContent', 'Prayer',
        'CreatedBy', 'DateCreated'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
//    protected $dates = ['DateOfReflection', 'DateCreated'];
}
