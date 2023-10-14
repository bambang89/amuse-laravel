<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSpeakerRequest;
use App\Speaker;

class SpeakerController extends Controller
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

        $speakers = Speaker::all();

        return view('admin.speaker.index', compact('speakers'));
    }

    public function store(StoreSpeakerRequest $request)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        $data = $request->all();

        if($request->file('img')){
            $file     = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('img/speaker', $filename);
            $data['img'] = $filename;
        }

        $speaker = Speaker::create($data);

        return redirect()->route('admin.speaker.index');
    }

    public function create()
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        return view('admin.speaker.create');
    }

    public function edit(Speaker $speaker)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        return view('admin.speaker.edit', compact('speaker'));
    }

    public function destroy(Speaker $speaker)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        $speaker->delete();

        return back();
    }

    public function show(Speaker $speaker)
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        return view('admin.speaker.show', compact('speaker'));
    }

    public function massDestroy(Request $request)
    {
        Speaker::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
