<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChurchType extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ChurchType';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'ChurchTypeID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ChurchTypeID', 'ChurchType'];

    const CHURCH = 1;
    const CATHEDRAL = 2;
    const BASILICA = 3;
    const SHRINE = 4;
    const CHAPEL = 5;

    public static function parseString($string)
    {
        switch ($string)
        {
            case "Cathedral":
                return self::CATHEDRAL;

            case "Basilica":
                return self::BASILICA;

            case "Shrine":
                return self::SHRINE;

            case "Chapel":
                return self::CHAPEL;

            case "Church":
                return self::CHURCH;
        }

        return null;
    }

    /**
     * List of simbahan where has this type of church.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function simbahans()
    {
        return $this->hasMany('App\Models\Simbahan', 'SimbahanID', 'SimbahanID');
    }
}
