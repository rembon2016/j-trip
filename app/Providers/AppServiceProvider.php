<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\TourType;
use App\Models\Destination;
use Illuminate\Support\Facades\App;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!App::runningInConsole()) {
            // Blade Directive Command
            Blade::directive('idr', fn ($expression) => "Rp <?php echo number_format({$expression}, 0, ',', '.'); ?>");

            $pinDestinations = Destination::select(['id', 'title', 'image', 'slug'])->withCount('tours')->orderBy('title', 'ASC')->limit(5)->get();
            $pinTourTypes = TourType::select(['id', 'title', 'image', 'slug'])->withCount('tours')->orderBy('title', 'ASC')->limit(5)->get();
            $setting = Setting::first();
            if (is_null($setting)) $setting = Setting::create([]);

            view()->share('pinDestinations', $pinDestinations);
            view()->share('pinTourTypes', $pinTourTypes);
            view()->share('setting', $setting);
    
            // Default Datetime Config
            config(['app.locale' => 'id']);
            \Carbon\Carbon::setLocale('id');
            date_default_timezone_set('Asia/Jakarta');
        }
    }
}
