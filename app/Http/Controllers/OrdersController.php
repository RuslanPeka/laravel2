<?php

namespace App\Http\Controllers;

use App\Models\Orders;

/**
 * Class OrdersController
 * @package App\Http\Controllers
 * @OA\Delete(
 * path="/orders",
 * summary="Working with the Orders Model",
 * tags={"Order"},
 * @OA\Response(
 * response=422,
 * description="All functions for working with the Orders Model"
 * ),
 * )
 */
class OrdersController
{
    public function index()
    {
        $objModel = new Orders;
        $objModel->getData();
    }
} 