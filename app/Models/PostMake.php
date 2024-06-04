<?php

namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class PostMake extends Model
{
    use HasFactory;
    use SoftDeletes;



    protected $fillable = [

        'title',
        'slug',
        'image',
        'body',


    ];

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }
    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->body), 150);
    }

    public function getImageUrl()
    {
        $isUrl = str_contains($this->image, 'https');
        return $isUrl ? $this->image : Storage::url($this->image);
    }
}
