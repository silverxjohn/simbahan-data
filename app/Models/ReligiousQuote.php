<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReligiousQuote extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ReligiousQuote';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'ReligiousQuoteID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DateOfQuote', 'RQCode', 'EmotionsReactions',
        'Author', 'Quote', 'DisplayListForMobile'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
//    protected $dates = ['DateOfQuote'];
}
