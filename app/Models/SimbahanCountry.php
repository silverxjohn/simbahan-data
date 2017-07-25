<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimbahanCountry extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'SimbahanCountry';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'SimbahanCountryID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['SimbahanCountryID', 'CountryID', 'SimbahanID'];
}
