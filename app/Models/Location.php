<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Location';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'LocationID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['LocationID', 'LocationType'];

    const STANDALONE = 1;
    const CONVENT = 2;
    const MALLS = 3;
    const SCHOOLS = 4;
    const HOSPITALS = 5;

    /**
     * List of simbahan where has this location.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function simbahans()
    {
        return $this->hasMany('App\Models\Simbahan', 'LocationID', 'LocationID');
    }
}
