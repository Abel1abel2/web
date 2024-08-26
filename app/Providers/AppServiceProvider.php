<?php

namespace App\Providers;

use App\Models\Budget;
use App\Models\User;
use App\Policies\Budgetpolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    protected $policies = [
        'App\Models\Budget' => 'App\Policies\Budgetpolicy'

    ];
    public function register(): void
    {
        //
    }



    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
