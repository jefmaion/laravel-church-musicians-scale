<?php

namespace App\Providers;

use App\Contracts\{
    InstrumentRepositoryInterface,
    MemberRepositoryInterface
};
use App\Repository\{
    InstrumentRepository,
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
        $this->app->bind(InstrumentRepositoryInterface::class, InstrumentRepository::class);
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
