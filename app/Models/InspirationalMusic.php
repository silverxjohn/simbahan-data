<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InspirationalMusic extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'InspirationalMusic';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'InspirationalMusicID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'InspirationalMusicID', 'IMCode', 'EmotionsReactions',
        'Artist', 'SongTitle', 'Album',
        'AlbumCover', 'Source', 'Lyrics',
        'FilePath'
    ];
}
