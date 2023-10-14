@extends('layouts.admin')
@section('content')
@can('permission_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.about.create") }}">
                {{ trans('global.add') }} {{ trans('global.about_us.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('global.about_us.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered datatable">
                <thead>
                    <tr>
                        <th style="width: 10px">
                        </th>
                        <th style="width: 10px">
                            {{ trans('global.about_us.fields.no') }}
                        </th>
                        <th>
                            {{ trans('global.title') }}
                        </th>
                        <th>
                            {{ trans('global.about_us.fields.img') }}
                        </th>
                        <th>
                            {{ trans('global.about_us.fields.desc') }}
                        </th>
                        <th>
                            {{ trans('global.about_us.fields.created_at') }}
                        </th>
                        <th>
                            {{ trans('global.about_us.fields.action') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0 ?>
                    @foreach($about_us as $key => $about)
                        <?php $no++ ?>
                        <tr data-entry-id="{{ $about->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $no }}
                            </td>
                            <td>
                                {{ $about->title ?? '' }}
                            </td>
                            <td>
                                {{ $about->img ?? '' }}
                            </td>
                            <td>
                                {{ $about->desc ?? '' }}
                            </td>
                            <td>
                                {{ $about->created_at ?? '' }}
                            </td>
                            <td>
                                <!-- @can('permission_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.about.show', $about->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan -->
                                @can('permission_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.about.edit', $about->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('permission_delete')
                                    <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.about.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('permission_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection