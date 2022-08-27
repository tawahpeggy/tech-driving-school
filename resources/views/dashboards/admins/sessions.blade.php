@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light py-3">
    <div class="my-1 px-2 w-100">
        <div class="">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ALL</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">NEW</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">UPDATE</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active py-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                @if(!isset($data) || count($data) ==null)
                    <div class="my-5 text-center t-b fs-3">No sessions available</div>
                @else
                    <table class="table">
                        <thead class="bg-secondary t-b">
                            <th>#</th>
                            <th>START DATE</th>
                            <th>END DATE</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @php($cnt = 1)
                            @foreach($data as $item)
                                <tr>
                                    <td>{{$cnt}}</td>
                                    <td>{{date('l dS M Y', strtotime($item->start))}}</td>
                                    <td>{{date('l dS M Y', strtotime($item->end))}}</td>
                                    <td>
                                        <a onclick="edit('{{$item->id}}')" class="btn bt-sm btn-default t-y text-sm py-1" title="edit session"><i class="fas fa-edit "></i></a>
                                        <a onclick="edit('{{$item->id}}')" class="btn bt-sm btn-default t-y text-sm py-1" title="session details"><i class="fas fa-expand-arrows-alt    "></i></a>
                                        <a href="{{route('admin.delete_session', $item->id)}}" class="btn btn-sm btn-default t-y text-sm" title="delete session"><i class="fas fa-trash-alt "></i></a>
                                    </td>
                                </tr>
                                @php($cnt++)
                            @endforeach
                        </tbody>
                    </table>
                @endif
                </div>

                <div class="tab-pane fade py-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="fs-3 text-uppercase text-center t-b py-5">NEW SESSION</div>
                    <form action="{{route('admin.sessions')}}" method="post" class="col-9 mx-auto">
                        @csrf
                        <div class="row py-2">
                            <div class="col-sm-3 text-end text-capitalize">start date:</div>
                            <div class="col-sm-8 text-end text-capitalize"><input type="date" name="start" id="" class="form-control border-0 border-bottom border-dark rounded-0" required placeholder="start date"></div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-3 text-end text-capitalize">end date:</div>
                            <div class="col-sm-8 text-end text-capitalize"><input type="date" name="end" id="" class="form-control border-0 border-bottom border-dark rounded-0" required placeholder="end date"></div>
                        </div>
                        <div class="col-11 d-flex justify-content-end py-2">
                            <input type="submit" name="submit" value="submit" id="" class="btn btn-default border-dark text-capitalize"></div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    
                    <div class="fs-3 text-uppercase text-center t-b py-5">UPDATE SESSION</div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    
</script>
@endsection