<?php

namespace LucasFreitas\ServiceContainer\Providers;

use LucasFreitas\ServiceContainer\Interfaces\Providers\PaymentProviderContract;
use LucasFreitas\ServiceContainer\Utils\Http;

class CieloPaymentProvider implements PaymentProviderContract
{
    public function __construct(private Http $clientHttp)
    {}

    public function charge(string $email, int $amount) : string
    {
        return "we successfully charged BRL $amount from $email";
    }
}