@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.about_us.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.about.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">{{ trans('global.title') }}*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($about) ? $about->title : '') }}">
                @if($errors->has('title'))
                    <p class="help-block">
                        {{ $errors->first('title') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('desc') ? 'has-error' : '' }}">
                <label for="desc">{{ trans('global.about_us.fields.desc') }}</label>
                <textarea id="desc" name="desc" class="form-control ">{{ old('desc', isset($about) ? $about->desc : '') }}</textarea>
                @if($errors->has('desc'))
                    <p class="help-block">
                        {{ $errors->first('desc') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.about_us.fields.desc_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('img') ? 'has-error' : '' }}" style="max-width: 40%;">
                <label for="img">{{ trans('global.about_us.fields.img') }}</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="img" name="img" class="custom-file-input about">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
                @if($errors->has('img'))
                    <p class="help-block">
                        {{ $errors->first('img') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.about_us.fields.img_helper') }}
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
        $('.about').on('change',function(e){
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
        })
    </script>
@endsection