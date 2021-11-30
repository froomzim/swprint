<?php

namespace App\Console;

use App\Http\Controllers\ImpressaoController;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Storage;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        $segundos = 2;
        $a = 0;

        do {
            sleep($segundos);
            $schedule->call(function () use ($segundos) {

                $impressao = (new ImpressaoController);

                $impressao->imprimeTxt();
        })->everyMinute()->runInBackground();
            $a ++;
        } while ($a <= 60);

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
