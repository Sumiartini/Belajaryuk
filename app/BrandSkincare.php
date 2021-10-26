<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BrandSkincare extends Model
{
    protected $table = "brandskincares";

    protected $guarded = [];

    use SoftDeletes;
}
