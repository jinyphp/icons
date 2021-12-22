<?php

namespace Jiny\Icons;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Facades\Blade;

class JinyIconServiceProvider extends ServiceProvider
{
    private $package = "jinyicon";
    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);

        Blade::component(\Jiny\Icons\View\Components\Icon::class, "icon");
        Blade::component(\Jiny\Icons\View\Components\Heroicon::class, "heroicon");
    }

    public function register()
    {

    }
}
