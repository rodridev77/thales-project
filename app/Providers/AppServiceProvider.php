<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Shop;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('pt_BR');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // Globals
        View::share('globalCategories',Category::all());
        View::share('globalBrands',Brand::all());
        View::share('globalCompanies',Company::all());
        View::share('globalProviders',Provider::all());
        View::share('globalShops',Shop::all());
        View::share('globalProducts',Product::all());
        View::share('globalEmployees',Employee::all());
        //
        Blade::directive('money', function ($amount) {
            return "<?php echo number_format($amount, 2,',','.'); ?>";
        });

        Blade::directive('date', function ($date) {
            return "<?php echo date('d/m/Y', strtotime($date)); ?>";
        });

        Blade::directive('datetime', function ($date) {
            return "<?php echo date('d/m/Y h:i:s', strtotime($date)); ?>";
        });
    }
}
