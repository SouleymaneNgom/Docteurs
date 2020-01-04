<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HopitauxController extends Controller{

    public function showHopitaux()
    {
        return view('hopitaux');
    }
}