<?php

namespace App\Providers;

use App\Event;
use App\Footer;
use App\MenuProduct;
use App\Setting;
use App\SubMenuProduct;
use App\SubSubMenuProduct;
use Illuminate\Support\ServiceProvider;
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
        if($this->app->environment() !== 'production'){
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $footers = Footer::find('1');
        $events = Event::orderBy('created_at' , 'desc')->limit(5)->get();

        $menuProducts = MenuProduct::orderByDesc('created_at')
            ->limit(10)
            ->get();
        foreach($menuProducts as $menuProduct){
            $submenu[$menuProduct->id] = SubMenuProduct::where('menuProducts_id' , $menuProduct->id)
                ->get();
            foreach($submenu[$menuProduct->id] as $subMenuProduct){
                $subsubmenu[$subMenuProduct->id] = SubSubMenuProduct::where('subMenuProducts_id' , $subMenuProduct->id)
                    ->get();
            }
        }


        $menuPic = Setting::find(1);

        View::share([ 'footers' => $footers , 'enents' => $events , 'menuProducts' => $menuProducts , 'submenu' => $submenu ,'subsubmenu'=>$subsubmenu,'menuPic'=>$menuPic]);
    }
}
