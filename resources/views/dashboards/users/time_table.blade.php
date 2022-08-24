@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light py-5">
    @if(!isset($data))
        <div class="my-5 text-center t-b fs-3">Time table not yet available</div>
    @else
        <div class="my-3 px-2 w-100">
            <div class="">
                <table class="table table-stripped fs-5">
                    <div class="text-center t-b fs-4 fw-bold text-capitalize my-3 table-title">Time table</div>
                    <thead class="bg-b t-w py-1 fs-6">
                        <th class="text-uppercase t-y fw-bold">day\time</th>
                        <th class="text-uppercase">8-9am</th>
                        <th class="text-uppercase">9-10am</th>
                        <th class="text-uppercase">10-11am</th>
                        <th class="text-uppercase">11-12pm</th>
                        <th class="text-uppercase">12-1pm</th>
                        <th class="text-uppercase">1-2pm</th>
                        <th class="text-uppercase">2-3pm</th>
                        <th class="text-uppercase">3-4pm</th>
                        <th class="text-uppercase">4-5pm</th>
                    </thead>
                    @for($i=0; $i < 7; $i++)
                    <tr class="bb-b">
                        <th class="fw-bold fs-6 text-uppercase border-left border-right border-secondary">monday</th>
                        <td class="border-left border-right fs-6"> activity<br><small class="px-2 t-y">time</small></td>
                        <td class="border-left border-right fs-6"> activity<br><small class="px-2 t-y">time</small></td>
                        <td class="border-left border-right fs-6"> activity<br><small class="px-2 t-y">time</small></td>
                        <td class="border-left border-right fs-6"> activity<br><small class="px-2 t-y">time</small></td>
                        <td class="border-left border-right fs-6"> activity<br><small class="px-2 t-y">time</small></td>
                        <td class="border-left border-right fs-6"> activity<br><small class="px-2 t-y">time</small></td>
                        <td class="border-left border-right fs-6"> activity<br><small class="px-2 t-y">time</small></td>
                        <td class="border-left border-right fs-6"> activity<br><small class="px-2 t-y">time</small></td>
                        <td class="border-left border-right fs-6"> activity<br><small class="px-2 t-y">time</small></td>
                    </tr>
                    @endfor
                </table>
            </div>
        </div>
    @endif
</div>
@endsection
@section('script')
<script>
    
</script>
@endsection