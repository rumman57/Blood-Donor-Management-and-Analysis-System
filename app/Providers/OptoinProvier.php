<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SiteOption;
use App\Models\SocialLink;


class OptoinProvier extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->options();
        $this->optionsfindex();
        $this->socilalinks();
        $this->socilalinksfindex();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function options(){
        view()->composer('layouts.master',function($view){
            $view->with('option',SiteOption::find(1));
        });
    }
    private function socilalinks(){
        view()->composer('layouts.master',function($view){
            $view->with('slinks',SocialLink::all());
        });
    }
    private function optionsfindex(){
        view()->composer('layouts.masterforindex',function($view){
            $view->with('option',SiteOption::find(1));
        });
    }
    private function socilalinksfindex(){
        view()->composer('layouts.masterforindex',function($view){
            $view->with('slinks',SocialLink::all());
        });
    }
}
