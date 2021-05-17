<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Goods extends Model
{
    use HasFactory;
    
    public function getData()
    {
        $goods = DB::table('goods')->get();
        echo '<pre>';
        var_dump($goods);
        echo '</pre>';
    }
}
