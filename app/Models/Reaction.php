<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'Reactions';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'ReactionID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = ['ReactionID', 'ReactionType'];

    public function churchReactions()
    {
        return $this->hasMany('App\Models\Reaction', 'ReactionID', 'ReactionID');
	}
}
