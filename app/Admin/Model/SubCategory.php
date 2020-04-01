<?php

namespace App\Admin\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'category_id','subcategory_name'
    ];

}
