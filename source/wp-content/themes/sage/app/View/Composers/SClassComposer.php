<?php

namespace App\View\Composers;

use App\Models\Team;
use App\Models\SClass;
use App\Models\ScheduleResult;
use Roots\Acorn\View\Composer;

class SClassComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'index'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $sClasss = SClass::select('id', 'Name_E', 'Sclass_pic')
            ->with([
                // 'scheduleResults' => function($q1) {
                //     $q1->select('id', 'SclassID', 'MatchTime', 'MatchTime2', 'HomeTeamID', 'GuestTeamID')
                //         ->with([
                //             'homeTeam' => function($q2) {
                //                 $q2->select('id', 'SClassID', 'Name_E');
                //             },
                //             'guestTeam' => function($q2) {
                //                 $q2->select('id', 'SClassID', 'Name_E');
                //             }
                //         ]);
                // },
                // 'teams' => function($q1) {
                //     $q1->select('id', 'SClassID', 'Name_E');
                // }
            ])->get();

        return [
            'sClasss' => $sClasss
        ];
    }
}
