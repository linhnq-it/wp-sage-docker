<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleResult extends Model
{
    protected $table = 'schedule_results';
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SclassID',
        'MatchSeason',
        'round',
        'HomeTeamID',
        'GuestTeamID',
        'Neutrality',
        'MatchTime',
        'MatchTime2',
        'MatchState',
        'WeatherIcon',
        'Temperature',
        'TV',
        'Umpire',
        'Visitor',
        'HomeScore',
        'GuestScore',
        'HomeHalfScore',
        'GuestHalfScore',
        'Home_Red',
        'Guest_Red',
        'Home_Yellow',
        'Guest_Yellow',
        'bf_changetime',
        'shangpan',
        'grouping2',
        'Explain_en',
        'bfShow',
        'subSclassID',
        'Explainlist',
        'Home_OrderEn',
        'Guest_OrderEn',
        'VenuesID',
        'isGuessRed',
        'isLive',
        'homeCorner',
        'homeCornerHalf',
        'guestCorner',
        'guestCornerHalf',
    ];

    public function sClass()
    {
        return $this->belongsTo(SClass::class, 'SClassID', 'id');
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'HomeTeamID', 'id');
    }

    public function guestTeam()
    {
        return $this->belongsTo(Team::class, 'GuestTeamID', 'id');
    }
}
