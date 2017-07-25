<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saint extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Saints';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'SaintID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SaintID', 'Name', 'Biography',
        'ImagePath', 'FeastDay', 'BirthDate',
        'DeathDate', 'Patron', 'CanonizeDate',
        'RelatedChurch', 'PublicationDate',
        'Categories'
    ];
}
