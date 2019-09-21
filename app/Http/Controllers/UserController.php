<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id){
//        $data = User::where('id',$userId)
//            ->with('posts')
//            ->get();
//        return $data;

        $data = Post::where('id',$id)
            ->get();
        return $data;
    }
}
