<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRegisterRequest;
use App\UserRegister;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('auth.amuse.register');
    }

    public function store(StoreUserRegisterRequest $request)
    {
        $data = $request->all();
        if($request->file('proof_img')){
            $file     = $request->file('proof_img');
            $filename = $file->getClientOriginalName();
            $file->move('img/proof', $filename);
            $data['proof_img'] = $filename;
        }

        $banner = UserRegister::create($data);
        return redirect('/');
    }
}
