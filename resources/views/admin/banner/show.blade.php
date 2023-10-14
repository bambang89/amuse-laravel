@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.banner.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.banner.fields.name') }}
                    </th>
                    <td>
                        {{ $banner->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.banner.fields.img') }}
                    </th>
                    <td>
                        {!! $banner->img ?? '' !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.banner.fields.desc') }}
                    </th>
                    <td>
                        {!! $banner->desc ?? '' !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection