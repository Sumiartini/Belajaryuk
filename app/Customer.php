<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Customer extends Model
{
    protected $guarded = [];

    protected $primaryKey = 'cus_id';

    const CREATED_AT = 'cus_created_at';
    const UPDATED_AT = 'cus_updated_at';
    const DELETED_AT = 'cus_deleted_at';

}
