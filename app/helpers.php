<?php

/**
 * @Author: xuebingsi
 * @Date:   2019-07-31 09:26:30
 * @Last Modified by:   zhibinm
 * @Last Modified time: 2019-07-31 09:55:25
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}