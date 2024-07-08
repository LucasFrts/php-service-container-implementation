<?php

namespace LucasFreitas\ServiceContainer\Interfaces\Providers;

use LucasFreitas\ServiceContainer\Utils\Http;

interface PaymentProviderContract
{
    public function __construct(Http $httpClient);

    public function charge(string $email, int $amount) : string;
}