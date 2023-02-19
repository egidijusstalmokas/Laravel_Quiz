<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Info;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['admin.layouts.left_menu', 'auth.login', 'auth.passwords.email', 'auth.passwords.reset'], function ($view) {
            $logo = Info::select('type', 'value')->where('type', 'logo')->first();
            $view->with(['logo' => $logo ]);
        });
    }
}
