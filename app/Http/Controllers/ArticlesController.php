<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use App\Article;

class ArticlesController extends Controller
{
    
    public function index(){
        
        // Render a list of a resource
        
        if(request('tag'))
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        else
            $articles = Article::latest()->get();
        
        return view('articles.index', ['articles' => $articles ]);
    }
    
    public function show(Article $article){
        
        // Show a single resource
        
        return view('articles.show', ['article' => $article ]);
    }
    
    public function create(){
        
        // Shows a view to create a new resource
        
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }
    
    public function store(){
        
        // Presist the new resource
        
        $this->validateArticle();
        
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1; // auth()->id;
        $article->save();
        
        // attaching the tags to the new Article 
        // if no tags specified then it will attach nothing in article_tag table
        
        $article->tags()->attach(request('tags'));
        
        return redirect('/articles');
    }
    
    public function edit(Article $article){
        
        // Show a view to edit an existing resource
        
        return view('articles.edit', compact('article'));
    }
    
    public function update(Article $article){
        
        // Presist the eidited resource
        
        $article->update($this->validateArticle());
        
        return redirect($article->path());
        
        
    }
    
    public function destroy(){
        
        // Delete the resource 
        
        
    }
    
    protected function validateArticle(){
        
        return request()->validate([
            
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
    
 
    
}
