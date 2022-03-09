<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    protected $primaryKey = 'usr_id';

    const CREATED_AT = 'ord_created_at';
    const UPDATED_AT = 'ord_updated_at';
    const DELETED_AT = 'ord_deleted_at';
}
