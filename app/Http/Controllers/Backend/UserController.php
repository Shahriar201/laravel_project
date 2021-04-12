<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function view(){

        $data['allData'] = User::all();
        
        return view('backend.user.view-user', $data);
    }

    public function add(){
    
        return view('backend.user.add-user');
    }

    public function store(Request $request){

        // data validation
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required|unique:users,email',
        ]);
        //end data validation

        $data = new User();
        $data->user_type = $request->user_type;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->email);
        $data->save();

        return redirect()->route('users.view');
    }

    public function edit($id){
        $editData = User::find($id);

        return view('backend.user.edit-user', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = User::find($id);
        $data->user_type = $request->user_type;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();

        return redirect()->route('users.view');

    }
}
