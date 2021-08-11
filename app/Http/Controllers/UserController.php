<?php

namespace App\Http\Controllers;
use App\Models\Favorite_movie;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        $last_movie = Favorite_movie::where('user_id', Auth::id())->orderBy('created_at', 'desc')->first();
        $last_movie ? $last_movie : $last_movie = '';
        $last_address = Address::where('user_id', Auth::id())->orderBy('created_at', 'desc')->first();
        $last_address ? $last_address : $last_address = '';
        return view('dashboard')->with('last_movie', $last_movie)->with('last_address', $last_address);

    }
}
