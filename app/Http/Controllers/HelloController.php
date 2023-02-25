<?php

namespace App\Http\Controllers;

use App\TestClasses\TestService;
 
class HelloController extends Controller
{
    public function index(TestService $testservice)
    {
        $data = [
            'strMsg' => $testservice->say(),
            'aryData' => $testservice->data()
        ];
        return view('hello.index', $data);
    }
}
