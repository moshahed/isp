<?php namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('status', function($attribute, $value, $parameters)
        {
            list($table, $column, $column_value) = $parameters;


            settype($column_value, "integer");
//            dd($column_value);

            $result = DB::table($table)->where($column, $column_value)->pluck($column);

            settype($result, "integer");

//            dd($result);
            return ( $result === $column_value);
        });
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

}