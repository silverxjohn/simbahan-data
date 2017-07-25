<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Countries';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'CountryID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['CountryID', 'Country'];

    const PHILIPPINES = 1;
    const SINGAPORE = 2;
    const JAPAN = 3;
}
