<?php

namespace App\Http\Controllers;
use App\Users;
use App\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function serial()
    {
        return view('serial');
    }
    public function anime()
    {
        return view('anime');
    }
    public function mult()
{
    return view('mult');
}

    public function premier()
    {
        return view('premier');
    }
    public function yaga()
    {
        return view('video/yaga');
    }
     public function view(){
        $users= User::all();
        return view('view',['users'=>$users]);

    }

    public function edit($id){
        $users =User::find($id);
        return view('edit',compact('users'));
    }

    public function update(Request $req, $id){
        $this->validate($req,[
            'name'=>'required', // для валидации
            'email'=>'required',

        ]);
        $users = User::find($id);
        $users->name = $req->name;
        $users->email = $req->email;
        $users->save();

        return redirect(route('view'))->with('successMsg', 'User Successfully Updated');

    }

    public function delete($id){
        User::find($id)->delete();
        return redirect(route('view'))->with('successMsg', 'User Delete Successfully ');

    }

    public function comy( ){
        return view('comy');

    }


}


