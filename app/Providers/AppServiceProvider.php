<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Shop;
use Exception;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;


use App\Library\ValidatorsClass;
use Validator;
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
        $request = new URL();
        try{
        //echo $request->current();
        View::share('globalCategories',Category::all());
        View::share('breadcrumb',explode("/",str_replace(['https','http','://'],'',$_COOKIE['url'])));
        View::share('globalBrands',Brand::all());
        View::share('globalCompanies',Company::all());
        View::share('globalProviders',Provider::all());
        View::share('globalShops',Shop::all());
        View::share('globalProducts',Product::all());
        View::share('globalEmployees',Employee::all());
        }catch(Exception $e){

        }
        Validator::extend('cnpj', function ($attribute, $value, $parameters) {
            $cnpj = new ValidatorsClass();
            return $cnpj->isCnpj($value);
        });
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
