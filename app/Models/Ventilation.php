<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ventilation extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Ventilation';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'VentID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['VentID', 'VentType', 'IsVentilated'];

    const AIRCONDITIONED = 1;
    const CEILING_FAN = 2;
    const ORDINARY_FAN = 3;

    public function adoration()
    {
        return $this->hasMany('App\Models\AdorationChapel', 'VentID', 'VentID');
    }
}
