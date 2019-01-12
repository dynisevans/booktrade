<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Account;

class UserController extends Controller
{
    public function showContact()
    {
        $data = array('contact' => 'Liên hệ');
        return view('contact',$data);
    }


    public function postContact(Request $request)
    {
        return $request->input('contactName').'<br>'.$request->input('contactEmail').'<br>'.$request->input('contactTitle').'<br>'.$request->input('contactContent');
    }
}
