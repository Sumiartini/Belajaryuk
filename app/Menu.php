<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $guarded = [];

    protected $primaryKey = 'usr_id';

    const CREATED_AT = 'men_created_at';
    const UPDATED_AT = 'men_updated_at';
    const DELETED_AT = 'men_deleted_at';
}
