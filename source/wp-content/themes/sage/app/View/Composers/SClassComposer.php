<?php

namespace App\View\Composers;

use App\Models\Team;
use App\Models\SClass;
use App\Models\ScheduleResult;
use Roots\Acorn\View\Composer;
use Database\Seeders\InsertDataSeeder;

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

    private function getSClasss() {
        return SClass::select('id', 'Name_E', 'Sclass_pic')
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
    }

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $sClasss = $this->getSClasss();

        if($sClasss->count() === 0) {
            // do wp acorn migrate --allow-root chưa biết nguyên nhân sao không chạy, có thể là không hỗ trợ
            InsertDataSeeder::class;

            $sClasss = $this->getSClasss();
        }
        return [
            'sClasss' => $sClasss
        ];
    }
}
