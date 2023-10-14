<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBannerRequest;
use App\Banner;

class BannerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        $banners = Banner::all();

        return view('admin.banner.index', compact('banners'));
    }

    public function store(StoreBannerRequest $request)
    {
        abort_unless(\Gate::allows('permission_access'), 403);
        
        $data = $request->all();
        if($request->file('img')){
            $file     = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('img/banner', $filename);
            $data['img'] = $filename;
        }

        $banner = Banner::create($data);

        return redirect()->route('admin.banner.index');
    }

    public function create()
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        return view('admin.banner.create');
    }

    public function edit(Banner $banner)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        return view('admin.banner.edit', compact('banner'));
    }

    public function destroy(Banner $banner)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        $banner->delete();

        return back();
    }

    public function show(Banner $banner)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        return view('admin.banner.show', compact('banner'));
    }

    public function massDestroy(Request $request)
    {
        Banner::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
