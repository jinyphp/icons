<?php

namespace Jiny\Icons;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Facades\Blade;

class JinyIconServiceProvider extends ServiceProvider
{
    private $package = "jiny-icons";
    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);

        // Custom Resources
        $path = resource_path('icons');
        if(!is_dir($path)) {
            mkdir($path,0777,true);
        }
        $this->loadViewsFrom($path, 'icons');

        //Blade::component(\Jiny\Icons\View\Components\Icon::class, "icon");
        //Blade::component(\Jiny\Icons\View\Components\Heroicon::class, "heroicon");

        Blade::directive('icon', function ($expression) {

            // 1. 리소스 폴더 내의 아이콘 검색
            $svgPath = resource_path('icons/' . trim($expression, '\'"'));
            $filename = str_replace(['/','\\'],DIRECTORY_SEPARATOR,$svgPath);
            if (file_exists($filename)) {
                //$svgContent = File::get($filename);
                $svgContent = file_get_contents($filename);
                return $svgContent;
            }

            // 2. 패키지 내의 icons 검색
            $path = __DIR__.'/../resources/icons/';
            $path .= trim($expression, '\'"');
            $filename = str_replace(['/','\\'],DIRECTORY_SEPARATOR,$path);
            //dump($filename);
            if (file_exists($filename)) {
                // $svgContent = File::get($filename);
                $svgContent = file_get_contents($filename);
                //dd($svgContent);
                return $svgContent;
            }

            return "";
        });
    }

    public function register()
    {

    }
}
