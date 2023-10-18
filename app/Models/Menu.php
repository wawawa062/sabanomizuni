<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function getPaginateByLimit(int $limit_count = 30)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count)get();
    }
}

protected $fillable =[
    'name_menu'
    'content_menu',
    'image_menu'
    ];