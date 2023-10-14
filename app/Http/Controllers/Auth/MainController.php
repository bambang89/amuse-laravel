<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Speaker;

class MainController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $banners = Banner::all();

        $banner = Banner::where('type', 1)->first();
        $bannerChilds = Banner::where('type', 2)->get();
        $speakers = Speaker::all();

        return view('auth.amuse.index', compact('banner','bannerChilds','speakers'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        // $banners = Banner::all();

        // return view('admin.banner.index', compact('banners'));
        return view('auth.amuse.aboutus');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function speaker()
    {
        $speakers = Speaker::all();
        return view('auth.amuse.speakers-grid',compact('speakers'));
    }

    public function contact()
    {
        // $banners = Banner::all();

        // return view('admin.banner.index', compact('banners'));
        return view('auth.amuse.contact');
    }

}
