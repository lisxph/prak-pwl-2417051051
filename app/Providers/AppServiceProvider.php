<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Filesystem\Filesystem as BaseFilesystem;

class CustomFilesystem extends BaseFilesystem
{
    public function glob($pattern, $flags = 0)
    {
        $files = parent::glob($pattern, $flags);
        if (empty($files) && (str_contains($pattern, '[') || str_contains($pattern, ']'))) {
            $dir = dirname($pattern);
            $mask = basename($pattern);
            $regex = '/^' . str_replace('\*', '.*', preg_quote($mask, '/')) . '$/';
            if (is_dir($dir)) {
                $files = [];
                foreach (scandir($dir) as $file) {
                    if ($file !== '.' && $file !== '..' && preg_match($regex, $file)) {
                        $files[] = $dir . DIRECTORY_SEPARATOR . $file;
                    }
                }
                return $files;
            }
        }
        return $files;
    }
}

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('files', function () {
            return new CustomFilesystem;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

