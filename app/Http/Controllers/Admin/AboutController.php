<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AboutUs;

class AboutController extends Controller
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

        $about_us = AboutUs::all();

        return view('admin.about.index', compact('about_us'));
    }

    public function store(Request $request)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        $data = $request->all();

        if($request->file('img')){
            $file     = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('img', $filename);
            $data['img'] = $filename;
        }

        $speaker = AboutUs::create($data);

        // $about = AboutUs::create($request->all());

        return redirect()->route('admin.about.index');
    }


    public function create()
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        return view('admin.about.create');
    }

    public function edit(AboutUs $about)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        return view('admin.about.edit', compact('about'));
    }

    public function destroy(AboutUs $about)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        $about->delete();

        return back();
    }

    public function show(AboutUs $about)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        return view('admin.about.show', compact('about'));
    }

    public function massDestroy(Request $request)
    {
        AboutUs::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
