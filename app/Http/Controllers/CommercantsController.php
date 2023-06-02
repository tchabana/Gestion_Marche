<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commercants;
use App\Models\contrats;


class CommercantsController extends Controller
{
    public function index(Request $request){
        $commercants = commercants::rightJoin('contrats', 'commercants.id', '=', 'contrats.matricule')->get();
        $data = ['commercants'=> $commercants];
        return view('pages.table',['data'=>$data]);
    }
}