@extends('layouts.admin')
@section('content')
<!-- @can('permission_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.banner.create") }}">
                {{ trans('global.add') }} {{ trans('global.banner.title_singular') }}
            </a>
        </div>
    </div>
@endcan -->
<div class="card">
    <div class="card-header">
        Member List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered datatable">
                <thead>
                    <tr>
                        <th style="width: 10px">
                        </th>
                        <th style="width: 10px">
                            {{ trans('global.banner.fields.no') }}
                        </th>
                        <th>
                            Fullname
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            No Telpon
                        </th>
                        <th>
                            Pekerjaan
                        </th>
                        <th>
                            Bukti Transfer
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0 ?>
                    @foreach($members as $key => $member)
                        <?php $no++ ?>
                        <tr data-entry-id="{{ $member->id }}">
                            <td>
                            </td>
                            <td>
                                {{ $no }}
                            </td>
                            <td>
                                {{ $member->fullname ?? '' }}
                            </td>
                            <td>
                                {{ $member->email ?? '' }}
                            </td>
                            <td>
                                {{ $member->phone ?? '' }}
                            </td>
                            <td>
                                {{ $member->occupation ?? '' }}
                            </td>
                            <td>
                                {{ $member->proof_img ?? '' }}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection