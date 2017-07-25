<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeddingDetail extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'WeddingDetails';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'WeddingID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'WeddingID', 'Text', 'SimbahanID',
        'DateCreated'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['DateCreated'];

    public function simbahan()
    {
        return $this-$this->belongsTo('App\Models\Simbahan', 'SimbahanID', 'SimbahanID');
    }
}
