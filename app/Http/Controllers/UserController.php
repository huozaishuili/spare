<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Response\ResponseJson;

class UserController extends Controller
{
    use ResponseJson;
    public function index()
    {
        return view('api/index');
    }
    public function create(Request $request){
        $input=$request->all();
        User::create($input);
        return json_encode(['code'=>0,'msg'=>'success','data'=>$input]);
    }
    public function get(){
        // $users = User::all();
        $users =User::where('id', 1)
               ->orderBy('id', 'desc')
               ->take(3)
               ->get();
        foreach ($users as $user)
        {
            echo $user->id;
        }
    }
    public function updata(){
        $users = User::all();
        $users = User::where('id',123)->find(2);
        $users->name = '12';
        $users->save();     
    }
    public function delete(){
        $users = User::all();
        $users = User::find(1);
        $users->delete();  
    }
}