<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoration extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Adorations';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'AdorationID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'AdorationID', 'SimbahanID', 'isOpen24By7',
        'DisplayText'
    ];
}
