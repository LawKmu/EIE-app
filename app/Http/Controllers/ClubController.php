<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Club_members;

class ClubController extends Controller
{
    function index(){
        $clubs = Club::get();
        return view('clubs')->with('clubs' , $clubs);
    }

    function info($id){
        $clubs = Club::find($id);
        $clubRespo = Club_members::where('function','respo')
        ->where('id_club',$id)
        ->get();
        $posts = Post::with('user')
        ->where('type', 'club')
        ->where('user_id', $clubRespo[0]->id_user )
        ->get();
        return view('clubPage', ['posts' => $posts, 'clubs' => $clubs]);
    }
}

