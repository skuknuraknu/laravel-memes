<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {
    public function index(){
        $users = User::all();
        return view("users.index", compact('users'));
    }
    public function destroy(){
        if(User::where(["id" => request()->id])->delete()){
            return redirect("/users");
        }
        return redirect('/error');
    }
}
