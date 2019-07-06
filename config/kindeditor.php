<?php
/**
 * Created by PhpStorm.
 * Author: ChenHua <Http://www.ichenhua.cn>
 * Date: 2018/6/15 11:31
 */

return [
    "default"     => 'aliyun', //默认返回存储位置url
    "dirver"      => ['aliyun'], //存储平台
    "connections" => [
        "local"  => [
            'prefix' => 'uploads/kindeditor',
        ],
        "qiniu"  => [
            'access_key' => '',
            'secret_key' => '',
            'bucket'     => '',
            'prefix'     => '',
            'domain'     => ''
        ],
        "aliyun" => [
            'ak_id'     => env('ALI_AK_ID',''),
            'ak_secret' => env('ALI_AK_SECRET',''),
            'end_point' => env('ALI_END_POINT',''),
            'bucket'    => env('ALI_BUCKET',''),
            'prefix'    => env('ALI_PREFIX',''),
        ],
    ],
];
