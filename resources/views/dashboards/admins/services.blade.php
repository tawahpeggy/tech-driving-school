@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light py-3">
    <div class="my-1 px-2 w-100">
        @if(!request('action'))
            <!-- display services -->
            <div class="d-flex justify-content-end py-2">
                <a href="{{\Request::url().'?action=create'}}" class="rounded b-b t-w px-2 text-decoration-none bg-b">new</a>
            </div>
            <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt fugit voluptates omnis dicta eos, magnam quasi similique libero a dignissimos reiciendis inventore ea magni amet voluptatem molestias ex vero aut! -->
            <table class="table">
                <thead class="bg-y py-1 t-w">
                    <th>#</th>
                    <th>name</th>
                    <th>description</th>
                    <th></th>
                </thead>
                @php($cnt = 1)
                <tbody>
                    @forelse(\App\Models\Service::all() as $service)
                    <tr class="bb-b">
                        <td class="border border-bottom-0 border-top-0">{{$cnt++}}</td>
                        <td class="border border-bottom-0 border-top-0">{{$service->name}}</td>
                        <td class="border border-bottom-0 border-top-0">{{$service->text}}</td>
                        <td class="border border-bottom-0 border-top-0 d-flex flex-wrap">
                            <a href="{{\Request::url().'?action=details&id='.$service->id}}" class="b-w rounded bg-y t-q py-1 px-2 text-decoration-none d-inline-block"><i class="fas fa-eye    "></i></a>
                            <a href="{{\Request::url().'?action=edit&id='.$service->id}}" class="b-w rounded bg-y t-q py-1 px-2 text-decoration-none d-inline-block"><i class="fas fa-edit    "></i></a>
                            <a href="{{\Request::url().'/delete/'.$service->id}}" class="b-w rounded bg-y t-q m-2 py-1 px-2 text-decoration-none d-inline-block"><i class="fas fa-trash-alt    "></i></a>
                        </td>
                    </tr>
                    @empty
                    <p class="w-100 text-center">No services available</p>
                    @endforelse
                </tbody>
            </table>
        @endif
        @if(request('action')=='create')
            <div class="w-100">
                <form action="{{Request::url()}}" method="post" class="form col-sm-8 mx-auto rounded" enctype="multipart/form-data">
                    <div class="text-center h4 fw-bold t-b py-4 text-capitalize">new service</div>
                    @csrf
                    <div class="input-group py-2 px-4 bg-transparent border-0 border-bottom">
                        <span class="input-group-text t-b col-3 rounded-0 bg-transparent border-0">name</span>
                        <input type="text" name="name" id="" required class="form-control rounded-0 bg-transparent border-0">
                    </div>
                    <div class="input-group py-2 px-4 bg-transparent border-0 border-bottom">
                        <span class="input-group-text t-b col-3 rounded-0 bg-transparent border-0">description</span>
                        <textarea name="text" id="" required class="form-control rounded-0 bg-transparent border-0" rows="3"></textarea>
                    </div>
                    <div class="input-group py-2 px-4 bg-transparent border-bottom">
                        <span class="input-group-text t-b col-3 rounded-0 bg-transparent border-0">icon(optional)</span>
                        <input type="file" accept="image" max="1999" name="name" id="" class="form-control rounded-0 bg-transparent border-0">
                    </div>
                    <div class="d-flex justify-content-end py-3">
                        <input type="submit" name="" id="" value="confirm" class="rounded bg-y t-w px-3 py-1 b-y">
                    </div>
                </form>
            </div>
        @endif
        @if(request('action')=='details')
            @php($service = \App\Models\Service::find(request('id')))
            <div class="col-sm-11 col-md-9 mx-auto">
                <div class="d-flex justify-content-center h4 fw-bold">
                    @if(isset($service->icon) && $service->icon != null)
                    <img src="{{asset('storage/uploads/images/services/'.$service->icon ?? '')}}" alt="" style="width: 4rem; height: 4rem;" class="img-rounded img">
                    @else
                    <i class="fas fa-server fa-3x t-b img img-thumbnail bg-w border"></i>
                    @endif
                </div>
                <div class="text-center py-1 t-y h4 fw-bold">{{$service->name}}</div>
                <div class="text-center py-1 t-b h4 fw-bold">{{$service->text}}</div>
            </div>
        @endif
        @if(request('action')=='edit')
            @php($service = \App\Models\Service::find(request('id') ?? 0));
            <div class="w-100">
                <form action="{{Request::url()}}" method="post" class="form col-sm-8 mx-auto rounded" enctype="multipart/form-data">
                    <div class="text-center h4 fw-bold t-b py-4 text-capitalize">edit service</div>
                    @csrf
                    <div class="input-group py-2 px-4 bg-transparent border-0 border-bottom">
                        <span class="input-group-text t-b col-3 rounded-0 bg-transparent border-0">name</span>
                        <input type="text" name="name" id="" required class="form-control rounded-0 bg-transparent border-0" value="{{$service->name ?? ''}}">
                    </div>
                    <div class="input-group py-2 px-4 bg-transparent border-0 border-bottom">
                        <span class="input-group-text t-b col-3 rounded-0 bg-transparent border-0">description</span>
                        <textarea name="text" id="" required class="form-control rounded-0 bg-transparent border-0" rows="3" >{{$service->text ?? ''}}</textarea>
                    </div>
                    <div class="input-group py-2 px-4 bg-transparent border-bottom">
                        <span class="input-group-text t-b col-3 rounded-0 bg-transparent border-0"><img src="{{asset('storage/uploads/images/services/'.$service->icon ?? '')}}" alt="" width="1.2rem" height="1.2rem"></span>
                        <span class="input-group-text t-b col-3 rounded-0 bg-transparent border-0">icon(optional)</span>
                        <input type="file" accept="image" max="1999" name="name" id="" class="form-control rounded-0 bg-transparent border-0">
                    </div>
                    <div class="d-flex justify-content-end py-3">
                        <input type="submit" name="" id="" value="confirm" class="rounded bg-y t-w px-3 py-1 b-y">
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