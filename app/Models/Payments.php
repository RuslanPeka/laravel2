<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Payments extends Model
{
    use HasFactory;

    public function getData()
    {
        $payments = DB::table('payments')->get();
        echo '<pre>';
        var_dump($payments);
        echo '</pre>';
    }
}
