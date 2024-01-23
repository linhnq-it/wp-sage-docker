<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\SClass;
use App\Models\ScheduleResult;
use Illuminate\Database\Seeder;

class InsertDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $colors = [
            '#9933FF', '#000000', '#040720', '#0C090A', '#34282C', '#3B3131', '#3A3B3C', '#454545', '#413839', '#3D3C3A', '#463E3F', '#4C4646', '#504A4B', '#565051', '#52595D', '#5C5858', '#625D5D', '#666362', '#696969', '#686A6C', '#6D6968', '#726E6D', '#736F6E', '#757575', '#797979', '#837E7C', '#808080', '#848482', '#8C8C8C', '#8D918D', '#A9A9A9', '#B6B6B4', '#C0C0C0', '#C9C0BB',
        ];
        $datas = [
            [
                'Name_E' => 'Premier League',
                'Sclass_pic' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f2/Premier_League_Logo.svg/280px-Premier_League_Logo.svg.png',
                'teams' => [
                    [
                        'Name_E' => 'Liverpool',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/vwC9RGhl-Imx2oQd8.png'
                    ],
                    [
                        'Name_E' => 'Manchester City',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/UXcqj7HG-lQuhqN8N.png'
                    ],
                    [
                        'Name_E' => 'Arsenal',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/pfchdCg5-vcNAdtF9.png'
                    ],
                    [
                        'Name_E' => 'Aston Villa',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/QsnteKXg-f3IHLYBR.png'
                    ],
                    [
                        'Name_E' => 'Tottenham',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/ARC62UAr-SOY3p1Si.png'
                    ],
                    [
                        'Name_E' => 'West Ham',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/Qo3RdMjl-ARW4wdCc.png'
                    ],
                    [
                        'Name_E' => 'Manchester Utd',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/nwSRlyWg-h2pPXz3k.png'
                    ],
                    [
                        'Name_E' => 'Chelsea',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/GMmvDEdM-IROrZEJb.png'
                    ],
                    [
                        'Name_E' => 'Newcastle',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/fojwJwZA-ImMEe0UF.png'
                    ],
                ],
            ],
            [
                'Name_E' => 'La Liga',
                'Sclass_pic' => 'https://logos-world.net/wp-content/uploads/2023/07/LaLiga-Logo-500x281.png',
                'teams' => [
                    [
                        'Name_E' => 'Real Madrid',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/A7kHoxZA-fcDVLdrL.png'
                    ],
                    [
                        'Name_E' => 'Barcelona',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/8dhw5vxS-fcDVLdrL.png'
                    ],
                    [
                        'Name_E' => 'Atl. Madrid',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/CjfjIsYg-KAuUVZn2.png'
                    ],
                    [
                        'Name_E' => 'Ath Bilbao',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/Y7CgBGYg-vJb36ZBF.png'
                    ],
                    [
                        'Name_E' => 'Real Sociedad',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/QJraUAcM-vJb36ZBF.png'
                    ],
                    [
                        'Name_E' => 'Valencia',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/Ioshoye5-MHrRLNUo.png'
                    ],
                    [
                        'Name_E' => 'Las Palmas',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/44xPoqHG-8f6Hj6B0.png'
                    ],
                    [
                        'Name_E' => 'Betis',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/hvyaw5HG-zkU5wiAr.png'
                    ],
                ]
            ],
            [
                'Name_E' => 'Serie A',
                'Sclass_pic' => 'https://mediares.thethao247.vn/res/image/data/pv8pwbmd-ULj8sFKt.png',
                'teams' => [
                    [
                        'Name_E' => 'Juventus',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/CbDOFGyS-EXzXDYgS.png'
                    ],
                    [
                        'Name_E' => 'Inter',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/lxz64qDa-jDrBQiMS.png'
                    ],
                    [
                        'Name_E' => 'AC Milan',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/htYjIjFa-fL3dmxxd.png'
                    ],
                    [
                        'Name_E' => 'Fiorentina',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/nPTphRh5-6XKdgOM6.png'
                    ],
                    [
                        'Name_E' => 'Atalanta',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/xASUZ6il-rg6usZns.png'
                    ],
                    [
                        'Name_E' => 'Lazio',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/zXqymff5-fL3dmxxd.png'
                    ],
                    [
                        'Name_E' => 'Bologna',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/j3Tyh1GG-McvX4bye.png'
                    ],
                    [
                        'Name_E' => 'AS Roma',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/QPgsexZA-GtNb9h2q.png'
                    ],
                    [
                        'Name_E' => 'Napoli',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/lhPsgJWg-fL3dmxxd.png'
                    ],
                ]
                ],
            [
                'Name_E' => 'Bundesliga',
                'Sclass_pic' => 'https://mediares.thethao247.vn/res/image/data/8EfUidTp-CtCjTLHL.png',
                'teams' => [
                    [
                        'Name_E'=> 'Bayer Leverkusen',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/OWpaDOYA-WrjrBuU2.png'
                    ],
                    [
                        'Name_E'=> 'Bayern Munich',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/tMir8iCr-xQOIafxi.png'
                    ],
                    [
                        'Name_E'=> 'Stuttgart',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/x0YB6veM-86lnAaq9.png'
                    ],
                    [
                        'Name_E'=> 'RB Leipzig',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/02lwXYkl-WvvSE8Dm.png'
                    ],
                    [
                        'Name_E'=> 'Dortmund',
                        'Flag' => 'https://mediares.thethao247.vn/res/image/data/Yiq1eU9r-WrjrBuU2.png'
                    ],
                ]
            ]
        ];

        foreach ($datas as $data) {
           $sClass = SClass::create([
            'Color' => $colors[array_rand($colors, 1)],
            'Name_E' => $data['Name_E'],
            'Name_ES' => $data['Name_E'],
            // 'Name_S',
            // 'Kind',
            // 'Mode',
            // 'count_round',
            // 'curr_round',
            // 'Curr_matchSeason',
            'Sclass_pic' => $data['Sclass_pic'],
            // 'ifstop',
            // 'Sclass_type',
            // 'count_group',
            // 'Bf_simply_disp',
            // 'sclass_sequence',
            // 'InfoID',
            // 'Bf_IfDisp',
            // 'ModifyTime',
            // 'BeginSeason',
            // 'subSclassID',
            // 'ifHaveSub',
            // 'ifSort',
            // 'ifHavePaper',
            // 'ifShowScore',
            // 'rank_matchSeason',
           ]);

            $teamInsert = [];
            foreach ($data['teams'] as $team) {
                array_push($teamInsert, [
                    // 'Kind',
                    'SClassID' => $sClass->id,
                    'Name_E' => $team['Name_E'],
                    // 'Found_date',
                    // 'Capacity',
                    'Flag' => $team['Flag'],
                    // 'address',
                    // 'URL',
                    // 'GuestPoloShirt',
                    // 'HomePoloShirt',
                    // 'ModifyTime',
                    // 'introduceEn',
                    // 'AreaEn',
                    // 'GymnasiumEn',
                    // 'VenuesID',
                    // 'Conference',
                    // 'isNational',
                ]);
            }
            Team::insert($teamInsert);
        }

        $sClasss = SClass::with('teams')->get();

        $scheduleResultInsert = [];
        foreach ($sClasss as $sCla) {
            // $teams = Team::where('SClassID', $sCla->id)->get();
            foreach ($sCla->teams as $team) {
                $ran = rand(-1000, 1000);

                $time = date('Y-m-d H:i:s');
                if($ran > 0) {
                    $time = date('Y-m-d H:i:s', strtotime("+$ran minutes", strtotime($time)));

                } else if($ran < 0) {
                    $time = date('Y-m-d H:i:s', strtotime("-$ran minutes", strtotime($time)));
                }

                $GuestTeam = $sCla->teams[rand(0, $sCla->teams->count() - 1)];
                array_push($scheduleResultInsert, [
                    'SclassID' => $sCla->id,
                    // 'MatchSeason',
                    // 'round',
                    'HomeTeamID' => $team->id,
                    'GuestTeamID' => $GuestTeam->id,
                    // 'Neutrality',
                    'MatchTime' => $time,
                    'MatchTime2' => date('Y-m-d H:i:s', strtotime("+150 minutes", strtotime($time))),
                    // 'MatchState',
                    // 'WeatherIcon',
                    // 'Temperature',
                    // 'TV',
                    // 'Umpire',
                    // 'Visitor',
                    // 'HomeScore',
                    // 'GuestScore',
                    // 'HomeHalfScore',
                    // 'GuestHalfScore',
                    // 'Home_Red',
                    // 'Guest_Red',
                    // 'Home_Yellow',
                    // 'Guest_Yellow',
                    // 'bf_changetime',
                    // 'shangpan',
                    // 'grouping2',
                    // 'Explain_en',
                    // 'bfShow',
                    // 'subSclassID',
                    'Explainlist' => rand(0, 10) . '-' . rand(0, 10),
                    // 'Home_OrderEn',
                    // 'Guest_OrderEn',
                    // 'VenuesID',
                    // 'isGuessRed',
                    // 'isLive',
                    // 'homeCorner',
                    // 'homeCornerHalf',
                    // 'guestCorner',
                    // 'guestCornerHalf',
                ]);
            }
        }

        // dd($scheduleResultInsert);
        ScheduleResult::insert($scheduleResultInsert);
    }
}
