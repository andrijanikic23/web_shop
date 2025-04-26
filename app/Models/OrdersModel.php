<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    protected $table = "orders";


    protected $fillable = ["product_id", "user_id", "quantity", "price"];
}
