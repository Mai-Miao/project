<?php

namespace App\Console\Commands\Ranks;

use Illuminate\Console\Command;
use Illuminate\Foundation\Auth\User;

class TestRanking extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rank:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '用户排行榜';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       info(now());
    }
}
