<?php

namespace App\Http\Controllers;

use App\Models\Formulaire;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    public function medecineForm(){
        return view('formulaire.medecineform');
    }
    public function chirurgieForm(){
        return view('formulaire.chirurgieform');
    }
    public function pediatrieForm(){
        return view('formulaire.pediatrieform');
    }
    public function urgenceForm(){
        return view('formulaire.urgenceform');
    }
    public function materniteForm(){
        return view('formulaire.materniteform');
    }
    public function odontoForm(){
        return view('formulaire.odontoform');
    }
    public function sevciForm(){
        return view('formulaire.sevciform');
    }
    public function laboForm(){
        return view('formulaire.laboform');
    }
    public function kineForm(){
        return view('formulaire.kineform');
    }
    public function radioForm(){
        return view('formulaire.radioform');
    }

    public function createReport(Request $request, Formulaire $formulaire){
        dd($request);
    }
}
