<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    public function view(){
        $data=DB::table('users')->get();
        return view ('backend.view-user',compact('data'));
    }

    // public function add(Request $reqst)
    // {
        // $validat=$req->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'sub'=>'required'
            // 'msg'=>'required'
            
        // ]);

        
        // $data=array();
        
        // $data['name']= $req->name;
        // dd($data);
        // $data['email']= $req->email;
        // $data['subject']= $req->sub;
        // $data['messages']= $req->msg;
        
        // $table=DB::table('usermessage')->insert($data);
        // return redirect()->back();
        // $na=$reqst->name;
        // $em=$reqst->email;
        // $sub=$reqst->sub;
        // $mes=$reqst->msg;
        // dd($reqst->name);
        

        // DB::table('usermessage')->insert([
        //     'email' =>$reqst->name,
        //     'name' =>$reqst->email,
        //     'subject' =>$reqst->sub,
        //     'messages' =>$reqst->msg
        //     // 'votes' => 0
        // ]);

       
       
        
    // }
    
}
