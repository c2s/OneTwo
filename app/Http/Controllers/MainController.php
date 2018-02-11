<?php
/**
 * Created by PhpStorm.
 * User: mofei
 * Date: 2018/2/10
 * Time: 下午3:27
 */

namespace App\Http\Controllers;

use Admin;


class MainController extends BaseController
{
    public function getMenus()
    {
        return Admin::menus();
    }

    public function getParentMenuId()
    {
        return Admin::getParentMenuId();
    }

    public function getMenuId()
    {
        return Admin::getMenuId();
    }
}