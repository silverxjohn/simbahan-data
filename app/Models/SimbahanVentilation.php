<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimbahanVentilation extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'SimbahanVentilation';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'SimbahanVentID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['SimbahanVentID', 'VentID', 'SimbahanID'];
}
