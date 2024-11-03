<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvaController extends Controller
{
    // funzione richiamata dalla rotta /prova
    public function provaFunction() {
        $calcolo = 5 + 5;
        return $calcolo;
    }
}
