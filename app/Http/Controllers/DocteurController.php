<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DocteurController extends Controller{

    public function showDocteur()
    {
        return view('docteurs');
    }
}