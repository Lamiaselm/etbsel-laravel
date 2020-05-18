<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
}
