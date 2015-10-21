<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Car;
use Auth;
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);


        Car::saving(function($cars)
        {
            //dd($cars);
            $cars['user_id'] = Auth::user()->id;
        });
        Car::deleting(function($item)
        {
            if (file_exists('media/img/'.$item->picture))
            unlink('media/img/'.$item->picture);
        });
    }
}
