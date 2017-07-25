<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChurchReview extends Model
{
	public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'ChurchReview';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'ChurchReviewID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
	    'ChurchReviewID', 'SimbahanID', 'Username',
        'StarCount', 'Comment'
    ];

    public function simbahan()
    {
        return $this->belongsTo('App\Models\Simbahan', 'SimbahanID', 'SimbahanID');
	}

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'Username', 'Username');
	}

    public function reactions()
    {
        return $this->hasMany('App\Models\ChurchReaction', 'ChurchReviewID', 'ChurchReviewID');
	}
}
