<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;

class VitrineController extends Controller
{
   
    public function index()
    {
        $listArticle = Article::all();
        $listcateg = Categorie::all();
        return view('first', ['articles' => $listArticle], ['cotegories' => $listcateg]);

    }
    public function show($id)
    {
        $art = Article::find($id);
        $listcateg = Categorie::all();
        return view('article', ['article' => $art], ['cotegories' => $listcateg]);
    }
    public function categorie($id)
    {
        $cat = Categorie::find($id);
        $arti = Article::all();
        return view('categorie', ['articles' => $arti], ['categorie' => $cat]);
    }
    public function verify(){
            if(auth()->user()->isAdmin){ return redirect('/admin');}
            else return redirect('/first');
     
    }
}
