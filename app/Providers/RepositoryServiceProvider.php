<?php

namespace App\Providers;

use App\Contracts\{
    MemberRepositoryInterface
};
use App\Repository\{
    MemberRepository
};

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
        $this->app->bind(MemberRepositoryInterface::class, MemberRepository::class);
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
