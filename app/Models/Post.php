<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'meta_description',
        'body',
        'excerpt',
        'image',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
