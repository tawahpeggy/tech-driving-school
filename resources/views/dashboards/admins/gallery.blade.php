@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light py-3">
    <div class="my-1 px-2 col-sm-11 col-md-9 mx-auto">
    @if(!request('action'))
    <div class="d-flex justify-content-end py-2"><a href="{{Request::url().'?action=create'}}" class="t-w bg-y px-3 py-1 rounded text-decoration-none">new</a></div>
    <div class="d-flex flex-wrap justify-content-center">
            @forelse(\App\Models\Gallery::all() as $gal)
            <div class="card m-1" style="height: 7rem; width:auto;">
                <img src="{{asset('storage/uploads/images/gallery/'.$gal->name ?? '')}}" alt="" class="card-img-top w-auto h-100">
                <div class="card-img-overlay text-center">
                    <a href="{{\Request::url().'/delete/'.$gal->id}}" class="rounded-circle p-3 bg-w t-b b-w fas fa-trash-alt"></a>
                </div>
            </div>
            @empty
            <div class="text-center py-3">No gallery items found</div>
            @endforelse
        </div>
        @endif
        @if(request('action')=='create')
        <div class="">
            <form action="{{\Request::url()}}" method="post" class="px-3 py-4 rounded-2 " enctype="multipart/form-data">
                @csrf
                <div class="text-center h5 t-y fw-bold text-capitalize py-2">New Gallery Item</div>
                <div class="input-group py-2">
                    <span class="input-group-text">type</span>
                    <select name="type" id="" class="form-control" required>
                        <option value="" selected>select type</option>
                        <option value="1">Type 1 gallery</option>
                        <option value="2">Type 2 gallery</option>
                    </select>
                </div>
                <div class="input-group py-2">
                    <span class="input-group-text">image</span>
                    <input type="file" accept="image/*" name="image" id="" class="form-control" required>
                </div>
                <div class="py-4 d-flex justify-content-end">
                    <input type="submit" name="" id="" class="py-1 px-3 bg-y t-w rounded" value="save">
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