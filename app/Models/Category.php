<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //protected $table = 'category';
    protected $fillable = ['name','slug','description','image','order','status'];
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
