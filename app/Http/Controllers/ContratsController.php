<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contrats;
use App\Models\places;
use App\Models\commercants;
use PDF;
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
        
        $receipt = [
            'commercant' => commercants::find($request->matricule),
            'date' => date('m/d/Y'),
            'place' => places::find($request->place),
            'prixad' => $request->prixad,
        ];
        return view('myPDF',['receipt'=>$receipt]);
        //dd($receipt['commercant']->nom);
        // $pdf = PDF::loadView('myPDF', ['receipt'=>$receipt]);
        // return $pdf->download('itsolutionstuff.pdf');
    }
}