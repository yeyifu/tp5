<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];

use \think\Route;
//定义路由规则
//设置路由之后，就不能使用pathinfo访问了
//Route::rule('路由表达式','路由地址','请求类型','路由参数(数组)','变量规则(数组)');
Route::rule('/','index/index/index');
Route::rule('test','index/index/test');
//带参数路由
Route::rule('course/:id','index/index/course');
Route::rule('time/:year/:month','index/index/time');
//可选参数路由
Route::rule('time/:year/[:month]','index/index/time');


