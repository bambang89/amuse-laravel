<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserRegister;

class MemberRegisterController extends Controller
{
    public function index()
    {
        $members = UserRegister::all();
        return view('admin.member.index', compact('members'));
    }
}
