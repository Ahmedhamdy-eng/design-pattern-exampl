<?php

namespace App\Services;

use App\Interfaces\Payment;
use App\Interfaces\PaymentFactory;

class PayOnlineService implements PaymentFactory
{
    /**
     * @var string $card_number
     */
    protected string $card_number;

    /**
     * @param $card_number
     */
    public function CardNumber($card_number): self
    {
        $this->card_number = $card_number;
        return $this;
    }

    /**
     * @return VisaService
     */
    public function getPayment(): Payment
    {
        $key = array_filter($this->getClass(), function ($key) {
            return $key['type'] == $this->card_number;
        });

        $class =  reset($key)['class'];
        return  (new $class());
    }


    /**
     * @return array
     */
    public function getClass(): array
    {
        $payments_class = [
            ['type' => '123', 'class' => VisaService::class],
            ['type' => '345', 'class' => MasterCardService::class],
        ];

        return $payments_class;
    }
}
