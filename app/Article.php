<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    //Mass assign
    protected $fillable = ['title', 'slug', 'description_short','description','image','image_show','meta_title',
        'meta_description','meta_keywords', 'published', 'created_by', 'modified_by'];

    //Mutators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi') ,
            '-');
    }

    //Polymorphic realtion with category
    public function categories(){
        return $this->morphToMany('App\Category' , 'categoryable');
    }

    public function scopeLastArticles($query , $count){
        return $query->orderBy('created_at' , 'desc')->take($count)->get();
    }
}
