<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class RegiaoController extends Controller
{
    public function regiao()
    {
        return view('site.regiao.regiao');
    }
}