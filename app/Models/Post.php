<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'item_name',
        'item_type',
        'detail',
        'item_photo',
        'value',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
