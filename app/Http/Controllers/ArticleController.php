<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show () {
        return Article::all();
    }

    public function findArticle ($id) {
        return Article::find($id);
    }

    public function removeArticle ($id) {
        $article = Article::findOrFail($id);
        $article->delete();

        return 200; 
    }
}
