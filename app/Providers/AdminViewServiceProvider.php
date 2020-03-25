<?php
/**
 * @Author    Little Bug
 * @CreatedAt 2020-03-24 19:38
 * @CreatedBy Phpstorm
 */

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class AdminViewServiceProvider extends ServiceProvider
{


    public function boot()
    {
        \View::composer(
            'admin.layouts.admin', 'App\ViewComposers\AdminComposer'
        );
    }
}
