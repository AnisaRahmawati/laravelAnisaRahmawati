<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserSettingController extends Controller
{
    public function form()
    {

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $data = User::where('id',Auth::id())->first();

    return view('admin.pages.user.setting',['dt'=>$data]);
=======
    	$data = User::where('id' ,Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
>>>>>>> vidio eps 10
=======
    	$data = User::where('id' ,Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
>>>>>>> vidio eps 10
=======
    	$data = User::where('id' ,Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
>>>>>>> vidio eps 10
=======
    	$data = User::where('id' ,Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
>>>>>>> vidio eps 10
=======
    	$data = User::where('id' ,Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
>>>>>>> vidio eps 10
=======
    	$data = User::where('id' ,Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
>>>>>>> vidio eps 10
=======
    	$data = User::where('id' ,Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
>>>>>>> vidio eps 10
=======
    	$data = User::where('id' ,Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
>>>>>>> vidio eps 10
    }

    public function update(Request $req)
    {
    	$id = Auth::id();
    	\Validator::make($req->all(), [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    		'name'=>'required|between:3,100',

=======
    		'name'=>'required|between:3,10',
>>>>>>> vidio eps 10
=======
    		'name'=>'required|between:3,10',
>>>>>>> vidio eps 10
=======
    		'name'=>'required|between:3,10',
>>>>>>> vidio eps 10
=======
    		'name'=>'required|between:3,10',
>>>>>>> vidio eps 10
=======
    		'name'=>'required|between:3,10',
>>>>>>> vidio eps 10
=======
    		'name'=>'required|between:3,10',
>>>>>>> vidio eps 10
=======
    		'name'=>'required|between:3,10',
>>>>>>> vidio eps 10
=======
    		'name'=>'required|between:3,10',
>>>>>>> vidio eps 10
    		'email'=>'required|email|unique:users,email,'.$id,
    		'password'=>'nullable|min:6',
    		'repassword'=>'same:password',
    	])->validate();

        if(!empty($req->password)){
            $field = [
                'name'=>$req->name,
                'email'=>$req->email,
                'password'=>bcrypt($req->password),
            ];
        } else{
             $field = [
                'name'=>$req->name,
                'email'=>$req->email,
       
            ];
        }

        $result = User::where('id', $id)->update($field);
        if($result){
            return back()->with('result','success');
        } else {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
            return back()->with('result','fail');

        }
    }

}
