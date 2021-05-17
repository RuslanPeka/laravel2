<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customers extends Model
{
    use HasFactory;

    public function getData()
    {
        $customers = DB::table('customers')->get();
        echo '<pre>';
        var_dump($customers);
        echo '</pre>';
    }
}
