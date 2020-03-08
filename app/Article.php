<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // to prevent any protection from LARAVEL and take the responsiblity
    protected $guarded = [];

    // get the article path
    public function path(){
        
        return route('article.show', $this);
    }
    
    // get relationship: get Article->user    
    public function author(){
        
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function tags(){
        
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}


/* --- Depreacated Code --- */

    // Line : 9
    // --------

// To let mass assignment request direct from the Form to DB
//    protected $fillable = ['title', 'excerpt', 'body'];

    // Line : 9
    // --------

// In case we send slug instead of id in the url 
//    getRouteKeyName(){
//        
//        return 'slug';
//    }