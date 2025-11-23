<?php

namespace Capsulecmdr\HelionetWeb\Providers;

use Illuminate\Support\ServiceProvider;

class HelionetWebServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
