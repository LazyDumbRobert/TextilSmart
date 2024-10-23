<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ReabastecimientoService;

class ReabastecimientoAutomatico extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reabastecimiento-automatico';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifica el stock y genera órdenes de compra automáticamente';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $reabastecimientoService = new ReabastecimientoService();
        $reabastecimientoService->checkAndReplenishStock();

        $this->info('Proceso de reabastecimiento automático completado');
    }
}
