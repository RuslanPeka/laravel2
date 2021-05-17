<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Support\Facades\DB;

/**
 * Class CustomersController
 * @package App\Http\Controllers
 * @OA\Delete(
 * path="/customers",
 * summary="Working with the Customers Model",
 * tags={"Customer"},
 * @OA\Response(
 * response=422,
 * description="All functions for working with the Customers Model"
 * ),
 * )
 */
class CustomersController
{
    public function index()
    {
        $objModel = new Customers();
        $objModel->getData();
        return [3];
    }

    public function getCustomers()
    {
        return DB::table('customers')->get();
    }
} 