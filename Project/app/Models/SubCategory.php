<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',

        'subcategory_name_fr',
        'subcategory_slug_fr',
    ];

    /*==================================================
    Join the category_id of subcategory to the id of the category array
    ===================================================*/

    public function category(){

        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
