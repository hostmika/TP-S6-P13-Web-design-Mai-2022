<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contenu;

class ContenuController extends Controller
{
    public function allContenu() {

        $contenus = Contenu::all();
        return view('pages.contenu',compact('contenus'));
    }
}
