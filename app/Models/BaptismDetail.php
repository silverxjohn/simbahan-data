<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaptismDetail extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BaptismDetails';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'BaptismID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'BaptismID', 'Text', 'SimbahanID',
        'DateCreated'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['DateCreated'];

    /**
     * Simbahan that offers this kind of baptism.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function simbahan()
    {
        return $this->belongsTo('App\Models\Simbahan', 'SimbahanID', 'SimbahanID');
    }
}
