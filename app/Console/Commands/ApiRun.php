<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\ApiController;

class ApiRun extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update api jsonplaceholder. Run the task every day at midnight';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        \Log::info("Cron is working fine!");
        $x = new ApiController();
        return $x->patchPost() && $x->patchUser();

        $this->info('api:run Cummand Api Run successfully!');
    }
}
