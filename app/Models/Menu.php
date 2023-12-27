<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;
    use SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $attributes = [
        'id' => false,
    ];

    protected $fillable = [
        'menu_category_id',
        'name',
        'price',
        'turn',
        'create_user',
        'update_user',
    ];
}
