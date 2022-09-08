@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light py-3">
    <div class="my-1 px-2 w-100">
        @if(!request('action'))
        <div class="d-flex justify-content-end py-3">
            <a href="{{\Request::url().'?action=create'}}" class="rounded py-1 px-3 bg-y t-w fw-bold text-decoration-none">add info</a>
        </div>
        <div class="w-100 py-3">
            <table class="table table-stripped">
                <thead class="t-w bg-b py-1">
                    <th class="b-w">#</th>
                    <th class="b-w">Name</th>
                    <th class="b-w">Info</th>
                    <th class="b-w">Access</th>
                    <th class="b-w"></th>
                </thead>
                @php($cnt = 1)
                @php($bul = false)
                <tbody>
                    @forelse(\App\Models\Info::all() as $info)
                    <tr class="{{$bul ? 't-w bg-y' : 't-b bg-w'}} bb-b pb-1">
                        <td class="b-w">{{$cnt++}}</td>
                        <td class="b-w">{{$info->name}}</td>
                        <td class="b-w">{{$info->data}}</td>
                        <td class="b-w">{{$info->access}}</td>
                        <td class="b-w">
                            <a href="{{\Request::url().'?action=edit'}}" class="px-2 mx-1 rounded text-decoration-none t-success"><i class="fas fa-edit    "> edit</i></a>
                            <a href="{{\Request::url().'/delete/'.$info->id}}" class="px-2 mx-1 rounded text-decoration-none text-danger"><i class="fas fa-trash-alt    "> delete</i></a>
                        </td>
                    </tr>
                    @php($bul = !$bul)
                    @empty
                    <p class="text-center">No data found</p>
                    @endforelse
                </tbody>
            </table>
        </div>
        @endif
        @if(request('action')=='create')
        <div class="w-100 py-3">
            <form action="{{\Request::url()}}" method="post" class="form bg-w rounded-2 b-b col-sm-9 col-md-7 mx-auto">
                <div class="text-center t-b py-2">
                    Add Info
                </div>
                @csrf
                <div class="w-100 bg-light px-4 py-5">
                    <div class="input-group py-1 t-b">
                        <span class="input-group-text">name</span>
                        <input type="text" name="name" id="" class="form-control" required>
                    </div>
                    <div class="input-group py-1 t-b">
                        <span class="input-group-text">access</span>
                        <select name="access" class="form-control" required id="">
                            <option value="" selected disabled></option>
                            <option value="admin">administrative</option>
                            <option value="public">public</option>
                        </select>
                    </div>
                    <div class="input-group py-1 t-b">
                        <span class="input-group-text">data</span>
                        <textarea name="data" id="" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="py-3 d-flex justify-content-end px-4">
                    <input type="submit" value="save" class="t-w bg-b py-1 px-2 rounded border-none" name="" id="">
                </div>
            </form>
        </div>
        @endif
        @if(request('action')=='edit')
        <div class="w-100 py-3">
            @php($info = \App\Models\Info::find(request('id'))
            <form action="{{\Request::url().'/update/'.request('id')}}" method="post" class="form bg-w rounded-2 b-b col-sm-9 col-md-7 mx-auto">
                <div class="text-center t-b py-2">
                    edit Info
                </div>
                @csrf
                <div class="w-100 bg-light px-4 py-5">
                    <div class="input-group py-1 t-b">
                        <span class="input-group-text">name</span>
                        <input type="text" name="name" id="" class="form-control" value="{{$info->name}}" required>
                    </div>
                    <div class="input-group py-1 t-b">
                        <span class="input-group-text">access</span>
                        <select name="access" class="form-control" required id="">
                            <option value="" selected disabled></option>
                            <option value="admin" {{$inf0->access == 'admin' ? selected : ''}}>administrative</option>
                            <option value="public" {{$inf0->access == 'public' ? selected : ''}}>public</option>
                        </select>
                    </div>
                    <div class="input-group py-1 t-b">
                        <span class="input-group-text">data</span>
                        <textarea name="data" id="" rows="4" class="form-control">{{$info->data}}</textarea>
                    </div>
                </div>
                <div class="py-3 d-flex justify-content-end px-4">
                    <input type="submit" value="update" class="t-w bg-b py-1 px-2 rounded border-none" name="" id="">
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