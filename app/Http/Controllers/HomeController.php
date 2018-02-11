<?php
namespace App\Http\Controllers;

use Admin;

class HomeController extends BaseController{
    public function index() {

        return view('admin.index');
    }
}