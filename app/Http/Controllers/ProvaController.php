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

    // il parametro $request è un oggetto Request Http, porta con sè i dati che arrivano in post quando viene chiamata la rotta tramite submit di un form
    public function provaData(Request  $request) {
        return $request->input('data');
    }
}
