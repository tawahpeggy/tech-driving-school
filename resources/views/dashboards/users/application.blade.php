@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light">
    <div class="row justify-content-center">
        <div class="col-md-11 mx-auto my-5 rounded px-3 py-5 rounded-2 bg-w">
            @if(!request('action'))
                @php($apls = \App\Models\Application::where('user_id', auth()->user()->id)->get())
                @if(count($apls)>0)
                    <table class="table table-stripped">
                        <thead class="bg-y t-b fs-4 text-capitalize py-2">
                            <th>###</th>
                            <th>name</th>
                            <th>DoB</th>
                            <th>PoB</th>
                            <th>NIC no</th>
                            <th>Mode</th>
                            <th></th>
                        </thead>
                        @php($init = 1)
                        <tbody class="t-y">
                            @foreach($apls as $apl)
                                <tr>
                                    <td>{{$init++}}</td>
                                    <td>{{$apl->first_name . ' '.$apl->last_name}}</td>
                                    <td>{{$apl->dob}}</td>
                                    <td>{{$apl->pob}}</td>
                                    <td>{{$apl->cni_number}}</td>
                                    <td>{{\App\Models\Mode::find($apl->mode)->name}}</td>
                                    <td><a href="{{\Request::url().'?action=details&id='.$apl->id}}" class="text-decoration-none b-y t-b py-1 px-2 rounded">details</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center py-4">
                        <a href="{{\Request::url().'?action=create'}}" class="rounded text-decoration-none b-b bg-y t-b py-2 px-4 fs-5 fw-bold text-uppercase">new application</a>
                    </div>
                @else
                    <div class="t-y fs-2 text-center my-4">You have not applied yet. Click the link to apply</div>
                    <div class="d-flex justify-content-center py-4">
                        <a href="{{\Request::url().'?action=create'}}" class="rounded text-decoration-none b-b bg-y t-b py-2 px-4 fs-5 fw-bold text-uppercase">Apply</a>
                    </div>
                @endif
            @endif

            @if(request('action')=='create')
                <div class="p-2 ">
                    <p class="t-b text-center">Go through every tab and make sure you fill all required fields before you submitting application</p>
                    <form action="{{route('user.apply')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="py-4">
                            <!-- <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">PERSONAL INFORMATION</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">IDENTIFICATION</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">MODE</button>
                                    <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">SESSION</button>
                                </div>
                            </nav> -->
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active py-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                    <div class="fs-3 text-uppercase text-center t-b py-5">Personal Information</div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">First name:</div>
                                        <div class="col-sm-8  text-end text-capitalize"><input type="text" name="first_name" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" required placeholder="first name"></div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">Last name:</div>
                                        <div class="col-sm-8  text-end text-capitalize"><input type="text" name="last_name" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" placeholder="last name"></div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">Date of birht:</div>
                                        <div class="col-sm-8  text-end text-capitalize"><input type="date" name="dob" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" required placeholder="date of birth"></div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">place of birth:</div>
                                        <div class="col-sm-8  text-end text-capitalize"><input type="text" name="pob" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" required placeholder="place of birth"></div>
                                    </div>
                                    <div class="d-flex py-2 justify-content-end w-100">
                                        <a class="btn" onclick="show('nav-profile')"><i class="fas fa-caret-square-right   fa-3x t-y "></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade py-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                    <div class="fs-3 text-uppercase text-center t-b py-5">IDENTIFICATION</div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">CNI number:</div>
                                        <div class="col-sm-8  text-end text-capitalize"><input type="text" name="cni_number" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" required placeholder="CNI number"></div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">Date issued:</div>
                                        <div class="col-sm-8  text-end text-capitalize"><input type="date" name="cni_date" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" required placeholder="date issued"></div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">post:</div>
                                        <div class="col-sm-8  text-end text-capitalize"><input type="text" name="cni_post" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white " required placeholder="post"></div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">ID-card:</div>
                                        <div class="col-sm-8 ">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link active" id="id-front-tab" data-bs-toggle="tab" data-bs-target="#id-front" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Front side</button>
                                                    <button class="nav-link" id="id-back-tab" data-bs-toggle="tab" data-bs-target="#id-back" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Back side</button>
                                                    <button class="nav-link" id="photo-tab" data-bs-toggle="tab" data-bs-target="#photo" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Passport size Photo</button>
                                                </div>
                                            </nav>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="id-front" role="tabpanel" aria-labelledby="id-front-tab" tabindex="0">
                                                    <div class="row py-2">
                                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">upload image:</div>
                                                        <div class="col-sm-8  text-end text-capitalize"><input type="file" accept="image/*" onchange="preview(this)" name="id_front" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white preview" required></div>
                                                        <div class="col-9 mx-auto image-preview">
                                                            <img src="" alt="" class="w-100 h-auto my-2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="id-back" role="tabpanel" aria-labelledby="id-back-tab" tabindex="0">
                                                    <div class="row py-2">
                                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">upload image:</div>
                                                        <div class="col-sm-8  text-end text-capitalize"><input type="file" accept="image/*" onchange="preview(this)" name="id_back" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white preview" required></div>
                                                        <div class="col-9 mx-auto image-preview">
                                                            <img src="" alt="" class="w-100 h-auto my-2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="photo" role="tabpanel" aria-labelledby="photo-tab" tabindex="0">
                                                    <div class="row py-2">
                                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">upload image:</div>
                                                        <div class="col-sm-8  text-end text-capitalize"><input type="file" accept="image/*" onchange="preview(this)" name="passport_photo" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white preview" required></div>
                                                        <div class="col-9 mx-auto image-preview">
                                                            <img src="" alt="" class="w-100 h-auto my-2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex py-2 justify-content-between w-100">
                                        <a class="btn" onclick="show('nav-home')"><i class="fas fa-caret-square-left fa-3x t-y "></i></a>
                                        <a class="btn" onclick="show('nav-contact')"><i class="fas fa-caret-square-right fa-3x t-y "></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                    <div class="fs-3 text-uppercase text-center t-b py-5">OPERATING MODE</div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">super fast mode:</div>
                                        <div class="col-sm-8  text-start text-capitalize fw-bold">FCFA 200,000</div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">fast mode:</div>
                                        <div class="col-sm-8  text-start text-capitalize fw-bold">FCFA 150,000</div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">normal mode:</div>
                                        <div class="col-sm-8  text-start text-capitalize fw-bold">FCFA 100,000</div>
                                    </div>
                                    <div class="row py-2 border-top my-4">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">mode:</div>
                                        <div class="col-sm-8  text-end text-capitalize"><select name="mode" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white " required>
                                            <option value="" selected>select mode</option>
                                            @forelse(\App\Models\Mode::all() as $mode)
                                            <option value="{{$mode->id}}">{{$mode->name}}</option>
                                            @empty
                                            <option value="" selected>No mode available</option>
                                            @endforelse
                                        </select></div>
                                    </div>
                                    <div class="d-flex py-2 justify-content-between w-100">
                                        <a class="btn" onclick="show('nav-profile')"><i class="fas fa-caret-square-left fa-3x t-y "></i></a>
                                        <a class="btn" onclick="show('nav-disabled')"><i class="fas fa-caret-square-right fa-3x t-y "></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
                                    <div class="fs-3 text-uppercase text-center t-b py-5">TRAINING SESSION</div>
                               
                                    <div class="row py-2 border-top my-4">
                                        <div class="col-sm-3 col-md-2 text-end text-capitalize">session:</div>
                                        <div class="col-sm-8  text-end text-capitalize"><select name="session" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white " required>
                                            <option value="" selected>select session</option>
                                            @forelse(\App\Models\Sessionz::all() as $item)
                                                <option value="{{$item->id}}" class="text-uppercase"><span class="t-b mr-1">From {{date('l dS M Y', strtotime($item->start))}}</span> <span class="fw-bolder t-b px-2 fs-4">&rAarr;</span> <span class="t-y ml-1">To {{date('l dS M Y', strtotime($item->end))}}</span></option>
                                            @empty
                                                <option value="" selected>No sessions are set.</option>
                                            @endforelse
                                        </select></div>
                                    </div>
                                    <div class="d-flex py-2 justify-content-start w-100">
                                        <a class="btn" onclick="show('nav-contact')"><i class="fas fa-caret-square-left fa-3x t-y "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <input type="submit" value="Comfirm" class="px-4 py-2 btn btn-dark">
                            </div>
                        </div>
                    </form>
                </div>
            @endif

            @if(request('action')=='details')
                @php($apl = \App\Models\Application::find(request('id')))
                <div class="">
                    <div class="text-center py-2 fs-4 text-center t-b text-uppercase">
                        Application {{$apl->status ?? 'state unknown'}}
                    </div>
                    <div class="d-flex flex-wrap bb-b">
                        <div class="col-sm-8 py-5  t-y fs-5">
                            <div class="py-2 fw-bold"><span class="col-sm-3 d-block text-capitalize t-b d-sm-inline-block">name:</span> <span class="text-capitalize col-9 px-1">{{$apl->first_name.' '.$apl->last_name}} </span></div>
                            <div class="py-2 fw-bold"><span class="col-sm-3 d-block text-capitalize t-b d-sm-inline-block">date of birth:</span> <span class="text-capitalize col-9 px-1">{{$apl->dob}} </span></div>
                            <div class="py-2 fw-bold"><span class="col-sm-3 d-block text-capitalize t-b d-sm-inline-block">place of birth:</span> <span class="text-capitalize col-9 px-1">{{$apl->pob}} </span></div>
                        </div>
                        <div class="col-sm-4 p-2">
                            <img src="{{asset('storage/uploads/images/passport/'.$apl->passport_photo)}}" alt="" class="img img-thumbnail mx-auto" style="max-height: 12rem; max-width: 100%;">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap bb-b">
                        <div class="col-sm-4 p-2">
                            <img src="{{asset('storage/uploads/images/id/front/'.$apl->id_front)}}" alt="" class="img img-thumbnail mx-auto" style="max-height: 12rem; max-width: 100%;">
                        </div>
                        <div class="col-sm-8 py-5  t-y fs-5">
                            <div class="py-2 fw-bold"><span class="col-sm-3 d-block text-capitalize t-b d-sm-inline-block">NIC number:</span> <span class="text-capitalize col-9 px-1">{{$apl->cni_number}} </span></div>
                            <div class="py-2 fw-bold"><span class="col-sm-3 d-block text-capitalize t-b d-sm-inline-block">NIC post:</span> <span class="text-capitalize col-9 px-1">{{$apl->cni_post}} </span></div>
                            <div class="py-2 fw-bold"><span class="col-sm-3 d-block text-capitalize t-b d-sm-inline-block">NIC date:</span> <span class="text-capitalize col-9 px-1">{{$apl->cni_date}} </span></div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap bb-b">
                        <div class="col-sm-4 p-2">
                            <img src="{{asset('storage/uploads/images/id/back/'.$apl->id_back)}}" alt="" class="img img-thumbnail mx-auto" style="max-height: 12rem; max-width: 100%;">
                        </div>
                        <div class="col-sm-8 py-5  t-y fs-5">
                            <div class="py-2 fw-bold"><span class="col-sm-3 d-block text-capitalize t-b d-sm-inline-block">mode:</span> <span class="text-capitalize col-9 px-1">{{\App\Models\Mode::find($apl->mode)->name}} </span></div>
                            <div class="py-2 fw-bold"><span class="col-sm-3 d-block text-capitalize t-b d-sm-inline-block">session:</span>@php($sessionz = \App\Models\Sessionz::find($apl->session))
                                 <span class="text-capitalize col-9 px-1">{{'From '.$sessionz->start.' To '.$sessionz->end}} </span></div>
                        </div>
                    </div>

                </div>
            @endif

        </div>
    </div>
</div>
@endsection
@section('script')
<script>

    function show(id){
        document.querySelectorAll('.tab-pane').forEach(function(elt, key, parent){
            elt.classList.remove('show');
            elt.classList.remove('active');
            // document.querySelector('#'+el.id+'-tab').classList.remove('active');
        });

        document.querySelector('#'+id).classList.add('active');
        document.querySelector('#'+id).classList.add('show');
        // document.querySelector('#'+id+'-tab').classList.add('active');
    }

    function preview(element) {
        console.log(element.files[0]);
        element.parentElement.nextElementSibling.querySelector('img').src = URL.createObjectURL(element.files[0]);
    }
</script>
@endsection
