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
                    @if(!isset($data) || $data ==null)
                        <div class="my-5 text-center t-b fs-3">No schedule available</div>
                    @else
                    <div class="fs-3 text-uppercase fw-bold t-b py-2">SCHEDULE</div>
                    
                    <div class="col-9 mx-auto">
                        <table class="table table-stripped fs-5">
                            <div class="text-center t-b fs-4 fw-bold text-capitalize my-3 table-title" id="index-title">Time table</div>
                            <div class="col-9 mx-auto input-group rounded-0">
                                <span class="input-group-text rounded-0">Select schedule</span>
                                <select name="schedule" id="" onchange="updateSchedule(event)" class="form-control text-center rounded-0">
                                    <option value="" selected>------</option>
                                    @foreach(\App\Models\TimeTable::all() as $time_table)
                                        <option value="{{$time_table->id}}" class="text-uppercase">{{$time_table->title .' ( From '.$time_table->start_date .' To '.$time_table->end_date.')'}}</option>
                                    @endforeach
                                </select>
                               
                            </div>
                            <thead class="bg-b t-w py-1 fs-6">
                                <th class="text-uppercase fw-bold">day\time</th>
                                <th class="text-uppercase">9am-11am</th>
                                <th class="text-uppercase">11am-1pm</th>
                                <th class="text-uppercase">1pm-3pm</th>
                                <th class="text-uppercase">3pm-5pm</th>
                            </thead>
                            <tbody id="index-table-body">
                                
                            </tbody>
                        </table>
                        <div id="btn"></div>
                    </div>
                @endif
                </div>

                <div class="tab-pane fade py-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="fs-3 text-uppercase t-b py-2 fw-bold">NEW Schudule</div>
                    <form action="{{route('admin.schedules')}}" method="post" class="col-9 mx-auto">
                        @csrf
                        <div class="">
                            <table class="table table-stripped fs-5">
                                <div class="text-center t-b fs-4 fw-bold text-capitalize my-3 table-title">Time table</div>
                                <div class="d-flex flex-wrap">
                                    <div class="col-sm px-1">
                                        <div class="input-group rounded-0 my-1">
                                            <span class="input-group-text" id="basic-addon3">Title</span>
                                            <input type="text" class="form-control" name="title" required aria-describedby="basic-addon3">
                                          </div>
                                    </div>
                                    <div class="col-sm px-1">
                                        <div class="input-group rounded-0 my-1">
                                            <span class="input-group-text" id="basic-addon3">From</span>
                                            <input type="date" class="form-control" name="start_date" required aria-describedby="basic-addon3">
                                          </div>
                                    </div>
                                    <div class="col-sm px-1">
                                        <div class="input-group my-1 rounded-0">
                                            <span class="input-group-text" id="basic-addon3">To</span>
                                            <input type="date" class="form-control" name="end_date" required aria-describedby="basic-addon3">
                                          </div>
                                    </div>
                                </div>
                                <thead class="bg-b t-w py-1 fs-6">
                                    <th class="text-uppercase fw-bold">day\time</th>
                                    <th class="text-uppercase">9am-11am</th>
                                    <th class="text-uppercase">11am-1pm</th>
                                    <th class="text-uppercase">1pm-3pm</th>
                                    <th class="text-uppercase">3pm-5pm</th>
                                </thead>
                                @for($i=1, $b=true; $i < 7; $i++, $b=!$b)
                                <tr style="background-color: {{$b? '#eee' : '#dde'}}">
                                    <th class="fw-bold fs-6 text-uppercase border border-top-0 border-bottom-0">{{Illuminate\Support\Facades\Date::getDays()[$i]}}</th>
                                    <td class="border border-top-0 border-bottom-0 fs-6">
                                        <select name="schedules[{{$i}}][]" id="" class="form-control text-center">
                                            <option value="-----" selected>-----</option>
                                            <option value="theory">Theory</option>
                                            <option value="practical">Practical</option>
                                        </select>
                                    </td>
                                    <td class="border border-top-0 border-bottom-0 fs-6">
                                        <select name="schedules[{{$i}}][]" id="" class="form-control text-center">
                                            <option value="-----" selected>-----</option>
                                            <option value="theory">Theory</option>
                                            <option value="practical">Practical</option>
                                        </select>
                                    </td>
                                    <td class="border border-top-0 border-bottom-0 fs-6">
                                        <select name="schedules[{{$i}}][]" id="" class="form-control text-center">
                                            <option value="-----" selected>-----</option>
                                            <option value="theory">Theory</option>
                                            <option value="practical">Practical</option>
                                        </select>
                                    </td>
                                    <td class="border border-top-0 border-bottom-0 fs-6">
                                        <select name="schedules[{{$i}}][]" id="" class="form-control text-center">
                                            <option value="-----" selected>-----</option>
                                            <option value="theory">Theory</option>
                                            <option value="practical">Practical</option>
                                        </select>
                                    </td>
                                </tr>
                                @endfor
                            </table>
                        </div>
                        <div class="col-11 d-flex justify-content-end py-2">
                            <input type="submit" value="submit" id="" class="btn btn-default border-dark text-capitalize">
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <div class="fs-3 text-uppercase fw-bold t-b py-2">UPDATE MODE</div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
 <script>
    let dayOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
    function updateSchedule(event){
        let id = event.target.value;
        if (id != null | id != '') {
            document.querySelector('#index-title').textContent = event.target.options[event.target.selectedIndex].text;
            let url = "{{route('admin.schedule', '__id__')}}";
            url = url.replace('__id__', id);
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if (this.status == 200 && this.readyState == 4) {
                    let data = JSON.parse(JSON.parse(this.response)['schedules']);
                    let html = ``;
                    let i = 0, b = true;
                    const c1 = '#eee', c2 = '#dde';
                    for (const key in data) {
                        const element = data[key];
                        html = html + `
                        <tr style="background-color: __color__" class="bb-b">
                            <th class="fw-bold fs-6 text-uppercase border border-top-0 border-bottom-0 t-b">`+dayOfWeek[i+1]+`</th>
                            <td class="border border-top-0 border-bottom-0 fs-6 text-uppercase fw-bold">
                                `+element[0]+`
                            </td>
                            <td class="border border-top-0 border-bottom-0 fs-6 text-uppercase fw-bold">
                                `+element[1]+`
                            </td>
                            <td class="border border-top-0 border-bottom-0 fs-6 text-uppercase fw-bold">
                                `+element[2]+`
                            </td>
                            <td class="border border-top-0 border-bottom-0 fs-6 text-uppercase fw-bold">
                                `+element[3]+`
                            </td>
                        </tr>
                        `.replace('__color__', b ? c1 : c2);
                        i++;
                        b = !b;
                    }
                    let btn = `<div class="d-flex justify-content-end pt-2">
                                <button onclick="edit(`+id+`)" class="rounded-pill px-5 py-2 fs-5 fw-bold t-b bg-y border-0"><span class="fas fa-edit mr-1"></span>edit</button>
                            </div>`;
                    // console.log(html);
                    document.querySelector('#index-table-body').innerHTML = html;
                    document.querySelector('#btn').innerHTML = btn;
                    
                }
            }
            xhr.open('GET', url);
            xhr.send();
        }
    }

    function edit(id) {
        alert(id);
    }
</script>
@endsection