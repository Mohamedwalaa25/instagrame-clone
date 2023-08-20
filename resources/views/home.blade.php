<x-app-layout>
    <div class="container">
        <div class="raw">
            <div class="col-3 p-5">
                <img
                    src="/storage/{{$user->profile->profileImage()}}"
                    class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">


                        <h1>{{$user->name}}</h1>
                        <button class="btn btn-primary ml-4-">Follow</button>
                        <br>

                    </div>
                    <a href="{{route("post.create")}}"> Add New Post</a>


                    <div class="d-flex">
                        <div class="pr-5"><strong>{{$user->post->count()}} </strong>posts</div>
                        <div class="pr-5"><strong>23k</strong>followers</div>
                        <div class="pr-5"><strong>212</strong>following</div>
                    </div>
                    <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
                    <div>{{$user->profile->description}}</div>
                    <div><a href="#" {{$user->profile->url}} </a></div>
                </div>
            </div>

            <div class="row pt-5">
                @foreach($user->post as $posts)
                    <div class="col-4 pb-4">
                        <a href="{{route('post.show',$posts->id)}}">
                            <img src="/storage/{{ $posts->image }}" class="w-9">
                        </a>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>

</x-app-layout>


