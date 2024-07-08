<?php

namespace LucasFreitas\ServiceContainer\Providers;

use LucasFreitas\ServiceContainer\Interfaces\Providers\PaymentProviderContract;
use LucasFreitas\ServiceContainer\Utils\Http;

class StripePaymentProvider implements PaymentProviderContract
{

    public function __construct(private Http $clientHttp)
    {}

    public function charge(string $email, int $amount) : string
    {
        return "we successfully charged USD $amount from $email";
    }
}