<x-app-layout>

    <x-guest-layout>
        <div class="container">
            <form action="{{route('profile.update.setting',auth()->user()->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')

                <div class="row">
                    <div class="col-8 offset-2">

                        <div class="row">
                            <h1>Edit Your Profile</h1>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label">title</label>

                            <input id="title"
                                   type="text"
                                   class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                   name="title"
                                   value="{{ old('title',auth()->user()->profile->title)}}"
                                   autocomplete="title" autofocus>

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="row">
                            <label for="description" class="col-md-4 col-form-label">description</label>

                            <input type="text" class="form-control-file" value="{{old('description',auth()->user()->profile->description)}}" id="description" name="description">

                            @if ($errors->has('description'))
                                <strong>{{ $errors->first('description') }}</strong>
                            @endif
                        </div>
                        <div class="row">
                            <label for="url" class="col-md-4 col-form-label">url</label>

                            <input type="text" class="form-control-file"
                                   value="{{old('url', auth()->user()->profile->url)}}"
                                   id="url" name="url">

                            @if ($errors->has('url'))
                                <strong>{{ $errors->first('url') }}</strong>
                            @endif
                        </div>


                        <div class="row">
                            <label for="image" class="col-md-4 col-form-label">Your Image</label>

                            <input type="file" class="form-control-file"  value="{{old('image',auth()->user()->profile->image)}}" id="image" name="image">

                            @if ($errors->has('image'))
                                <strong>{{ $errors->first('image') }}</strong>
                            @endif
                        </div>

                        <div class="row pt-4">
                            <button class="btn btn-primary">Update</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </x-guest-layout>
</x-app-layout>
