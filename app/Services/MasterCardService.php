<?php

namespace App\Services;

use App\Interfaces\Payment;

class MasterCardService implements Payment
{

    public function withDraw(): string
    {
        return 'MasterCard';
    }


}
