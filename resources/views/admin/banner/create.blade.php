@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.banner.title_singular') }}
    </div>

    <div class="card-body">
        <form autocomplete="off" action="{{ route("admin.banner.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.banner.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($banner) ? $banner->name : '') }}">
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.banner.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('desc') ? 'has-error' : '' }}">
                <label for="desc">{{ trans('global.banner.fields.desc') }}</label>
                <textarea id="desc" name="desc" class="form-control ">{{ old('desc', isset($banner) ? $banner->desc : '') }}</textarea>
                @if($errors->has('desc'))
                    <p class="help-block">
                        {{ $errors->first('desc') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.banner.fields.desc_helper') }}
                </p>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>{{ trans('global.banner.type') }}</label>
                    <select id="type" name="type" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
            <div class="form-group {{ $errors->has('img') ? 'has-error' : '' }}" style="max-width: 40%;">
                <label for="img">{{ trans('global.banner.fields.img') }}</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="img" name="img" class="custom-file-input banner">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
                @if($errors->has('img'))
                    <p class="help-block">
                        {{ $errors->first('img') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.banner.fields.img_helper') }}
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
        $('.banner').on('change',function(e){
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
        })
    </script>
@endsection