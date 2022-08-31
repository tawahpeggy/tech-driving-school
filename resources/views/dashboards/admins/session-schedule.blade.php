@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light py-3">
    <div class="my-1 px-2 w-100">
        @if($flag == 1)
            <div class="w-100">
                <div class="text-uppercase fs-2 fw-bold text-center my-3 t-b">set session schedule</div>
                <form action="{{route('admin.session.set_schedule')}}" method="post">
                    @csrf
                    <h4 class="mt-4 fw-bold t-y">Session</h4>
                    <div class="input-group">
                        <span class="input-group-text">session</span>
                        <select name="sessionz" id="" class="form-control" required>
                            <option value="" class="selected">select session</option>
                            @forelse(\App\Models\Sessionz::all() as $item)
                            <option value="{{$item->id}}" class="text-uppercase"><span class="t-b mr-1">From {{date('l dS M Y', strtotime($item->start))}}</span> ||| <span class="t-y ml-1">To {{date('l dS M Y', strtotime($item->end))}}</span></option>
                            @empty
                            <option value="" selected>no sessions available</option>
                            @endforelse
                        </select>
                    </div>
                    <h4 class="mt-4 fw-bold t-y">Schedules</h4>
                    <table class="table">
                        <thead class="bg-y t-b">
                            <th><span><i class="fas fa-check-square    ">check</i></span></th>
                            <th>Name</th>
                            <th>From</th>
                            <th>To</th>
                        </thead>
                        <tbody class="t-y">
                            @forelse(\App\Models\TimeTable::all() as $table)
                            <tr class="bb-b">
                                <td><input type="checkbox" name="schedules[]" value="{{$table->id}}"></td>
                                <td>{{$table->title}}</td>
                                <td>{{date('l dS M Y', strtotime($item->start_date))}}</td>
                                <td>{{date('l dS M Y', strtotime($item->end_date))}}</td>
                            </tr>
                            @empty
                            <h4 class="text-center fw-bold">No Schedules Found</h4>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <input type="submit" name="" id="" value="submit" class="px-3 py-1 bg-y t-b">
                    </div>
                </form>
            </div>
        @endif
        @if($flag == 2)
        @php($item = \App\Models\Sessionz::find(request('id')))
            <div class="w-100">
                <div class="text-uppercase fs-2 fw-bold text-center my-3 t-b">set session schedule</div>
                <form action="{{route('admin.session.set_schedule')}}" method="post">
                    @csrf
                    <h4 class="mt-4 fw-bold t-y">Session</h4>
                    <div class="input-group">
                        <span class="input-group-text">session</span>
                        <span class="form-control"><span class="t-b mr-1">From {{date('l dS M Y', strtotime($item->start))}}</span> ||| <span class="t-y ml-1">To {{date('l dS M Y', strtotime($item->end))}}</span></span>
                    </div>
                    <h4 class="mt-4 fw-bold t-y">Schedules</h4>
                    <table class="table">
                        <thead class="bg-y t-b">
                            <th>###</th>
                            <th>Name</th>
                            <th>From</th>
                            <th>To</th>
                        </thead>
                        <tbody class="t-y">
                            @php($ix = 1)
                            @php($sessions = \App\Models\SessionSchedule::where('session_id', '=', request('id'))->get('schedule_id')->toArray())
                            @forelse(\App\Models\TimeTable::whereIn('id', $sessions)->get() as $table)
                            <tr class="bb-b">
                                <td>{{$ix++}}</td>
                                <td>{{$table->title}}</td>
                                <td>{{date('l dS M Y', strtotime($item->start_date))}}</td>
                                <td>{{date('l dS M Y', strtotime($item->end_date))}}</td>
                            </tr>
                            @empty
                            <h4 class="text-center fw-bold">No Schedules Found</h4>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <input type="submit" name="" id="" value="submit" class="px-3 py-1 bg-y t-b">
                    </div>
                </form>
            </div>
        @endif
    </div>
</div>
@endsection
@section('script')
<script>
    
</script>
@endsection