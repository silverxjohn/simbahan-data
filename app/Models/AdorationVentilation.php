<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdorationVentilation extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AdoVent3rdTable';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'AdoVentID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['AdoVentID', 'AdorationID', 'VentID'];
}
