<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orders extends Model
{
    use HasFactory;

    public function getData()
    {
        $orders = DB::table('orders')->get();
        echo '<pre>';
        var_dump($orders);
        echo '</pre>';
    }
}
