<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;

class CategorieController extends Controller
{
    public function index()
    {
        $listCategorie = Categorie::all();
        return view('Categorie_views.index', ['categories' => $listCategorie]);
    }

    public function create()
    {
        return view('Categorie_views.create');
    }

    public function store(Request $request)
    {
        $categ = new Categorie();

        //     $validated = $request->validate([
        //       'name' => 'required|unique:Categories|max:255|min:4',
        //       'email' => 'required|unique:Categories|max:255',
        //       'age' => 'required',
        //       'password' => 'required|unique:Categories|min:8'
        //   ]);
        $categ->nameCa = $request->input('nameCa');
        // et pour persister dans la base de donnees on doit faie 
        $categ->save();
        session()->flash('success', 'an new Categorie added with succes !! ');
        return redirect('/categorie');

    }
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('Categorie_views.edit', ['categorie' => $categorie]);
    }

    public function update($id, Request $request)
    {
        $categ = Categorie::find($id);
        $categ->nameCa = $request->input('nameCa');
        $categ->save();
        return redirect('/categorie');
    }
    public function destroy(Request $request, $id)
    {
        $categ = Categorie::find($id);
        $categ->delete();
        return redirect('/categorie');
    }
    public function visualiser(Request $request, $id)
    {
        $categ = Categorie::find($id);
        $arti=Article::all();
        return view('Categorie_views.visualiser', ['categorie' => $categ],['articles' => $arti]);
    }
}
