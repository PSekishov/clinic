<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

use App\Profession;
use App\Doctor;
use App\Contact;
use App\Service;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

            $event->menu->add('PROFESSION');
            $event->menu->add([
                'text' => 'Profession',
                'url' => 'admin/profession',
                'icon' => 'address-card',
                'icon_color' => 'aqua',
                'label' => Profession::all()->count(),
            ]);

            $event->menu->add([
                'text' => 'Add profession',
                'url' => 'admin/profession/create',
                'icon' => 'address-card',
                'icon_color' => 'aqua',

            ]);

/******************** Doctor *********************************/

            $event->menu->add('DOCTOR');
            $event->menu->add([
                'text' => 'Doctor',
                'url' => 'admin/doctor',
                'icon' => 'user-md',
                'icon_color' => 'lime',
                'label' => Doctor::all()->count(),
            ]);

            $event->menu->add([
                'text' => 'Add doctor',
                'url' => 'admin/doctor/create',
                'icon' => 'user-md',
                'icon_color' => 'lime',

            ]);

/************************* Contact ********************/

            $event->menu->add('CONTACT CLINIC');
            $event->menu->add([
                'text' => 'Contact',
                'url' => 'admin/contact',
                'icon' => 'adjust',
                'icon_color' => 'red',
                'label' => Contact::all()->count(),
            ]);

            $event->menu->add([
                'text' => 'Add contact',
                'url' => 'admin/contact/create',
                'icon' => 'adjust',
                'icon_color' => 'red',

            ]);


    /************************************************/
    

     $event->menu->add('SERVICES CLINIC');
            $event->menu->add([
                'text' => 'Service',
                'url' => 'admin/service',
                'icon' => 'file',
                'icon_color' => 'yellow',
                'label' => Service::all()->count(),
            ]);

            $event->menu->add([
                'text' => 'Add service',
                'url' => 'admin/service/create',
                'icon' => 'file',
                'icon_color' => 'yellow',

            ]);        
        

        });

        \View::share('professions',\App\Profession::all());
        \View::share('doctors',\App\Doctor::all());  
        \View::share('contacts',\App\Contact::all());
        \View::share('services',\App\Service::all());


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
