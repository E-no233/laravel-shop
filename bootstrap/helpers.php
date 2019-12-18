<?php
/**
 * 辅助函数
 * User: LRZ
 * Date: 2019/12/17
 * Time: 14:04
 */

use Illuminate\Support\Facades\Route;

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
