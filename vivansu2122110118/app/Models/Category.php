<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = [
        'name', 'slug', 'parent_id', 'sort_order', 'description', 'status', 'image', 'created_at', 'created_by',
    ];
}
