<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class admincontroller extends Controller
{
    public function message(){
        
        // $data=DB::table('users')->get();
        // return view ('backend.view-user',compact('data'));
        return view ('admin.messages');
    }

    public function add(Request $reqst)
    {
        // $validat=$req->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'sub'=>'required'
            // 'msg'=>'required'
            
        // ]);
        dd($reqst->name);
        
        // $data=array();
        
        // $data['name']= $req->name;
        
        // $data['email']= $req->email;
        // $data['subject']= $req->sub;
        // $data['messages']= $req->msg;
        
        // $table=DB::table('usermessage')->insert($data);
        // return redirect()->back();
    }
}
