<?php
namespace App\Schedules;

use Illuminate\Console\Scheduling\Schedule;

class ReabastecimientoSchedule
{
    public function __invoke(Schedule $schedule)
    {
        $schedule->command('app:reabastecimiento-automatico')->everyMinute();
    }
}
