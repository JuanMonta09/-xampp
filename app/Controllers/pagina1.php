<?php

namespace App\Controllers;

class Pagina1 extends BaseController
{
    public function index(): string
    {
        return view('pagina1');
    }
}
