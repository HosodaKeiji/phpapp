<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model {
    use HasFactory;

    protected $fillable = ["name", "priority", "url", "created_at"];
    public $timestamps = true; //created_at を自動管理
}