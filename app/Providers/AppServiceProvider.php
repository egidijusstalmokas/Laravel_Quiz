<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Info;
use App\Models\FrontImg;

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
        View::composer(['front.quiz.play'], function ($view) {
            $randomImg = FrontImg::inRandomOrder()->select('type', 'img')->where('type', 'quiz')->first();
            $view->with(['randomImg' => $randomImg ]);
        });
        View::composer(['admin.layouts.left_menu', 'auth.login', 'auth.passwords.email', 'auth.passwords.reset', 'front.layouts.navbar'], function ($view) {
            $logo = Info::select('type', 'value')->where('type', 'logo')->first();
            $view->with(['logo' => $logo ]);
        });

        View::composer(['admin.layouts.navbar'], function ($view) {
            $title = Info::select('type', 'value')->where('type', 'title')->first();
            $view->with(['title' => $title ]);
        });
    }
}
