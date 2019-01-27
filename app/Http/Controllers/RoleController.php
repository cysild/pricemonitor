<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Hash;
use Validator;
use Auth;
use Session;
use App\Role;
class RoleController extends Controller
{
    //


function index(){

    if(Role::role()== 1){
        return Redirect('/admin/products');
    }
    else{
        return Redirect('/admin/items');

    }
}

    function check(Request $request){
    	
    		$validator = Validator::make($request->all(), [
	       		'password' => 'required|min:8',
	       		'email'=>'required|email',
	    		]);

			if($validator->fails()) 
				{
				return back()->withInput()->withErrors($validator->errors());				
				}	
 
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) 
        {


Session::put('role',Role::role());
        //		return Role::role();

        	
     				  return redirect('/admin');
        		

        



        }
        else
        {
        	return back()->with('danger','Credentials Not Match Contact admin');
        }

    }
}
