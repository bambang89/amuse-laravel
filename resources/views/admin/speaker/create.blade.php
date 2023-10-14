@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.speak.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.speaker.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.speak.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($speaker) ? $speaker->name : '') }}">
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.speak.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('standing') ? 'has-error' : '' }}">
                <label for="standing">{{ trans('global.speak.fields.standing') }}</label>
                <input type="text" id="standing" name="standing" class="form-control" value="{{ old('standing', isset($speaker) ? $speaker->standing : '') }}">
                @if($errors->has('standing'))
                    <p class="help-block">
                        {{ $errors->first('standing') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.speak.fields.standing_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('img') ? 'has-error' : '' }}" style="max-width: 40%;">
                <label for="img">{{ trans('global.speak.fields.img') }}</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="img" name="img" class="custom-file-input speaker">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
                @if($errors->has('img'))
                    <p class="help-block">
                        {{ $errors->first('img') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.speak.fields.img_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
@parent
    <script>
        $('.speaker').on('change',function(e){
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
        })
    </script>
@endsection