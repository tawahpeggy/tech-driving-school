@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light py-3">
    <div class="my-1 px-2 w-100">
        <div class="col-xs-11 col-md-9 mx-auto">
            @if(!request('action'))
            <div class="d-flex justify-content-end py-3">
                <a href="{{\Request::url().'?action=create'}}" class="px-2 py-1 bg-y t-w rounded fw-bold text-decoration-none">new post</a>
            </div>
            <div class="d-flex flex-wrap">
                @forelse(\App\Models\Blog::all() as $post)
                <div class="card col-sm-10 col-md-5 my-1 mx-auto">
                    @if($post->image != null)
                    <img src="{{asset('storage/uploads/images/blog/'.$post->image )}}" alt="" class="card-img-top img img-rounded">
                    @else
                    <span class="card-img-top fas fa-server fa-3x m-1"></span>
                    @endif
                    <h4 class="py-1 fw-bold text-center">{{$post->title}}</h4>
                    <div class="card-body">
                        <p class="card-text text-justify">{{$post->text}}</p>
                    </div>
                    @if($post->links != null)
                    <div class="card-footer">
                        
                    </div>
                    @endif
                </div>
                @empty
                <div class="d-flex text-center">No posts found. Create new posts to populate blog.</div>
                @endforelse
            </div>
            @endif
            @if(request('action') == 'create')
            <div class="rounded-2 bg-y py-2 px-2">
                <form action="{{\Request::url()}}" method="post" enctype="multipart/form-data" class="w-100 form b-y" style="background-color: rgba(250, 250, 254, 0.9);">
                    @csrf
                    <h4 class="text-center t-y fw-bold py-2">new post</h4>
                    <div class="d-flex flex-wrap">
                        <div class="col-xs-12 col-md-6 py-3 px-4 border-right" style="background-color: rgba(250, 250, 254, 0.9);">
                            <div class="input-group col-10 mx-auto my-2">
                                <span class="input-group-text">title</span>
                                <input type="text" name="title" id="" class="form-control" required>
                            </div>
                            <div class="input-group col-10 mx-auto my-2">
                                <span class="input-group-text">text</span>
                                <textarea name="text" id="" class="form-control" required rows="4"></textarea>
                            </div>
                            <div class="input-group col-10 mx-auto my-2">
                                <span class="input-group-text">image</span>
                                <input type="file" name="image" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 py-3 px-4 border-left" style="background-color: rgba(250, 250, 254, 0.9);">
                            <div class="form-group col-10 mx-auto my-2" id="linkBox">
                                <span class="input-group-text">links <a class="form-control text-decoration-none bg-y text-w py-1" onclick="addLink()"><i class="fas fa-plus"></i>add link</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pt-5 pb-2"><input type="submit" value="create" name="" id="" class="bg-y t-w rounded py-1 px-2 fw-bold "></div>
                </form>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    let index = 0;
    function addLink() {
        html = `<div class="input-group col-10 mx-auto my-2">
                        <input type="text" name="labels[]" id="" class="form-control" placeholder="link label or name" required>
                        <input type="url" name="urls[]" id="" class="form-control" placeholder="url" required>
                    </div>`;
        let template = document.createElement('div');
        template.innerHTML = html;
        document.querySelector('#linkBox').append(template);
    }
</script>
@endsection