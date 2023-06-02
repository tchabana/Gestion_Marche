<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contrats;
class ContratsController extends Controller
{
    public function crerContrat(Request $request){
        
        $request->validate([
            "libelle"=>'required',
            "place"=>'required',
            "prixad"=>'required',
        ]);
        $contrats = contrats::create([
                'matricule'=>$request->matricule,
                'idplace'=>$request->place,
        ]);
        //dd($contrats);
        return "contrat enregistre";
    }
}