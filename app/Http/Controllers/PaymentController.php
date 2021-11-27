<?php

namespace App\Http\Controllers;

use App\Services\PayOnlineService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay()
    {
          return (new PayOnlineService())
              ->CardNumber('345')
              ->getPayment()
              ->withDraw();
    }
}
