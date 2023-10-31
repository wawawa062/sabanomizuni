<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table='menus';
    
     protected $fillable =[
    'menu_name',
    'menu_content',
    'menu_image',
    'calorie',
    'carbs',
    'protein',
    'fat',
    'salt',
    ];

    public function getPaginateByLimit(int $limit_count = 30)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
