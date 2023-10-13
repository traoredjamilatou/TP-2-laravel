<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Comment; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'classe',
    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
      
        public function image()
        {
            return $this->hasOne(Image::class);
        }
  
}
