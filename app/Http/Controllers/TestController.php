<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function test(Request $request, $id = '')
    {
        $m = password_hash('123456789', PASSWORD_BCRYPT);

        var_dump(password_verify('123456789', $m));
        return ['code' => 200 , 'message'=> '', 'data' => ''];
    }
}
