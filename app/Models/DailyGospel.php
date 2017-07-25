<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyGospel extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'DailyGospel';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'DailyReadingID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DailyReadingID', 'Source', 'DateOfGospel',
        'FirstReadingTitle', 'FirstReadingContent', 'ResponsorialPsalmTitle',
        'ResponsorialPsalmContent', 'SecondReadingTitle', 'SecondReadingContent',
        'VerseBeforeGospelTitle', 'VerseBeforeGospelContent', 'GospelTitle',
        'GospelContent', 'CreatedBy', 'DateCreated'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    //protected $dates = ['DateOfGospel', 'DateCreated'];
}
