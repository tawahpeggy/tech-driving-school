@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light py-3">
    <div class="my-1 px-2 w-100">
        @php
            $session_id = \App\Models\Application::where('user_id', '=', auth()->user()->id)->get('session')->toArray();
        @endphp
            <div class="w-100">
                <div class="text-uppercase fs-2 fw-bold text-center my-3 t-b">schedule</div>
                <form action="{{route('user.time_table')}}" method="get">
                    @csrf
                    
                    <div class="input-group my-3">
                        <span class="input-group-text">session</span>
                        <select name="sessionz" id="" class="form-control">
                            <option value="">select a session</option>
                            @forelse(\App\Models\Sessionz::whereIn('id', $session_id)->get() as $item)
                            <option value="{{$item->id}}" {{request('sessionz') == $item->id ? 'selected' : ""}}>{{$item->name}}<span class="t-b mr-1">From {{date('l dS M Y', strtotime($item->start))}}</span> ||| <span class="t-y ml-1">To {{date('l dS M Y', strtotime($item->end))}}</span></option>
                            @empty
                            <option value="" selected>No session found</option>
                            @endforelse
                        </select>
                    </div>

                    @if(request('sessionz') != null)
                        
                        @php
                            $t_ids = array_values(\App\Models\SessionSchedule::where('session_id', '=', request('sessionz'))->get('schedule_id')->toArray());
                            $schedules = \App\Models\TimeTable::whereIn('id', $t_ids)->get();
                        @endphp
                        <div class="input-group my-3">
                            <span class="input-group-text">schedule</span>
                            <select name="schedule" id="" class="form-control">
                                <option value="" >select a schedule</option>
                                @forelse($schedules as $item)
                                <option value="{{$item->id}}" {{request('schedule') == $item->id ? 'selected' : ""}}>{{$item->name}}<span class="t-b mr-1">From {{date('l dS M Y', strtotime($item->start))}}</span> ||| <span class="t-y ml-1">To {{date('l dS M Y', strtotime($item->end))}}</span></option>
                                @empty
                                <option value="" selected>No schedules found</option>
                                @endforelse
                            </select>
                        </div>
                    @endif
                    <div class="d-flex justify-content-end py-4">
                        <input type="submit" name="" id="" value="submit" class="px-3 py-1 bg-y t-b">
                    </div>
                </form>
                    
                @if(request('schedule') != null)
                    @php($item = \App\Models\TimeTable::find(request('schedule')))
                    @php($fl = false)
                    <div class="w-100">
                        <table class="table">
                            <thead class="bg-y t-b bb-b text-uppercase fw-bold">
                                <th class="border border-top-0">Day\Time</th>
                                <th class="border border-top-0">9am - 11am</th>
                                <th class="border border-top-0">11am - 1pm</th>
                                <th class="border border-top-0">1pm - 3pm</th>
                                <th class="border border-top-0">3pm - 5pm</th>
                            </thead>
                            <tbody>
                                @php($days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'])
                                @forelse(json_decode($item->schedules) as $k => $sc)
                                    <tr class="bb-y text-y" style="background-color: {{ $fl ? '#dea' : '#fefedb'}}">
                                        <td class="border border-top-0 border-bottom-0 text-uppercase fw-2" style="background-color: #05051a; color: white;">{{$days[$k]}}</td>
                                        <td class="border border-top-0 border-bottom-0">{{$sc[0] ?? '-----'}}</td>
                                        <td class="border border-top-0 border-bottom-0">{{$sc[1] ?? '-----'}}</td>
                                        <td class="border border-top-0 border-bottom-0">{{$sc[2] ?? '-----'}}</td>
                                        <td class="border border-top-0 border-bottom-0">{{$sc[3] ?? '-----'}}</td>
                                    </tr>
                                @php($fl = !$fl)
                                @empty
                                    <tr class="t-b">Schedule is empty</tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                @endif

                    
            </div>
    </div>
</div>
@endsection
@section('script')
<script>
    
</script>
@endsection