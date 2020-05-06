<?php

namespace App\Providers;

use App\Repositories\ClientRepository;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use App\Repositories\Interfaces\TaskFileRepositoryInterface;
use App\Repositories\Interfaces\TaskRepositoryInterface;
use App\Repositories\Interfaces\TaskScheduleRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\TaskFileRepository;
use App\Repositories\TaskRepository;
use App\Repositories\TaskScheduleRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            ClientRepositoryInterface::class,
            ClientRepository::class
        );

        $this->app->singleton(
            TaskFileRepositoryInterface::class,
            TaskFileRepository::class
        );

        $this->app->singleton(
            TaskRepositoryInterface::class,
            TaskRepository::class
        );

        $this->app->singleton(
            TaskScheduleRepositoryInterface::class,
            TaskScheduleRepository::class
        );

        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
