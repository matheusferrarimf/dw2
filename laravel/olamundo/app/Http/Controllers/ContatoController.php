<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index ()
    {
        $data['email'] = 'matheusferrarimf@unidavi.edu.br';
        return view('contato',$data);
    }
}
