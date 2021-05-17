<?php

namespace App\Http\Controllers;

use App\Models\Payments;

/**
 * Class PaymentsController
 * @package App\Http\Controllers
 * @OA\Delete(
 * path="/payments",
 * summary="Working with the Payments Model",
 * tags={"Payment"},
 * @OA\Response(
 * response=422,
 * description="All functions for working with the Payments Model"
 * ),
 * )
 */
class PaymentsController
{
    public function index()
    {
        $objModel = new Payments;
        $objModel->getData();
    }
}