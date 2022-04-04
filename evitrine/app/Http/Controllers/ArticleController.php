<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
class ArticleController extends Controller
{
    public function index()
    {
        $listArticle = Article::all();
        return view('Article_views.index', ['articles' => $listArticle]);
    }

    public function create()
    {
        return view('Article_views.create');
    }

    public function store(Request $request)
    {
        $artic = new Article();

        //     $validated = $request->validate([
        //       'name' => 'required|unique:Articles|max:255|min:4',
        //       'email' => 'required|unique:Articles|max:255',
        //       'age' => 'required',
        //       'password' => 'required|unique:Articles|min:8'
        //   ]);

        // $fileName = time() . '.' . $request->file('image')->extension();

        // $request->image->move(public_path('public'), $fileName);
        // if (!$request->hasFile('image')) {
        //     $artic->image = "missing file";
        // }
        // $artic->image = $request->file('image');

        $file_extension = $request->file('image')->getClientoriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images';
        $request->file('image')->move($path, $file_name);
        
        // else $artic->image="no file selected";
        $artic->designation = $request->input('designation');
        $artic->PU = $request->input('PU');
        $artic->quantite = $request->input('quantite');
        $artic->image= $file_name;
        $artic->name= $request->input('name');
        $artic->categorie_id= $request->input('categorie_id');
        // et pour persister dans la base de donnees on doit faie 
        $artic->save();
        session()->flash('success', 'an new Article added with succes !! ');
        return redirect('admin');

    }
    public function edit($id)
    {
        $Article = Article::find($id);
        return view('Article_views.edit', ['article' => $Article]);
    }

    public function update($id, Request $request)
    {
        $artic = Article::find($id);
        $artic->designation = $request->input('designation');
        $artic->PU = $request->input('PU');
        $artic->quantite = $request->input('quantite');
        $artic->image = $request->input('image');
        $artic->save();
        return redirect('admin');
    }
    public function destroy(Request $request, $id)
    {
        $artic = Article::find($id);
        $artic->delete();
        return redirect('admin');
    }
    public function visualiser(Request $request, $id)
    {
        $artic = Article::find($id);
        return view('Article_views.visualiser', ['article' => $artic]);
    }
}
