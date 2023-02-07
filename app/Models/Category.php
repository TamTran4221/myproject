<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['name','status'];
    public $timestamp = false;

    public function product(){
        return $this->hasMany(Product::class);
    }
}
