<?php

namespace App\Interfaces;

interface Payment
{
    public function withDraw(): string;
}
