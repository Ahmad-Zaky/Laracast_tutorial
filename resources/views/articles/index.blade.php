@extends('layout')
    
@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			@forelse ($articles as $article)
			<div class="title">
			
				<h2>
                    <a href="{{route('article.show', $article)}}">
                    
                        {{$article->title}}
                    
                    </a>
                
                </h2>
            
            </div>
                
                <p>
                    <a href="articles/{{$article->id}}">
                       
                        <img 
                            src="/images/banner.jpg" 
                            alt="" 
                            class="image image-full" 
                        />
                        
                    </a> 
                </p>
			
			<p>{!! $article->excerpt !!}</p>
			
            @empty
                <p>No relevant Articles yet!</p>
			
			@endforelse
			
		
	</div>
</div>

@endsection