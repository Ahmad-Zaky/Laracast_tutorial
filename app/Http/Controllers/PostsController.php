<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
   
    
    public function show($slug){

        return view('posts', [
            'post' => Post::where('slug', $slug)->firstOrFail()

        ]);
    }

}

             /*  ---- Deprecated  Code ----*/

    // Line : 14 
    // ---------
       // The backslash is for global class indication because DB is not in this class
//        $posts = \DB::table('posts')->where('slug', $slug)->first();


    // Line : 15 
    // ---------

       // dump and die
//        dd($posts);



    // Line : 17 
    // ---------

/* --- Not a good practice ---- */

//        // check if the key exists
//        if(!array_key_exists($slug, $posts))
//            abort(404, "Sorry, that post was not found!");
