<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function getData (Request $request)
    {
        $name = $request->Input('nom');
        $email = $request->Input('email');
        $subject = $request->Input('sujet');
        $msg = $request->Input('msg');
        print_r( $name);
    }
    public function index()
    {
        return view('contact');
    }
    public function send (Request $request)
    {
        $this->validate($request,
            [
                'nom'=>'required',
                'mail'=>'required|email',
                'sujet'=>'required',
                'msg'=>'required'
            ]
        );
        $data=array(
            'nom'=>$request->nom,
            'mail'=>$request->mail,
            'sujet'=>$request->sujet,
            'msg'=>$request->msg

        );
        Mail::to('hl_selmane@esi.dz')->send(new SendMail($data));
        return back()->with('success','Merci de nous avoir contacter !');
    }
}
