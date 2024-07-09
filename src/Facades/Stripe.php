<?php

namespace LucasFreitas\ServiceContainer\Facades;

use LucasFreitas\ServiceContainer\Base\Facade;
use LucasFreitas\ServiceContainer\Providers\StripePaymentProvider;

/**
 * @method static string charge(string|null $email = null, int | null amount = null)
 * @see \LucasFreitas\ServiceContainer\Providers\StripePaymentProvider
 *
 */
class Stripe extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return StripePaymentProvider::class;
    }
}