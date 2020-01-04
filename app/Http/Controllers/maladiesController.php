<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class maladiesController extends Controller{

    public function showmaladies()
    {
        return view('maladies');
    }
}