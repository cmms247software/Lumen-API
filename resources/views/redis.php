<?php
echo "<PRE>";

// to connect with redis
use Illuminate\Support\Facades\Redis;
$redis = Redis::connection();
// var_dump($redis);

// To set value in AWS - ElastiCache  
$discounts = "TEST ISS PUNE AWS";
Redis::set('discounts', json_encode($discounts));


// To get value in AWS - ElastiCache  
$discounts_redis = collect(json_decode(Redis::get('discounts'), true));
var_dump($discounts_redis);

?>