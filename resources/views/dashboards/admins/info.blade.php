@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light py-3">
    <div class="my-1 px-2 w-100">
        <div class="">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ALL</button>
                    <!-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">...</button> -->
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">UPDATE</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active py-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <table class="table">
                        <thead class="bg-y t-b">
                            <th>#</th>
                            <th>NAME</th>
                            <th>BORN ON</th>
                            <th>NIC</th>
                            <th>MODE</th>
                            <th>SESSION</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @php($cnt = 1)
                            @forelse(\Illuminate\Support\Facades\DB::table('applications')->where('status', '=', 'pending')->get() as $item)
                                <tr>
                                    <td>{{$cnt}}</td>
                                    <td>{{$item->first_name.' '.$item->last_name}}</td>
                                    <td>{{date('l dS M Y', strtotime($item->dob))}}</td>
                                    <td>{{$item->cni_number}}</td>
                                    <td>{{\App\Models\Mode::find($item->mode)->name ?? '-----'}}</td>
                                    <td>{{'From '.\App\Models\Sessionz::find($item->session)->start ?? null.' to '.\App\Models\Sessionz::find($item->session)->end ?? '-----'}}</td>
                                    <td class="bg-y">
                                        <a href="{{route('admin.applications', $item->id)}}" class="btn bt-sm  t-b text-sm py-1" title="more"><i class="fas fa-eye "></i></button>
                                        <a href="{{route('admin.accept_application', $item->id)}}" class="btn bt-sm  t-b text-sm py-1" title="accept"><i class="fas fa-check    "></i></a>
                                        <a href="{{route('admin.reject_application', $item->id)}}" class="btn btn-sm btn-default t-b text-sm" title="reject"><i class="fas fa-trash-alt "></i></a>
                                    </td>
                                </tr>
                                @php($cnt++)
                                @empty
                                <div class="my-5 text-center t-b fs-3">No applications available</div>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="py-3" id="CONTORO" >
                        @if(request('id') != null)
                        <div class="w-100">
                            <?php $apl = \App\Models\Application::find(request('id')); ?>
                            <div class="d-flex flex-wrap justify-content-center">
                                <div class="card m-1 col-sm-4 col-md-3 border-0 bg-transparent">
                                    <div class="card-img-top embed-responsive embed-responsive-16by9 flex-auto">
                                        <img src="{{asset('storage/uploads/images/passport/'.$apl->passport_photo)}}" alt="PROFILE PICTURE" class="img img-responsive img-thumbnail">
                                    </div>
                                    <div class="card-title text-center">PROFILE PICTURE</div>
                                </div>
                                <div class="card m-1 col-sm-4 col-md-3 border-0 bg-transparent">
                                    <div class="card-img-top embed-responsive embed-responsive-16by9 flex-auto">
                                        <img src="{{asset('storage/uploads/images/id/front/'.$apl->id_front)}}" alt="NIC FRONT" class="img img-responsive img-thumbnail">
                                    </div>
                                    <div class="card-title text-center">ID-CARD FRONT</div>
                                </div>
                                <div class="card m-1 col-sm-4 col-md-3 border-0 bg-transparent">
                                    <div class="card-img-top embed-responsive embed-responsive-16by9 flex-auto">
                                        <img src="{{asset('storage/uploads/images/id/back/'.$apl->id_back)}}" alt="NIC BACK" class="img img-responsive img-thumbnail">
                                    </div>
                                    <div class="card-title text-center">ID-CARD BACK</div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center">
                                <div class="card m-1 col-sm-4 col-md-3 border-0 bg-transparent">
                                    <div class="input-group mt-3">
                                        <span class="input-group-text bg-transparent"><small>First name</small></span>
                                        <span class="form-control">{{$apl->first_name}}</span>
                                    </div>
                                    <div class="input-group mt-3">
                                        <span class="input-group-text bg-transparent"><small>Last name</small></span>
                                        <span class="form-control">{{$apl->last_name}}</span>
                                    </div>
                                    <div class="input-group mt-3">
                                        <span class="input-group-text bg-transparent"><small>Born on</small></span>
                                        <span class="form-control">{{$apl->dob}}</span>
                                    </div>
                                </div>
                                <div class="card m-1 col-sm-4 col-md-3 border-0 bg-transparent">
                                    <div class="input-group mt-3">
                                        <span class="input-group-text bg-transparent"><small>Born at</small></span>
                                        <span class="form-control">{{$apl->pob}}</span>
                                    </div>
                                    <div class="input-group mt-3">
                                        <span class="input-group-text bg-transparent"><small>NIC No</small></span>
                                        <span class="form-control">{{$apl->cni_number}}</span>
                                    </div>
                                    <div class="input-group mt-3">
                                        <span class="input-group-text bg-transparent"><small>Issued on</small></span>
                                        <span class="form-control">{{$apl->cni_date}}</span>
                                    </div>
                                    
                                </div>
                                <div class="card m-1 col-sm-4 col-md-3 border-0 bg-transparent">
                                    <div class="input-group mt-3">
                                        <span class="input-group-text bg-transparent"><small>Issued at</small></span>
                                        <span class="form-control">{{$apl->cni_post}}</span>
                                    </div>
                                    <div class="input-group mt-3">
                                        <span class="input-group-text bg-transparent"><small>Mode</small></span>
                                        <span class="form-control">{{$apl->mode}}</span>
                                    </div>
                                    <div class="input-group mt-3">
                                        <span class="input-group-text bg-transparent"><small>Session</small></span>
                                        <span class="form-control">{{$apl->session}}</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="d-flex justify-content-center border-top">
                                <a href="" class="rounded-pill px-3 py-1 bg-y t-b mx-3 my-2"><i class="fas fa-edit mx-1   "></i>edit</a>
                                <a href="" class="rounded-pill px-3 py-1 bg-y t-b mx-3 my-2"><i class="fas fa-trash-alt mx-1   "></i>delete</a>
                            </div>
                        </div>
                        @endif
                    </div>
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