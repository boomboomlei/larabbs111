<?php

/**
 * @Author: xuebingsi
 * @Date:   2019-07-31 09:26:30
 * @Last Modified by:   zhibinm
 * @Last Modified time: 2019-08-03 15:55:46
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function category_nav_active($category_id)
{
    return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
}