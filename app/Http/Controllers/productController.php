<?php

namespace App\Http\Controllers;

use App\Http\Requests\productRequest;
use App\Models\Postarticle;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function store(productRequest $request) {
       // dd($request->all());
        $article=new Postarticle();
        $article->Titre = $request->Titre;
        $article->Type = $request->Type;
        $article->Categorie = $request->Categorie;
        $article->Etiquette = $request->Etiquette;
        $article->Image =' $request->Image';
        $article->Texte = $request->Texte;
        

        $article->save();

        return redirect('/Page_article');
        
    } 

    public function afficher() {
        $produit = Postarticle::all();
    }

}
