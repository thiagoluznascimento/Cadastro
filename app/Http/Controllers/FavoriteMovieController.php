<?php

namespace App\Http\Controllers;
use App\Models\Favorite_movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FavoriteMovieController extends Controller
{

    public function index($id_movie = 0){
        if ($id_movie == 0){
            $movie = [];
        }
        else {
            $movie = Favorite_movie::where('id', $id_movie)->first();
        }
        $movies = Favorite_movie::where('user_id', Auth::id())->get();
        return view('favorite-movies')->with('movies', $movies)->with('movie', $movie);
    }

    public function insertMovie(Request $request){

        $rules = [
            'title' => 'required|min:3|max:36',
            'release_year' => 'required|integer|min:0',
            'director' => 'required|min:3|max:36',
        ];

        $mensagens = [
            'require' => 'Campo obrigatório',

            'title.min' => 'Minimo 3 digitos',
            'title.max' => 'Máximo 36 digitos',

            'release_year.min' => 'Ano não permitido',

            'director.min' => 'Minimo 3 digitos',
            'director.max' => 'Máximo 36 digitos',
        ];

        $request->validate($rules, $mensagens);

        Favorite_movie::create([
            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'release_year' => $request->input('release_year'),
            'director' => $request->input('director'),

        ]);
        return redirect()->action([FavoriteMovieController::class, 'index'], $id_movie = 0);
    }

    public function updateMovie(Request $request){
        $rules = [
            'title' => 'required|min:3|max:36',
            'release_year' => 'required|integer|min:0',
            'director' => 'required|min:3|max:36',

        ];

        $mensagens = [
            'require' => 'Campo obrigatório',
            'title.min' => 'Minimo 3 digitos',
            'title.max' => 'Máximo 20 digitos',
            'release_year.min' => 'Ano inválido',
            'director.min' => 'Minimo 3 digitos',
            'director.max' => 'Máximo 36 digitos',

        ];

        $request->validate($rules, $mensagens);

        Favorite_movie::find($request->id)->update([
            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'release_year' => $request->input('release_year'),
            'director' => $request->input('director'),

        ]);
        return redirect()->action([FavoriteMovieController::class, 'index'], $id_movie = 0);

    }


    public function deleteMovie($id_movie){
        Favorite_movie::destroy($id_movie);
        return redirect()->action([FavoriteMovieController::class, 'index'], $id_movie = 0);
    }


}
