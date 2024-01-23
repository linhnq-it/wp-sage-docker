<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Kind',
        'SClassID',
        'Name_E',
        'Found_date',
        'Capacity',
        'Flag',
        'address',
        'URL',
        'GuestPoloShirt',
        'HomePoloShirt',
        'ModifyTime',
        'introduceEn',
        'AreaEn',
        'GymnasiumEn',
        'VenuesID',
        'Conference',
        'isNational',
    ];

    public function sClass()
    {
        return $this->belongsTo(SClass::class, 'SClassID', 'id');
    }

    public function scheduleResults()
    {
        return $this->hasMany(ScheduleResult::class, 'id', 'HomeTeamID');
    }
}
