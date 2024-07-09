<?php

use LucasFreitas\ServiceContainer\Base\Container;
use LucasFreitas\ServiceContainer\Base\Facade;
use LucasFreitas\ServiceContainer\Facades\Stripe;
use LucasFreitas\ServiceContainer\Interfaces\Providers\PaymentProviderContract;
use LucasFreitas\ServiceContainer\Providers\CieloPaymentProvider;
use LucasFreitas\ServiceContainer\Providers\PaddlePaymentProvider;
use LucasFreitas\ServiceContainer\Providers\StripePaymentProvider;
use LucasFreitas\ServiceContainer\Services\Checkout;
use LucasFreitas\ServiceContainer\Utils\Http;

require __DIR__ . "/../vendor/autoload.php";

// $container = new Container;
// $container->register(PaymentProviderContract::class, CieloPaymentProvider::class);
// $paymentProvider = $container->get(PaymentProviderContract::class);

// $service = new Checkout("lucas@email.com", 9999);
// echo $service->handle($paymentProvider);

// echo "Hello World";
echo Stripe::charge("lucas@gmail.com", 367);