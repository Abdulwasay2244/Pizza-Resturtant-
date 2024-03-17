<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resturtant;
use Session;
use App\Models\users;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class Restocontroller extends Controller
{
    // This is Home Funcation:

       public function index()
    {
        return view ('Home');
    } 
// This is List Funcation:

       public  function List()
    {   
        $data = Resturtant::all();
        return view('List', ["data"=> $data]);
    }  

    // This is Add Funcation:

    public function add(Request $request)
    { 
        // return $request->input();
        $resto = new Resturtant;
        $resto->Name=$request->input('Name');
        $resto->Email=$request->input('Email');
        $resto->Address=$request->input('Address');
        $resto->save();
        $request->session()->flash('status','Congratulations Resturtant Submitted Successfully');
        return redirect('List');
    } 

//  This is Delete Function:

    public function delete($id)
    { 
        Resturtant::find($id)->delete();
        Session::flash('status','Resturtant Deleted Successfully');
        return redirect('List');
    } 

// This is Edit Funcation:

    public function edit($id)
    {
        $data = Resturtant::find($id);
        return view('edit',['data'=>$data]);
    } 

//  This is Update Fucattion:

    public function update(Request $request)
    { 
        $resto =  Resturtant::find($request->input('id'));
        $resto->Name=$request->input('Name');
        $resto->Email=$request->input('Email');
        $resto->Address=$request->input('Address');
        $resto->save();
        $request->session()->flash('status',' Resturtant Updated Successfully');
        return redirect('List');
    }  

    // This is Register Function:

    public function register(Request $request)
    {    
        $existingUser = users::where("Email", "=", $request->input('Email'))->first();
    
        if ($existingUser) {
    
            return redirect()->back()->with('error', 'Email address already exists. Please use a different email.');
        }
    
        // If the email is unique, proceed with user registration
        $user = new users;
        $user->Name = $request->input('Name');
        $user->Email = $request->input('Email');
        $user->Password = Crypt::encrypt($request->input('Password'));
        $user->Contact = $request->input('Contact');
        $user->save();
        $request->session()->put('users', $request->input('Name'));
        return redirect('/');
    }  
    
    // This is Login Function:

    public function login(Request $request)
    {      
        $user = users::where("Email", "=", $request->input('Email'))->get();
         if( Crypt::decrypt($user[0]->Password)==$request->input('Password'))
         {
            $request->session()->put('users', $user[0]->Name);
            return redirect('/');
         }
    
        // if ($user && !empty($user->Password)) {
        //     var_dump($user->Password);
        //     // ...
        // } else {
        //     return "Invalid password data.";
        // }         
    }

    
    public function logout(Request $request) {
    Auth::logout();
    return redirect('/');
}

    
    
    


}