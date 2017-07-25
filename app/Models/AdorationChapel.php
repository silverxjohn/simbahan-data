<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdorationChapel extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AdorationChapel';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'AdChapelID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'AdChapelID', 'AdorationID', 'ScheduleID',
        'Time', 'TimeStandardID'
    ];
}
