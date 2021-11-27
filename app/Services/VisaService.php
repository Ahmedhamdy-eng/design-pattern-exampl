<?php

namespace App\Services;

use App\Interfaces\Payment;

class VisaService implements Payment
{
    /**
     * @return string
     */
    public function withDraw(): string
    {
        return 'visa';
    }
}
