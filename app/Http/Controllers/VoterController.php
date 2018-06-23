<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VoterRequest;
use App\Approvedvoter;
class VoterController extends Controller
{
    public function login(){
        return view('voter.login');
    }

    public function register(){
        return view('voter.register');
    }

    public function modal(){
        return view('voter.modal');
    }
    public function ballotpaper(){
        return view('voter.ballotpaper');
    }
    public function success(){
        return view('voter.success');
    }

    public function voters(Request $request){


        if($request->has('form1')){
        $voter = new VoterRequest;

        $voter->title= $request->input('title');
    $voter->userid=$request->input('userid');
    $voter->password= $request->input('password');
    $voter->voter_name= $request->input('name');
    $voter->email= $request->input('email');
    $voter->phone_no= $request->input('phone');
    
    
    $voter->save();
    return redirect('/');
    }

    if($request->has('form2')){
        $voter = new VoterRequest;

        $voter->title= $request->input('title');
    $voter->userid=$request->input('userid');
    $voter->password= $request->input('password');
    $voter->voter_name= $request->input('name');
    $voter->email= $request->input('email');
    $voter->phone_no= $request->input('phone');
    
    
    $voter->save();
    return redirect('/admin_editvoter');
    }

    

}
}
