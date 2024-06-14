<?php

namespace App\Providers;

use App\Models\Tour;
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
            Blade::if('has', function ($expression) {
                if (!auth()->check()) return false;
                $nameOfRole = auth()->user()->role;
                $permissions = config("role.{$nameOfRole}");

                if (is_array($expression)) {
                    return !empty(array_intersect($permissions, $expression));
                } elseif(is_string($expression)) {
                    return in_array($expression, $permissions);
                } else {
                    return false;
                }
            });

            $pinDestinations = Destination::select(['id', 'title', 'image', 'slug'])->withCount('tours')->orderBy('title', 'ASC')->limit(5)->get();
            $pinTourTypes = TourType::select(['id', 'title', 'image', 'slug'])->withCount('tours')->orderBy('title', 'ASC')->limit(5)->get();
            $setting = Setting::first();
            $availableTours = Tour::select(['id', 'title'])->orderBy('title', 'ASC')->get();

            if (is_null($setting)) $setting = Setting::create([]);

            view()->share('pinDestinations', $pinDestinations);
            view()->share('pinTourTypes', $pinTourTypes);
            view()->share('setting', $setting);
            view()->share('availableTours', $availableTours);
    
            // Default Datetime Config
            config(['app.locale' => 'id']);
            \Carbon\Carbon::setLocale('id');
            date_default_timezone_set('Asia/Jakarta');
        }
    }
}
