<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SClass extends Model
{
    protected $table = 'sclass';
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Color',
        'Name_E',
        'Name_ES',
        'Name_S',
        'Kind',
        'Mode',
        'count_round',
        'curr_round',
        'Curr_matchSeason',
        'Sclass_pic',
        'ifstop',
        'Sclass_type',
        'count_group',
        'Bf_simply_disp',
        'sclass_sequence',
        'InfoID',
        'Bf_IfDisp',
        'ModifyTime',
        'BeginSeason',
        'subSclassID',
        'ifHaveSub',
        'ifSort',
        'ifHavePaper',
        'ifShowScore',
        'rank_matchSeason',
    ];

    public function scheduleResults()
    {
        return $this->hasMany(ScheduleResult::class, 'SClassID', 'id');
    }

    public function teams()
    {
        return $this->hasMany(Team::class, 'SClassID', 'id');
    }
}
