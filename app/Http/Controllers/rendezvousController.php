<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class rendezvousController extends Controller{

    public function showrendezvous()
    {
        return view('rendezvous');
    }
}