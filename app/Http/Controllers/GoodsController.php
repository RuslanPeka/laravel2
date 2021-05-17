<?php

namespace App\Http\Controllers;

use App\Models\Goods;

/**
 * Class GoodsController
 * @package App\Http\Controllers
 * @OA\Delete(
 * path="/goods",
 * summary="Working with the Goods Model",
 * tags={"Good"},
 * @OA\Response(
 * response=422,
 * description="All functions for working with the Goods Model"
 * ),
 * )
 */
class GoodsController
{
    public function index()
    {
        $objModel = new Goods;
        $objModel->getData();
    }
} 