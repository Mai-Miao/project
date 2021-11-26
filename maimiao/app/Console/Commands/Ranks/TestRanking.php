<?php

namespace App\Console\Commands\Ranks;

use App\Models\People;
use Illuminate\Console\Command;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Redis;

class TestRanking extends Command {
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

    protected $redis;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redis = Redis::connection('default');
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach (People::cursor() as $user) {
            $this->redis->zadd(People::USER_RANK, [$user->id => $user->sort]);
        }
    }
}
