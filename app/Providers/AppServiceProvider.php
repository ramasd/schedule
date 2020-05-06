<?php

namespace App\Providers;

use App\Services\ClientService;
use App\Services\Interfaces\ClientServiceInterface;
use App\Services\Interfaces\TaskFileServiceInterface;
use App\Services\Interfaces\TaskScheduleServiceInterface;
use App\Services\Interfaces\TaskServiceInterface;
use App\Services\Interfaces\UserServiceInterface;
use App\Services\TaskFileService;
use App\Services\TaskScheduleService;
use App\Services\TaskService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            ClientServiceInterface::class,
            ClientService::class
        );

        $this->app->singleton(
            TaskFileServiceInterface::class,
            TaskFileService::class
        );

        $this->app->singleton(
            TaskScheduleServiceInterface::class,
            TaskScheduleService::class
        );

        $this->app->singleton(
            TaskServiceInterface::class,
            TaskService::class
        );

        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
