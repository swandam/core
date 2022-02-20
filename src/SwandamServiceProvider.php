<?php

namespace Swandam\Core;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Swandam\Core\Foundation\Swandam;
use Swandam\Core\Http\Middleware\AfterMiddleware;
use Swandam\Core\Http\Middleware\Authenticate;
use Swandam\Core\Http\Middleware\RedirectIfAuthenticate;
use Swandam\Core\Providers\RouteServiceProvider;

class SwandamServiceProvider extends ServiceProvider
{
    public function register()
    {
        $files = $this->app['files']->files(__DIR__ . '/Config');
        foreach ($files as $file) {
            $filename = $this->getConfigBasename($file);
//            $this->mergeConfig($file, $filename);
            $config = config()->get($filename, []);
            foreach (require $file as $k => $v) {
                if (is_array($v)) {
                    if (isset($config[$k])) {
                        $config[$k] = array_merge($config[$k], $v);
                    } else {
                        $config[$k] = $v;
                    }

                } else {
                    $config[$k] = $v;
                }
            }
            //TODO: config merge not working and  i don't know why!!
            config()->set($filename, $config);
        }

        $this->app->register(RouteServiceProvider::class);

//        $this->mergeConfig(__DIR__.'/Config/auth.php', 'auth');


        $this->app->singleton(Swandam::class, Swandam::class);
        $this->app->bind('Swandam', Swandam::class);
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->app->setLocale(session('panel.language.code', 'tr'));

        $this->publishes([
            __DIR__ . '/Assets' => public_path('vendor/swandam'),
            __DIR__.'/Config/swandam.php' => config_path('swandam.php'),
        ], 'swandam');

        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
        $this->loadViewsFrom(__DIR__ . '/Resources/views/panel', 'auth');

        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('swandam_web', AfterMiddleware::class);
        $router->aliasMiddleware('swandam_auth', Authenticate::class);
        $router->aliasMiddleware('swandam_guest', RedirectIfAuthenticate::class);
    }

    private function getConfigBasename($file)
    {
        return preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($file));
    }

    protected function mergeConfig($path, $key)
    {

    }

}
