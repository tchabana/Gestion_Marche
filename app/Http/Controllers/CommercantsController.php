<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commercants;
use App\Models\contrats;
use App\Models\payement;



class CommercantsController extends Controller
{
    public function index(Request $request)
    {
        $commercants = commercants::rightJoin('contrats', 'commercants.id', '=', 'contrats.matricule')->get();
        $data = ['commercants' => $commercants];
        return view('pages.table', ['data' => $data]);
    }
    public function comEdit(Request $request)
    {
        $contrat = contrats::find($request->id);
        $commercants = commercants::find($contrat->matricule);
        $payement = payement::where('idcontrats', '=', $contrat->matricule);
        //dd($contrat);
        $data = ['contrat' => $contrat, 'commercants' => $commercants, 'payement' => $payement];
        return view('pages.infoComercant', ['data' => $data]);
    }
}