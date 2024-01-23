@extends('layouts.app')

@section('content')
    {{-- @include('partials.page-header') --}}

    <div class="container mt-5">
        <div class="list-btn mb-4">
            <a class="btn {{ !request('tab') || request('tab') === 'all' ? 'btn-primary' : 'btn-light' }}"
                href="/?tab=all">Tất cả</a>
            <a class="btn {{ request('tab') === 'live' ? 'btn-primary' : 'btn-light' }}" href="/?tab=live">Trực tiếp</a>
            <a class="btn {{ request('tab') === 'end' ? 'btn-primary' : 'btn-light' }}" href="/?tab=end">Đã kết thúc</a>
            <a class="btn {{ request('tab') === 'schedule' ? 'btn-primary' : 'btn-light' }}" href="/?tab=schedule">Lịch thi
                đấu</a>
        </div>

        @foreach ($sClasss as $sCla)
            @php
                $query = \App\Models\ScheduleResult::select(
                        'id',
                        'MatchTime',
                        'MatchTime2',
                        'HomeTeamID',
                        'GuestTeamID',
                        'Explainlist'
                    )
                    ->where('SClassID', $sCla->id)
                    ->with([
                        'homeTeam' => function ($q1) {
                            $q1->select('id', 'SClassID', 'Name_E', 'Flag');
                        },
                        'guestTeam' => function ($q1) {
                            $q1->select('id', 'SClassID', 'Name_E', 'Flag');
                        },
                    ]);
                $tab = request('tab');
                if(!$tab || $tab === 'all') {

                } else if($tab === 'live') {
                    $query->where([
                        [
                            'MatchTime', '<=', date('Y-m-d H:i:s')
                        ],
                        [
                            'MatchTime2', '>=', date('Y-m-d H:i:s')
                        ]
                    ]);
                } else if($tab === 'end') {
                    $query->where('MatchTime2', '>', date('Y-m-d H:i:s'));
                } else if($tab === 'schedule') {
                    $query->where('MatchTime', '>', date('Y-m-d H:i:s'));
                }
                $scheduleResults = $query->get();
            @endphp
            @if ($scheduleResults->count())
                <table class="table table-custom">
                    <tr class="tb-head">
                        <td class="star"><i class="fa-regular fa-star"></i></td>
                        <td colspan="4" class="text-start">
                            <div class="d-flex align-items-center">
                                <img src="{{ $sCla->Sclass_pic }}" alt="{{ $sCla->name }}" class="me-2 img-sclass" />
                                <strong>{{ $sCla->Name_E }}</strong>
                            </div>
                        </td>
                    </tr>

                    @foreach ($scheduleResults as $scheduleR)
                        <tr>
                            <td class="star"><i class="fa-regular fa-star"></i></td>
                            <td class="text-secondary">{{ date('H:i', strtotime($scheduleR->MatchTime)) }}</td>
                            <td class="text-danger">Nghỉ giữa hiệp</td>
                            <td>
                                @if ($scheduleR->homeTeam && $scheduleR->guestTeam)
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center me-2">
                                            <span>{{ $scheduleR->homeTeam->Name_E }}</span>
                                            <img src="{{ $scheduleR->homeTeam->Flag }}" alt="{{ $scheduleR->homeTeam->name }}"
                                                class="ms-2 img-team" />
                                        </div>
                                        <div class="d-flex text-danger">{{ $scheduleR->Explainlist }}</div>
                                        <div class="d-flex align-items-center ms-2">
                                            <img src="{{ $scheduleR->guestTeam->Flag }}"
                                                alt="{{ $scheduleR->guestTeam->name }}" class="me-2 img-team" />
                                            <span>{{ $scheduleR->guestTeam->Name_E }}</span>
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td class="text-secondary">HT 1-0</td>
                        </tr>
                    @endforeach
                </table>
            @endif
        @endforeach
    </div>
@endsection

{{-- @section('sidebar')
    @include('sections.sidebar')
@endsection --}}
