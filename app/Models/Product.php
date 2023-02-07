<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable =   ['name', 'price','images','status','description','category_id'];
    public $timestamp = false;
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
