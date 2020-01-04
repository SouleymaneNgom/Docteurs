<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatepickerController extends Controller
{
    public function create()
    {
        return view('datepicker');
    }

    
public function datePicker (Request $request)
{
    $datepicker= new \App\Datepicker;
    $datepicker->nom=$request->get('nom');
    $datepicker->prenom=$request->get('prenom');
    $datepicker->email=$request->get('email');
    $datepicker->adresse=$request->get('adresse');
    $datepicker->telephone=$request->get('telephone');
    $datepicker->date=$request->get('date');
    $datepicker->save();
    return redirect('datepicker')->with('success', 'Un Message de Confirmation vous sera envoyé dans votre compte de meme que heures');
}

}

