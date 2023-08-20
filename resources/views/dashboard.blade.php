<x-app-layout>

@foreach($posts as $post)
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </div>
                <div class="col-4 d-flex">
                    <div>
                        <h1><a href="{{route("profile.index",$post->user->id)}}"  {{$post->user->username}} </a></h1>
                        <br>
                        <p>{{$post->caption}}</p>

                    </div>

                </div>
            </div>
        </div>

@endforeach




</x-app-layout>

