<?php

namespace App\Providers;

use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // This is essentially creating a global variable for templates.
        // TODO: Cache this + put it in a separate provider.
        // TODO: Investigate performance to make sure that 'use DB' isn't borking
        // anything. Also make sure this isn't slowing down anything.
        $income = DB::table('incomes')->sum('amount');

        $expenses = DB::table('expenses')->sum('amount');

        $netWorth = $income - $expenses;
        $fundsUsage = ($expenses / $income) * 100;

        View()->share('netWorth', $netWorth);
        View()->share('fundsUsage', $fundsUsage);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
