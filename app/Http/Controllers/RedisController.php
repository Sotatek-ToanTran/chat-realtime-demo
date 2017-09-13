<?php

namespace App\Http\Controllers;

use App\Events\RedisEvent;
use Illuminate\Http\Request;

class RedisController extends Controller
{
    public function index(Request $request) {
        $myname = $request->input('name');
        $mycontent = $request->input('content');

        event(new RedisEvent($myname, $mycontent));
    }

    public function postMessage() {

    }
}
