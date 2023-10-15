<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRegisterRequest;
use App\UserRegister;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('auth.amuse.register');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $file     = $request->file('proof_img');
        $filename = $file->getClientOriginalName();
        $file->move('img/proof', $filename);
        $data['proof_img'] = $filename;
        $res = UserRegister::create($data);

        return redirect()->route('/download',['id'=>$res->id]);
    }

    public function example()
    {
        return view('auth.pdf.index');
    }

    public function download($id)
    {
        $response = UserRegister::where('id',$id)->first();

        $pdf = Pdf::loadView('pdf.index', compact('response'));
        $pdf->download('invoice.pdf');

        // $pdf = Pdf::loadview('pdf.index',compact('response'));
        // return $pdf->stream();
        // return $pdf->download('register.pdf');
        return redirect('/');

        // return view('pdf.index',compact('response'));
    }

}
