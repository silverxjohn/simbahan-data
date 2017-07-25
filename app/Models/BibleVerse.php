<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BibleVerse extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BibleVerse';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'BibleVerseID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'BibleVerseID', 'DateOfVerse', 'BVCode',
        'EmotionsReactions', 'ChapterTitle', 'BibleVerseContent'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
//    protected $dates = ['DateOfVerse'];
}
