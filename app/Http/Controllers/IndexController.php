<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        var_dump('teste4');
        $teste = 'teste2';
        return view('index', ['teste3' => $teste]);
    }

}
