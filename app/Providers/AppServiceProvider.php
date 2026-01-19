<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Blade;
use App\Models\Student;
use App\Models\Job;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
      if (app()->environment('production')) {
        URL::forceScheme('https');
    }

        Blade::component('form-field', 'components.form-field');
        Blade::component('form-label', 'components.form-label');
        Blade::component('form-input', 'components.form-input');
        Blade::component('form-error', 'components.form-error');
    }
}
