@extends('layout')


@section('head')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">

@endsection

@section('content')

<div id="wrapper">
    <div id="page" class="container">
    
        <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>
        
        <form method="POST" action="/articles/{{ $article->id }}">
           
            @csrf
            @method('PUT')
            
            <div class="field">
            
                <label for="title" class="label">Title</label>
            
                <div class="control">
                    
                    <input type="text" class="input @error('title') is-danger @enderror" name="title" id="title" value="{{$article->title}}">
                    @error('body')
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                    
                    
                </div>
            
            </div>
            
            <div class="field">
            
                <label for="excerpt" class="label">Exerpt</label>
            
                <div class="control">
                    
                    <textarea type="text" class="textarea @error('escerpt') is-danger @enderror" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                    @error('body')
                        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="field">
            
                <label for="body" class="label">Body</label>
            
                <div class="control">
                    
                    <textarea type="text" class="textarea @error('body') is-danger @enderror" name="body" id="body">{{$article->body}}</textarea>
                    @error('body')
                        <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Update</button>
                </div>
            </div>
            
        </form>
    
    </div>
</div>


@endsection