<?php

namespace App\Admin\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'brand_name','brand_logo','slug'
    ];

}
