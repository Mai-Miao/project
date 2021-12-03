<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\People;
use App\Notifications\MyNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ApiTestController extends Controller {

    protected $redis;

    public function __construct()
    {
        $this->redis = Redis::connection('default');
    }

    public function api(Request $request)
    {
        // print_r($this->redis->zrevrange(People::USER_RANK,0,-1,'withscores'));   // 根据集合的权进行倒叙取值pr
        // 设置redis🔐，如果设置成功返回true，如果存在就返回''
        // print_r($this->redis->set('my_key','my_value','EX','123','NX'));
        //return 'This is api';
    }

    public function v1()
    {
        return "this is prefix_v1";
    }

    // 测试switch
    public function date()
    {
        dd(now()->format('Y-m-d H:i:s'));
    }

    // 测试redis的lua
    public function lua()
    {
        // 获取当前的积分
        // print_r($this->redis->zscore(People::USER_RANK,117));
        $luaScript = "local score = redis.call('zscore', KEYS[1], ARGV[1])
        if score==ARGV[2] then
        redis.call('zrem',KEYS[1], ARGV[1])
        end
        return score";
        print_r($this->redis->eval($luaScript, 1, People::USER_RANK, 117,54356));
    }

    // 测试消息发送
    public function send()
    {
        dd(new MyNotification('开始发送'));
    }

    // 测试getDirty 预加载获取数据
    public function getData()
    {
        $data = [
            'club_id'   => 1,
            'user_id'   => 11,
            'user_type' => 1,
            'is_admin'  => 1,
            'sort'      => 11
        ];
        People::create($data);
    }
}
