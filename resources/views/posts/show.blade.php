<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
            <div class="col-4 d-flex">
                <div>
                    <h3> {{$post->user->username}}</h3>
                    <p>{{$post->caption}}</p>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
