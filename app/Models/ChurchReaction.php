<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChurchReaction extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'ChurchReactionTable';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'Id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
	    'ReactionID', 'DateCreated', 'Username',
        'ChurchReviewID', 'Id'
    ];

	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
	protected $dates = ['DateCreated'];

    public function review()
    {
        return $this->belongsTo('App\Models\ChurchReview', 'Id', 'ChurchReviewID');
	}

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'Username', 'Username');
	}
}
